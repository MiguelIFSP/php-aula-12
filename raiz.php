<?php
header('Content-Type: application/json');

$x = isset($_GET['x']) ? floatval($_GET['x']) : 0;

if ($x >= 0) {
    $resultado = sqrt($x);
    echo json_encode(['resultado' => $resultado]);
} else {
    echo json_encode(['erro' => 'Raiz de número negativo!']);
}
?>