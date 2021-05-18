<?php 

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';


    //print_r($categorias);
 
    $nome = 'Gabriel';
    $idade = 15;

    //var_dump($idade);
    //var_dump($nome);


    if ($idade >= 0 && $idade <= 12) {
        echo "O nadador ".$nome." compete na categoria ".$categorias[0];
    }else if ($idade > 12 && $idade <= 18) {
        echo "O nadador ".$nome." compete na categoria ".$categorias[1];
    }else if ($idade > 18) {
        echo "O nadador ".$nome." compete na categoria ".$categorias[2];
    }
?>