<?php
session_start();
include 'dbconect.php';

if (!isset($_SESSION['user_id'])) {
    echo "Please log in to checkout.";
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total = $_POST['total'];

    // Create order
    $sql = "INSERT INTO orders (user_id, total) VALUES ('$user_id', '$total')";
    if ($conn->query($sql) === TRUE) {
        $order_id = $conn->insert_id;
        // Insert order items (assuming items are passed as JSON)
        $items = json_decode($_POST['items'], true);
        foreach ($items as $item) {
            $product_id = $item['product_id'];
            $quantity = $item['quantity'];
            $price = $item['price'];
            $sql = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES ('$order_id', '$product_id', '$quantity', '$price')";
            $conn->query($sql);
        }
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h2>Checkout</h2>
    <form method="post" action="">
        Total: <input type="text" name="total" required><br>
        Items (JSON): <textarea name="items" required></textarea><br>
        <input type="submit" value="Checkout">
    </form>
</body>
</html>




?>