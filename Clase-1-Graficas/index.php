<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <title>Documento</title>
</head>
<body>
<form id="graficar-form" style="text-align: center;">
    <label for="totales">Total de ventas mayor o igual a:</label>
    <input type="text" name="totales" id="totales" value="">
    <input type="submit" value="Graficar">
</form>
<figure class="highcharts-figure">
    <div id="chart-container"></div>
</figure>
<script src="ajax.js"></script>
</body>
</html>
