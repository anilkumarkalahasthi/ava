<?php
//$inFile = $_SERVER['DOCUMENT_ROOT'].'/anil/pardeep.jpg';
$filename = $_SERVER['DOCUMENT_ROOT'].'/anil/pardeep.jpg';
$percent = 0.5;


header('Content-Type: image/jpeg');
list($width, $height) = getimagesize($filename);
$new_width = $width * $percent;
$new_height = $height * $percent;

$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Output
imagejpeg($image_p, null, 100);
?>