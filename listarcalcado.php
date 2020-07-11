<?php
	$resultado_consulta = array
(array(1, "codigo"), array(2, "categoria"), array(3, "lote"), array(4, "numeração"), array(5, "codigo do fornecedor"), array(6, "codigo de estoque"));
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
					<a href="apagar.php? id=<?php echo $demanda[0]; ?>&tipo=calcado"> Excluir </a> | 
					<a href="calcado.php? id=<?php echo $demanda[0]; ?>"> Alterar </a> 
					
				</td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>

	