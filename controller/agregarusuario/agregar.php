<?php 
			
	include_once("../../servicios.php");
	include_once("../../model/usuario.php");
		

	$p=new Usuario();
	$params=$_POST;

	$p->create($params);

	
	 header("location:../../index.php");
		
 ?>