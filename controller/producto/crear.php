<?php 
include_once("../../model/producto.php");
  $p=new Producto();
  $params=$_POST;
  $p->create($params);
  header("location:../../index.php?pag=2");
