<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Configurações de conexão com o banco de dados
$servername = "bzunf0gzk7mocfgqveew-mysql.services.clever-cloud.com";
$username = "ux3ac9mbsuy5m3zw";
$password = "KxyTOu4ZkUHHcqnCjaSo";
$dbname = "bzunf0gzk7mocfgqveew";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT * FROM users";

// Executar a consulta
$result = $conn->query($sql);

// Verificar se houve resultados
if ($result->num_rows > 0) {
    // Array para armazenar os dados
    $dados = array();

    // Processar os resultados
    while($row = $result->fetch_assoc()) {
        $dados[] = array(
            "nome" => $row["nome"],
            "imagem" => $row["url_imagem"]
        );
    }

    // Resposta JSON
    echo json_encode($dados);
} else {
    // Resposta JSON vazia
    echo json_encode([]);
}

// Fechar a conexão
$conn->close();
?>
