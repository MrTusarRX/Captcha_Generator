<?php
session_start();

//you can generate as many digit as you want just change $length It's currently set to 4.
function generateCaptchaCode($length = 6) {
    $characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    return substr(str_shuffle($characters), 0, $length);
}

$captcha = generateCaptchaCode();
$_SESSION['secure'] = $captcha; 

$width = 180;
$height = 60;
$image = imagecreatetruecolor($width, $height);
$bgColor = imagecolorallocate($image, 255, 255, 255);
imagefilledrectangle($image, 0, 0, $width, $height, $bgColor);
for ($i = 0; $i < 12; $i++) {
    $lineColor = imagecolorallocate($image, rand(150,200), rand(150,200), rand(150,200));
    imageline($image, rand(0,$width), rand(0,$height), rand(0,$width), rand(0,$height), $lineColor);
}
$fontDir = __DIR__ . '/fonts/';
$fontFile = $fontDir . rand(1, 5) . '.ttf'; 
$fontSize = 24;
$spacing = 25;
$baseX = 15;
$baseY = 40;
for ($i = 0; $i < strlen($captcha); $i++) {
    $r = rand(0, 100);
    $g = rand(0, 100);
    $b = rand(0, 100);
    $angle = rand(-15, 15);
    $xOffset = rand(-2, 2);
    $yOffset = rand(-2, 2);
    $textColor = imagecolorallocate($image, $r, $g, $b);
    imagettftext($image, $fontSize, $angle, $baseX + $i * $spacing + $xOffset, $baseY + $yOffset, $textColor, $fontFile, $captcha[$i]);
}

// Output the image
header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);
?>
