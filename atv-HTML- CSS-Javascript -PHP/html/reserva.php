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

    <div class="div-alinha-reserva">
        <form id="form-reserva" action="exibe_reserva.php" method="POST">
            <label class="label-reserva" for="">Nome do Solicitante:</label>
            <input class="input-reserva" id="nome" name="nome" type="text" required>
            <label class="label-reserva" for="">Data da Reunião:</label>
            <input class="input-reserva" id="data" name="data" type="date" required>
            <label class="label-reserva" for="">Horário da Reunião:</label>
            <input class="input-reserva" id="horario" name="horario" type="time" required>
            <input type="submit" value="Agendar" class="botao-agendar">
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
