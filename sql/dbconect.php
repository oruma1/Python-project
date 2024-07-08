<?php
//inserting constants
require_once "constants.php";

// Create the database connection
$dbConn = new mysqli(HOSTNAME,HOSTUSER , HOSTPASS,DBNAME);

// verification
if($dbConn->connect_error) {
    die("Error connecting to database");
}
else{
    print "Database connected successfully.";
}
