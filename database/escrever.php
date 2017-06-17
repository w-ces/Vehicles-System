<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["modelo"]) && !empty($_POST["preco"])) {
        $veh = new stdClass();
        $veh->modelo = $_POST["modelo"];
        $veh->preco = $_POST["preco"];
        
        $file=fopen("vehi.txt", 'a+') or die("unable to open file!");
        fwrite($file, json_encode($veh)."\n");
        fclose($file);
    } 
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Cadastro Veículo</title>
    </head>
    <body>
        <h1>Cadastro: </h1>
        <form method="post">
            <label for="modelo">Modelo:</label>
            <input id="modelo" name="modelo" type="text" required> <br>
            <label for="preco">Preço:</label>
            <input id="preco" name="preco" type="text" required> <br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>