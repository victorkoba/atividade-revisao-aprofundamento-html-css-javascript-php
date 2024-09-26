<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Submetido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../../js/main.js"></script>
    
</head>
<body class="body-cadastro">

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

    <div class="body-form">
        <form id="Form-php" action="exibe_cadastro_cliente.php" method="POST">

            <h3 class="Titulo-cadastro">Cadastre-se</h3>
            <label class="nome-Inform" for="nome">Nome:</label>
            <input class="Inform-Cliente" type="text" id="nome" name="nome" required>

            <label class="nome-Inform" for="email">E-mail:</label>
            <input class="Inform-Cliente" type="email" id="email" name="email" required>

            <label  class="nome-Inform" for="telefone">Telefone:</label>
            <input class="Inform-Cliente" type="tel" id="telefone" name="telefone" required>

            <input id="Bot-Cliente" type="submit" value="Cadastrar">
        </form>
    </div>
    

</body>
</html>
