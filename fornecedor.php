<head>
    <title>entrada de dados</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" lang="javascript">
        function validar(){
            if((document.getElementById('cd_codigo').value=='')||
			(document.getElementById('nm_cnpj').value=='')||
			(document.getElementById('nm_telefone').value=='')||
			(document.getElementById('nm_endereço').value=='')||
			(document.getElementById('nm_faturamento').value=='')||
			(document.getElementById('nm_marca').value=='')||
			(document.getElementById('nm_email').value=='')){
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
    $dsCNPJ="";
    $dsTelefone="";
    $dsEndereco="";
    $dsFaturamento="";
    $dsMarca="";
    $dsEmail="";
	if($id != NULL){
        $sql="select * from fornecedor where codigo=".$id;
        $resultado= execute_query($sql);
        foreach ($resultado as $demanda):
            $dsCodigo=$demanda['Codigo'];
            $dsCNPJ=$demanda['CNPJ'];
            $dsTelefone=$demanda['Telefone'];
            $dsEndereco=$demanda['Endereço'];
            $dsFaturamento=$demanda['Faturamento'];
            $dsMarca=$demanda['Marca'];
            $dsEmail=$demanda['Email'];

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
			<h3 class="py-5 text-center">Fornecedor</h3>
			<form method="post" action="processar.php">
				<input name="tipo" type="hidden" id="tipo" value="fornecedor" />
				<input name="id" type="hidden" id="id" value="<?php echo $id?>"/>
				<table>
					<tr>
						<td>Código </td><td><input type="number" name="cd_codigo" id="cd_codigo" value="<?php echo $dsCodigo?>"/></td>
					<tr>
					<tr>
						<td>CNPJ </td><td><input type="text" name="nm_cnpj" id="nm_cnpj" value="<?php echo $dsCNPJ?>"/></td>
					</tr>
					<tr>
						<td>Telefone </td><td><input type="text" name="nm_telefone" id="nm_telefone" value="<?php echo $dsTelefone?>"/></td>
					</tr>
					<tr>
						<td>Endereço </td><td><input type="text" name="nm_endereço" id="nm_endereço" value="<?php echo $dsEndereco?>"/></td>
					</tr>
					<tr>
						<td>Faturamento </td><td><input type="text" name="nm_faturamento" id="nm_faturamento" value="<?php echo $dsFaturamento?>"/></td>
					</tr>
					<tr>
						<td>Marca </td><td><input type="text" name="nm_marca" id="nm_marca" value="<?php echo $dsMarca?>"/></td>
					</tr>
					<tr>
						<td>Email </td><td><input type="text" name="nm_email" id="nm_email" value="<?php echo $dsEmail?>"/></td>
					</tr>
				</table>
				<br/>
			<input class="btn btn-primary" type="submit" name="btn_login" id="btn_login" value="Registrar" onclick="return validar();">
			</form>
		</div>
		<div class="col-sm">
		<?php	include "listarfornecedor.php";	?>
		</div>
	  </div>
	</div>
</body>


