<?php
include_once 'dbconfig.php';

if(isset($_GET['view_id']))
{
 $sql_query="SELECT * FROM Aptos WHERE id=".$_GET['view_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
}



?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Control de Acabados</title>
</head>

<body>
    <center>

        <div id="header">
            <div id="content">
                <label>Control de acabados</label>
            </div>
        </div>

        <table align="center">
            <tr>
                <th colspan="5">numApto: <?php echo $fetched_row['numApto'] ?></th>
            </tr>
            <tr>
                <th colspan="5">Estado: <?php echo $fetched_row['Estado'] ?></th>
            </tr>
            <tr>
                <th colspan="5">Porcentaje: <?php echo $fetched_row['Porcentaje'] ?></th>
            </tr>
            <tr>
                <th colspan="5">Observaciones: <?php echo $fetched_row['Observaciones'] ?></th>
            </tr>
        </table>
    </center>
</body>

</html>