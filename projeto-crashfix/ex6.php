<?php 

//JANEIRO
$query12="SELECT count(*) as p FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 01 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result12=mysqli_query($conn,$query12);


if($result12)
{
    while($row=mysqli_fetch_assoc($result12))
    {
        $janeiro = $row['p'];
    }     
}

//FEVEREIRO
$query13="SELECT count(*) as q FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 02 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result13=mysqli_query($conn,$query13);


if($result13)
{
    while($row=mysqli_fetch_assoc($result13))
    {
        $fevereiro = $row['q'];
    }     
}


//MARÇO
$query14="SELECT count(*) as r FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 03 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result14=mysqli_query($conn,$query14);


if($result14)
{
    while($row=mysqli_fetch_assoc($result14))
    {
        $marco = $row['r'];
    }     
}


//ABRIL
$query15="SELECT count(*) as s FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 04 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result15=mysqli_query($conn,$query15);


if($result15)
{
    while($row=mysqli_fetch_assoc($result15))
    {
        $abril = $row['s'];
    }     
}


//MAIO
$query16="SELECT count(*) as t FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 05 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result16=mysqli_query($conn,$query16);


if($result16)
{
    while($row=mysqli_fetch_assoc($result16))
    {
        $maio = $row['t'];
    }     
}



//JUNHO
$query17="SELECT count(*) as u FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 06 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result17=mysqli_query($conn,$query17);


if($result17)
{
    while($row=mysqli_fetch_assoc($result17))
    {
        $junho = $row['u'];
    }     
}


//JULHO
$query18="SELECT count(*) as v FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 07 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result18=mysqli_query($conn,$query18);


if($result18)
{
    while($row=mysqli_fetch_assoc($result18))
    {
        $julho = $row['v'];
    }     
}




//AGOSTO
$query19="SELECT count(*) as x FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 08 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result19=mysqli_query($conn,$query19);


if($result19)
{
    while($row=mysqli_fetch_assoc($result19))
    {
        $agosto = $row['x'];
    }     
}



//SETEMBRO
$query20="SELECT count(*) as y FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 09 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result20=mysqli_query($conn,$query20);


if($result20)
{
    while($row=mysqli_fetch_assoc($result20))
    {
        $setembro = $row['y'];
    }     
}




//OUTUBRO
$query21="SELECT count(*) as aa FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 10 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result21=mysqli_query($conn,$query21);


if($result21)
{
    while($row=mysqli_fetch_assoc($result21))
    {
        $outubro = $row['aa'];
    }     
}



//NOVEMBRO
$query22="SELECT count(*) as ab FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 11 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result22=mysqli_query($conn,$query22);


if($result22)
{
    while($row=mysqli_fetch_assoc($result22))
    {
        $novembro = $row['ab'];
    }     
}



//DEZEMBRO
$query23="SELECT count(*) as ac FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 12 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 1";
$result23=mysqli_query($conn,$query23);


if($result23)
{
    while($row=mysqli_fetch_assoc($result23))
    {
        $dezembro = $row['ac'];
    }     
}



//create array variable
$values = [];



//pushing some variables to the array so we can output something in this example.
array_push($values, array("mes" => "JAN", "newbalance" => $janeiro));
array_push($values, array("mes" => "FEV", "newbalance" => $fevereiro));
array_push($values, array("mes" => "MAR", "newbalance" => $marco));
array_push($values, array("mes" => "ABR", "newbalance" => $abril));
array_push($values, array("mes" => "MAI", "newbalance" => $maio));
array_push($values, array("mes" => "JUN", "newbalance" => $junho));
array_push($values, array("mes" => "JUL", "newbalance" => $julho));
array_push($values, array("mes" => "AGO", "newbalance" => $agosto));
array_push($values, array("mes" => "SET", "newbalance" => $setembro));
array_push($values, array("mes" => "OUT", "newbalance" => $outubro));
array_push($values, array("mes" => "NOV", "newbalance" => $novembro));
array_push($values, array("mes" => "DEZ", "newbalance" => $dezembro));

//counting the length of the array
$countArrayLength = count($values);

?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Mes');
        data.addColumn('number', 'Balance');

        data.addRows([

            <?php
            for($i=0;$i<$countArrayLength;$i++){
                echo "['" . $values[$i]['mes'] . "'," . $values[$i]['newbalance'] . "],";
            } 
            ?>
        ]);

        var options = {
            title: 'Crashes anuais',
            curveType: 'function',
            legend: { position: 'bottom' } 
            
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
    }
</script>

<div class="grid-container"> 
    <div class="grid-100 grid-parent">
        <div id="curve_chart" style="width: 100%; height: auto"></div>
    </div>   

</div>