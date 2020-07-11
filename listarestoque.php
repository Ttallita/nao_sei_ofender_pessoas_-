<?php
	$resultado_consulta = array
(array(1, "Código"), array(2, "Endereço"), array(3, "Produto com avaria"), array(4, "Validação entrada"), array(5, "Validação saída"), array(6, "Produto contabilizado"), array(7, "Quantidade maxima"));
?>

<table class="table">
	<thead>
		<tr>
			<th> Codigo </th>
			<th> Descrição </th>
			<th> Ações </th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($resultado_consulta as $demanda) :
		?>
			<tr style="font-size:12px;">
				<td> <?php echo $demanda[0]; ?> </td>
				<td> <?php echo $demanda[1]; ?> </td>
				<td style="width-220px;">
					<a href="apagar.php? id=<?php echo $demanda[0]; ?>&tipo=estoque"> Excluir </a> | 
					<a href="estoque.php? id=<?php echo $demanda[0]; ?>"> Alterar </a> 
				</td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>

	