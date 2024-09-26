<?php
    // Verifica se o formulário foi enviado via método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coleta os dados do formulário e aplica a função 'htmlspecialchars' para o usuário conseguir inserir caracteres especiais
        $nomeProduto = htmlspecialchars($_POST['nome']);  // Nome do produto enviado pelo formulário
        $nota = htmlspecialchars($_POST['nota']);  // Nota dada ao produto
        $mensagem = htmlspecialchars($_POST['mensagem']);  // Comentário/feedback do usuário
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Submetido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            </div>
            <a class="navbar-brand" href="#"><img src="../img/img-logo.jpeg" alt="Logo"></a>
            <ul class="nav navbar-nav">

                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="cadastro_cliente.php">Cadastro</a></li>
                <li><a href="reserva.php">Reserva</a></li>
                <li><a href="form_feedback.php">Feedback</a></li>

            </ul>
        </div>
    </nav>

    <div class="exibe-feedback">
        <div class="fundo-exibicao-feedback">
            <h2><strong>Exibição Feedback</strong></h2>
        <!-- Exibe o nome do produto enviado pelo formulário -->
        <p class="info-exibir-feedback"><strong>Nome do Produto:</strong> <?php echo $nomeProduto;?></p>
        
        <!-- Exibe a nota enviada pelo formulário -->
        <p class="info-exibir-feedback"><strong>Nota:</strong> <?php echo $nota;?></p>
        
        <!-- Exibe o comentário ou mensagem enviada pelo formulário -->
        <p class="comentario"><strong>Comentário:</strong> <?php echo $mensagem;?></p>
        </div>
        
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
