<?php
	include ("conecta.php");
	include ("rotina.php");
	if(ValidaCampo($_POST['nome'])) {
		if(ValidaCampo($_POST['marca'])) {
				if(ValidaCampo($_POST['preco'])) {
					if(ValidaCampo($_POST['tipo'])) {
						if(ValidaCampo($_POST['quantidade'])) {
							CadastraProdutos(($_POST['nome']), ($_POST['marca']), ($_POST['preco']), ($_POST['tipo']), ($_POST['quantidade']));
						}else {echo "O campo Quantidade nao foi preenchido";}
					}else {echo "O campo Tipo nao foi preenchido";}
				}else {echo "O campo Preco nao foi preenchido";}
		}else {echo "O campo Marca nao foi preenchido";}
	}else {echo "O campo Nome nao foi preenchido";}
?>