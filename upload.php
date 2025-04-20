<?php
$servername = "fdb1029.awardspace.net";
$username   = "4271423_main";
$password   = "VukArmyShop6";
$database   = "4271423_main";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_FILES['images'])) {
    $article_name = $_POST['name'];
    $desc         = $_POST['desc'];
    $price        = $_POST['price'];
    $category     = $_POST['cat'];
    
    // Count total uploaded images
    $total = count($_FILES['images']['name']);
    
    // Insert the name and description into the database
    $sql = "INSERT INTO articles (name, description, price, images,category) VALUES ('$article_name', '$desc', '$price', '$total', '$category')";
    $conn->query($sql);
    
    // Get the ID of the inserted item
    $item_id = $conn->insert_id;
    
    
    // Maximum image width and height
    $max_width  = 800;
    $max_height = 800;
    
    // Loop through each uploaded image
    for ($i = 0; $i < $total; $i++) {
        $name     = $_FILES['images']['name'][$i];
        $tmp_name = $_FILES['images']['tmp_name'][$i];
        
        $new_name = strval($item_id) . "_" . strval($i + 1) . ".jpg";
        
        // Get the image dimensions
        list($width, $height, $type) = getimagesize($tmp_name);
        
        // Create a new image with the new dimensions
        $image = imagecreatetruecolor($max_width, $max_height);
        
        // Load the original image
        if ($type == IMAGETYPE_JPEG) {
            $source = imagecreatefromjpeg($tmp_name);
        } elseif ($type == IMAGETYPE_PNG) {
            $source = imagecreatefrompng($tmp_name);
        } else {
            // Unsupported file type
            continue;
        }
        
        // Calculate the new dimensions while maintaining the aspect ratio
        $ratio = $width / $height;
        if ($ratio > 1) {
            $new_width  = $max_width;
            $new_height = round($max_width / $ratio);
        } else {
            $new_height = $max_height;
            $new_width  = round($max_height * $ratio);
        }
        
        // Create a new image with the new dimensions
        $image = imagecreatetruecolor($new_width, $new_height);
        
        // Resize the original image to the new dimensions
        imagecopyresampled($image, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        
        
        // Save the new image with compression
        imagejpeg($image, "uploads/" . $new_name, 70);
        
        // Free up memory
        imagedestroy($image);
        imagedestroy($source);
        
        $image_path = "uploads/" . $new_name;
    }
    $template_path = "artikal.php";
    $new_file_path = "artikli/" . $item_id . ".php";
    
    $article_id      = $item_id;
    $article_title   = $article_name;
    $article_content = $desc;
    $article_price   = $price;
    $num_of_images   = $total;
    
    if (!copy($template_path, $new_file_path)) {
        echo "Failed to copy template file...";
        exit();
    }
    
    $file_contents = file_get_contents($new_file_path);
    
    $article_title_placeholder = "[ARTICLE_TITLE]";
    $file_contents             = str_replace($article_title_placeholder, $article_title, $file_contents);
    
    $article_content_placeholder = "[ARTICLE_CONTENT]";
    $file_contents               = str_replace($article_content_placeholder, $article_content, $file_contents);
    
    $article_content_placeholder = "[ARTICLE_PRICE]";
    $file_contents               = str_replace($article_content_placeholder, $article_price, $file_contents);
    
    $article_content_placeholder = "[NUM_OF_IMAGES]";
    $file_contents               = str_replace($article_content_placeholder, $num_of_images, $file_contents);
    
    $article_content_placeholder = "[ARTICLE_ID]";
    $file_contents               = str_replace($article_content_placeholder, $article_id, $file_contents);
    
    file_put_contents($new_file_path, $file_contents);
    
    echo "Item and images uploaded successfully.";
    header("Location: admin.php");
exit;
} else {
    echo "Please select at least one image to upload.";
}

?>
Download Form