<?php
session_start();
if ($_SESSION["usuario"] == "")
    header("Location: login.php");
?>
<?php
$conexion = mysql_connect("db496705092.db.1and1.com", "dbo496705092", "Anab5210");
mysql_select_db("db496705092", $conexion);
$datos = mysql_query("SELECT * FROM centros");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>co-working.me</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estilos_panel.css">
        <link rel="stylesheet" type="text/css" href="css/demo_page.css">
        <link rel="stylesheet" type="text/css" href="css/demo_table_jui.css">
        <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.4.custom.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="lib/jquery.dataTables.js"></script>
        <script src="lib/panel_gest.js"></script>
        <script>
            $(document).ready(function() {
                oTable = $('#example').dataTable({
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers"
                });
            });
        </script>
        <style>
            #draggable {position: absolute;z-index: 1000;}
        </style>
        <script>
            $(function() {
              $( "#draggable" ).draggable();
            });
        </script>
    </head>
    <body style="background: #F34D25;">
        <div id="draggable" style="margin-left: 27%;">
            
        </div>
        <header style="text-align: center;">
            <img src="img/header.png" style="margin: 0 auto;"><input class="btn_az" style="float: right;margin-top: 37px;margin-right: 37px;" type="button" id="add_fila" value="+ Crear centro" onclick="pop_up_add();">
            <a href="lib/cerrar_sesion.php" style="float: left;">Cerrar sesion</a>
        </header>
        <table cellpadding="0" cellspacing="0" border="0" class="display dataTable" id="example" aria-describedby="example_info">
            <thead>
                <tr role="row">
                    <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
            <div class="DataTables_sort_wrapper">ID</div>
        </th>
        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
        <div class="DataTables_sort_wrapper">Localidad</div>
    </th>
    <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
    <div class="DataTables_sort_wrapper">Nombre</div>
</th>
<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >
<div class="DataTables_sort_wrapper">Telefono</div>
</th>
<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
<div class="DataTables_sort_wrapper">Direccion</div>
</th>
<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
<div class="DataTables_sort_wrapper">Descripcion</div>
</th>
<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
<div class="DataTables_sort_wrapper">Imagen</div>
</th>
<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
<div class="DataTables_sort_wrapper">URL</div>
</th>
<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
<div class="DataTables_sort_wrapper">Acciones</div>
</th>
</tr>
</thead>
<tbody role="alert" aria-live="polite" aria-relevant="all">
    <?php
    while ($fila = mysql_fetch_array($datos)) {
        ?>
        <tr id="<?php echo $fila['id']; ?>">
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['localidad']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['tlf']; ?></td>
            <td><?php echo $fila['direccion']; ?></td>
            <td><?php echo $fila['descripcion']; ?></td>
            <td><img src="lib/<?php echo $fila['imagen']; ?>" style="width: 195px;height: 115px;"></td>
            <td><a href="<?php echo $fila['url']; ?>"><?php echo $fila['url']; ?></a></td>
            <td>
                <a href="#" onclick="pop_up_edt(<?php echo $fila['id']; ?>);"><img src="img/edit.png" style="margin-right: 20px;"></a>
                <a href="lib/borrar_f.php?id=<?php echo $fila['id']; ?>"><img src="img/delete.png"></a></td>
        </tr>
        
    <?php }mysql_close($conexion);  ?>
</tbody>
</table>
</body>
</html>
