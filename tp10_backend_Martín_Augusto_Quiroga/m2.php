<?php


$tipo_prenda=$_POST['tipo_prenda'];
$marca=$_POST['marca'];
$talle=$_POST['talle'];
$precio=$_POST['precio'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1","root","");
 mysqli_select_db($conexion,"tienda");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
// 3') Preparar la orden SQL
// "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
// a) generar la consulta a realizar
 $consulta = "UPDATE ropa SET tipo_prenda='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id=$id";
// 4') Ejecutar la orden y actualizamos los datos
// a) ejecutar la consulta
mysqli_query($conexion,$consulta);
// a) rederigir a index
header('location: index.html');
 ?>
