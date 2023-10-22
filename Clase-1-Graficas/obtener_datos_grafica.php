<?php
include './conexion.php';

if (isset($_POST['totales'])) {
    $valorTotales = $_POST['totales'];

    // consulta SQL 
    $consulta = "SELECT SUM(venta) as venta, YEAR(fecha) as year FROM detalle_fac
                INNER JOIN encabezado_fac ON detalle_fac.codigo = encabezado_fac.codigo
                GROUP BY year";

    $resultado = mysqli_query($conexion, $consulta);

    $data = array(
        'series' => array()
    );
    while ($row = mysqli_fetch_assoc($resultado)) {
        if ((int)$row['venta'] >= (int)$valorTotales) {
            $data['series'][] = array(
                'name' => $row['year'],
                'data' => array((int)$row['venta'])
            );
        }
    }

    // Devuelve los datos como JSON
    echo json_encode($data);
}
?>
