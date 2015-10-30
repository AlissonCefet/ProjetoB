<?php

	function ValidaData($dat){
		try{
			$data = explode("/","$dat"); // fatia a string $dat em pedados, usando / como referência
			if((!array_key_exists(0, $data)) || (!array_key_exists(1, $data)) || (!array_key_exists(2, $data))) {
				return false;	
			}			
			$d = $data[0];
			$m = $data[1];
			$y = $data[2];

 	
			// verifica se a data é válida!
			// 1 = true (válida)
			// 0 = false (inválida)
			$res = checkdate($m,$d,$y);
			if ($res == 1){
		   	return true;
			} else {
		   	return false;
			}
		}catch(Exception $e){
			return false;
		}
	}
	
	function ConverteData($dat){
		$dat = implode("-",array_reverse(explode("/",$dat)));
		return $dat;	
	}
	
	function ValidaCampo($campo){
		if(empty($campo)) {
			return false;	
		}else{
			return true;		
		}	
	}
	
	
	function CadastraUsuario($nome, $senha, $email, $endereco, $numero, $estado, $cidade, $cep, $telefone, $celular, $cpf, $datanasc, $sexo) {
		$sql = "INSERT INTO USUARIO (	
		NOME,
		SENHA,
		EMAIL,
		ENDERECO,
		NUMERO,
		ESTADO,
		CIDADE,
		CEP,
		TELEFONE,
		CELULAR,
		CPF,
		DATA_NASCIMENTO,
		SEXO
		) VALUES ('$nome','$senha', '$email', '$endereco', '$numero', '$estado', '$cidade','$cep', '$telefone', '$celular', '$cpf', '$datanasc','$sexo')";
		mysql_query($sql) or die (mysql_error());
		if(mysql_affected_rows() > 0) {
			echo "Cliente Cadastrado com Sucesso";	
		} else {
			echo "Erro ao Cadastrar Cliente";	
		}
	}
	
	/*-----------------------------------
	| 			Editar de clientes         |
	-----------------------------------*/
	function EditarClientes($codigo, $nome, $endereco, $numero, $bairro, $cidade, $estado, $pais, $telefone, $celular, $cpf, $rg_rne, $referencia_comercial_1, $referencia_comercial_2, $referencia_comercial_3) {
		$sql = "UPDATE CLIENTES SET
		NOME = '$nome',
		ENDERECO = '$endereco',
		NUMERO = '$numero',
		BAIRRO = '$bairro',
		CIDADE = '$cidade',
		ESTADO = '$estado',
		PAIS = '$pais',
		TELEFONE = '$telefone',
		CELULAR = '$celular',
		CPF = '$cpf',
		RG_RNE = '$rg_rne',
		REFERENCIA_COMERCIAL_1 = '$referencia_comercial_1',
		REFERENCIA_COMERCIAL_2 = '$referencia_comercial_2',
		REFERENCIA_COMERCIAL_3 = '$referencia_comercial_3' WHERE CODIGO = $codigo ";
		mysql_query($sql);
			if(mysql_affected_rows() > 0) {
				echo "Cliente Alterado com Sucesso";	
			} else {
				echo "Erro ao Alterar Cliente";	
			}		
	}
	/*-----------------------------------
	| 			Excluir clientes           |
	-----------------------------------*/
	function ExcluirClientes($codigo) {
		$sql = "DELETE FROM CLIENTES WHERE CODIGO = $codigo";
		mysql_query($sql);
			if(mysql_affected_rows() > 0) {
				echo "Cliente Alterado com Sucesso";	
			} else {
				echo "Erro ao Alterar Cliente";	
			}		
	}
	/*-----------------------------------
	| 			Cadastro de Produtos       |
	-----------------------------------*/
	function CadastraProdutos($nome, $marca, $unidade, $preco, $tipo, $quantidade) {
		$slq = "INSERT INTO PRODUTOS (
		NOME,
		MARCA,
		UNIDADE,
		PRECO,
		TIPO,
		QUANTIDADE ) VALUES ('$nome', '$marca', '$unidade', $preco, '$tipo', $quantidade)";
		mysql_query($slq);
		if(mysql_affected_rows() > 0) {
			echo "Produto Cadastrado com Sucesso";	
		} else {
			echo "Erro ao Cadastrar Produto";	
		}	
	}
	/*-----------------------------------
	| 		  	Editar  Produtos           |
	-----------------------------------*/
	function EditarProdutos($codigo, $nome, $marca, $unidade, $preco, $tipo, $quantidade) {
		$sql = "UPDATE PRODUTOS SET 
		NOME = '$nome',
		MARCA = '$marca',
		UNIDADE = '$unidade',
		PRECO = $preco,
		TIPO = '$tipo',
		QUANTIDADE = $quantidade WHERE CODIGO = $codigo";
	}
?>
