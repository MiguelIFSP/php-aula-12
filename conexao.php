<?php
$host = "localhost";
$usuario = "root"; // Usuário padrão do XAMPP
$senha = "";       // Senha padrão do XAMPP (geralmente vazia)
$banco = "db_calculadora";

// Cria a conexão
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($conexao->connect_error) {
    // Retorna um erro JSON em caso de falha na conexão
    header('Content-Type: application/json');
    die(json_encode(['erro' => 'Falha na conexão com o banco de dados: ' . $conexao->connect_error]));
}

// Configura o cabeçalho para todas as respostas da API
header('Content-Type: application/json');

// Define um número fixo para a calculadora (usaremos '1' conforme o INSERT)
$NUMERO_CALCULADORA = 1;
?>