<?php
session_start();

$names = array($_SESSION["name"],$_POST['vname']);
    
    // Certificate image path
$certificateImage = "../../assets/images/vaccine_cert.jpg";

// Load the certificate image
$image = imagecreatefromjpeg($certificateImage);

// Check if image creation was successful
if (!$image) {
    die("Error loading certificate image");
}

// Font settings
$font = "../../assets/Roboto/Roboto-Black.ttf"; // Change this to the path of your TTF font file
$fontSize = 24;

// X and Y coordinates for the first name
$x = 290;
$y = 210;


// Font color
$fontColor = imagecolorallocate($image, 200, 0, 10); // Black color

// Iterate through the names from the JSON file and write them on the image
foreach ($names as $name) {
    
    imagettftext($image, $fontSize, 0, $x, $y, $fontColor, $font, $name);
    // Increment Y coordinate for the next name
    $y += 210; // Adjust this value based on your design
}

// Output the image
header('Content-type: image/jpeg');
header('Content-Disposition: attachment; filename="generated_certificate.jpg"');
imagejpeg($image);

// Clean up resources
imagedestroy($image);

//go back to same page
header("location:../Views/myProfile.php");    
    
?>