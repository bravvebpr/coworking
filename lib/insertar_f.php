<?php
if($_FILES ['uploadImage'][ 'size' ]){

$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad = "";
for($i=0;$i<12;$i++) {
$cad .= substr($str,rand(0,62),1);
}
// Fin de la creacion de la cadena aletoria
$tamano = $_FILES ['uploadImage'][ 'size' ]; // Leemos el tamaño del fichero
$tamaño_max="50000000000"; // Tamaño maximo permitido
if( $tamano < $tamaño_max){ // Comprovamos el tamaño
$destino = 'img' ; // Carpeta donde se guardata
$sep=explode('image/',$_FILES['uploadImage']["type"]); // Separamos image/
$tipo=$sep[1]; // Optenemos el tipo de imagen que es
if($tipo == "gif" || $tipo == "jpeg" || $tipo == "png"){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen
move_uploaded_file ( $_FILES ['uploadImage'][ 'tmp_name' ], $destino . '/' .$cad.'.'.$tipo);  // Subimos el archivo
}
}
$nom_img=$destino . '/' .$cad.'.'.$tipo;

}

else{

$nom_img="no hay imagen";

}
$conexion = mysql_connect("db496705092.db.1and1.com", "dbo496705092", "Anab5210");
mysql_select_db("db496705092", $conexion);

mysql_query("INSERT INTO `centros`(`localidad`, `nombre`, `tlf`, `direccion`, `descripcion`, `imagen`, `url`)
        VALUES('{$_POST['localidad']}','{$_POST['nombre']}','{$_POST['tlf']}','{$_POST['direccion']}','{$_POST['descripcion']}','$nom_img','{$_POST['url']}')");

$error=  mysql_error();
        mysql_close($conexion);
if($error!="")
    echo $error;
else
    header("Location: ../listado.php");
?>
