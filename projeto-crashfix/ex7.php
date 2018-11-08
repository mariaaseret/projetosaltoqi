<?php 

//CONSULTAS EBERICK----------------------------------------------------------------------
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




//CONSULTAS QIBUILDER----------------------------------------------------------------------
//JANEIRO
$query24="SELECT count(*) as ad FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 01 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result24=mysqli_query($conn,$query24);


if($result24)
{
    while($row=mysqli_fetch_assoc($result24))
    {
        $janeiroqi = $row['ad'];
    }     
}

//FEVEREIRO
$query25="SELECT count(*) as ae FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 02 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result25=mysqli_query($conn,$query25);


if($result25)
{
    while($row=mysqli_fetch_assoc($result25))
    {
        $fevereiroqi = $row['ae'];
    }     
}


//MARÇO
$query26="SELECT count(*) as af FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 03 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result26=mysqli_query($conn,$query26);


if($result26)
{
    while($row=mysqli_fetch_assoc($result26))
    {
        $marcoqi = $row['af'];
    }     
}


//ABRIL
$query27="SELECT count(*) as ag FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 04 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result27=mysqli_query($conn,$query27);


if($result27)
{
    while($row=mysqli_fetch_assoc($result27))
    {
        $abrilqi = $row['ag'];
    }     
}


//MAIO
$query28="SELECT count(*) as ah FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 05 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result28=mysqli_query($conn,$query28);


if($result28)
{
    while($row=mysqli_fetch_assoc($result28))
    {
        $maioqi = $row['ah'];
    }     
}



//JUNHO
$query29="SELECT count(*) as ai FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 06 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result29=mysqli_query($conn,$query29);


if($result29)
{
    while($row=mysqli_fetch_assoc($result29))
    {
        $junhoqi = $row['ai'];
    }     
}


//JULHO
$query30="SELECT count(*) as aj FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 07 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result30=mysqli_query($conn,$query30);


if($result30)
{
    while($row=mysqli_fetch_assoc($result30))
    {
        $julhoqi = $row['aj'];
    }     
}




//AGOSTO
$query31="SELECT count(*) as ak FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 08 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result31=mysqli_query($conn,$query31);


if($result19)
{
    while($row=mysqli_fetch_assoc($result19))
    {
        $agostoqi = $row['ak'];
    }     
}



//SETEMBRO
$query32="SELECT count(*) as al FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 09 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result32=mysqli_query($conn,$query32);


if($result32)
{
    while($row=mysqli_fetch_assoc($result32))
    {
        $setembroqi = $row['al'];
    }     
}




//OUTUBRO
$query33="SELECT count(*) as am FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 10 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result33=mysqli_query($conn,$query33);


if($result33)
{
    while($row=mysqli_fetch_assoc($result33))
    {
        $outubroqi = $row['am'];
    }     
}



//NOVEMBRO
$query34="SELECT count(*) as an FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 11 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result34=mysqli_query($conn,$query34);


if($result34)
{
    while($row=mysqli_fetch_assoc($result34))
    {
        $novembroqi = $row['an'];
    }     
}



//DEZEMBRO
$query35="SELECT count(*) as ao FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 12 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 2";
$result35=mysqli_query($conn,$query35);


if($result35)
{
    while($row=mysqli_fetch_assoc($result35))
    {
        $dezembroqi = $row['ao'];
    }     
}




//CONSULTAS QICAD----------------------------------------------------------------------
//JANEIRO
$query36="SELECT count(*) as ap FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 01 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result36=mysqli_query($conn,$query36);


if($result36)
{
    while($row=mysqli_fetch_assoc($result36))
    {
        $janeirocad = $row['ap'];
    }     
}

//FEVEREIRO
$query37="SELECT count(*) as aq FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 02 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result37=mysqli_query($conn,$query37);


if($result37)
{
    while($row=mysqli_fetch_assoc($result37))
    {
        $fevereirocad = $row['aq'];
    }     
}


//MARÇO
$query38="SELECT count(*) as ar FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 03 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result38=mysqli_query($conn,$query38);


