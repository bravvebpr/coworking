<?php
//session_start();
//if ($_SESSION["usuario"] == "")
//    header("Location: login.php");
?>
<?php
$conexion = mysql_connect("localhost", "proyecto", "proyecto");
mysql_select_db("proyecto", $conexion);
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="lib/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function() {
                oTable = $('#example').dataTable({
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers"
                });
            });
        </script>
    </head>
    <body>
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
<div class="DataTables_sort_wrapper">e-mail</div>
</th>
<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
<div class="DataTables_sort_wrapper">Imagen</div>
</th>
<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 300px!important;">
<div class="DataTables_sort_wrapper">URL</div>
</th>
<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 300px!important;">
<div class="DataTables_sort_wrapper">Acciones</div>
</th>
</tr>
</thead>
<tbody role="alert" aria-live="polite" aria-relevant="all">
    <?php
    while ($fila = mysql_fetch_array($datos)) {
        ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['localidad']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['tlf']; ?></td>
            <td><?php echo $fila['direccion']; ?></td>
            <td><?php echo $fila['descripcion']; ?></td>
            <td><?php echo $fila['imagen']; ?></td>
            <td><?php echo $fila['url']; ?></td>
            <td>Editar Borrar</td>
        </tr>
    <?php } ?>
</tbody>
</table>
</body>
</html>
