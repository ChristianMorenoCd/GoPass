<?php 
    $cedula = $_POST['cedula'];
    $pass = $_POST['pass'];
    $placa = $_POST['placa'];

    $intermediador = '1';

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,'https://api.gopass.com.co/desvincular/new/');
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "cedula=$cedula&pass=$pass&placa=$placa&intermediador=$intermediador");

    // $params=['cedula'=>$cedula, 'pass'=>$pass, 'placa'=>$placa, 'intermediador'=>$intermediador];

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $remote_server_output = curl_exec ($ch);
    curl_close ($ch);
    print_r($remote_server_output);
?>