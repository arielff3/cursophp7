<?php

// try {

//     throw new Exception("Houve um erro", 400);
    


// } catch (Exception $e) {

//     echo json_encode(array(
//         'error'=>$e->getMessage(),
//         'line'=>$e->getLine(),
//         'file'=>$e->getFile(),
//         'code'=>$e->getCode()
//     ));
// }

function trataNome($name){
    
    if(!$name){

        throw new Exception("Nenhum nome foi informado", 1);
        

    }
    echo ucfirst($name)."<br>";
}

try {
    trataNome("joão");
    trataNome("");
} catch (\Exception $e) {
    
    echo $e->getMessage();

} finally{

    echo "<br> Executou o bloco try";

}