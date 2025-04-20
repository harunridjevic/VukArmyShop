<!DOCTYPE html>
<html>
		<head>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="style.css">
			<title>Vuk Army Shop</title>
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
			<div style="width:350px;height:350px;background-color:white; margin:50px auto;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
				<div style="width:100%;height:70px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" style="width:40px;position:relative;top:15px;left:20px">
  <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
  <h3 style="font-size:15px;position:relative;left:80px; top:-15px">Informacije o Vuk Army Shop-u</h3>
</svg>
	

				</div>
				<div>
<h4 style=" margin:20px; font-weight:400"><?php
					$servername = "fdb1029.awardspace.net";
			        $username = "4271423_main";
			        $password = "VukArmyShop6";
			        $database = "4271423_main";
			        $conn = mysqli_connect($servername, $username, $password, $database);

			        // Check connection
			        if (!$conn) {
			            die("Connection failed: " . mysqli_connect_error());
			        }
			        // Select the first row from the column 'my_column' in the table 'my_table'
					$sql = "SELECT * FROM information WHERE id = 1";
					$result = mysqli_query($conn, $sql);

					// Check if any rows were returned
					if (mysqli_num_rows($result) > 0) {
					  // Output data from first row
					  $row = mysqli_fetch_assoc($result);
					  echo $row["opis"];
					} else {
					  echo "No rows found";
					}

					// Close connection
					mysqli_close($conn);
				?></h4>
				</div>
			
			</div>
			<footer>
				<img id="footer-logo" src="assets/logo.png" onclick="window.location.href='/index.php'">
				<div style="padding:20px;display:inline-block;position:relative;left:10px;bottom:-95px;font-weight:600;opacity:0.5">
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
		</body>
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
</html>