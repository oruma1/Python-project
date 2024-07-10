CREATE DATABASE alivI_furnitures;

USE alivI_furnitures;

CREATE TABLE users (
    id INT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    User_type VARCHAR(255) NOT NULL,
);

CREATE TABLE wishlists (
    BATCH_NO INT PRIMARY KEY,
    email VARCHAR (255) NOT NULL,
    item_name VARCHAR(255) NOT NULL,
    FOREIGN KEY (email) REFERENCES users(email),
);

CREATE TABLE SIGNUP(
    position VARCHAR(255) NOT NULL,
    Fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    Additional_info VARCHAR(255) NOT NULL,
    ID VARCHAR(255  ) NOT NULL
);

CREATE TABLE showroom (
    BATCH_NO int not null,
    name varchar(255)   NOT NULL,
    price VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
);
CREATE TABLE ACCOUNTS (
    ID NUMBER(10) NOT NULL,
    NAME VARCHAR(255) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL,
    USER_TYPE VARCHAR(255) NOT NULL,
    
);


