<?php
	$resultado_consulta = array
(array(1, "Código"), array(2, "CNPJ"), array(3, "Telefone"), array(4, "Endereço"), array(5, "Faturamento"), array(6, "Marca"), array(7, "Email"));
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
					<a href="apagar.php? id=<?php echo $demanda[0]; ?>&tipo=fornecedor"> Excluir </a> | 
					<a href="fornecedor.php? id=<?php echo $demanda[0]; ?>"> Alterar </a> 
				</td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>

	