if($result38)
{
    while($row=mysqli_fetch_assoc($result38))
    {
        $marcocad = $row['ar'];
    }     
}


//ABRIL
$query39="SELECT count(*) as as FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 04 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result39=mysqli_query($conn,$query39);


if($result40)
{
    while($row=mysqli_fetch_assoc($result40))
    {
        $abrilcad = $row['as'];
    }     
}


//MAIO
$query40="SELECT count(*) as at FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 05 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result40=mysqli_query($conn,$query40);


if($result40)
{
    while($row=mysqli_fetch_assoc($result40))
    {
        $maiocad = $row['at'];
    }     
}



//JUNHO
$query41="SELECT count(*) as au FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 06 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result41=mysqli_query($conn,$query41);


if($result41)
{
    while($row=mysqli_fetch_assoc($result41))
    {
        $junhocad = $row['au'];
    }     
}


//JULHO
$query42="SELECT count(*) as av FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 07 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result42=mysqli_query($conn,$query42);


if($result42)
{
    while($row=mysqli_fetch_assoc($result42))
    {
        $julhocad = $row['av'];
    }     
}




//AGOSTO
$query43="SELECT count(*) as ax FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 08 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result43=mysqli_query($conn,$query43);


if($result43)
{
    while($row=mysqli_fetch_assoc($result43))
    {
        $agostocad = $row['ax'];
    }     
}



//SETEMBRO
$query44="SELECT count(*) as ay FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 09 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result44=mysqli_query($conn,$query44);


if($result44)
{
    while($row=mysqli_fetch_assoc($result44))
    {
        $setembrocad = $row['ay'];
    }     
}




//OUTUBRO
$query45="SELECT count(*) as aaa FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 10 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result45=mysqli_query($conn,$query45);


if($result45)
{
    while($row=mysqli_fetch_assoc($result45))
    {
        $outubrocad = $row['aaa'];
    }     
}



//NOVEMBRO
$query46="SELECT count(*) as aab FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 11 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result46=mysqli_query($conn,$query46);


if($result46)
{
    while($row=mysqli_fetch_assoc($result46))
    {
        $novembrocad = $row['aab'];
    }     
}



//DEZEMBRO
$query47="SELECT count(*) as aac FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = 12 && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && project_id = 4";
$result47=mysqli_query($conn,$query47);


if($result47)
{
    while($row=mysqli_fetch_assoc($result47))
    {
        $dezembrocad = $row['aac'];
    }     
}



//create array variable
$values = [];



//pushing some variables to the array so we can output something in this example.
array_push($values, array("mes" => "JAN", "newbalance" => $janeiro, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));
array_push($values, array("mes" => "FEV", "newbalance" => $fevereiro, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));
array_push($values, array("mes" => "MAR", "newbalance" => $marco, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));
array_push($values, array("mes" => "ABR", "newbalance" => $abril, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));
array_push($values, array("mes" => "MAI", "newbalance" => $maio, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));
array_push($values, array("mes" => "JUN", "newbalance" => $junho, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));
array_push($values, array("mes" => "JUL", "newbalance" => $julho, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));
array_push($values, array("mes" => "AGO", "newbalance" => $agosto, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));
array_push($values, array("mes" => "SET", "newbalance" => $setembro, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));
array_push($values, array("mes" => "OUT", "newbalance" => $outubro, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));
array_push($values, array("mes" => "NOV", "newbalance" => $novembro, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));
array_push($values, array("mes" => "DEZ", "newbalance" => $dezembro, "newbalance2" => $janeiroqi, "newbalance3" => $janeirocad));

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
         data.addColumn('number', 'Balance2');
         data.addColumn('number', 'Balance3');

        data.addRows([

            <?php
            for($i=0;$i<$countArrayLength;$i++){
                echo "['" . $values[$i]['mes'] . "'," . $values[$i]['newbalance'] . "," . $values[$i]['newbalance2'] . "," . $values[$i]['newbalance3'] . "],";
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