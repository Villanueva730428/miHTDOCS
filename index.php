<?php
include 'libreria.php';

$manzana = new Fruta;
$manzana->set_name('Manzana');

$nombreDeLaFruta = $manzana->get_name();

echo "Nombre de la fruta:" . $nombreDeLaFruta;
echo "<br>";

$naranja = new FrutaConConstructor('Naranja');
echo "Nombre de la fruta:". $naranja->get_name();
echo "<br>";

$fresa = new Fresa('Fresa','Rojo');
$fresa->descripcion();
echo "<br>";
$fresa->mensaje();

echo "<br>";
$miListaDeAutos = new ListaDeAutos;
echo "Estos son mis autos: ";
echo "<br>";
$miListaDeAutos->marcas();

