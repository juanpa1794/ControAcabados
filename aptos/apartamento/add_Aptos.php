<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))
{
 // variables for input data
      $numApto = $_POST['numApto'];
      $Estado = $_POST['Estado'];
      $Porcentaje = $_POST['Porcentaje'];
      $Observaciones = $_POST['Observaciones'];
    // variables for input data

 // sql query for inserting data into database
 
$sql_query="INSERT INTO Aptos (`numApto`,`Estado`,`Porcentaje`,`Observaciones`) VALUES('".$numApto."','".$Estado."','".$Porcentaje."','".$Observaciones."')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
<script type="text/javascript">
alert('Aptos added Successfully ');
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
                            <td align="center"><a href="index.php">back to main page</a></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="numApto" name="numApto" required
                                    placeholder="Numero de apartamento">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="Estado" name="Estado" required
                                    placeholder="Estado">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="Porcentaje" name="Porcentaje" required
                                    placeholder="Porcentaje">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="Observaciones" name="Observaciones" required
                                    placeholder="Observaciones">
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