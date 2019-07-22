<?php

header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_hight = 256;

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_hight);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_hight, $old_width, $old_height);

imagejpeg($new_image);
imagedestroy($old_image);
imagedestroy($new_image);