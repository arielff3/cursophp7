<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){

    echo "Erro!".$conn->connect_error;
}

$sql = "INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("ss" ,$login,$senha);
$login = "Ariel";
$senha = "Sensdasdha";
$stmt->execute();