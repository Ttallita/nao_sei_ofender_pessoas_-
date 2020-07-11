<head>
    <title>entrada de dados</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" lang="javascript">
        function validar(){
            if((document.getElementById('cd_codigo').value=='')||
			(document.getElementById('nm_endereço').value=='')||
			(document.getElementById('nm_produto_com_avaria').value=='')||
			(document.getElementById('vl_entrada').value=='')||
			(document.getElementById('vl_saida').value=='')||
			(document.getElementById('cd_produto_contabilizado').value=='')||
			(document.getElementById('cd_quantidade_maxima').value=='')){
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
	$dsEndereco="";
    $dsProdutoComAvaria="";
    $dsValidacaoEntrada="";
    $dsValidacaoSaida="";
    $dsProdutoContabilizado="";
    $dsQuantMax="";
	if($id != NULL){
        $sql="select * from estoque where codigo=".$id;
        $resultado= execute_query($sql);
        foreach ($resultado as $demanda):
        	$dsCodigo=$demanda['Codigo'];
            $dsEndereco=$demanda['Endereço'];
            $dsProdutoComAvaria=$demanda['ProdutoComAvaria'];
            $dsValidacaoEntrada=$demanda['ValidacaoEntrada'];
            $dsValidacaoSaida=$demanda['ValidacaoSaida'];
            $dsProdutoContabilizado=$demanda['ProdutoContabilizado'];
            $dsQuantMax=$demanda['QuantMax'];
        endforeach;
	}
?>
</head> 
<body>
	<div class="container">
	  <div class="row">
		<div class="col-sm">
		</div>
		<div class="col-sm">
        <a href="index.html"> Voltar </a>
        <h3 class="py-5 text-center">Estoque</h3>
			<form method="post" action="processar.php">
				<input name="tipo" type="hidden" id="tipo" value="estoque" />
				<input name="id" type="hidden" id="id" value="<?php echo $id?>"/>
				<table>
					<tr>
						<td>Código </td><td><input type="number" name="cd_codigo" id="cd_codigo" value="<?php echo $dsCodigo?>"/></td>
					</tr>
					<tr>
						<td>Endereço </td><td><input type="text" name="nm_endereço" id="nm_endereço" value="<?php echo $dsEndereco?>"/></td>
					</tr>
					<tr>
						<td>Produto com avaria </td><td><input type="text" name="nm_produto_com_avaria" id="nm_produto_com_avaria" value="<?php echo $dsProdutoComAvaria?>"/></td>
					</tr>
					<tr>
						<td>Validação entrada </td><td><input type="number" name="vl_entrada" id="vl_entrada" value="<?php echo $dsValidacaoEntrada?>"/></td>
					</tr>
					<tr>
						<td>Validação saída </td><td><input type="number" name="vl_saida" id="vl_saida" value="<?php echo $dsValidacaoSaida?>"/></td>
					</tr>
					<tr>
						<td>Produto contabilizado </td><td><input type="number" name="cd_produto_contabilizado" id="cd_produto_contabilizado" value="<?php echo $dsProdutoContabilizado?>"/></td>
					</tr>
					<tr>
						<td>Quantidade maxima</td><td> <input type="number" name="cd_quantidade_maxima" id="cd_quantidade_maxima" value="<?php echo $dsQuantMax?>"/></td>
					</tr>
				</table>
				<br/>
			<input class="btn btn-primary" type="submit" name="btn_login" id="btn_login" value="Registrar" onclick="return validar();">
			</form>
		</div>
		<div class="col-sm">
		<?php	include "listarestoque.php";	?>
		</div>
	</div>
	</div>
</body>

