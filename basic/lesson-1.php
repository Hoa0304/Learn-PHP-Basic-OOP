<?php
$x = 3;
$y = '4';
$z = 'b';
var_dump($x == $y);
// bool(false)
var_dump($x !== $z);
//bool(true)
var_dump($x != $y);
//bool(true)
var_dump($x === $y);
// bool(false)
var_dump($x !== $y);
//bool(true)

$a = ($x > 5)? $x :0 ;
var_dump($a);
//kqua : 0

$b = 'Hoa cute vô đối';
$b = $b ?? 'Hoa la ai?';
var_dump($b);
//string(19) "Hoa cute vô đối"

?>