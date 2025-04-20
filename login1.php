<?php

session_start(); // start a session to store the login status

// Replace with your database credentials
$servername = "fdb1029.awardspace.net";
$username = "4271423_main";
$password = "VukArmyShop6";
$dbname = "4271423_main";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs to prevent SQL injection
$user = $conn->real_escape_string($_POST['username']);
$pass = $conn->real_escape_string($_POST['password']);

// Query the database for the given username and password
$sql = "SELECT * FROM login WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    
$_SESSION['login'] = 1;
    header("Location: admin.php");
    exit();

} else {
    $login = false; // set login status to false
    $_SESSION['login'] = false; // store login status in session variable
    // Redirect the user to the homepage
    header("Location: login.php");
    exit();

}

// Close the database connection
$conn->close();

?>
