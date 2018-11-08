<?php
//exibe em um option todas as ids do banco


$conn = new mysqli('192.168.10.12', 'crashfix', 'd&U2Opi#=2a8', 'crashfix') 
    or die ('Cannot connect to db');



$result10 = $conn->query("select * from tbl_appversion where project_id = 1 order by id");

$id10 =0;
echo "<html>";
echo "<body>";
echo "Eberick";
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
echo "Qicad";
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

<?php




    echo "</body>";
             echo "</html>";

?> 

