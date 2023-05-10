<?php
class conexao{
  private $conn;

  function __construct($conn) {
    $this->conn = $conn;
  }

  function __destruct() {
    $this->conn->close();
  }

  function inserir_candidatos($nome, $documento, $telefone, $escolaridade) {
    $stmt = $this->conn->prepare("INSERT INTO candidatos (nome, documento, telefone, escolaridade) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $documento, $telefone, $escolaridade);

    return $stmt->execute();
  }
}
?>