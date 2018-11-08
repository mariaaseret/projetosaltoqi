<style type="text/css">

    input[type=text] {
        padding:5px; 
        border:2px solid #ccc; 
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }

    input[type=text]:focus {
        border-color:#333;
    }

    input[type=submit] {
        padding:5px 15px; 
        background:#ccc; 
        border:0 none;
        cursor:pointer;
        -webkit-border-radius: 5px;
        border-radius: 5px; 
    }



</style>
<?php
//exibe o contador diretamente do banco

$conn = new mysqli('192.168.10.12', 'crashfix', 'd&U2Opi#=2a8', 'crashfix') 
    or die ('Cannot connect to db');

//PARA O GRÁFICO DE PIZZA TOTAL
$query1="SELECT count(id) AS a FROM crashfix.tbl_crashreport WHERE project_id = 1";
$result1=mysqli_query($conn,$query1);
if($result1)
{
    while($row=mysqli_fetch_assoc($result1))
    {
        $a = $row['a'];
    }     
}


$query2="SELECT count(id) AS b FROM crashfix.tbl_crashreport WHERE project_id = 2";
$result2=mysqli_query($conn,$query2);
if($result2)
{
    while($row=mysqli_fetch_assoc($result2))
    {
        $b = $row['b'];

    }     
}


$query3='SELECT count(id) AS c FROM crashfix.tbl_crashreport WHERE project_id = 4';
$result3=mysqli_query($conn,$query3);
if($result3)
{
    while($row=mysqli_fetch_assoc($result3))
    {
        $c = $row['c'];
    }     
}
$soma = $a + $b + $c;
$porcentagema = (100*$a)/$soma;
$porcentagemb = (100*$b)/$soma;
$porcentagemc = (100*$c)/$soma;




//PARA O GRÁFICO MENSAL


$anoselecionado = 2018;
$messelecionado = 01;
$anoselecionado2 = 2018;
$messelecionado2 = 01;




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Trasitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="txt/html; charset=utf-8" />
        <title>Gráficos e Relatórios Crashfix</title>
        <link rel="shortcut icon" href="https://www.altoqi.com.br/wp-content/uploads/2017/10/cropped-favicon-01.png" type="image/x-icon" 

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
                ['Eberick: <?php echo $a?>', <?php echo $porcentagema?>],
                ['Qibuilder: <?php echo $b?>',  <?php echo $porcentagemb?>],
                ['Qicad: <?php echo $c?>',  <?php echo $porcentagemc?>]
            ]);


            var options = {
                colors: ['#335E52', '#2CA871', '#6FEDC0'],
                title: 'Número total de crashes por Projeto ',
                is3D: true,
            };

            // Instantiate and draw the chart.
            var chart = new google.visualization.PieChart(document.getElementById('myPieChart'));
            chart.draw(data, options);
        }
    </script>


    </head>



