<?php
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $input = json_decode(stripslashes(file_get_contents("php://input")));
    if ($input->operation == "regvehicle") {
        $response = new stdClass();
        $newvehi = new stdClass();
        $newvehi->tipo = $input->type;
        $newvehi->categoria = $input->category;
        $newvehi->modelo = $input->model;
        $newvehi->combustivel = $input->fuel_type;
        $newvehi->local = $input->city;
        $newvehi->cor = $input->color;
        $newvehi->preco = $input->value;
        $newvehi->duracao = $input->duration;
        $newvehi->dono = $input->owner;
        
        $filename;
        if ($newvehi->tipo == "Car") $filename = "car.txt";
        else if ($newvehi->tipo == "Motorcycle") $filename = "moto.txt";
        else $filename = "bike.txt";
        
        $file=fopen("../database/" . $filename, 'a+') or die("Unable to open file!");
        fwrite($file, json_encode($newvehi)."\n");
        fclose($file);
        $response->status = true;
        echo json_encode($response);
    }
} else {
    $response = new stdClass();
    $response->status = false;
    echo json_encode($response);
}
?>