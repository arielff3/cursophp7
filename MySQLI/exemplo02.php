<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){

    echo "Erro!".$conn->connect_error;

}

$resultado = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
   
    array_push($data, $row); 
    
}

echo json_encode($data);