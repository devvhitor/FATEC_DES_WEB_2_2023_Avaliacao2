<?php






require_once('conexao.php'); 

// Configurações de conexão com o banco de dados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "candidatos";

// Recebe os dados do formulário
$nome = $_POST['nome'];
$rgcpf = $_POST['rgcpf'];
$telefone = $_POST['telefone'];
$escolaidade = $_POST['escolaidade'];

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Insere os dados na tabela
$sql = "INSERT INTO candidatos (nome, rgcpf, telefone, escolaidade) VALUES ('$nome', '$rgcpf', '$telefone', '$escolaidade')";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}
}
// Fecha a conexão com o banco de dados
$conn->close();




?>

