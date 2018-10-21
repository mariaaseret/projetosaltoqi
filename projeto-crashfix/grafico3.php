<?php
$servername = "192.168.10.12";
$username = "crashfix";
$password = "d&U2Opi#=2a8";



//$result = mysqli_query($sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Trasitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="txt/html; charset=utf-8" />
        <title>GRAFICO 3</title>

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
            google.charts.load('current', {packages: ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                // Define the chart to be drawn.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Element');
                data.addColumn('number', 'Percentage');
                data.addRows([
                    ['16', 0.78],
                    ['22', 0.21],
                    ['20', 0.01]
                ]);

                // Instantiate and draw the chart.
                var chart = new google.visualization.PieChart(document.getElementById('myPieChart'));
                chart.draw(data, null);
            }
        </script>

    </head>

    <body>
        <!-- Identify where the chart should be drawn. -->
        <div id="myPieChart"/>
    </body>
</html>