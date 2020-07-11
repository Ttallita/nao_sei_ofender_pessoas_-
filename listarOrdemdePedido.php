<?php
	$resultado_consulta = array
(array(1, "Código"), array(2, "Quantidade"), array(3, "Destinatario"), array(4, "Pedido cancelado"), array(5, "Pedido atrasado"), array(6, "Codigo da doca"), array(7, "Codigo estoque"));
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
					<a href="apagar.php? id=<?php echo $demanda[0]; ?>&tipo=ordemdepedido"> Excluir </a> | 
					<a href="ordemdepedido.php? id=<?php echo $demanda[0]; ?>"> Alterar </a> 
				</td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>


	