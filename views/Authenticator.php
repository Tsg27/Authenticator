<?php
require_once __DIR__ . '/../ConfigToken.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/style.css">
    <title>Google Auth</title>
</head>

<body>
    <form method="POST">
        <h4>Verificação em duas etapas</h4>

        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <p for="token">Abra o aplicativo <strong>Authenticator</strong> em seu celular e digite abaixo o código gerado.</p>
        <input type="text" name="token" placeholder="Código de acesso" maxlength="6" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">

        <button type="submit" class="confimation">Confirmar</button>

        <p class="token-question">
        <img src="../views/img/circle-question-solid.svg" style="margin: 0px 13px -2px 0px; height: 1em;">
        Você não tem token? <a href="registertoken.php">Cadastre-se</a>.
        </p>

    </form>

</html>