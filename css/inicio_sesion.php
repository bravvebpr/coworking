<?php

$conexion = mysql_connect ("db491791244.db.1and1.com","dbo491791244","Anab5210cetelem");
    mysql_select_db("db491791244",$conexion);
    
   $v_ses=mysql_query("SELECT nombre, clave FROM usuarios WHERE nombre='{$_POST['usuario']}' and clave='{$_POST['password']}'");
   
  echo mysql_error();
  $i_usuario=mysql_fetch_array($v_ses);
   if($i_usuario!=""){
       session_start();
       $_SESSION["usuario"]= $i_usuario['nombre'];;
       header("Location: ../listado.php");
   }
   else
      header("Location: ../login.php?er=1");
?>
