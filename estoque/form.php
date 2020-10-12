<?php 

session_start(); // inicia a sessão da mensagem de cadastro
include_once("conexao.php");
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
		<h1>Cadastro</h1>
		
		<?php
		
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset ($_SESSION['msg']);
			}
			
		?>
		<form method="POST" action="processo.php">
			<select name="id_categoria" id="id_categoria">
			<option value="">Escolha a Entidade</option>
		<?php  

					$result_cat_post = "SELECT * FROM categorias_post ORDER by nome_categoria";
					$resultado_cat_post = mysqli_query($conn, $result_cat_post);
					while ($row_cat_post = mysqli_fetch_assoc($resultado_cat_post)) {
					echo '<option value="' . $row_cat_post['id'] . '">' .$row_cat_post['nome_categoria'] . '</option>'; 
					}	
		?>
					</select><br><br>
				  <label for="produto"> Produto: </label> 
				  <input type="text" name="produto" >

				  <label for="quantidade"> Quantidade:</label>
				  <input type="text" name="quantidade"> 

					
					
					
					
					
					
					
				 <br>
				  <input type="reset"  value="Limpar" class="limpar">
				  <input type="submit" value="Cadastrar" class="enviar">
				 
		</form>
	</body>
</html> 