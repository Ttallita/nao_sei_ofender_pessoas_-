<head>
    <title>entrada de dados</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" lang="javascript">
        function validar(){
            if((document.getElementById('cd_codigo').value=='')||
			(document.getElementById('cd_quantidade').value=='')||
			(document.getElementById('nm_destinatario').value=='')||
			(document.getElementById('nm_pedido_cancelado').value=='')||
			(document.getElementById('nm_pedido_atrasado').value=='')||
			(document.getElementById('cd_doca').value=='')||
			(document.getElementById('cd_est').value=='')){
                alert('Preencha todos os campos');
                return false;
            }   else{
                return true;
            }
        }
    </script>

<?php
    include 'database.php';

	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
	$dsCodigo="";
    $dsQuantidade="";
    $dsDestinatario="";
    $dsPedidoCancelado="";
    $dsPedidoAtrasado="";
    $dsCdDoca="";
    $dsCdEstoque="";
	if($id != NULL){
        $sql="select * from OrdemDePedido where codigo=".$id;
        $resultado= execute_query($sql);
        foreach ($resultado as $demanda):
            $dsCodigo=$demanda['Codigo'];
            $dsQuantidade=$demanda['Quantidade'];
            $dsDestinatario=$demanda['Destinatario'];
            $dsPedidoCancelado=$demanda['PedidoCancelado'];
            $dsPedidoAtrasado=$demanda['PedidoAtrasado'];
            $dsCdDoca=$demanda['Codigo_Doca'];
            $dsCdEstoque=$demanda['Codigo_Estoque'];
        endforeach;
	}
?>
</head>        
<body>

	<div class="container">
	    <div class="row" >
			<div class="col-sm">
			</div>
			<div class="col-sm">
				<a href="index.html">  Voltar </a> </br>
				<h3 class="py-5 text-center">Ordem de pedido</h3>
				<form method="post" action="processar.php">
				
					<input name="tipo" type="hidden" id="tipo" value="ordemdepedido" />
					<input name="id" type="hidden" id="id" value="<?php echo $id?>"/>
					<table>
						<tr>
							<td>Código</td><td> <input type="number" name="cd_codigo" id="cd_codigo" value="<?php echo $dsCodigo?>"/></td>
						</tr>
						<tr>
							<td>Quantidade </td><td><input type="text" name="cd_quantidade" id="cd_quantidade" value="<?php echo $dsQuantidade?>"/></td>
						</tr>
						<tr>
							<td>Destinatario </td><td><input type="text" name="nm_destinatario" id="nm_destinatario" value="<?php echo $dsDestinatario?>"/></td>
						</tr>
						<tr>
							<td>Pedido cancelado </td><td><input type="text" name="nm_pedido_cancelado" id="nm_pedido_cancelado" value="<?php echo $dsPedidoCancelado?>"/></td>
						</tr>
						<tr>
							<td>Pedido atrasado </td><td><input type="number" name="nm_pedido_atrasado" id="nm_pedido_atrasado" value="<?php echo $dsPedidoAtrasado?>"/></td>
						</tr>
						<tr>
							<td>Codigo da doca </td><td><input type="number" name="cd_doca" id="cd_doca" value="<?php echo $dsCdDoca?>"/></td>
						</tr>
						<tr>
							<td>Codigo estoque</td><td> <input type="number" name="cd_est" id="cd_est" value="<?php echo $dsCdEstoque?>"/></td>
						</tr>
					</table>
					<br/>
				<input class="btn btn-primary" type="submit" name="btn_login" id="btn_login" value="Registrar" onclick="return validar();">
				</form>
			</div>
			<div class="col-sm">
			<?php	include "listarordemdepedido.php";	?>
			</div>
		</div>
	</div>
</body>


