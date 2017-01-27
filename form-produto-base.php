<tr>
	<td><label for="nome-produto">Nome</label></td>
	<td><input class="form-control" id="nome-produto" type="text" name="nome" value="<?= $produto['nome'] ?>"></td>
</tr>

<tr>
	<td><label for="preco-produto">Preco</label></td>

	<td><input class="form-control" id="preco-produto" type="number" name="preco" value="<?= $produto['preco'] ?>"></td>
</tr>
<tr>
	<td><label for="descricao-produto">Descrição</label></td>

	<td><textarea name="descricao" id="descricao-produto"><?= $produto['descricao'] ?></textarea></td>
</tr>
<tr>
	<td><label for="check-usado">Usado</label></td>
	<td><input id="check-usado" type="checkbox" name="usado" <?= $usado?>></td>
</tr>
<tr>

	<td><label for="categorias-produtos"> Categoria</label></td>
	<td>
		<select id="categorias-produtos" name="categoria_id" class="form-control" value="<?= $produto['categoria_id'] ?>">
			<?php foreach ($categorias as $categoria) { 
				$aSelecao = $produto['categoria_id'] == $categoria['id'];
				$selecao = $aSelecao ? "selected='selected'" : "";
				?>
				<option value="<?= $categoria['id']?>" <?= $selecao?>>
					<?= $categoria['nome']?>
				</option>
				<?php } ?>
			</select>
		</td>	

	</tr>
