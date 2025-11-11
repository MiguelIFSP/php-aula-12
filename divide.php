<?php
header('Content-Type: application/json');

$x = isset($_GET['x']) ? floatval($_GET['x']) : 0;
$y = isset($_GET['y']) ? floatval($_GET['y']) : 0;

if ($y != 0) {
    $resultado = $x / $y;
    echo json_encode(['resultado' => $resultado]);
} else {
    echo json_encode(['erro' => 'Divisão por zero!']);
}
?>