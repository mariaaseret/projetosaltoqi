<?php
//exibe em um option todas as ids do banco
$conn = new mysqli('192.168.10.12', 'crashfix', 'd&U2Opi#=2a8', 'crashfix') 
or die ('Cannot connect to db');

    $result = $conn->query("select id from tbl_crashreport");

    echo "<html>";
    echo "<body>";
    echo "<select name='id'>";

    while ($row = $result->fetch_assoc()) {
                  unset($id);
                  $id = $row['id'];
                  echo '<option value="'.$id.'">'.$id.'</option>';
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?> 