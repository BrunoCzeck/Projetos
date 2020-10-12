<?php 

session_start(); // inicia a sessão da mensagem de cadastro
include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang ="pt-br">

	<head>
		<title>Editar</title>
		<link rel="stylesheet" href="style.css">
		
	</head>	
	
	<body>
		<button><a href="form.php">Cadastro</a></button>
		
		<h1>Editar</h1>
		
		<?php
		
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset ($_SESSION['msg']);
			}
		// Paginação 
		//Recebe a pg e o numero 
		$pagina_atual= filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1; 
		
		// setar a quantidade itens
		$qnt_result_pg = 5;
		
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg; 
		// Final da Paginação 
		$result_produtos = "SELECT * FROM produtos LIMIT $inicio, $qnt_result_pg"; 
		$resultado_produtos = mysqli_query($conn, $result_produtos);
		while($row_produtos = mysqli_fetch_assoc($resultado_produtos)){ 
				 echo "Id: " . $row_produtos['id'] . "<br>";	
				 echo "Produto: " . $row_produtos['produto'] . "<br>";				 
				 echo "Quantidade: " . $row_produtos['quantidade'] . "<br><hr>";
				 echo "<a href='editar.php?id=" . $row_produtos['id'] . "'> Editar </a><br><hr>";					 
				 echo "<a href='apagar_produto.php?id=" . $row_produtos['id'] . "'> Apagar </a><br><hr>";
		
		}
		
		
		
			
		
		$result_pg = "SELECT COUNT(id) AS num_result FROM produtos";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['numresult'];    // Quantidade de pagina
		
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		$max_links = 3;
		// quantidade de pg depois. 
		echo "<a href='listar.php?pagina=1'> Voltar </a>";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
		
		}
			if ($pag_ant >= 1){
				echo "<a href='listar.php?pagina=$pag_ant'> $pag_ant </a>";
			}
		
		
		//echo "$pagina";
				
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
				if($pag_dep <= $quantidade_pg){
					// so pode imprimir a quantidade de paginas que existe 
				 echo "<a href='listar.php?pagina=$pag_dep'> $pag_dep </a>";
				}
		}
	
		
		echo "<button><a href='listar.php?pagina=$quantidade_pg'> Proximo </a></button>";

		
		?>
		
		</form>
	</body>
</html> 