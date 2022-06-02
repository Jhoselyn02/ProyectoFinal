<?php 
$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];

session_start();
$_SESSION["usuario"]=$usuario;

include('conexion_con.php');

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location: bienvenida.php");
}else{

    ?>
    <?php
    include("index.php");
    ?>
    <h1> ERROR DE VERIFICACIÓN</h1>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($con);