<?php
//	session_start();
//	if ($_SESSION["usuario"]=="")
//		header("Location: login.php");
        
?>
<?php
    $conexion = mysql_connect ("db496705092.db.1and1.com","dbo496705092","Anab5210");
    mysql_select_db("db496705092",$conexion);
    $datos=mysql_query("SELECT * FROM centros");
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="�viewport�" content="�width=device-width," initial-scale="1?">
        <title>eShow</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="css/demo_page.css">
        <link rel="stylesheet" type="text/css" href="css/demo_table_jui.css">
        <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.4.custom.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="lib/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function() {
            oTable = $('#example').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            });
        } );
        </script>
    </head>
<body>
    <header style="width: 1336px; margin: 0 auto;">
        <div class="logo" style="margin-bottom: 20px;"><img src="img/logo.png"></div>
        <?php
               // echo 'Usuario: '.$_SESSION["usuario"];
        ?>
        <a href="lib/cerrar_sesion" class="cerrar_sesion">Cerrar sesion</a>
    </header>
<table cellpadding="0" cellspacing="0" border="0" class="display dataTable" id="example" aria-describedby="example_info">
	<thead>
		<tr role="row">
                    <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                        <div class="DataTables_sort_wrapper">Localidad</div>
                    </th>
                    <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        <div class="DataTables_sort_wrapper">Direcci&oacute;n</div>
                    </th>
                    <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                        <div class="DataTables_sort_wrapper">Imagen</div>
                    </th>
                    <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >
                        <div class="DataTables_sort_wrapper">Acciones</div>
                    </th>
                </tr>
	</thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        <?php
          	  while ($fila = mysql_fetch_array($datos)){
          ?>
            <tr>
                <td><?php echo $fila['localidad']; ?></td>
                <td><?php echo $fila['direccion']; ?></td>
                <td><?php echo $fila['imagen']; ?></td>
                <td>editar borrar</td>
            </tr>
        <?php } ?>
        </tbody>
</table>
</body>
</html>
