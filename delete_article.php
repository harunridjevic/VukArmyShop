<?php
$servername = "fdb1029.awardspace.net";
$username = "4271423_main";
$password = "VukArmyShop6";
$database = "4271423_main";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the ID of the article to delete
$id = $_POST["id"];

// Delete the article from the database
$sql = "DELETE FROM articles WHERE id = $id";
if (mysqli_query($conn, $sql)) {
  // Article deleted successfully, redirect back to main page
  header("Location: admin.php");
  exit();
} else {
  echo "Error deleting article: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