<body>
    <table class="columns">
        <tr>
            <td>
                <p style="font-family: 'Lato', Helvetica, Arial, sans-serif; "><b>Número total de crashes por mês e ano</b></p>

                <form  method="post">
                    <select name="SelecaoMes">
                        <option value="00">Mês</option>
                        <option value="01">Janeiro</option>
                        <option value="02">Fevereiro</option>
                        <option value="03">Março</option>
                        <option value="04">Abril</option>
                        <option value="05">Maio</option>
                        <option value="06">Junho</option>
                        <option value="07">Julho</option>
                        <option value="08">Agosto</option>
                        <option value="09">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select>
                    <select name="SelecaoAno">
                        <option value="selecione">Ano</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                    </select>
                    <input type="submit" name="submit" value="Selecionar"/>
                </form>

                <?php

    if(isset($_POST['submit'])) {
        $anoselecionado = $_POST['SelecaoAno'];
        $messelecionado = $_POST['SelecaoMes'];  }// VARIAVEL SELECIONADA


                 //PARA O GRÁFICO MENSAL
                 $query4="SELECT count(id) as d FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = '$messelecionado' && year(FROM_UNIXTIME(date_created)) = '$anoselecionado'";
                 $result4=mysqli_query($conn,$query4);
                 $query5="SELECT count(id) as e FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = '$messelecionado' && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' &&  project_id = 1";
                 $result5=mysqli_query($conn,$query5);
                 $query6="SELECT count(id) as f FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = '$messelecionado' && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' &&  project_id = 2";
                 $result6=mysqli_query($conn,$query6);
                 $query7="SELECT count(id) as g FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = '$messelecionado' && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' &&  project_id = 4";
                 $result7=mysqli_query($conn,$query7);


                ?>

                <table>

                    <tr>

                        <?php

                        if($result4)
                        {
                            while($row=mysqli_fetch_assoc($result4))
                            {
                                echo '<td>';
                                echo "Mês selecionado: ";
                                echo '</td>';
                                echo '<td>';
                                echo $messelecionado;
                                echo '</td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td>';
                                echo "Ano selecionado: ";
                                echo '</td>';
                                echo '<td>';
                                echo $anoselecionado;
                                echo '</td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td>';
                                echo 'Total de crashes: ';
                                echo '</td>';
                                echo '<td>';
                                echo $row['d'];
                                echo '</td>';
                                echo '</tr>';

                            }     
                        }
                        $eberick = 1 ;
                        $qibuilder = 1 ;
                        $qicad = 1 ;

                        if($result5)
                        {
                            while($row=mysqli_fetch_assoc($result5))
                            {
                                echo '<tr>';
                                echo '<td>';
                                echo 'Crashes do Eberick: ';
                                echo '</td>';
                                echo '<td>';
                                $eberick = $row['e'];
                                echo $row['e'];
                                echo '</td>';
                                echo '</tr>';

                            }     
                        }
                        if($result6)
                        {
                            while($row=mysqli_fetch_assoc($result6))
                            {
                                echo '<tr>';
                                echo '<td>';
                                echo 'Crashes do QiBuilder: ';
                                echo '</td>';
                                echo '<td>';
                                $qibuilder = $row['f'];
                                echo $row['f'];
                                echo '</td>';
                                echo '</tr>';
                            }     
                        }
                        if($result7)
                        {
                            while($row=mysqli_fetch_assoc($result7))
                            {
                                echo '<tr>';
                                echo '<td>';
                                echo 'Crashes do QiCad: ';
                                echo '</td>';
                                echo '<td>';
                                $qicad = $row['g'];
                                echo $row['g'];
                                echo '</td>';
                                echo '</tr>';
                                echo '</table>';
                            }     
                        }

                        echo '<br/>';
                        $soma2 = $eberick + $qibuilder + $qicad;


                        if($eberick != 0){
                            $porcentagemeberick = (100*$eberick)/$soma2;
                        }else{
                            $porcentagemeberick = 0;
                        }

                        if($qibuilder != 0){
                            $porcentagemqibuilder = (100*$qibuilder)/$soma2;    
                        }else {
                            $porcentagemqibuilder = 0;
                        }

                        if($qicad != 0) {
                            $porcentagemqicad = (100*$qicad)/$soma2;    
                        }else{
                            $porcentagemqicad = 0;
                        }



                        ?>

                        <script type="text/javascript">
                            google.charts.load('current', {packages: ['corechart']});
                            google.charts.setOnLoadCallback(drawChart2);

                            function drawChart2() {
                                // Define the chart to be drawn.
                                var data = new google.visualization.DataTable();
                                data.addColumn('string', 'Element');
                                data.addColumn('number', 'Percentage');
                                data.addRows([
                                    ['Eberick: <?php echo $eberick?>', <?php echo $porcentagemeberick?>],
                                    ['Qibuilder: <?php echo $qibuilder?>',  <?php echo $porcentagemqibuilder?>],
                                    ['Qicad: <?php echo $qicad?>',  <?php echo $porcentagemqicad?>]
                                ]);


                                var options = {
                                    colors: ['#335E52', '#2CA871', '#6FEDC0'],
                                    title: 'Número mensal de crashes por Projeto',
                                    is3D: true,
                                };

                                // Instantiate and draw the chart.
                                var chart = new google.visualization.PieChart(document.getElementById('myPieChart2'));
                                chart.draw(data, options);
                            }
                        </script>



                        <br/>


                        <?php
    if(($eberick + $qibuilder + $qicad != 0)  ){
                        ?>
                        <div id="myPieChart2" style="border: 1px;   height: 200px; width: 500px;"></div></td>
                <?php
    }else{
                ?>
                <div> Resultado = zero </div></td>
            <?php
    }
            ?>

            <td><div id="myPieChart" style="border: 1px;   height: 200px; width: 500px;"></div></td>
        </tr>

    </table>
    <?php

    $result10 = $conn->query("select * from tbl_appversion where project_id = 1 order by id");

    $id10 =0;
    echo "<html>";
    echo "<body>";
    echo "<hr>";
    echo "<p style='font-size:18px; font-family: 'Lato', Helvetica, Arial, sans-serif;'><b>Eberick - Número de crashes por mês, ano e versão</b></p>";
    echo "<form  method='post'>";
    echo "<select name='versao10'>";
    while (($row = $result10->fetch_assoc())) {
        unset($id10);
        $id10 = $row['id'];
        $versao10 = $row['version'];
        echo '<option value="'.$id10.'">'.$versao10.'</option>';
    }
    echo "</select>";

    ?>
    <select name="SelecaoMes10">
        <option value="00">Mês</option>
        <option value="01">Janeiro</option>
        <option value="02">Fevereiro</option>
        <option value="03">Março</option>
        <option value="04">Abril</option>
        <option value="05">Maio</option>
        <option value="06">Junho</option>
        <option value="07">Julho</option>
        <option value="08">Agosto</option>
        <option value="09">Setembro</option>
        <option value="10">Outubro</option>
        <option value="11">Novembro</option>
        <option value="12">Dezembro</option>
    </select>
    <select name="SelecaoAno10">
        <option value="selecione">Ano</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
    </select>


    <input type="submit" name="submit10" value="Selecionar"/>
    </form>

