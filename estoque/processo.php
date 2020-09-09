<?php 
session_start(); // Aviso se cadastrou
include_once ("conexao.php");

$produto = filter_input (INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
$quantidade = filter_input (INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);

//echo "Produto: $produto <br>";
//echo "Quantidade: $quantidade <br>";

$result_produto = "INSERT INTO produtos (produto, quantidade, created) VALUES ('$produto', '$quantidade', NOW())";
$resultado_produto = mysqli_query($conn, $result_produto);

// Cadastra e redireciona. 
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto Cadastrado com Sucesso!</p>";
	header("Location: form.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto não cadastrado!</p>";
	header("Location: form.php");
}

?>