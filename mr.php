<?php
include 'conexao.php';

// Prepara a consulta para ler o conteúdo
$stmt = $conexao->prepare("SELECT conteudo FROM memoria WHERE numero_calculadora = ?");
$stmt->bind_param("i", $NUMERO_CALCULADORA);
$stmt->execute();
$resultado = $stmt->get_result();
$memoria = $resultado->fetch_assoc();

if ($memoria) {
    echo json_encode(['resultado' => $memoria['conteudo']]);
} else {
    // Se o registro não existir, assume 0.00 e insere
    $stmt_insert = $conexao->prepare("INSERT INTO memoria (numero_calculadora, conteudo) VALUES (?, 0.00)");
    $stmt_insert->bind_param("i", $NUMERO_CALCULADORA);
    $stmt_insert->execute();
    echo json_encode(['resultado' => '0.00']);
}

$stmt->close();
$conexao->close();
?>