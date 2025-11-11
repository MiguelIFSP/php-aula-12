<?php
include 'conexao.php';

$novo_conteudo = 0.00;

// Prepara a atualização do conteúdo para 0.00
$stmt = $conexao->prepare("UPDATE memoria SET conteudo = ? WHERE numero_calculadora = ?");
$stmt->bind_param("di", $novo_conteudo, $NUMERO_CALCULADORA); // 'd' para double/decimal, 'i' para integer
$stmt->execute();

echo json_encode(['sucesso' => true, 'memoria_atual' => $novo_conteudo]);

$stmt->close();
$conexao->close();
?>