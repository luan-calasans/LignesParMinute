<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];
    
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "E-mail: " . htmlspecialchars($email) . "<br>";
    echo "Telefone: " . htmlspecialchars($telefone) . "<br>";
    echo "Mensagem: " . htmlspecialchars($mensagem) . "<br>";
} else {
    header("Location: index.html");
    exit;
}
?>