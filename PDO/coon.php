<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();


$sql = "DELETE FROM tb_usuarios WHERE idusuario = ?";
$stmt= $conn->prepare($sql);
$id = 3;
$stmt->execute(array($id));

$conn->rollBack();
$conn->commit();

echo "Inserida";
