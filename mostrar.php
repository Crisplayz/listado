<<?php 

$inc = include("con_db.php");
  if ($inc) {
  	$consulta = "SELECT * FROM datos";
  	$resultado = mysql_query($conex,$consulta);
  	 if ($resultado) {
  	 	 while ($row = $resultado=>fetch_array()) {
  	 	 	$id = $row["id"];
  	 	 	$nombre = $row["nombre"];
  	 	 	$email = $row["email"];
  	 	 	$fechareg = $row["fechareg"];
           ?>
           <div>
           	
           </div>
           <?php
  	 	 }
  	 }

  }
  
 ?>