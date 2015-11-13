
<?php
	
	require('lib/page.php');
	require('lib/header.php');
	require('lib/menu.php');
	require('lib/content.php');
	require('lib/foot.php');
	
	define('LAYOUT', 
		'<!DOCTYPE html>
		<html>
		<head>
			<style type="text/css">');
	$css=file_get_contents('css/estilo.css');

	$links=array(
				'INICIO'=>'/',
				'Noticias'=>'/',
				'Pc'=>'/',
				'Esports'=>'/',
				'Quienes somos'=>'/'
			);
	define('logo', 'img/msi.png');

	$p1=new page($css, logo, 'Pagina de prueba', $links, 'Titulo de seccion', 'Articulo muy interesante Articulo muy interesante
		Articulo muy interesanteArticulo muy interesanteArticulo muy interesanteArticulo muy interesante
		Articulo muy interesanteArticulo muy interesanteArticulo muy interesanteArticulo muy interesante', 'Por TittoFr3ddy');
	//print_r($p1);
	$p1->show();
?>
