<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Showroom - Aliv-e Furnitures</title>
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
            color: #663399;
            text-align: center;
        }
        .items {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .item {
            flex: 1 1 calc(33.333% - 10px);
            box-sizing: border-box;
            margin: 10px;
            padding: 10px;
            background: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            text-align: center;
        }
        .item img {
            max-width: 100%;
            height: auto;
        }
        .item button {
            margin-top: 10px;
            padding: 10px;
            background-color: brown;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .items{
                flex: 1 1 calc(50% - 10px);
            }
        }
        @media (max-width: 480px) {
            .item {
                flex: 1 1 100%;
            }
            .menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.menu ul li {
    margin-left: 20px;
}

.menu ul li a {
    text-decoration: none;
    color: #fff;
}
.navigation-bar {
    display: flex;
    justify-content: space-between;
    
    width: 100%;
    padding: 20px;
    background: rgba(0, 0, 0, 0.7);
        }
    }
    </style>
</head>
<body>
    <div class="navigation bar">
        <div class="icon">
            <h1 class="logo">Aliv-e Furnitures</h12>
        
        </div>
        <div class="menu">
            <ul>
                <li><a href ="virtual-showroom.html">VIRTUAL SHOWROOM</a></li>
                <li><a href ="index.html.html">HOME</a></li>
                <li><a href ="about.html">ABOUT</a></li>
                <li><a href ="services.html">SERVICES</a></li>
                <li><a href ="contacts.html">CONTACTS</a></li>
                <li><a href ="account.html">CART</a></li>
                <li><a href ="wishlist.html"> WISHLIST</a></li>

            </ul>
        </div>"
        <br>
    <div class="container">
        <h1>Virtual Showroom</h1>
        <div class="item">
            <label> TABLES.</label>
            <div class="items">
                
                <img src="images\Mahogany dining table.jpg" 
                alt="Mahogany Dining Table">
                <span>Hardwood Dining Table</span>
                <button onclick="addToWishlist('1', 'Mahogany Dining Table', 'images\Mahogany dining table.jpg')">Add to Wishlist</button>
            </div>

            <div class="item">
                <img src="images/dela vista dining table and chairs.jpg" alt="Dining Table set complete with chairs">
                <span>Dela-Vista Dining Table</span>
                <button onclick="addToWishlist('1', 'Dela Vista Dining Table', 'images/dela vista dining table and chairs.jpg')">Add to Wishlist</button>

            </div>

            <div class="item">
                
                <img src="images\Macabre black dining set.jpg"  alt="sophisticated dining set with black finishings">
                <span>Hardwood Dining Table</span>
                <button onclick="addToWishlist('1', 'B.Beauty Dining Table', 'images\Macabre black dining set.jpg')">Add to Wishlist</button>
            </div>


            <div class="item">
                <img src="images\red riding hood dining set.jpg" alt="Majestic Dining set">
                <span>Majestic Dining set</span>
                <button onclick="addToWishlist('1', 'Elegant dining set', 'images\coffee brown sofa.jpg')">Add to Wishlist</button>
            </div>
            <div class="item">
                <img src="images\thinker's oak study table.jpg" alt="Bespoke Bedroom Set">
                <span>Oak study table</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\thinker's oak study table.jpg')">Add to Wishlist</button>
            </div>
            <label>Sitting area</label>
            <div class="item">
            
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\bedside ensemble.jpg" alt="Bespoke Bedroom Set">
                <span>Bespoke Bedroom Set</span>
                <button onclick="addToWishlist('1', 'Bedside ensemble', 'images\bedside ensemble.jpg')">Add to Wishlist</button>
            </div>
            <!-- Add more items as needed -->
        </div>
    </div>

    <script>
        async function addToWishlist(userId, itemName, itemImage) {
            const response = await fetch('/api/wishlist', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ userId, itemName, itemImage })
            });
            const result = await response.json();
            if (result.success) {
                alert('Item added to wishlist!');
            } else {
                alert('Please log in to add items to your wishlist.');
            }
        }
    </script>
</body>
</html>
