<?php require_once('header.php');
	require_once('banco-produto.php');
	require_once('banco-categoria.php');
	require_once('logica-usuario.php');?>
<div class="container">

	<?php successAlert();?>

	<?php $produtos = listaProduto($conexao) ?>
	<table class="table">
		<?php foreach ($produtos as $produto) { ?>
		<tr>
			<td> <?= $produto['nome'];?></td>
			<td> <?= $produto['preco'];?></td>
			<td> <?= substr($produto['descricao'], 0,40);?></td>
			<td> <?= $produto['categoria_nome'];?></td>
			<form action="delete-produto.php?id=<?=$produto['id']?>" method="post">	
			<input type="hidden" name="id" value="<?=$produto['id']?>">
			<td> <a href="altera-produto-form.php?id=<?=$produto['id']?>" class="btn btn-primary">Alterar</a></td>
			<td> <button class="btn btn-danger">Deletar</button></td>
			</form>
		</tr>
		<?php } ?>
	</table>
</div>
<?php require_once('footer.php') ?>