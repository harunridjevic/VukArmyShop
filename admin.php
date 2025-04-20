<?php
session_start();
ob_start();
 // Start a session


// Check if the session variable "username" exists
if ($_SESSION['login']==1) {
    
} else {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        * { padding:10px; box-sizing:border-box; }
    </style>
    
</head>
<body>
  <center>
    <h1>Dobro dosli u panel za admine:</h1><br>
    </center>
  <a href="napravi-artikal.php" style="margin-left:10px;padding:15px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">Napravi artikal</a> <a  href="logout.php"style="margin-left:10px;padding:15px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">Izloguj se</a><br>
  <div style='max-width:50%;float:left'>
    <?php
    $servername = "fdb1029.awardspace.net";
    $username = "4271423_main";
    $password = "VukArmyShop6";
    $database = "4271423_main";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT * FROM articles ORDER BY id DESC;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo "<table style='border-collapse: collapse;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;margin-top:30px;'>";
      echo "<tr><th>Slika</th><th>ID</th><th>Naziv</th><th>Opis</th><th>Cijena</th></tr>";
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td><img src='uploads/{$row['id']}_1.jpg' height='100'></td><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['description']}</td><td>{$row['price']}</td><td><form method='post' action='delete_article.php'><input type='hidden' name='id' value='{$row['id']}'><input type='submit' style='display:inline-block;background-color:white;border:0;margin-top:20px;padding:15px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;' value='Izbrisi'></form></td></tr>";
      }
      echo "</table>";
    } else {
      echo "Nema artikala.";
    }
    mysqli_close($conn);
    ?>
  </div>
  <div style="padding-right:30px">
    <div style="float:right;width:30%;height:500px;overflow:scroll">
