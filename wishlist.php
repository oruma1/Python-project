<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist - Aliv-e Furnitures</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1em;
            padding: 10px;
            background: #eee;
        }
        .wishlist {
            margin-top: 20px;
        }
        .wishlist-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1em;
            padding: 10px;
            background: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Wishlist</h1>
   
        <div class="wishlist">
            <h2>Your Wishlist</h2>
            <div id="wishlist-items"></div>
        </div>
    </div>

    <script>
        function addToWishlist(itemName) {
            let wishlistItems = JSON.parse(localStorage.getItem('wishlist')) || [];
            if (!wishlistItems.includes(itemName)) {
                wishlistItems.push(itemName);
                localStorage.setItem('wishlist', JSON.stringify(wishlistItems));
                displayWishlist();
            } else {
                alert(itemName + " is already in your wishlist!");
            }
        }

        function displayWishlist() {
            let wishlistItems = JSON.parse(localStorage.getItem('wishlist')) || [];
            let wishlistDiv = document.getElementById('wishlist-items');
            wishlistDiv.innerHTML = '';
            wishlistItems.forEach(item => {
                let div = document.createElement('div');
                div.className = 'wishlist-item';
                div.innerHTML = `<span>${item}</span> <button onclick="removeFromWishlist('${item}')">Remove</button>`;
                wishlistDiv.appendChild(div);
            });
        }

        function removeFromWishlist(itemName) {
            let wishlistItems = JSON.parse(localStorage.getItem('wishlist')) || [];
            wishlistItems = wishlistItems.filter(item => item !== itemName);
            localStorage.setItem('wishlist', JSON.stringify(wishlistItems));
            displayWishlist();
        }

        // Display wishlist items on page load
        window.onload = displayWishlist;
    </script>
</body>
</html>
