<?php

include_once("servicios.php");
$queryResult = $db->query("SELECT * FROM personas WHERE idTipoPersona = 34");

?>
<div class="container">
	<h4>Lista de Clientes</h4>
  <br/>  
<table class="table table-bordered">
<tr>
  <th> Nombres </th>
  <th> Apellidos </th>
  <th> Correo </th>
   <th> Direccion </th>
   <th> Tipo Persona</th>
 </tr>

 <?php
 while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
	

            echo '<tr>';
            echo '<td>' . $row['nombres'] . '</td>';
            echo '<td>' . $row['apellidos'] . '</td>';
            echo '<td>' . $row['correo'] . '</td>';
            echo '<td>' . $row['direccion'] . '</td>';  
            echo '<td>' . getValorParametro($row["idTipoPersona"],$db). '</td>';        
            echo '</tr>';
       
    }

?>
</table>
</div>