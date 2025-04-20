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
			<div id="info_page_container">
				<h4><?php
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
					  ?>
					  
					  
					  
					 
</h4>
			</div>
						<div style="width:350px;height:630px;background-color:white; margin:50px auto;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">

				<div style="width:100%;height:70px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" style="width:40px;position:relative;top:15px;left:20px">
  <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
</svg>
  <h3 style="font-size:15px;position:relative;left:80px; top:-15px"><?php
					  echo "Broj telefona: ".$row["telefon"]."<br>";
					  ?></h3>
</svg>
	

				</div>
				<div style="width:100%;height:70px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" style="width:40px;position:relative;top:15px;left:20px">
  <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
</svg>
  <h3 style="font-size:15px;position:relative;left:80px; top:-15px"><?php
					  echo "Lokacija: ".$row["lokacija"]."<br>";
					  ?></h3>
</svg>
	

				</div>
				<div style="width:100%;height:70px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" style="width:40px;position:relative;top:15px;left:20px">
  <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
  <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
</svg>
  <h3 style="font-size:15px;position:relative;left:80px; top:-15px"><?php
					  echo "Email: ".$row["mail"]."<br>";
					  ?></h3>
</svg>
	

				</div>
				<div style="width:100%;height:70px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" style="width:40px;position:relative;top:15px;left:20px">
  <path fill-rule="evenodd" d="M8.161 2.58a1.875 1.875 0 011.678 0l4.993 2.498c.106.052.23.052.336 0l3.869-1.935A1.875 1.875 0 0121.75 4.82v12.485c0 .71-.401 1.36-1.037 1.677l-4.875 2.437a1.875 1.875 0 01-1.676 0l-4.994-2.497a.375.375 0 00-.336 0l-3.868 1.935A1.875 1.875 0 012.25 19.18V6.695c0-.71.401-1.36 1.036-1.677l4.875-2.437zM9 6a.75.75 0 01.75.75V15a.75.75 0 01-1.5 0V6.75A.75.75 0 019 6zm6.75 3a.75.75 0 00-1.5 0v8.25a.75.75 0 001.5 0V9z" clip-rule="evenodd" />
</svg>
  <h3 style="font-size:15px;position:relative;left:80px; top:-15px"> <?php
					  echo "Adresa: ".$row["adresa"]."<br>";
					  ?></h3>
</svg>
	
					  <?php
					} else {
					  echo "No rows found";
					}

					// Close connection
					mysqli_close($conn);
				?>
				</div>
				<div style="width:100%;height:70px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" >

					<img src="telegramicon.png" style="width:40px;position:relative;top:15px;left:20px">

					
  <h3 style="font-size:15px;position:relative;left:80px; top:-15px">Telegram: (+387)66-231-203</h3>
</svg></div>
<div style="width:100%;height:70px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" >

					<img src="vibericon.png" style="width:40px;position:relative;top:15px;left:20px">

					
  <h3 style="font-size:15px;position:relative;left:80px; top:-20px">Viber: (+387)66-231-203</h3>
</svg></div>
<div style="width:100%;height:70px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" >

					<img src="whatsappicon.png" style="width:40px;position:relative;top:15px;left:20px">

					
  <h3 style="font-size:15px;position:relative;left:80px; top:-15px">Whatsapp: (+387)66-231-203</h3>
</svg></div>
<div style="width:100%;height:70px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" >

					<img src="micon.png" style="width:40px;position:relative;top:15px;left:20px">

					
  <h3 style="font-size:15px;position:relative;left:80px; top:-15px">Messenger: @VukArmyShop</h3>
</svg></div>
<div style="width:100%;height:70px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" >

					<img src="ilogo.png" style="width:40px;position:relative;top:15px;left:20px">

					
  <h3 style="font-size:15px;position:relative;left:80px; top:-15px">Instagram: @VukArmyShop</h3>
</svg></div>
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
</script>s
</html>