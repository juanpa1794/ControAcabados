<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))
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

 // sql query for inserting data into database
 
$sql_query="INSERT INTO Acabados (`numApto`,`resane`,`ventanas`,`impermeabilizacion`,`repello`,`enchape`,`estuco`,`pintura`,`pisoFlotante`,`Barrederas`,`puertas`,`aseo`) VALUES('".$numApto."','".$resane."','".$ventanas."','".$impermeabilizacion."','".$repello."','".$enchape."','".$estuco."','".$pintura."','".$pisoFlotante."','".$Barrederas."','".$puertas."','".$aseo."')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
<script type="text/javascript">
alert('Acabados added Successfully ');
window.location.href = 'index.php';
</script>
<?php
 }
 else
 {
  ?>
<script type="text/javascript">
alert('error occured while inserting your data');
</script>
<?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contorl de Acabados</title>
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
                            <td align="center"><a href="index.php">back to main page</a></td>
                        </tr>



                        <tr>
                            <td>
                                <input type="text" class="form-control" id="numApto" name="numApto" required
                                    placeholder="NumApto">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="form-control" id="resane" name="resane" required
                                    placeholder="Resane">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="form-control" id="ventanas" name="ventanas" required
                                    placeholder="Ventanas">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="form-control" id="impermeabilizacion"
                                    name="impermeabilizacion" required placeholder="Impermeabilizacion">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="form-control" id="repello" name="repello" required
                                    placeholder="Repello">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="form-control" id="enchape" name="enchape" required
                                    placeholder="Enchape">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="form-control" id="estuco" name="estuco" required
                                    placeholder="Estuco">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="form-control" id="pintura" name="pintura" required
                                    placeholder="Pintura">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="form-control" id="pisoFlotante" name="pisoFlotante" required
                                    placeholder="PisoFlotante">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="form-control" id="Barrederas" name="Barrederas" required
                                    placeholder="Barrederas">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="form-control" id="puertas" name="puertas" required
                                    placeholder="Puertas">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="form-control" id="aseo" name="aseo" required
                                    placeholder="Aseo">
                            </td>
                        </tr>




                        <tr>
                            <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </center>
</body>

</html>