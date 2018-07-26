<?php
//$inFile = $_SERVER['DOCUMENT_ROOT'].'/anil/pardeep.jpg';

/*//$image = new Imagick($inFile);
//$image->thumbnailImage(200, 200);
$outFile =$_SERVER['DOCUMENT_ROOT'].'/anil/pard.jpg';
echo "<pre>";
$mysock = getimagesize($inFile);
print_r($mysock);
$width=round($mysock[0]*0.5);
$height=round($mysock[1]*0.5);*/
//$image->sc ( $inFile , $width, $height, IMG_BILINEAR_FIXED  );
//->writeImage($outFile);
//$resize=imageResize($mysock[0],$mysock[1], 150);
//$image->writeImage($outFile);

//echo '<img src="pp_large.jpg" width="'.$width.'" width="'.$height.'">';

$filename = $_SERVER['DOCUMENT_ROOT'].'/anil/pp_large.jpg';
$filename2 = $_SERVER['DOCUMENT_ROOT'].'/anil/pp_large90.jpg';
$percent = 0.5;


header('Content-Type: image/jpeg');

// Get new dimensions
list($width, $height) = getimagesize($filename);
$new_width = $width * $percent;
$new_height = $height * $percent;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Output
imagejpeg($image_p, $filename2, 100);
/*function resizeImage($imagePath, $width, $height, $filterType, $blur, $bestFit, $cropZoom) {
    //The blur factor where &gt; 1 is blurry, &lt; 1 is sharp.
    $imagick = new \Imagick(realpath($imagePath));

    $imagick->resizeImage($width, $height, $filterType, $blur, $bestFit);

    $cropWidth = $imagick->getImageWidth();
    $cropHeight = $imagick->getImageHeight();

    if ($cropZoom) {
        $newWidth = $cropWidth / 2;
        $newHeight = $cropHeight / 2;

        $imagick->cropimage(
            $newWidth,
            $newHeight,
            ($cropWidth - $newWidth) / 2,
            ($cropHeight - $newHeight) / 2
        );

        $imagick->scaleimage(
            $imagick->getImageWidth() * 4,
            $imagick->getImageHeight() * 4
        );
    }


    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}*/

?>