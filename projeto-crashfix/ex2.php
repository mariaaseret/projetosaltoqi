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
echo 'osis';
$mes = 03;
$ano = 2018;
$query4="SELECT count(id) as d FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = '$mes' && year(FROM_UNIXTIME(date_created)) = '$ano'";
$result4=mysqli_query($conn,$query4);
echo '<br/>';
echo 'aqui galera:';
if($result4)
{
    while($row=mysqli_fetch_assoc($result4))
    {
        echo $row['d'];
    }     
}
echo '<br/>';





echo date('m/d/Y H:i:s', 1507047517);

$valor = '1.507.047.517';
$valor = str_replace("." , "" , $valor );
echo $valor;
$anoselecionado = 2018;
$messelecionado = 01;
$anoselecionado2 = 2018;
$messelecionado2 = 01;




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Trasitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="txt/html; charset=utf-8" />
        <title>Gráficos Crashfix</title>

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
        <p style="font-family: 'Lato', Helvetica, Arial, sans-serif; "><b>Número total de crashes por mês e ano</b></p>

        <form  method="post">
            <select name="SelecaoMes">
                <option value="00">Mêss</option>
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
                <option value="2018">2019</option>
            </select>
            <input type="submit" name="submit" value="Selecionar" />
        </form>

        <?php

    if(isset($_POST['submit'])) {
        $anoselecionado = $_POST['SelecaoAno'];
        $messelecionado = $_POST['SelecaoMes'];  }// VARIAVEL SELECIONADA


                     //PARA O GRÁFICO MENSAL
                     $query4="SELECT count(id) as d FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = '$messelecionado' && year(FROM_UNIXTIME(date_created)) = '$anoselecionado'";
                     $result4=mysqli_query($conn,$query4);

                     if($result4)
                     {
                         while($row=mysqli_fetch_assoc($result4))
                         {
                             echo "Mês selecionado: " .$messelecionado;
                             echo '<br/>';
                             echo "Ano selecionado: " .$anoselecionado;
                             echo '<br/>';
                             echo 'Total de crashes: ';
                             echo $row['d'];
                         }     
                     }
                     echo '<br/>';



        ?> 
        
        
        

        <br/><br/>
        <hr>

       
        
        <p style="font-family: 'Lato', Helvetica, Arial, sans-serif; "><b>Tabela de crashes por mês, ano e versão</b></p>

        <form  method="post">
            <select name="SelecaoMes2">
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
            <select name="SelecaoAno2">
                <option value="selecione">Ano</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2018">2019</option>
            </select>
            <select name="SelecaoProjeto">
                <option value="0">Projeto</option>
                <option value="1">Eberick</option>
                <option value="2">QiBuilder</option>
                <option value="4">QiCad</option>
            </select>
            <select name="SelecaoProjeto">
                <option value="10">10</option>
                <option value="14">14</option>
                <option value="16">16</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="53">53</option>
                <option value="56">56</option>
                <option value="67">67</option>
                <option value="68">68</option>
                <option value="69">69</option>
                <option value="76">76</option>
                <option value="78">78</option>
                <option value="82">82</option>
                <option value="86">86</option>
                <option value="92">92</option>
                <option value="95">95</option>
                <option value="97">97</option>
                <option value="108">108</option>
                <option value="111">111</option>
                <option value="119">119</option>
                <option value="121">121</option>
                <option value="138">138</option>
                <option value="145">145</option>
            </select>


            <input type="submit" name="submit" value="Selecionar" />
        </form>

        <?php

        if(isset($_POST['submit'])) {
            $anoselecionado2 = $_POST['SelecaoAno2'];
            $messelecionado2 = $_POST['SelecaoMes2'];  }// VARIAVEL SELECIONADA


        //PARA O GRÁFICO MENSAL
        $query4="SELECT count(id) as e FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = '$messelecionado2' && year(FROM_UNIXTIME(date_created)) = '$anoselecionado2'";
        $result4=mysqli_query($conn,$query4);

        if($result4)
        {
            while($row=mysqli_fetch_assoc($result4))
            {
                echo "Mês selecionado: " .$messelecionado2;
                echo '<br/>';
                echo "Ano selecionado: " .$anoselecionado2;
                echo '<br/>';
                echo 'Total de crashes: ';
                echo $row['e'];
            }     
        }
        echo '<br/>';

        ?>   

        <script type="text/javascript">
            google.charts.load('current', {'packages':['table']});
            google.charts.setOnLoadCallback(drawTable);

            function drawTable() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Name');
                data.addColumn('number', 'Salary');
                data.addColumn('boolean', 'Full Time Employee');
                data.addRows([
                    ['Mike',  {v: 10000, f: '$10,000'}, true],
                    ['Jim',   {v:8000,   f: '$8,000'},  false],
                    ['Alice', {v: 12500, f: '$12,500'}, true],
                    ['Bob',   {v: 7000,  f: '$7,000'},  true]
                ]);

                var table = new google.visualization.Table(document.getElementById('table_div'));

                table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
            }
        </script>

        <div id="table_div"></div>
        
        
        
        
        <br/><br/>
        <hr>




        <!-- Identify where the chart should be drawn. -->
        <div id="myPieChart" style="width: 900px; height: 500px;"/>
        <br/><br/>
        <hr>

    </body>
</html>