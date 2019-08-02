<?php
include 'Circle.php';
include 'Cylinder.php';

$hinhTron = new Circle(10,'blue');
$hinhTru = new Cylinder(100,'red    ',20);

$hinhTron->toString();
$hinhTru ->toString();