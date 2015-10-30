<?php
	include ("conecta.php");
	include ("rotina.php");
	if (ValidaData(($_POST['datanasc']))) {
		$dat = implode("-",array_reverse(explode("/",($_POST['datanasc']))));
		echo $dat;
		if(ValidaCampo($_POST['nome'])) {
			if(ValidaCampo($_POST['senha'])) {
				if(ValidaCampo($_POST['email'])) {
					if(ValidaCampo($_POST['endereco'])) {
						if(ValidaCampo($_POST['numero'])) {
							if(ValidaCampo($_POST['estado'])) {	
								if(ValidaCampo($_POST['cidade'])) {
									if(ValidaCampo($_POST['cep'])) {
										if(ValidaCampo($_POST['telefone'])) {
											if(ValidaCampo($_POST['celular'])) {	
												if(ValidaCampo($_POST['cpf'])) {
													if(ValidaCampo($_POST['sexo'])) {
														echo "Parabens";
													}else {echo "O campo Sexo nao foi preenchido";}	
												}else {echo "O campo CPF nao foi preenchido";}
											}else {echo "O campo Celular nao foi preenchido";}
										}else {echo "O campo Telefone nao foi preenchido";}	
									}else {echo "O campo CEP nao foi preenchido";}	
								}else {echo "O campo Cidade nao foi preenchido";}
							}else {echo "O campo Estado nao foi preenchido";}	
						}else {echo "O campo Numero nao foi preenchido";}
					}else {echo "O campo Endereco nao foi preenchido";}
				}else {echo "O campo Email nao foi preenchido";}
			}else {echo "O campo Senha nao foi preenchido";}
		}else { echo "O campo Nome nao foi preenchido";}
		//CadastraUsuario(($_POST['nome']), ($_POST['senha']), ($_POST['email']), ($_POST['endereco']), ($_POST['numero']), ($_POST['estado']), ($_POST['cidade']), ($_POST['cep']), ($_POST['telefone']), ($_POST['celular']), ($_POST['cpf']), $dat,($_POST['sexo']));
	}else {echo "Data Invalida";}
	
?>
