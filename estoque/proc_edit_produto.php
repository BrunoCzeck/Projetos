<?php 
session_start(); // Aviso se cadastrou
include_once ("conexao.php");
$id = filter_input(INPUT_POST, 'id',  FILTER_SANITIZE_NUMBER_INT);
$produto = filter_input (INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
$quantidade = filter_input (INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);

//echo "Produto: $produto <br>";
//echo "Quantidade: $quantidade <br>";

$result_produto = "UPDATE produtos SET produto=$produto, quantidade=$quantidade, modified=NOW() WHERE id='$id'";
$resultado_produto = mysqli_query($conn, $result_produto);

// Cadastra e redireciona. 
if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto Editado com Sucesso!</p>";
	header("Location: listar.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto Não Editado!</p>";
	header("Location: listar.php?id=$id");
}

?>