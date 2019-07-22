<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($resultado as $results){

    foreach ($results as $key => $value) {
        
        echo  "<strong>".$key.":</strong>".$value."<br>";
        

    }
    echo "===============================<br>";
}


