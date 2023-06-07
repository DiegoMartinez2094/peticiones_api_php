<?php
    $credenciales["http"]["method"] = "POST";
    $credenciales["http"]["header"] = "Content-type: application/json";
    $data = [
        "cc"=>"123",
        "nombre"=> "Miguel",
        "apellido"=> "Castro",
        "edad"=> 23
    ];
    $data = json_encode($data);
    $credenciales["http"]["content"] = $data;
    $config = stream_context_create($credenciales);

    $_DATA = file_get_contents("https://6480e391f061e6ec4d49fed8.mockapi.io/informacion", false, $config);
    print_r($_DATA);
?>