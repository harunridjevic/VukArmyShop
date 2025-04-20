<!DOCTYPE html>
<html>
        <head>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="/style.css">
            <title>a</title>
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
          <img id="nav-logo" src="assets/logo.png" onclick="window.location.href='/index.php'">
        </div>
        <ul>
          <li><a class="active" href="/kontakt.php">KONTAKT</a></li>
          <li><a href="/informacije.php">INFORMACIJE</a></li>
          <li><a href="/proizvodi.php">PROIZVODI</a></li>
        </ul>
      </nav>
            <div id="article-main-container">
                <div id="article-image-part">
                    <div class="container" id="containter">
                        <script>
  var j = 1;
  let containerHTML = "";
  for(let i = 1; i <= j; i++){
    containerHTML += "<div class='mySlides'><div class='numbertext'>"+i+" / "+j+"</div><img src='/uploads/37_"+i+".jpg' style='height:470px;max-width:100%;object-fit: cover;'></div>";
  }
  document.getElementById("containter").innerHTML = containerHTML;
</script>
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  
  <div class="row" id="row">
      <script>
  var j = 1;
  let rowHTML = "";
  for(let i = 1; i <= j; i++){
    rowHTML += "<div class='column'><img class='demo cursor' src='/uploads/37_"+i+".jpg' style='width:100%;height:125px;object-fit: cover;' onclick='currentSlide("+i+")' alt='The Woods'></div>";
  }
  document.getElementById("row").innerHTML = rowHTML;
</script>
  </div>
</div></div>
<div id="article-info-part">
    <h1>a</h1>
    <h2>12.123 KM</h2>
    <hr>
    <p>a</p>
    <?php
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
            echo "Broj telefona: ".$row["telefon"]."<br>";
            echo "Lokacija: ".$row["lokacija"]."<br>";
          } else {
            echo "No rows found";
          }

          // Close connection
          mysqli_close($conn);
        ?>
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
}
</script>
    
                </div>
            </div>
            <footer>
        <img id="footer-logo" src="assets/logo.png" onclick="window.location.href='/index.php'">
        <table id="footer-table">
            <tr>
              <td><a style="font-weight:700">Kategorije</a></td>
              <td><a style="font-weight:700">Navigacija</a></td>
             </tr>
             <tr>
              <td><a href="/proizvodi.php#odjeca">Odjeca</a></td>
              <td><a href="/proizvodi.php">Proizvodi</a></td>
             </tr>
             <tr>
              <td><a href="/proizvodi.php#obuca">Obuca</a></td>
              <td><a href="/informacije.php">Informacije</a></td>
            </tr>
            <tr>
              <td><a href="/proizvodi.php#kacketi">Kacketi</a></td>
              <td><a href="/kontakt.php">Kontakt</a></td>
            </tr>
            <tr>
              <td><a href="/proizvodi.php#emblemi">Emblemi</a></td>
            </tr>
            <tr>
              <td><a href="/proizvodi.php#ostalo">Ostalo</a></td>
            </tr>
          </table>
      </footer>
        </body>
</html>