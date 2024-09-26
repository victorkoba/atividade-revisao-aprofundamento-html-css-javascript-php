
<?php
    // Verifica se o formulário foi enviado via método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coleta o nome do usuário e aplica a função 'htmlspecialchars' para o usuário conseguir inserir caracteres especiais
        $usuario = htmlspecialchars($_POST['nome']);
        
        // Coleta a data da reunião e aplica a sanitização
        $dataReuniao = htmlspecialchars($_POST['data']);
        
        // Coleta o horário da reunião e aplica a sanitização
        $horarioReuniao = htmlspecialchars($_POST['horario']);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../../js/main.js"></script>
</head>
<body class="body-exibe-reserva">

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

    <div class="div-alinha-exibe-reserva">
        <div id="container-reserva-confirmada">
        <!-- Exibe a mensagem de confirmação de reserva -->
        <h2 id="h2-reserva"><?php echo 'Reserva Confirmada!' ?></h2>

        <!-- Exibe o nome do solicitante -->
        <p class="p-reserva-confirmada"><strong>Nome do Solicitante:</strong> <?php echo $usuario; ?></p>
        
        <!-- Exibe a data da reunião -->
        <p class="p-reserva-confirmada"><strong>Data da Reunião:</strong> <?php echo $dataReuniao; ?></p>
        
        <!-- Exibe o horário da reunião -->
        <p class="p-reserva-confirmada"><strong>Horário da Reunião:</strong> <?php echo $horarioReuniao; ?></p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
