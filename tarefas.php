<?php   
if(isset($_GET['nome']) && $_GET['nome'] != ''){
    $tarefa = [];

    $tarefa['nome'] = $_GET['nome'];

    if(isset($_GET['senha'])){
        $tarefa['senha'] = $_GET['senha'];
    }else{
        $tarefa['senha'] = '';
    }    
}
if(isset($_GET['adm'])){
    $tarefa['adm'] = $_GET['adm'];
}else{
    $tarefa['adm'] = 'não';
}

include 'conexao.php';
#poderia colocar 'texto' ou $ variavel

if(isset($tarefa)){
$sqlInserir = "INSERT INTO tb_user(
    nome,
    senha,
    adm
    ) VALUES(
        '{$tarefa['nome']}',
        '{$tarefa['senha']}',
        '{$tarefa['adm']}'
    );";

    mysqli_query($conexao , $sqlInserir);
}
include "tamplate.php";
?>