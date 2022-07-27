<?php
//validamos datos del servidor
$host = "localhost";
$user = "root";
$pass = "";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
//hacemos llamado al imput de formuario
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$correo=$_POST['correo'];
$tel=$_POST['telefono'];
$sis=$_POST['ips'];
$alergia=$_POST['alergias'];
$gruposan=$_POST['grupoSanguineo'];
$observaciones=$_POST['observaciones'];

//verificamos la conexion a base datos
if(!$connection)
{
echo "No se ha podido conectar con el servidor" . mysql_error();
}
else
{
echo "<b><h4>Hemos conectado al servidor</h45</b>" ;
}
//indicamos el nombre de la base datos
$datab = "bdmedico";
//indicamos selecionar a la base datos
$db = mysqli_select_db($connection,$datab);

if (!$db)
{
echo "No se ha podido encontrar la Tabla";
}
else
{
echo "<h3>Tabla seleccionada:</h3>" ;
}
//insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
$instruccion_SQL = "INSERT INTO reg_user (nombre, apellido, edad, sexo, correo, telefono, ips, alergias, grupoSanguineo, observaciones)
VALUES ('$nom','$ape','$edad','$sexo','$correo','$tel','$sis','$alergia','$gruposan','$observaciones')";


$resultado = mysqli_query($connection,$instruccion_SQL);

//$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
$consulta = "SELECT * FROM regpaciente ";//nombre de la tabla a consultar

$result = mysqli_query($connection,$consulta);
if(!$result)
{
echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h5>id</th></h5>";
echo "<th><h5>Nombre</th></h5>";
echo "<th><h5>Apellido</th></h5>";
echo "<th><h5>Edad</th></h5>";
echo "<th><h5>Sexo</th></h5>";
echo "<th><h5>Correo</th></h5>";
echo "<th><h5>Telefono</th></h5>";
echo "<th><h5>S.Salud</th></h5>";
echo "<th><h5>Alergia</th></h5>";
echo "<th><h5>Grupo San</th></h5>";
echo "<th><h5>Observaciones</th></h5>";
echo "</tr>";
while ($colum = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><h6>" . $colum['id']. "</td></h6>";
echo "<td><h6>" . $colum['nombre']. "</td></h6>";
echo "<td><h6>" . $colum['apellido']. "</td></h6>";
echo "<td><h6>" . $colum['edad']. "</td></h6>";
echo "<td><h6>" . $colum['sexo']. "</td></h6>";
echo "<td><h6>" . $colum['correo']. "</td></h6>";
echo "<td><h6>" . $colum['telefono']. "</td></h6>";
echo "<td><h6>" . $colum['ssalud'] . "</td></h6>";
echo "<td><h6>" . $colum['alergico'] . "</td></h6>";
echo "<td><h6>" . $colum['gruposan'] . "</td></h6>";
echo "<td><h6>" . $colum['observaciones'] . "</td></h6>";
echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

//echo "Fuera " ;
echo'<a href="index.php"> Volver Atrás</a>';


?>
