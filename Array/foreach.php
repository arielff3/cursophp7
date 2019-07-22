<form>
    <input type="text" name="nome"><br><br>
    <input type="date" name="nascimento"><br><br>
    <input type="submit" value="Enviar">
</form>

<?php

if(empty($_GET['nome'] || $_GET['nascimento'])){
    echo "Campos vázios";
}else{
    foreach($_GET as $key => $form){

    echo "Nome do campo: ".$form."<br>";
    echo "Valor do campo: ".$key;
    echo "<hr>";
}}





// $meses = array(
//     'Janeiro', 'Fevereiro', 'Março',
//     'Abril', 'Maio', 'Junho',
//     'Julho', 'Agosto', 'Setembro',
//     'Outubro', 'Novembro', 'Dezembro'
// );

// foreach($meses as $index => $mes){
    
//     echo "O mês ".$index." é:".$mes."<br>";
// }
