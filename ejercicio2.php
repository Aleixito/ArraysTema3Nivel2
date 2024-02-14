<html>
<head>
<title>Arrays</title>
</head>
<body>
<?php 

$alumnos = array(
    "alumno1"=>[7,8,3,7,9],
    "alumno2"=>[8,9,1,4,6],
    "alumno3"=>[7,7,7,7,7],
    "alumno4"=>[1,7,9,10,5],
    "alumno5"=>[1,7,9,2,5],
    "alumno6"=>[9,6,5,8,3],
    "alumno7"=>[10,10,4,7,6],
    "alumno8"=>[2,2,2,2,2],
    "alumno9"=>[4,5,9,6,6],
    "alumno10"=>[4,5,6,7,8],
);

function mediaAlumnos($notas) {
    $suma = array_sum($notas);
    $cantidadNotas = count($notas);
    
    return $suma / $cantidadNotas;
}

function mediaClase($alumnos) {
    $notasTotales = array();

    foreach ($alumnos as $notas) {
        $notasTotales = array_merge($notasTotales, $notas);
    }

    return mediaAlumnos($notasTotales);
}

foreach ($alumnos as $alumno => $notas) {
    echo "Alumno: " . $alumno . "<br>";
    echo "Media de notas: " . mediaAlumnos($notas) . "<br><br>";
}

echo "Media de la clase: " . mediaClase($alumnos) . "<br>";

?>
</body>
</html>