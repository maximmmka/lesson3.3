<?php

function carsAutoloader($Car) 
{
    $filePath = 'products/cars/' . $Car . '.class.php';
    if (file_exists($filePath)) {
	include "$filePath";
	}
}

function televisionsAutoloader($Television) 
{
    $filePath = 'products/televisions/' . $Television . '.class.php';
    if (file_exists($filePath)) {
	include "$filePath";
	}
}

function pensAutoloader($Pen) 
{
    $filePath = 'products/pens/' . $Pen . '.class.php';
    if (file_exists($filePath)) {
	include "$filePath";
	}
}

function ducksAutoloader($Duck) 
{
    $filePath = 'products/ducks/' . $Duck . '.class.php';
    if (file_exists($filePath)) {
	include "$filePath";
	}
}

spl_autoload_register('carsAutoloader');
spl_autoload_register('televisionsAutoloader');
spl_autoload_register('pensAutoloader');
spl_autoload_register('ducksAutoloader');

?>