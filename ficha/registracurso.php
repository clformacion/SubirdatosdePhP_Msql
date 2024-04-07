<?php
include("conectar.php");

$con=conectar();

$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$pais =$_POST['pais'];
$curso =$_POST['curso'];
$Email =$_POST['email'];
$telefono =$_POST['telefono'];

$insertar = "INSERT INTO datos(nombre, apellido,pais,curso,email,telefono) VALUES(
'$nombre',
'$apellido',
'$pais',
'$curso',
'$Email',
'$telefono')";

$query =mysqli_query($con,$insertar);

if($query){
    header('location:registro.php');
   exit();
   
}
else{

}
?>