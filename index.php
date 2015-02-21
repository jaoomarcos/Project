<?php include_once('Conta.php'); ?>
<html>

    <head>
            <link rel="stylesheet" type="text/css" href="stilo.css">
            <title>Amariel Banks</title>
            <meta charset = "utf-8">

    </head>

    <body>

    <div id = "geral">
        <div class = "img"><img src="img.jpg" width="77px" height="121px"></div>
    <div class = "cabe">
    <h1>Amariel Banks</h1><h3><br>Programação III</h3>
    </div>
    <div class="form">

    <form method="post">
    <h3>Dados da Conta</h3><br>
        <input type = "text" name = "agencia" placeholder = "Agência" required><br>
        <input type = "text" name = "numero" placeholder = "Número da Conta" required><br>
        <input type = "text" name = "saldo" placeholder = "Saldo da Conta" required><br>
        <input type = "submit" name = "submit" value = "Enviar"><br>

    </form>

    <form method="post">
    <h3>Realizar Saque</h3><br>
        <input type = "text" name = "sacar" placeholder = "Saque" required><br>
        <input type = "submit" name = "submit2" value="Realizar Saque">
    </form>

    <?php
        $conta = new Conta();

        if (isset($_POST['submit'])) {

            $agencia = $_POST['agencia'];
            $numero = $_POST['numero'];
            $saldo = $_POST['saldo'];


            $conta->setConta($agencia,$numero,$saldo);
            echo"<div class = 'saldo'>Agencia: ".$conta->getAgencia()."<br>Saldo: ".$conta->getSaldo()."</div>";

        }

        if (isset($_POST['submit2'])) {
            $saque = $_POST['sacar'];
            $conta->setSaque($saque);
            echo"<div class = 'saldo'>Agencia: ".$conta->getAgencia()."<br>Saldo: ".$conta->getSaldo()."</div>";

        }



    ?>



    </body>

</html>