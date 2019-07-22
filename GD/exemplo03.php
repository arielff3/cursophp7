<?php

$img = imagecreatefromjpeg("certificado.jpg");

$titlecolor = imagecolorallocate($img, 0, 0, 0);
$grey = imagecolorallocate($img, 100, 100, 100);

imagettftext($img, 32, 0, 320, 150, $titlecolor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($img, 32, 0, 320, 350, $titlecolor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divanei Aparecido");
imagestring($img, 3, 380, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titlecolor);

header("Content-Type: image/jpeg");
imagejpeg($img);
imagedestroy($img);
    
    
    
     
    
   