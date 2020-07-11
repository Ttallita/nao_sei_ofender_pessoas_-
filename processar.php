<?php  
    include 'database.php';

    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    
    if($tipo == 'calcado') {
        $cd_codigo = filter_input(INPUT_POST, 'cd_codigo', FILTER_SANITIZE_STRING);
        $nm_categoria = filter_input(INPUT_POST, 'nm_categoria', FILTER_SANITIZE_STRING);
        $cd_lote = filter_input(INPUT_POST, 'cd_lote', FILTER_SANITIZE_STRING);
        $cd_numeracao = filter_input(INPUT_POST, 'cd_numeracao', FILTER_SANITIZE_STRING);
        $cd_codigo_frn = filter_input(INPUT_POST, 'cd_codigo_frn', FILTER_SANITIZE_STRING);
        $cd_codigo_est = filter_input(INPUT_POST, 'cd_codigo_est', FILTER_SANITIZE_STRING);
        
        $descricao    =  filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        echo 'ID:'. $id; 
        
        if($id==NULL){
            $sql =" insert into calçado (codigo, categoria, lote, numeração, fornecedor, estoque) values('".$cd_codigo."','".$nm_categoria."', '".$cd_lote."', '".$cd_numeracao."', '".$cd_codigo_frn."', '".$cd_codigo_est."')";
            execute($sql);
            echo 'Inclusão';
        }else{
            $sql=" update calçado set  codigo= '".$cd_codigo."', categoria= '".$nm_categoria."', lote= '".$cd_lote."', numeração= '".$cd_numeracao."', fornecedor= '".$cd_codigo_frn."', estoque= '".$cd_codigo_est."' where codigo=".$id;
            echo $sql;
            execute($sql);
            echo 'Edição';
        }
        
        echo ' Dados recebidos ';
        echo ' Código:'. $cd_codigo; 
        echo ' Categoria:'. $nm_categoria;
        echo ' Lote:'. $cd_lote;
        echo ' Numeração:'. $cd_numeracao;
        echo ' Código Fornecedor:'. $cd_codigo_frn;
        echo ' Código estoque:'. $cd_codigo_est;
        exit;
    }

    if($tipo == 'ordemdepedido') {
        $cd_codigo = filter_input(INPUT_POST, 'cd_codigo', FILTER_SANITIZE_STRING);
        $cd_quantidade = filter_input(INPUT_POST, 'cd_quantidade', FILTER_SANITIZE_STRING);
        $nm_destinatario = filter_input(INPUT_POST, 'nm_destinatario', FILTER_SANITIZE_STRING);
        $nm_pedido_cancelado = filter_input(INPUT_POST, 'nm_pedido_cancelado', FILTER_SANITIZE_STRING);
        $nm_pedido_atrasado = filter_input(INPUT_POST, 'nm_pedido_atrasado', FILTER_SANITIZE_STRING);
        $cd_doca = filter_input(INPUT_POST, 'cd_doca', FILTER_SANITIZE_STRING);
        $cd_est = filter_input(INPUT_POST, 'cd_est', FILTER_SANITIZE_STRING);
        
        if($id==NULL){
            $sql =" insert into OrdemDePedido (Codigo, Quantidade, Destinatario, PedidoCancelado, PedidoAtrasado, Codigo_Doca, Codigo_Estoque) values('".$cd_codigo."','".$cd_quantidade."', '".$nm_destinatario."', '".$nm_pedido_cancelado."', '".$nm_pedido_atrasado."', '".$cd_doca."', '".$cd_est."')";
            echo $sql;
            execute($sql);
            echo 'Inclusão';
        }else{
            $sql=" update OrdemDePedido set  Codigo= '".$cd_codigo."', Quantidade= '".$cd_quantidade."', Destinatario= '".$nm_destinatario."', PedidoCancelado= '".$nm_pedido_cancelado."', PedidoAtrasado= '".$nm_pedido_atrasado."', Codigo_Doca= '".$cd_doca."', Codigo_Estoque= '".$cd_est."' where Codigo=".$id;
            echo 'Edição';
        }
        
        echo ' Dados recebidos ';
        echo ' Código:'. $cd_codigo;
        echo ' Quantidade:'. $nm_cnpj;
        echo ' Destinatário:'. $nm_telefone;
        echo ' Pedido cancelado:'. $nm_endereço;
        echo ' Pedido atrasado:'. $nm_faturamento;
        echo ' Doca:'. $nm_marca;
        echo ' Estoque:'. $nm_marca;
        exit;
    }
    
    if($tipo == 'fornecedor') {
        $cd_codigo = filter_input(INPUT_POST, 'cd_codigo', FILTER_SANITIZE_STRING);
        $nm_cnpj = filter_input(INPUT_POST, 'nm_cnpj', FILTER_SANITIZE_STRING);
        $nm_telefone = filter_input(INPUT_POST, 'nm_telefone', FILTER_SANITIZE_STRING);
        $nm_endereço = filter_input(INPUT_POST, 'nm_endereço', FILTER_SANITIZE_STRING);
        $nm_faturamento = filter_input(INPUT_POST, 'nm_faturamento', FILTER_SANITIZE_STRING);
        $nm_marca = filter_input(INPUT_POST, 'nm_marca', FILTER_SANITIZE_STRING);
        $nm_email = filter_input(INPUT_POST, 'nm_email', FILTER_SANITIZE_STRING);
        
        if($id==NULL){
            $sql =" insert into fornecedor (Codigo, CNPJ, Telefone, Endereço, Faturamento, Marca, Email) values('".$cd_codigo."','".$nm_cnpj."', '".$nm_telefone."', '".$nm_endereço."', '".$nm_faturamento."', '".$nm_marca."', '".$nm_email."')";
            echo $sql;
            execute($sql);
            echo 'Inclusão';
        }else{
            $sql=" update fornecedor set  Codigo= '".$cd_codigo."', CNPJ= '".$nm_cnpj."', Telefone= '".$nm_telefone."', Endereço= '".$nm_endereço."', Faturamento= '".$nm_faturamento."', Marca= '".$nm_marca."', Email= '".$nm_email."' where codigo=".$id;
            echo 'Edição';
        }
        
        echo ' Dados recebidos ';
        echo ' Código:'. $cd_codigo;
        echo ' Cnpj:'. $nm_cnpj;
        echo ' Telefone:'. $nm_telefone;
        echo ' Endereço:'. $nm_endereço;
        echo ' Faturamento:'. $nm_faturamento;
        echo ' Marca:'. $nm_marca;
        echo ' E-mail:'. $nm_email;
        exit;
    }
    
    if($tipo == 'doca') {
        $cd_codigo = filter_input(INPUT_POST, 'cd_codigo', FILTER_SANITIZE_STRING);
        $nm_disponibilidade = filter_input(INPUT_POST, 'nm_disponibilidade', FILTER_SANITIZE_STRING);
        
        if($id==NULL){
            $sql =" insert into doca (codigo, Disponibilidade) values('".$cd_codigo."','".$nm_disponibilidade."')";
            echo $sql;
            execute($sql);
            echo 'Inclusão';
        }else{
            $sql=" update doca set  codigo= '".$cd_codigo."', Disponibilidade= '".$nm_disponibilidade."' where codigo=".$id;
            echo 'Edição';
        }
        
        echo ' Dados recebidos ';
        echo ' Código:'. $cd_codigo;
        echo ' Disponibilidade:'. $nm_disponibilidade;
        exit;
    }
    
    if($tipo == 'estoque') {
        $cd_codigo = filter_input(INPUT_POST, 'cd_codigo', FILTER_SANITIZE_STRING);
        $nm_endereço = filter_input(INPUT_POST, 'nm_endereço', FILTER_SANITIZE_STRING);
        $nm_produto_com_avaria = filter_input(INPUT_POST, 'nm_produto_com_avaria', FILTER_SANITIZE_STRING);
        $vl_entrada = filter_input(INPUT_POST, 'vl_entrada', FILTER_SANITIZE_STRING);
        $vl_saida = filter_input(INPUT_POST, 'vl_saida', FILTER_SANITIZE_STRING);
        $cd_produto_contabilizado = filter_input(INPUT_POST, 'cd_produto_contabilizado', FILTER_SANITIZE_STRING);
        
        if($id==NULL){
            $sql =" insert into estoque (Codigo, Endereço, ProdutoComAvaria, ValidacaoEntrada, ValidacaoSaida, ProdutoContabilizado, QuantMax) values('".$cd_codigo."','".$nm_endereço."', '".$nm_produto_com_avaria."', '".$vl_entrada."', '".$vl_saida."', '".$cd_produto_contabilizado."', '".$cd_quantidade_maxima."')";
            echo $sql;
            execute($sql);
            echo 'Inclusão';
        }else{
            $sql=" update estoque set  Codigo= '".$cd_codigo."', Endereço= '".$nm_endereço."', ProdutoComAvaria= '".$nm_produto_com_avaria."', ValidacaoEntrada= '".$vl_entrada."', ValidacaoSaida= '".$vl_saida."', ProdutoContabilizado= '".$cd_produto_contabilizado."', QuantMax= '".$cd_quantidade_maxima."' where codigo=".$id;
            echo 'Edição';
        }
        
        echo ' Dados recebidos ';
        echo ' Código:'. $cd_codigo;
        echo ' Endereço:'. $nm_endereço;
        echo ' Produto com avaria:'. $nm_produto_com_avaria;
        echo ' Validação entrada:'. $vl_entrada;
        echo ' Validação saída:'. $vl_saida;
        echo ' Produto contabilizado:'. $cd_produto_contabilizado;
        exit;
    }
?>