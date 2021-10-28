<?php
include_once 'dbconfig.php';

if(isset($_GET['view_id']))
{
 $sql_query="SELECT * FROM Acabados WHERE id=".$_GET['view_id'];
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
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <center>

        <div id="header">
            <div id="content">
                <label>Control de Acabados</label>
            </div>
        </div>

        <table align="center">
            <tr>
                <th colspan="5">numApto: <?php echo $fetched_row['numApto'] ?></th>
            </tr>
            <tr>
                <th colspan="5">resane: <?php echo $fetched_row['resane'] ?></th>
            </tr>
            <tr>
                <th colspan="5">ventanas: <?php echo $fetched_row['ventanas'] ?></th>
            </tr>
            <tr>
                <th colspan="5">impermeabilizacion: <?php echo $fetched_row['impermeabilizacion'] ?></th>
            </tr>
            <tr>
                <th colspan="5">repello: <?php echo $fetched_row['repello'] ?></th>
            </tr>
            <tr>
                <th colspan="5">enchape: <?php echo $fetched_row['enchape'] ?></th>
            </tr>
            <tr>
                <th colspan="5">estuco: <?php echo $fetched_row['estuco'] ?></th>
            </tr>
            <tr>
                <th colspan="5">pintura: <?php echo $fetched_row['pintura'] ?></th>
            </tr>
            <tr>
                <th colspan="5">pisoFlotante: <?php echo $fetched_row['pisoFlotante'] ?></th>
            </tr>
            <tr>
                <th colspan="5">Barrederas: <?php echo $fetched_row['Barrederas'] ?></th>
            </tr>
            <tr>
                <th colspan="5">puertas: <?php echo $fetched_row['puertas'] ?></th>
            </tr>
            <tr>
                <th colspan="5">aseo: <?php echo $fetched_row['aseo'] ?></th>
            </tr>
        </table>
    </center>
</body>

</html>