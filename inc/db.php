<?php

// Conexão com o banco de dados (substitua pelos seus detalhes)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reino_textual";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processa a ação de simular batalha
if (isset($_GET['action']) && $_GET['action'] === 'simularBatalha') {
    // Lógica de simulação de batalha (exemplo simples usando um sorteio)
    $resultadoBatalha = (rand(0, 1) == 1) ? 'Vitória!' : 'Derrota!';

    // Atualiza o banco de dados ou realiza outras ações necessárias

    // Retorna o resultado para o frontend
    echo json_encode(['resultado' => $resultadoBatalha]);
}

$conn->close();

?>
