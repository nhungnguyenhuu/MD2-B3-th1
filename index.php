<?php
include_once "th1-Rectangle.php";
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

$rectangle->width = 20;
$rectangle->height = 30;

//echo $rectangle->width;
//echo "<br>";
//echo $rectangle->height;
//echo "<br>";
echo ("Your Rectangle ".$rectangle->disPlay());
echo "<br>";
echo $rectangle->getArea();
echo "<br>";
echo $rectangle->getPerimeter();

