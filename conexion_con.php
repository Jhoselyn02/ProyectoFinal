<?php

$con= new mysqli("localhost","root","","final");
mysqli_set_charset($con,"utf8");

if ($con)
	{
	//echo "Conexion exitosa";
	}
	else
	{
	//echo "Conexion fallida";
	}
?>