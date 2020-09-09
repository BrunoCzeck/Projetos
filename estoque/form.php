<?php 

session_start(); // inicia a sessão da mensagem de cadastro

?>

<!DOCTYPE html> 
<html lang ="pt-br">

	<head>
		<title>Formulario</title>
		<link rel="stylesheet" href="style.css">
		
	</head>	
	
	<body>
		<button><a href="form.php">Cadastro</a></button>
		<button><a href="editar.php">Editar</a></button>
		<h1>Cadastro</h1>
		
		<?php
		
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset ($_SESSION['msg']);
			}
			
		?>
		<form method="POST" action="processo.php">
		
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