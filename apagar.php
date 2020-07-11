<?php
    include 'database.php';
	$tipo	= filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_STRING);
	$id		= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
	if($tipo=='calcado'){
		echo 'dados recebidos';
		$sql="DELETE from calçado where codigo=".$id;
		execute($sql);
		echo 'id calcado:'.$id;
	}
	if($tipo=='doca'){
		echo 'dados recebidos';
		$sql="DELETE from doca where codigo=".$id;
		execute($sql);
		echo 'id doca:'.$id;
	}
	if($tipo=='estoque'){
		echo 'dados recebidos';
		$sql="DELETE from estoque where codigo=".$id;
		execute($sql);
		echo 'id estoque:'.$id;
	}
	if($tipo=='fornecedor'){
		echo 'dados recebidos';
		$sql="DELETE from fornecedor where codigo=".$id;
		execute($sql);
		echo 'id fornecedor:'.$id;
	}
	if($tipo=='ordemdepedido'){
		echo 'dados recebidos';
		$sql="DELETE from ordemdepedido where codigo=".$id;
		execute($sql);
		echo 'id ordemdepedido:'.$id;
	}
	echo 'registro excluido com sucesso';
	exit;
?>