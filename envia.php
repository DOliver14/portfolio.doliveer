<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização dos dados
    $nome = isset($_POST['nome']) ? trim(strip_tags($_POST['nome'])) : '';
    $email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
    $telefone = isset($_POST['telefone']) ? trim(strip_tags($_POST['telefone'])) : '';
    $mensagem = isset($_POST['mensagem']) ? trim(strip_tags($_POST['mensagem'])) : '';

    // Validação do e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "E-mail inválido!";
        exit;
    }

    // Verifica se os campos obrigatórios estão preenchidos
    if (!empty($nome) && !empty($email) && !empty($mensagem)) {
        // Constrói o corpo da mensagem
        $corpo = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nMensagem: $mensagem";
        
        // Define os cabeçalhos do e-mail
        $headers = "From: $nome <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Tenta enviar o e-mail
        if (mail("doliveer1k@gmail.com", "Coleta de dados - portfólio", $corpo, $headers)) {
            echo "E-mail enviado com sucesso!";
        } else {
            echo "Houve um erro ao enviar o e-mail!";
        }
    } else {
        echo "Por favor, preencha todos os campos obrigatórios!";
    }
}
?>
