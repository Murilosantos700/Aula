<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $motivo = $_POST['motivo'];

    // Exemplo de processamento (aqui você poderia salvar os dados em um banco de dados, enviar por email, etc.)
    // Neste exemplo, apenas exibimos os dados para confirmação
    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Nome:</strong> $nome $sobrenome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Motivo:</strong> $motivo</p>";
}
?>