<?php

$messelecionado10 = 01;
$anoselecionado10 = 2017;
$appversion10 = 10;

if(isset($_POST['submit10'])) {
    $anoselecionado10 = $_POST['SelecaoAno10'];
    $messelecionado10 = $_POST['SelecaoMes10'];
    $appversion10 = $_POST['versao10'];   


}

$query10="SELECT count(*) as l FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = '$messelecionado10' && year(FROM_UNIXTIME(date_created)) = '$anoselecionado10' && appversion_id = '$appversion10' && project_id = 1";
$result10=mysqli_query($conn,$query10);

?>
<table>
    <tr>
        <?php


        if($result10)
        {
            while($row=mysqli_fetch_assoc($result10))
            {
                echo '<td>';
                echo "Mês selecionado: ";
                echo '</td>';
                echo '<td>';
                echo $messelecionado10;
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo "Ano selecionado: ";
                echo '</td>';
                echo '<td>';
                echo $anoselecionado10;
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo 'Total de crashes: ';
                echo '</td>';
                echo '<td>';
                echo $row['l'];
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo 'app version: ';
                echo '</td>';
                echo '<td>';
                echo $appversion10;
                echo '</td>';
                echo '</tr>';
            }     
        }



        ?>
    </tr>



</table>

<hr>

<?php
$result11 = $conn->query("select * from tbl_appversion where project_id = 2 order by id");

$id11 =0;
echo "<html>";
echo "<body>";
echo "<p style='font-size:18px; font-family: 'Lato', Helvetica, Arial, sans-serif;'><b>Qibulder - Número de crashes por mês, ano e versão</b></p>";
echo "<form  method='post'>";
echo "<select name='versao11'>";
while (($row = $result11->fetch_assoc())) {
    unset($id11);
    $id11 = $row['id'];
    $versao11 = $row['version'];
    echo '<option value="'.$id11.'">'.$versao11.'</option>';
}
echo "</select>";

?>
<select name="SelecaoMes11">
    <option value="00">Mês</option>
    <option value="01">Janeiro</option>
    <option value="02">Fevereiro</option>
    <option value="03">Março</option>
    <option value="04">Abril</option>
    <option value="05">Maio</option>
    <option value="06">Junho</option>
    <option value="07">Julho</option>
    <option value="08">Agosto</option>
    <option value="09">Setembro</option>
    <option value="10">Outubro</option>
    <option value="11">Novembro</option>
    <option value="12">Dezembro</option>
