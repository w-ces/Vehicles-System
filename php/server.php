<?php
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $input = json_decode(stripslashes(file_get_contents("php://input")));
    // if ($input->operation == "login") {
    //     $auth = false;
    //     $registered = false;
        
    //     $users=fopen("users.txt", r) or die("unable to open file!");
    //     while(!feof($users) and !$registered) {
    //         $usersline = fgets($users);
    //         $readuser = json_decode($usersline);
            
    //         if ($input->nome == $readuser->nome) {
    //             $registered = true;
    //             if ($input->senha == $readuser->senha)
    //                 $auth = true;
    //         }
    //     }
    //     fclose($users);
            
    //     $response = new stdClass();
    //     if ($auth) {
    //         $response->status = true;
    //         $response->html = "<a href=\"signin.html\">Cadastro</a>
    //                           <a href=\"login.html\">Login</a><br>
    //                           <h1>Bem vindo, " . $input->nome . "</h1>";
    //         echo json_encode($response);
    //     } else {
    //         $response->status = false;
    //         if (!$registered)
    //             $response->error = 0;
    //         else
    //             $response->error = 1;
    //         echo json_encode($response);
    //     }
    // } else
    if ($input->operation == "signin") {
        $repeatedUser = false;
        
        $users=fopen("../database/users.txt", r) or die("Unable to open file!");
        while(!feof($users) and !empty($input->email) and !$repeatedUser) {
            $usersline = fgets($users);
            $readuser = json_decode($usersline);
            
            if ($readuser->email == $input->email)
            $repeatedUser = true;
        }
        
        fclose($users);
        
        $response = new stdClass();
        if (!$repeatedUser and !empty($input->email) and !empty($input->password)) {
            $newuser = new stdClass();
            $newuser->firstName = $input->firstName;
            $newuser->lastName = $input->lastName;
            $newuser->birthday = $input->birthday;
            $newuser->email = $input->email;
            $newuser->password = $input->password;
            $newuser->address = $input->address;
            $newuser->country = $input->country;
            
            $file=fopen("../database/users.txt", 'a+') or die("Unable to open file!");
            fwrite($file, json_encode($newuser)."\n");
            fclose($file);
            $response->status = true;
            echo json_encode($response);
        } else {
            $response->status = false;
            echo json_encode($response);
        }
    }
} else {
    $response = new stdClass();
    $response->status = false;
    $response->reason = "just";
    echo json_encode($response);
}
?>