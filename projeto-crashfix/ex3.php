<?php
//exibe em um option todas as ids do banco


$conn = new mysqli('192.168.10.12', 'crashfix', 'd&U2Opi#=2a8', 'crashfix') 
    or die ('Cannot connect to db');

$projeto = 4;

$result = $conn->query("select * from tbl_appversion where project_id = '$projeto' order by id");

$id =0;
echo "<html>";
echo "<body>";
echo "adof";
echo "<form  method='post'>";
echo "<select name='versao'>";
while (($row = $result->fetch_assoc())) {
    unset($id);
    $id = $row['id'];
    $versao = $row['version'];
    echo '<option value="'.$id.'">'.$versao.'</option>';
}
echo "</select>";

?>
<select name="SelecaoMes2">
    <option value="00">Mêsd</option>
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
    <option value="2019">2019</option>
</select>
<select name="SelecaoProjeto">
    <option value="selecione">Projeto</option>
    <option value="1">Eberick</option>
    <option value="2">QiBuilder</option>
    <option value="4">QiCad</option>
</select>

<input type="submit" name="submit" value="Selecionar"/>
</form>
<?php

$messelecionado = 01;
$anoselecionado = 2017;
$appversion = 10;
$projeto = 1;

if(isset($_POST['submit'])) {
    $anoselecionado = $_POST['SelecaoAno2'];
    $messelecionado = $_POST['SelecaoMes2'];
    $appversion = $_POST['versao'];   
    $projeto = $_POST['SelecaoProjeto'];
    

}

$query8="SELECT count(*) as a FROM crashfix.tbl_crashreport WHERE month(FROM_UNIXTIME(date_created)) = '$messelecionado' && year(FROM_UNIXTIME(date_created)) = '$anoselecionado' && appversion_id = '$appversion' && project_id = '$projeto'";
$result8=mysqli_query($conn,$query8);

?>
<table>
    <tr>
        <?php


        if($result8)
        {
            while($row=mysqli_fetch_assoc($result8))
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
                echo $row['a'];
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo 'app version: ';
                echo '</td>';
                echo '<td>';
                echo $appversion;
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo 'projeto: ';
                echo '</td>';
                echo '<td>';
                echo $projeto;
                echo '</td>';
                echo '</tr>';

            }     
        }

        ?>
    </tr>
</table>


<?php




echo "</body>";
echo "</html>";

?> 

