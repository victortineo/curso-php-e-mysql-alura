<?php require_once('header.php'); ?>
<?php require_once('banco-produto.php'); ?>
<?php require_once('logica-usuario.php'); ?>
<?php verificaUsuario(); ?>

	<div class="container">
		<?php 
		$id = $_GET['id'];
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		$descricao = $_POST['descricao'];
		$categoria_id = $_POST['categoria_id'];
		if (array_key_exists('usado', $_POST)) {
			$usado = 'true';
		} else { 
			$usado = 'false';
		}
		
		if (alteraProduto($id, $conexao, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
	 	
	 		<p class="text-success text-center"> produto <strong><?php echo $nome; ?></strong> alterado com sucesso</p>
	 	
	 		<?php }

		else {	?>
			<?php $msg = mysqli_error($conexao); ?>

	 		<p class="text-danger text-center"> Produto <strong><?php echo $nome; ?></strong> não alterado: <br> <?= $msg ?></p>

		<?php } ?>
		</div>
<?php require_once('footer.php') ?>