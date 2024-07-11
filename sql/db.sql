CREATE DATABASE alive_furnitures;
USE alive_furnitures;

-- Creating Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Creating Products Table
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Creating Wishlist Table
CREATE TABLE wishlist (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Creating Orders Table
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total DECIMAL(10, 2) NOT NULL,
    status VARCHAR(50) DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Creating OrderItems Table
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT,
    price DECIMAL(10, 2),
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Example Data Insertion

-- Insert a new user
INSERT INTO users (username, email, password) VALUES ('user123', 'user123@example.com', 'securepassword');

-- Insert products
INSERT INTO products (name, description, price, image) VALUES 
('Hardwood Dining Table', 'Elegant hardwood dining table.', 300.00, 'path/to/image1.jpg'),
('Living Room Sofa', 'Comfortable living room sofa.', 200.00, 'path/to/image2.jpg'),
('Bedroom Set', 'Complete bedroom set.', 500.00, 'path/to/image3.jpg');

-- User login verification
SELECT * FROM users WHERE username = 'user123' AND password = 'securepassword';

-- Add items to wishlist
INSERT INTO wishlist (user_id, product_id) VALUES (1, 1), (1, 2);

-- Create an order
INSERT INTO orders (user_id, total) VALUES (1, 500.00);

-- Add items to order
INSERT INTO order_items (order_id, product_id, quantity, price) VALUES 
(1, 1, 1, 300.00),
(1, 2, 1, 200.00);
