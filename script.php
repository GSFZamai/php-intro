<?php 

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';


    //print_r($categorias);
 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if(empty($nome)) {
        echo 'O campo nome, não pode ser vazio';
        return;
    }

    if(strlen($nome) < 3) {
        echo 'O campo nome deve possuir no mínimo 3 caracteres';
        return;
    }

    if(strlen($nome) > 40) {
        echo 'O campo nome deve possuir no máximo 40 caracteres';
        return;
    }

    if(!is_numeric($idade)) {
        echo 'O campo idade deve ser um número!';
        return;
    }

    var_dump($idade);
    var_dump($nome);


    if ($idade >= 0 && $idade <= 12) {
        echo "O nadador ".$nome." compete na categoria ".$categorias[0];
    }else if ($idade > 12 && $idade <= 18) {
        echo "O nadador ".$nome." compete na categoria ".$categorias[1];
    }else if ($idade > 18) {
        echo "O nadador ".$nome." compete na categoria ".$categorias[2];
    }
?>