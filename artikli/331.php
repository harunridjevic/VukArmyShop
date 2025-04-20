<!DOCTYPE html>
<html>
        <head>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="/style.css">
            <title>MEDIC TAKTIČKA TORBICA</title>
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
            <div id="article-main-container">
                <div id="article-image-part">
                    <div class="container" id="containter">
                        <script>
  var j = 1;
  let containerHTML = "";
  for(let i = 1; i <= j; i++){
    containerHTML += "<div class='mySlides'><div class='numbertext'>"+i+" / "+j+"</div><img src='/uploads/331_"+i+".jpg' style='height:470px;max-width:100%;object-fit: cover;'></div>";
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
    rowHTML += "<div class='column'><img class='demo cursor' src='/uploads/331_"+i+".jpg' style='width:100%;height:125px;object-fit: cover;' onclick='currentSlide("+i+")' alt='The Woods'></div>";
  }
  document.getElementById("row").innerHTML = rowHTML;
</script>
  </div>
</div></div>
<div id="article-info-part">
    <h1>MEDIC TAKTIČKA TORBICA</h1>
    <h2>34.99 KM</h2>
    <hr>
    <p>MEDIC TAKTIČKA TORBICA

📃 Opis:
Materijal: kordura
Dimenzije: 21cm×15cm×11cm
Dostupne boje: crna i zelena
Karakteristike: više džepova, izdržljiva, praktična i poseduje čičak za oznaku, dolazi u kompletu sa oznakom prve pomoći idealna za siguran lov, planinarenje i boravak u prirodi, molle sistem kačenja 

📩 Narudžbe u inbox
💶 Cijena: 34.99KM
📲 Kontakt telefon: (+387) 66-231-203
📧 Email: vukarmyshop@gmail.com
🌐 Web: www.vukarmyshop.com

Stojimo Vam na raspolaganju za sva pitanja i informacije. Vaš Vuk Army Shop!</p>
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
            <footer style="width:100%;position:relative;height:400px">
        <img id="footer-logo" src="assets/logo.png" onclick="window.location.href='/index.php'" style="position:relative;top:0px;left:10px">
        <div style="padding:20px;display:inline-block;position:relative;left:10px;bottom:-95px;font-weight:600;opacity:0.5">
          Vuk ponudu mijenja,<br> ali kvalitet nikada!
        </div>
        <table id="footer-table">
            <tr>
              <td><a href="/admin.php"style="font-weight:700">Admin panel</a></td>
              <td><a style="font-weight:700">Kategorije</a></td>
              <td><a style="font-weight:700">Navigacija</a></td>
             </tr>
             <?php
    $servername = "fdb1029.awardspace.net";
    $username = "4271423_main";
    $password = "VukArmyShop6";
    $database = "4271423_main";
    $navigacija = array("proizvodi", "informacije", "kontakt");  
    $loc = 0;
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT * FROM category ORDER BY id;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td></td><td><a href='/proizvodi.php#{$row['kategorija']}'>{$row['kategorija']}</a></td>";
        if($loc<3){
          echo "<td><a href='/".$navigacija[$loc].".php'>".$navigacija[$loc]."</a></td>";
          $loc+=1;
        }else{
          echo "<td></td>";
        }
        echo "</tr>";
      }
      
    } else {
      echo "Nema artikala.";
    }
    mysqli_close($conn);
    ?>
             
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