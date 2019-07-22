<?php

$img = imagecreatefromjpeg("certificado.jpg");

$titlecolor = imagecolorallocate($img, 0, 0, 0);
$grey = imagecolorallocate($img, 100, 100, 100);

imagestring($img, 5, 450, 150, "CERTIFICADO",$titlecolor);
imagestring($img, 5, 440, 350, "Divanei Aparecido",$titlecolor);
imagestring($img, 3, 430, 370, utf8_decode("Concluído em: ").date("d/m/Y"),$titlecolor);

header("Content-Type: image/jpeg");
$dia = date("Y-m-d");
imagejpeg($img, "certificado-" . $dia .".jpg", 100);
imagedestroy($img);
    
    
    
     
    
   