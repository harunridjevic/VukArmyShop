<!DOCTYPE html>
<html>
		<head>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="style.css">
			<title>Example Article Title</title>
			<style>
				img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
  margin:auto;

}

/* Hide the images by default */
.mySlides {
  display: none;
  height:470px;
  text-align:center;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: black;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  transition:0.3s;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
  color:white;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
		</head>
		<body>
			<nav>
				<div class="img-container">
					<img id="nav-logo" src="assets/logo.png">
				</div>
				<ul>
				  <li><a class="active" href="#home">KONTAKT</a></li>
				  <li><a href="#news">INFORMACIJE</a></li>
				  <li><a href="#contact">PROIZVODI</a></li>
				</ul>
			</nav>
			<div id="article-main-container">
				<div id="article-image-part">
					<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="assets/1.jpg" style="height:470px;max-width:100%;object-fit: cover;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="assets/main.jpg" style="height:470px;max-width:100%;object-fit: cover;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="assets/1.jpg" style="height:470px;max-width:100%;object-fit: cover;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="assets/1.jpg" style="height:470px;max-width:100%;object-fit: cover;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="assets/1.jpg" style="height:470px;max-width:100%;object-fit: cover;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="assets/1.jpg" style="height:470px;max-width:100%;object-fit: cover;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  
  <div class="row" id="row">
  	<script>
  		int j = [NUM_OF_IMAGES];
  		for(int i=1;i<=j;i++){
  			document.getElementById("row").innerHTML = "<div class='column'><img class='demo cursor' src='assets/[NUM_OF_IMAGES]_"+i+".jpg' style='width:100%;height:125px;object-fit: cover;'onclick='"'currentSlide(1)'"' alt='"'The Woods'"'></div>"
  		}
  	</script>
  </div>
</div></div>
<div id="article-info-part">
	<h1>Example Article Title</h1>
	<h2>[ARTICLE_PRICE]</h2>
	<hr>
	<p>This is the content of the example article.</p>
	<h2>Kontakt telefon: 066/111/111</h2>
	<h2>Lokacija: Sarajevo</h2>
	<hr>
</div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
				</div>
			</div>
			<footer>
				<img id="footer-logo" src="assets/logo.png">
				<table id="footer-table">
				    <tr>
				      <td><a href="https://example.com" style="font-weight:700">Kategorije</a></td>
				      <td><a href="https://example.com" style="font-weight:700">Navigacija</a></td>
				     </tr>
				     <tr>
				      <td><a href="https://example.com/about">Odjeca</a></td>
				      <td><a href="https://example.com">Proizvodi</a></td>
				     </tr>
				     <tr>
				      <td><a href="https://example.com/contact">Obuca</a></td>
				      <td><a href="https://example.com">Informacije</a></td>
				    </tr>
				    <tr>
				      <td><a href="https://example.com/contact">Kacketi</a></td>
				      <td><a href="https://example.com">Kategorije</a></td>
				    </tr>
				    <tr>
				      <td><a href="https://example.com/contact">Emblemi</a></td>
				    </tr>
				  </table>
			</footer>
		</body>
</html>