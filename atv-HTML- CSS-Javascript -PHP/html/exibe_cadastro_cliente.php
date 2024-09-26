<?php
    // Verifica se o formulário foi enviado via método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Captura o valor do campo 'nome' enviado pelo formulário
        $nome = $_POST['nome'];

        // Captura o valor do campo 'email' enviado pelo formulário
        $email = $_POST['email'];

        // Captura o valor do campo 'telefone' enviado pelo formulário
        $telefone = $_POST['telefone'];
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../../js/main.js"></script>
</head>
<header>
    
</header>
<body id="body_cadastro" >

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

    <div class="card-1">
    <div class="confirmacao-inform">
        <h1 class="titulo-confirm">Confirmação de Cadastro</h1>

        <div>
            <h2><strong>Cadastro com sucesso</strong></h2>
            
        <!-- Exibe o nome do usuário enviado pelo formulário -->
        <p class="info-usuario"><strong>Nome:</strong><?php echo $nome ?></p>
        
        <!-- Exibe o e-mail do usuário enviado pelo formulário -->
        <p class="info-usuario"><strong>E-mail:</strong><?php echo $email ?></p>
        
        <!-- Exibe o telefone do usuário enviado pelo formulário -->
        <p class="info-usuario"><strong>Telefone:</strong><?php echo $telefone ?></p>
        </div>
        
    </div>
    </div>
    
</body>
</html>