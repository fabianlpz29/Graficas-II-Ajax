$(document).ready(function() {
    // Captura el evento de cambio en el input
    $("#totales").on("input", function() {
        var valorTotales = $(this).val();

        // solicitud AJAX para obtener los datos de la gráfica
        $.ajax({
            url: "obtener_datos_grafica.php",
            method: "POST",
            data: { totales: valorTotales },
            dataType: "json",
            success: function(data) {
                // Configurar la gráfica
                var chart = Highcharts.chart('chart-container', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Gráfica de Ventas'
                    },
                    xAxis: {
                        categories: data.categories
                    },
                    yAxis: {
                        title: {
                            text: 'Ventas'
                        }
                    },
                    series: data.series
                });
            },
            error: function(xhr, status, error) {
                console.log("Error en la solicitud AJAX:", error);
            }
        });
    });
});
