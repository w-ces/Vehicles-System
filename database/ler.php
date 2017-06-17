<?php
function getVehicles($filename) {
    $arr = array();
    $file=fopen($filename . ".txt", r) or die("unable to open file!");
    while(!feof($file)) {
        $readLine = fgets($file);
        if ($readLine != "") {
            $readVeh = json_decode($readLine);
            $arr[] = $readVeh;
        }
    }
    
    return $arr;
}

$vehicles = getVehicles("vehi");

foreach($vehicles as $vec) {
    echo "Modelo: " . $vec->modelo . "<br>";
    echo "Preço: " . $vec->preco . "<br><br>";  
}


?>