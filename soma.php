<?php
// Linha essencial: Garante que o navegador espere JSON
header('Content-Type: application/json'); 

$x = isset($_GET['x']) ? floatval($_GET['x']) : 0;
$y = isset($_GET['y']) ? floatval($_GET['y']) : 0;

// REMOVA todas as linhas de debug daqui, como var_dump ou echo "Valores recebidos...";

$resultado = $x + $y;

// Linha essencial: Envia o resultado no formato JSON
echo json_encode(['resultado' => $resultado]);
?>