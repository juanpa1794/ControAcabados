<?php
include_once 'dbconfig.php';

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM Aptos WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
          
   $numApto = $_POST['numApto'];
          
   $Estado = $_POST['Estado'];
          
   $Porcentaje = $_POST['Porcentaje'];
          
   $Observaciones = $_POST['Observaciones'];
        // variables for input data

 // sql query for update data into database
  $sql_query="UPDATE Aptos SET `numApto`='$numApto',`Estado`='$Estado',`Porcentaje`='$Porcentaje',`Observaciones`='$Observaciones' WHERE id=".$_GET['edit_id'];

 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
<script type="text/javascript">
alert('Aptos updated successfully');
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
                                <input type="text" value="<?php echo $fetched_row['Estado'] ?>" class="form-control"
                                    id="Estado" name="Estado">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $fetched_row['Porcentaje'] ?>" class="form-control"
                                    id="Porcentaje" name="Porcentaje">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $fetched_row['Observaciones'] ?>"
                                    class="form-control" id="Observaciones" name="Observaciones">
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