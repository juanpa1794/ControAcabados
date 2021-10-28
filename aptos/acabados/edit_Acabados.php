<?php
include_once 'dbconfig.php';

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM Acabados WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
     
   $numApto = $_POST['numApto'];
          
   $resane = $_POST['resane'];
          
   $ventanas = $_POST['ventanas'];
          
   $impermeabilizacion = $_POST['impermeabilizacion'];
          
   $repello = $_POST['repello'];
          
   $enchape = $_POST['enchape'];
          
   $estuco = $_POST['estuco'];
          
   $pintura = $_POST['pintura'];
          
   $pisoFlotante = $_POST['pisoFlotante'];
          
   $Barrederas = $_POST['Barrederas'];
          
   $puertas = $_POST['puertas'];
          
   $aseo = $_POST['aseo'];
        // variables for input data

 // sql query for update data into database
  $sql_query="UPDATE Acabados SET `numApto`='$numApto',`resane`='$resane',`ventanas`='$ventanas',`impermeabilizacion`='$impermeabilizacion',`repello`='$repello',`enchape`='$enchape',`estuco`='$estuco',`pintura`='$pintura',`pisoFlotante`='$pisoFlotante',`Barrederas`='$Barrederas',`puertas`='$puertas',`aseo`='$aseo' WHERE id=".$_GET['edit_id'];

 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
<script type="text/javascript">
alert('Acabados updated successfully');
window.location.href = 'index.php';
</script>
<?php
 }
 else
 {
  ?>
<script type="text/javascript">
alert('error occured while updating data');
</script>
<?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
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

        <div id="body">
            <div id="content">
                <form method="post" enctype="multipart/form-data">
                    <table align="center">
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $fetched_row['numApto'] ?>" class="form-control"
                                    id="numApto" name="numApto">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" value="<?php echo $fetched_row['resane'] ?>" class="form-control"
                                    id="resane" name="resane">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" value="<?php echo $fetched_row['ventanas'] ?>" class="form-control"
                                    id="ventanas" name="ventanas">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" value="<?php echo $fetched_row['impermeabilizacion'] ?>"
                                    class="form-control" id="impermeabilizacion" name="impermeabilizacion">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" value="<?php echo $fetched_row['repello'] ?>" class="form-control"
                                    id="repello" name="repello">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" value="<?php echo $fetched_row['enchape'] ?>" class="form-control"
                                    id="enchape" name="enchape">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" value="<?php echo $fetched_row['estuco'] ?>" class="form-control"
                                    id="estuco" name="estuco">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" value="<?php echo $fetched_row['pintura'] ?>" class="form-control"
                                    id="pintura" name="pintura">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" value="<?php echo $fetched_row['pisoFlotante'] ?>"
                                    class="form-control" id="pisoFlotante" name="pisoFlotante">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" value="<?php echo $fetched_row['Barrederas'] ?>"
                                    class="form-control" id="Barrederas" name="Barrederas">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" value="<?php echo $fetched_row['puertas'] ?>" class="form-control"
                                    id="puertas" name="puertas">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" value="<?php echo $fetched_row['aseo'] ?>" class="form-control"
                                    id="aseo" name="aseo">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
                                <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </center>
</body>

</html>