</select>
<select name="SelecaoAno11">
    <option value="selecione">Ano</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
</select>


<input type="submit" name="submit11" value="Selecionar"/>
</form>
<?php

$messelecionado11 = 01;
$anoselecionado11 = 2017;
$appversion11 = 10;

if(isset($_POST['submit11'])) {
    $anoselecionado11 = $_POST['SelecaoAno11'];
    $messelecionado11 = $_POST['SelecaoMes11'];
    $appversion11 = $_POST['versao11'];   


}

$query11="SELECT count(*) as o FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = '$messelecionado10' && year(FROM_UNIXTIME(date_created)) = '$anoselecionado10' && appversion_id = '$appversion10' && project_id = 4";
$result11=mysqli_query($conn,$query11);

?>
<table>
    <tr>
        <?php


        if($result11)
        {
            while($row=mysqli_fetch_assoc($result11))
            {
                echo '<td>';
                echo "Mês selecionado: ";
                echo '</td>';
                echo '<td>';
                echo $messelecionado11;
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo "Ano selecionado: ";
                echo '</td>';
                echo '<td>';
                echo $anoselecionado11;
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo 'Total de crashes: ';
                echo '</td>';
                echo '<td>';
                echo $row['o'];
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo 'app version: ';
                echo '</td>';
                echo '<td>';
                echo $appversion11;
                echo '</td>';
                echo '</tr>';
            }     
        }



        ?>
    </tr>



</table>


<hr>
<?php

$result9 = $conn->query("select * from tbl_appversion where project_id = 4 order by id");

$id9 =0;
echo "<html>";
echo "<body>";
echo "<p style='font-size:18px; font-family: 'Lato', Helvetica, Arial, sans-serif;'><b>Qicad - Número de crashes por mês, ano e versão</b></p>";
echo "<form  method='post'>";
echo "<select name='versao9'>";
while (($row = $result9->fetch_assoc())) {
    unset($id9);
    $id9 = $row['id'];
    $versao9 = $row['version'];
    echo '<option value="'.$id9.'">'.$versao9.'</option>';
}
echo "</select>";

?>
<select name="SelecaoMes9">
    <option value="00">Mês</option>
    <option value="01">Janeiro</option>
    <option value="02">Fevereiro</option>
    <option value="03">Março</option>
    <option value="04">Abril</option>
    <option value="05">Maio</option>
    <option value="06">Junho</option>
    <option value="07">Julho</option>
    <option value="08">Agosto</option>
    <option value="09">Setembro</option>
    <option value="10">Outubro</option>
    <option value="11">Novembro</option>
    <option value="12">Dezembro</option>
</select>
<select name="SelecaoAno9">
    <option value="selecione">Ano</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
</select>


<input type="submit" name="submit9" value="Selecionar"/>
</form>
<?php

$messelecionado9 = 01;
$anoselecionado9 = 2017;
$appversion9 = 10;

if(isset($_POST['submit9'])) {
    $anoselecionado9 = $_POST['SelecaoAno9'];
    $messelecionado9 = $_POST['SelecaoMes9'];
    $appversion9 = $_POST['versao9'];   


}

$query9="SELECT count(*) as k FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = '$messelecionado9' && year(FROM_UNIXTIME(date_created)) = '$anoselecionado9' && appversion_id = '$appversion9' && project_id = 4";
$result9=mysqli_query($conn,$query9);

?>
<table>
    <tr>
        <?php


        if($result9)
        {
            while($row=mysqli_fetch_assoc($result9))
            {
                echo '<td>';
                echo "Mês selecionado: ";
                echo '</td>';
                echo '<td>';
                echo $messelecionado9;
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo "Ano selecionado: ";
                echo '</td>';
                echo '<td>';
                echo $anoselecionado9;
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo 'Total de crashes: ';
                echo '</td>';
                echo '<td>';
                echo $row['k'];
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo 'app version: ';
                echo '</td>';
                echo '<td>';
                echo $appversion9;
                echo '</td>';
                echo '</tr>';
            }     
        }



        ?>
    </tr>

    


</table>

<hr>




</body>
</html>