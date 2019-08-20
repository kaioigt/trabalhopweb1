<?php

// Importar funcoes e variaveis
require_once ( "../validar/variaveis.php" );
require_once ( "../validar/funcoes.php" );

// Validar se o usuário chegou a página via formulário
// e limpar post
formEnviado($_POST);

// 
gerarMensagensErro($dados);

foreach ($mensagem_erro as $key => $value) {

	if ($mensagem_erro["prato_principal_vazio"] != "")  {
		echo $value;
		echo "<script>window.location ='../index.php';</script>";

		}
}

foreach ($dados as $variavel => $valor) {
	echo "<br/>".$variavel.": ".$valor;
}
?>