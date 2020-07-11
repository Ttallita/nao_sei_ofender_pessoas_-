<head>
    <title>entrada de dados</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" lang="javascript">
        function validar(){
            if((document.getElementById('cd_codigo').value=='')||
			(document.getElementById('nm_disponibilidade').value=='')){
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
    $dsDisponibilidade="";
	if($id != NULL){
        $sql="select * from doca where codigo=".$id;
        $resultado= execute_query($sql);
        foreach ($resultado as $demanda):
            $dsCodigo=$demanda['codigo'];
            $dsDisponibilidade=$demanda['Disponibilidade'];
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
			<h3 class="py-5 text-center">Doca</h3>
			<form method="post" action="processar.php">
				<input name="tipo" type="hidden" id="tipo" value="doca" />
				<input name="id" type="hidden" id="id" value="<?php echo $id?>"/>
				<table>
					<tr>
						<td >Código </td><td><input type="number" name="cd_codigo" id="cd_codigo" value="<?php echo $dsCodigo?>"/></td>
					</tr>
					<tr>
						<td>Disponibilidade </td><td><input type="text" name="nm_disponibilidade" id="nm_disponibilidade" value="<?php echo $dsDisponibilidade?>"/></td>
					</tr>
				</table>
				<br/>
			<input class="btn btn-primary" type="submit" name="btn_login" id="btn_login" value="Registrar" onclick="return validar();">
			</form>
		</div>
		<div class="col-sm">
		<?php	include "listardoca.php";	?>
		</div>
	</div>
	</div>
</body>
