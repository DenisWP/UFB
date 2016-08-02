<?php

	/* O Objetivo desta página é destruir a sessão do administrator, para que o usuário 
		não consiga acessar a área administrativa digitando o endereço da página no navegador*/
	session_start();
	session_destroy();
	header("Location: administrator.php")
?>