<?php

$atual = (isset($_GET['page'])) ? $_GET['page'] : 'home';
$pasta = 'pages';

if (substr_count($atual, '/') > 0) {
	$atual  = explode('/', $atual);
    $pagina = (file_exists("{$pasta}/" . $atual[0] . '.php')) ? $atual[0] : 'erro';
	$id     = $atual[1];
	$busca  = @$atual[2];	
} else {
	$pagina = (file_exists("{$pasta}/" . $atual . '.php')) ? $atual : 'erro';
	$id     = 0;
	$frame  = 0;
}

$siteUrl = $_SERVER['SERVER_NAME'];

?>