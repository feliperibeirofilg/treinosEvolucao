<?php

    $localhost = "localhost";
    $dbname = "academia_pessoal";
    $user = "root";
    $pas = "";

    try{
        $conn = new PDO("mysql:host=$localhost;dbname=$dbname", $user, $pas);
        //Para o programa caso aconteça algum erro
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        //erro na conexao
        $error = $e->getMessage();
        echo "Error $error";
    }

?>