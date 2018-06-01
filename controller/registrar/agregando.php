<?php 

	include_once("../../model/cliente.php");
	$p=new Persona();
	$params=$_POST;
	$p->create($params);
	 header("location:../../index.php?pag=7");
		
 ?>