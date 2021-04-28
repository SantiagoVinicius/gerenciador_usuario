<?php
# Conexão com banco de dados

$servidor = '123.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'bd_user';

$conexao = mysqli_connect($senha, $usuario, $senha, $banco);

/*if(!$conexao){
    die("<br>Não conectou!! Erro:" . mysqli_connect_error());
}else{
    echo "conectado";
}*/
?>