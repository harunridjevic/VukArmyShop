<!DOCTYPE html>
<html>
		<head>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&display=swap" rel="stylesheet">
			
			<script>
				// Get the height and width of the screen
				const screenHeight = window.innerHeight;
				const screenWidth = window.innerWidth;

				var isMobile = false;
				// Check if the height is greater than the width
				if (screenHeight > screenWidth) {
				  // If the height is greater, load a CSS file for portrait orientation
				  const cssLink = document.createElement("link");
				  cssLink.href = "mobile-style.css";
				  cssLink.rel = "stylesheet";
				  cssLink.type = "text/css";
				  document.head.appendChild(cssLink);
				  isMobile = true;
				} else {
				  // If the width is greater, load a CSS file for landscape orientation
				  const cssLink = document.createElement("link");
				  cssLink.href = "style.css";
				  cssLink.rel = "stylesheet";
				  cssLink.type = "text/css";
				  document.head.appendChild(cssLink);
				}

			</script>
			<title>Vuk Army Shop</title>
		</head>
		<body>
			<nav>
				<div class="img-container">
					<img id="nav-logo" src="assets/logo.png" onclick="window.location.href='/index.php'">
				</div>
				<div style="padding:20px;position:absolute;left:120px;top:23px;font-weight:600;opacity:0.5">
					Vuk ponudu mijenja,<br> ali kvalitet nikada!
				</div>
				<ul id="list">
				  <li><a class="active" href="/kontakt.php">KONTAKT</a></li>
				  <li><a href="/informacije.php">INFORMACIJE</a></li>
				  <li><a href="/proizvodi.php">PROIZVODI</a></li>
				</ul>
				<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a class="active" href="/kontakt.php">KONTAKT</a>
    <a href="/informacije.php">INFORMACIJE</a>
    <a href="/proizvodi.php">PROIZVODI</a>
  </div>
</div>
<span style="font-size:7vh;cursor:pointer;float:right;margin:3vh" id="open_nav_button" onclick="openNav()">&#9776;</span>
			</nav>
			<img id="main_img" src="assets/main.jpg">
			<h1 id="main_header">Dobrodošli u Vuk Army Shop</h1>
			<button id="main_button" onclick="window.location.href='proizvodi.php'">Proizvodi</button>
			<div id="product-section">
				<h1>Brzi pregled artikala</h1>
				<h2>Pogledajte nove artikle</h2>
				<div class="gallery">
					<div class="inner-container">
						<?php
						// Connect to MySQL
						$servername = "fdb1029.awardspace.net";
						$username = "4271423_main";
						$password = "VukArmyShop6";
						$dbname = "4271423_main";

						$conn = mysqli_connect($servername, $username, $password, $dbname);
						if (!$conn) {
						    die("Connection failed: " . mysqli_connect_error());
						}

						// Retrieve article information from database
						$sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 3;";
						$result = mysqli_query($conn, $sql);

						// Loop through results and display each article in a card format
						if (mysqli_num_rows($result) > 0) {
						    while($row = mysqli_fetch_assoc($result)) {
						        echo "<div class='q-article' onclick='window.location.href=`/artikli/".$row['id'].".php`'><div style='background-image:url(/uploads/".$row['id']."_1.jpg);background-size: 300px;background-position: center;'></div><span class='q-article-title'>".$row['name']."</span><span class='q-article-price'>BAM ".$row['price']."</span></div>";
						    }
						} else {
						    echo "No articles found.";
						}

						// Close database connection
						mysqli_close($conn);
						?>

					
				</div>
			</div>
			<footer>
				<img id="footer-logo" src="assets/logo.png" onclick="window.location.href='/index.php'">
				<div style="padding:20px;position:relative;left:-500px;bottom:-100px;font-weight:600;opacity:0.5">
					Vuk ponudu mijenja,<br> ali kvalitet nikada!
				</div>
				<table id="footer-table">
				    <tr>
				      <td><a href="/admin.php"style="font-weight:700">Admin panel</a></td>
				      <td><a style="font-weight:700">Kategorije</a></td>
				      <td><a style="font-weight:700">Navigacija</a></td>
				     </tr>
				     <tr>
				     	<td></td>
				      <td><a href="/proizvodi.php#odjeca">Odjeca</a></td>
				      <td><a href="/proizvodi.php">Proizvodi</a></td>
				     </tr>
				     <tr>
				     	<td></td>
				      <td><a href="/proizvodi.php#obuca">Obuca</a></td>
				      <td><a href="/informacije.php">Informacije</a></td>
				    </tr>
				    <tr>
				    	<td></td>
				      <td><a href="/proizvodi.php#kacketi">Kacketi</a></td>
				      <td><a href="/kontakt.php">Kontakt</a></td>
				    </tr>
				    <tr>
				    	<td></td>
				      <td><a href="/proizvodi.php#emblemi">Emblemi</a></td>
				    </tr>
				    <tr>
				    	<td></td>
				      <td><a href="/proizvodi.php#ostalo">Ostalo</a></td>
				    </tr>
				  </table>
			</footer>
			<script>
				if(isMobile){
					document.getElementById("list").style.display="none";

				}else{
					document.getElementById("open_nav_button").style.display="none";
					document.getElementById("myNav").style.display = "none";
				}
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
		</body>
</html>