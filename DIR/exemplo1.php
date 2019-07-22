<?php
// Criar e excluir diretórios
//  $name = "images";

//  if(!is_dir($name)){

//     mkdir($name);
//     echo "Foi criado";
//  } else {

//     rmdir($name);
//     echo "Foi removido";

//  }

// interação com arquivos
$images = scandir("images");
$data = array();
foreach ($images as $img) {
    if (!in_array($img, array(".",".."))){

        $filename = "images".DIRECTORY_SEPARATOR.$img;

        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/y H:i:s", filemtime($filename));
        $info["url"] = "http://phpudemy/DIR/".str_ireplace("\\", "/", $filename);
        array_push($data, $info);  
    } 
}

var_dump($data);

