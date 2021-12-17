<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'jovem';
$categorias[] = 'adulta';
$categorias[] = 'velha';
$categorias[] = 'to fora';

 

$nome = $_POST['nome'];
$idade = $_POST['idade'];


if($idade >= 5 && $idade <= 8){

    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'infantil'){
            echo $nome." tem ".$idade." de idade";

        }
    }


}else if($idade >= 9 && $idade <=13){
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'jovem'){
            echo $nome.' tem '.$idade. ' de idade.';

        }
    }
}else if($idade >= 14 && $idade <=18){
    
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'adulta'){
            echo $nome. ' tem '.$idade.  ' de idade';

        }
    }
}else if($idade >= 19 && $idade <=50){
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'velha'){
            echo $nome. ' tem '.$idade.  ' de idade';

        }
    }
}else{
   echo 'Não sei';
}




?>