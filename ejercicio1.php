<html>
<head>
<title>Arrays</title>
</head>
<body>
<?php 

$array1 = [1, 2, 3, 7, 6];
$array2 = [1, 3, 2, 8, 9];

$interseccion = array_intersect($array1, $array2);
echo "La interseccion: ";
print_r($interseccion);

$mezcla = array_merge($array1, $array2);
echo "Mezcla: ";
print_r($mezcla);

?>
</body>
</html>