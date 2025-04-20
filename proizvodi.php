<!DOCTYPE html>
<html>
		<head>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="style.css">
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
			<div id="main-products-container">
				<h1>Nasi proizvodi</h1>
				<div>
					<?php
					// connect to the database
					$conn = mysqli_connect('fdb1029.awardspace.net', '4271423_main', 'VukArmyShop6', '4271423_main');

					// select all categories from the category table
					$sql = "SELECT kategorija FROM category";
					$result = mysqli_query($conn, $sql);

					// loop through the result and output the HTML code
					while ($row = mysqli_fetch_assoc($result)) {
					    echo '<a href="#' . $row['kategorija'] . '">' . $row['kategorija'] . '</a> ';
					}

					// close the database connection
					mysqli_close($conn);
					?>
				</div>
				<div>
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

// Retrieve all categories from the category table
$sql = "SELECT kategorija FROM category";
$result = mysqli_query($conn, $sql);

// Loop through all categories and display the articles for each category
while($row = mysqli_fetch_assoc($result)) {
    // Output the category header
    echo "<h1 id='" . $row['kategorija'] . "'>" . $row['kategorija'] . "</h1>";

    // Retrieve article information from database for the current category
    $sql_articles = "SELECT * FROM articles WHERE category = '" . $row['kategorija'] . "' ORDER BY id DESC";
    $result_articles = mysqli_query($conn, $sql_articles);

    // Loop through results and display each article in a card format
    if (mysqli_num_rows($result_articles) > 0) {
        while($row_article = mysqli_fetch_assoc($result_articles)) {
            echo "<div class='q-article' onclick='window.location.href=`/artikli/".$row_article['id'].".php`'><div style='background-image:url(/uploads/".$row_article['id']."_1.jpg);background-size: 300px;background-position: center;'></div><span class='q-article-title'>".$row_article['name']."</span><span class='q-article-price'>BAM ".$row_article['price']."</span></div>";
        }
    } else {
        echo "Nema artikala.";
    }
}

// Close database connection
mysqli_close($conn);
?>

					
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

		</body>
		<script>
			const scrollToTarget = (target) => {
  const targetElement = document.querySelector(target);
  if (!targetElement) return;
  const targetPosition = targetElement.offsetTop;

  window.scrollTo({
    top: targetPosition,
    behavior: "smooth"
  });
};

const scrollLinks = document.querySelectorAll("a[href^='#']");
scrollLinks.forEach(link => {
  link.addEventListener("click", e => {
    e.preventDefault();
    const href = link.getAttribute("href");
    scrollToTarget(href);
  });
});

		</script>
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