<html>    
<head>
    <title>entrada de dados</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script type="text/javascript" lang="javascript">
        function validar(){
            if((document.getElementById('cd_codigo').value=='')||
			(document.getElementById('nm_categoria').value=='')||
			(document.getElementById('cd_lote').value=='')||
			(document.getElementById('cd_numeracao').value=='')||
			(document.getElementById('cd_codigo_frn').value=='')||
			(document.getElementById('cd_codigo_est').value=='')){
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
    $dsCategoria="";
    $dsLote="";
    $dsNumeracao="";
    $dsFornecedor="";
    $dsEstoque="";
	if($id != NULL){
        $sql="select * from calçado where codigo=".$id;
        $resultado= execute_query($sql);
        foreach ($resultado as $demanda):
            $dsCodigo=$demanda['codigo'];
            $dsCategoria=$demanda['categoria'];
            $dsLote=$demanda['lote'];
            $dsNumeracao=$demanda['numeração'];
            $dsFornecedor=$demanda['fornecedor'];
            $dsEstoque=$demanda['estoque'];
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
        <h3 class="py-5 text-center">Calçado</h3>
        <form method="post" action="processar.php">
            <input name="tipo" type="hidden" id="tipo" value="calcado" />
			<input name="id" type="hidden" id="id" value="<?php echo $id?>"/>
            <table>
                <tr>
                    <td>Código </td><td><input type="text" name="cd_codigo" id="cd_codigo" value="<?php echo $dsCodigo?>"/></td>
                </tr>
                <tr>
                    <td>Categoria </td><td><input type="text" name="nm_categoria" id="nm_categoria" value="<?php echo $dsCategoria?>" /></td>
                </tr>
                <tr>
                    <td>Lote </td><td><input type="number" name="cd_lote" id="cd_lote" value="<?php echo $dsLote?>"></td>
                </tr>
                <tr>
                    <td>Numeração </td><td><input type="number" name="cd_numeracao" id="cd_numeracao" value="<?php echo $dsNumeracao?>"></td>
                </tr>
                <tr>
                    <td>Codigo do fornecedor </td><td><input type="number" name="cd_codigo_frn" id="cd_codigo_frn" value="<?php echo $dsFornecedor?>"></td>
                </tr>
                <tr>
                    <td>Código estoque </td><td><input type="number" name="cd_codigo_est" id="cd_codigo_est" value="<?php echo $dsEstoque?>"></td>
                </tr>
            </table>
			<br/>
            <input class="btn btn-primary" type="submit" name="btn_login" id="btn_login" value="Registrar" onclick="return validar();">
        </form>
    </div>
    <div class="col-sm">
	<?php	include 'listarcalcado.php'	?>
    </div>
  </div>
</div>
</body>
</html>
