<!DOCTYPE html>
<html>
<head>
	<title>Upload Images</title>
	<link rel="stylesheet" href="style.css">
	
    <style>
        * { padding:10px; box-sizing:border-box; }
        input[type="file"] {
  background-color: white;
  border: none;
  padding: 10px;
  font-size: 16px;
  color: #333;
  border-radius: 5px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}
.file-input {
  background-color: #fff;
  border: 1px solid #ccc;
  color: #333;
  font-size: 16px;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
}

.file-input:hover,
.file-input:focus {
  border: 1px solid #999;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

    </style>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<div style="width:90%;height:150px;margin:10px auto;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;padding:20px">
		<h1>Naziv artikla:</h1>
		<input type="text" name="name" style="border:0;width:calc(100% - 10px);box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;padding:20px">
		</div>
		<div style="width:90%;height:170px;margin:10px auto;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;padding:20px">
		<h1>Opis artikla:</h1>
		<textarea type="text" name="desc" style="border:0;width:calc(100% - 10px);box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;padding:20px"></textarea>
	</div>
	<div style="width:90%;height:170px;margin:10px auto;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;padding:20px">
		<h1>Kategorija artikla:</h1>
		<select name="cat" style="border:0;width:calc(100% - 10px);box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;padding:20px">
		  <option value="odjeca">Odjeća</option>
		  <option value="obuca">Obuća</option>
		  <option value="emblemi">Emblemi</option>
		  <option value="kacketi">Kačketi</option>
		  <option value="ostalo">Ostalo</option>
		</select>

	</div>
	<div style="width:90%;height:150px;margin:10px auto;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;padding:20px">
		<h1>Fotografije artikla:</h1>
<label for="images">Izaberite fotografije (drzite shift i klik na svaku sliku koju zelite objaviti):</label>
<input type="file" name="images[]" multiple class="file-input">
<br><br>
	</div><div style="width:90%;height:150px;margin:10px auto;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;padding:20px">
		<h1>Cijena artikla:</h1>
		<input type="text" name="price" style="border:0;width:calc(100% - 10px);box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;padding:20px">
	</div><br>
		<input type="submit" value="Objavi" style="border:0;width:calc(100% - 130px);box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;padding:20px;margin:10px 65px;background-color:white;">
	</form>
</body>
</html>
