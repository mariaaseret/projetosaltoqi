<?php
$conn = new mysqli('192.168.10.12', 'crashfix', 'd&U2Opi#=2a8', 'crashfix') 
    or die ('Cannot connect to db');

$projeto = 4;

$result = $conn->query("select * from tbl_appversion where project_id = '$projeto' order by id");
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {

                $("#type").change(function() {
                    var val = $(this).val();
                    if (val == "item1") {
                        $("#size").html("<?php while (($row = $result->fetch_assoc())) {
    unset($id);
    $id = $row['id'];
    $versao = $row['version'];
    echo '<option value="'.$id.'">'.$versao.'</option>';
}?>");
                                        } else if (val == "item2") {
                            $("#size").html("<option value='test'>item2: test 1</option><option value='test2'>item2: test 2</option>");

                        } else if (val == "item3") {
                            $("#size").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");

                        }
                    });


                });
        </script>
    </head>
    <body>

        <select id="type">
            <option value="item1">item1</option>
            <option value="item2">item2</option>
            <option value="item3">item3</option>
        </select>

        <select id="size">
            <option value="">-- select one -- </option>
        </select>

    </body>
</html>
