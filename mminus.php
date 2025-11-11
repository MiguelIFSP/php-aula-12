<?php
include 'conexao.php';

$valor_enviado = isset($_GET['valor']) ? floatval($_GET['valor']) : 0.00;

// 1. Seleciona o conteúdo atual
$stmt_select = $conexao->prepare("SELECT conteudo FROM memoria WHERE numero_calculadora = ?");
$stmt_select->bind_param("i", $NUMERO_CALCULADORA);
$stmt_select->execute();
$resultado = $stmt_select->get_result();
$memoria = $resultado->fetch_assoc();
$conteudo_atual = $memoria ? floatval($memoria['conteudo']) : 0.00;
$stmt_select->close();

// 2. Calcula o novo conteúdo
$novo_conteudo = $conteudo_atual - $valor_enviado;

// 3. Atualiza o banco de dados
$stmt_update = $conexao->prepare("UPDATE memoria SET conteudo = ? WHERE numero_calculadora = ?");
$stmt_update->bind_param("di", $novo_conteudo, $NUMERO_CALCULADORA);
$stmt_update->execute();
$stmt_update->close();

echo json_encode(['sucesso' => true, 'memoria_atual' => $novo_conteudo]);

$conexao->close();
?>