<?php
    $servername = "fdb1029.awardspace.net";
    $username = "4271423_main";
    $password = "VukArmyShop6";
    $database = "4271423_main";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT * FROM category ORDER BY id;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo "<table style='border-collapse: collapse;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;margin-top:30px;'>";
      echo "<tr><th>Naziv</th></tr>";
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$row['kategorija']}</td><td><form method='post' action='delete_category.php'><input type='hidden' name='id' value='{$row['id']}'><input type='submit' style='display:inline-block;background-color:white;border:0;margin-top:20px;padding:15px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;' value='Izbrisi'></form></td></tr>";
      }
      
    } else {
      echo "Nema artikala.";
    }
    mysqli_close($conn);
    ?>
    <form method="post">
    <input name="new-category"style="width:50%;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;border:0" type="text" placeholder="naziv kategorije"><br>
      <input style="width:50%;background-color:white;border:0;margin-top:20px;
      margin-bottom:35px;padding:15px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" type="submit" name="submit6" value="Dodaj kategoriju">
    </form>
    </table>
    </div>
    <br>
    <h3 style="width:30%;float:right;display:inline-block">Informacije web prodavnice:</h3>
    <form method="post">
      <textarea id="input_text" name="description"style="width:30%;float:right;display:inline-block;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;border:0" rows="30" placeholder="Opis"></textarea>
      <input style="float:right;display:inline-block;width:30%;background-color:white;border:0;margin-top:20px;margin-bottom:35px;padding:15px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" type="submit" name="submit1" value="Promjeni opis">
      <input id="input_text" name="telefon"style="width:30%;float:right;display:inline-block;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;border:0" type="text" placeholder="broj telefona">
      <input style="float:right;display:inline-block;width:30%;background-color:white;border:0;margin-top:20px;
      margin-bottom:35px;padding:15px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" type="submit" name="submit2" value="Promjeni broj telefona">
      <input id="input_text" name="lokacija"style="width:30%;float:right;display:inline-block;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;border:0" type="text" placeholder="lokacija">
      <input style="float:right;display:inline-block;width:30%;background-color:white;border:0;margin-top:20px;
      margin-bottom:35px;padding:15px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" type="submit" name="submit3" value="Promjeni lokaciju">
      <input id="input_text" name="email"style="width:30%;float:right;display:inline-block;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;border:0" type="text" placeholder="email">
      <input style="float:right;display:inline-block;width:30%;background-color:white;border:0;margin-top:20px;
      margin-bottom:35px;padding:15px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" type="submit" name="submit4" value="Promjeni email">
      <input id="input_text" name="adresa"style="width:30%;float:right;display:inline-block;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;border:0" type="text" placeholder="adresa">
      <input style="float:right;display:inline-block;width:30%;background-color:white;border:0;margin-top:20px;
      margin-bottom:35px;padding:15px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" type="submit" name="submit5" value="Promjeni adresu">
    </form>
  </div>
  <?php
    // Check if the form was submitted
    if (isset($_POST['submit1'])) {
        // Connect to database
        $servername = "fdb1029.awardspace.net";
        $username = "4271423_main";
        $password = "VukArmyShop6";
        $database = "4271423_main";
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the value from the textarea
        $new_description = $_POST['description'];

        // Update the first row in the table
        $sql = "UPDATE information SET opis = '$new_description' WHERE id = 1";

        if (mysqli_query($conn, $sql)) {
            echo "Uspjesno spaseno.";
        } else {
            echo "Greska u spasavanju." . mysqli_error($conn);
        }

        mysqli_close($conn);
    }else if (isset($_POST['submit2'])) {
        // Connect to database
        $servername = "fdb1029.awardspace.net";
        $username = "4271423_main";
        $password = "VukArmyShop6";
        $database = "4271423_main";
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the value from the textarea
        $new_description = $_POST['telefon'];

        // Update the first row in the table
        $sql = "UPDATE information SET telefon = '$new_description' WHERE id = 1";

        if (mysqli_query($conn, $sql)) {
            echo "Uspjesno spaseno.";
        } else {
            echo "Greska u spasavanju." . mysqli_error($conn);
        }

        mysqli_close($conn);
    }else if (isset($_POST['submit3'])) {
        // Connect to database
        $servername = "fdb1029.awardspace.net";
        $username = "4271423_main";
        $password = "VukArmyShop6";
        $database = "4271423_main";
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the value from the textarea
        $new_description = $_POST['lokacija'];

        // Update the first row in the table
        $sql = "UPDATE information SET lokacija = '$new_description' WHERE id = 1";

        if (mysqli_query($conn, $sql)) {
            echo "Uspjesno spaseno.";
        } else {
            echo "Greska u spasavanju." . mysqli_error($conn);
        }

        mysqli_close($conn);
    }else if (isset($_POST['submit4'])) {
        // Connect to database
        $servername = "fdb1029.awardspace.net";
        $username = "4271423_main";
        $password = "VukArmyShop6";
        $database = "4271423_main";
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the value from the textarea
        $new_description = $_POST['email'];

        // Update the first row in the table
        $sql = "UPDATE information SET mail = '$new_description' WHERE id = 1";

        if (mysqli_query($conn, $sql)) {
            echo "Uspjesno spaseno.";
        } else {
            echo "Greska u spasavanju." . mysqli_error($conn);
        }

        mysqli_close($conn);
    }else if (isset($_POST['submit5'])) {
        // Connect to database
        $servername = "fdb1029.awardspace.net";
        $username = "4271423_main";
        $password = "VukArmyShop6";
        $database = "4271423_main";
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the value from the textarea
        $new_description = $_POST['adresa'];

        // Update the first row in the table
        $sql = "UPDATE information SET adresa = '$new_description' WHERE id = 1";

        if (mysqli_query($conn, $sql)) {
            echo "Uspjesno spaseno.";
        } else {
            echo "Greska u spasavanju." . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    else if (isset($_POST['submit6'])) {
        // Connect to database
        $servername = "fdb1029.awardspace.net";
        $username = "4271423_main";
        $password = "VukArmyShop6";
        $database = "4271423_main";
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the value from the textarea
        $new_description = $_POST['new-category'];

        // Update the first row in the table
        $sql = "INSERT INTO category (kategorija) VALUES ('$new_description');";

        if (mysqli_query($conn, $sql)) {
            echo "Uspjesno spaseno.";
            header("Refresh:0");

        } else {
            echo "Greska u spasavanju." . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ob_end_flush();
    ?>
</body>
</html>
