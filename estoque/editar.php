<?php 

session_start(); // inicia a sessão da mensagem de cadastro
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_produto= "SELECT * FROM produtos WHERE id = '$id'";
$resultado_produto = mysqli_query($conn, $result_produto); 
$row_produto = mysqli_fetch_assoc($resultado_produto);


?>

<!DOCTYPE html> 
<html lang ="pt-br">

	<head>
		<title>Formulario</title>
		<link rel="stylesheet" href="style.css">
		
	</head>	
	
	<body>
		<button><a href="form.php">Cadastrar Produto</a></button>
		<button><a href="listar.php">Listar Produtos</a></button>
		<h1>Editar Usuario</h1>
		
		<?php
		
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset ($_SESSION['msg']);
			}
			
		?>
		<form method="POST" action="proc_edit_produto.php">
				  <input type="hidden" name="id" value="<?php echo $row_produto['id']?>">

				
				  <label for="produto"> Produto: </label> 
				  <input type="text" name="produto" value="<?php echo $row_produto['produto']?>">

				  <label for="quantidade"> Quantidade:</label>
				  <input type="text" name="quantidade" value="<?php echo $row_produto['quantidade']?>"> 
				  
				 <br>
				  <input type="reset"  value="Limpar" class="limpar">
				  <input type="submit" value="Editar" class="enviar">
				 
		</form>
	</body>
</html> 