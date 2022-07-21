<?php
include_once "../config/database.php";
include_once "../model/tatuador.php";
include_once "../controller/tatuador.php";
include_once "../model/cliente.php";
include_once "../controller/cliente.php";

session_start();

if (isset($_SESSION["adm"])) {
    header("location: ../../dashboard.html");
}

if(isset($_POST["login-button"])) {

    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";


    if(!empty($email) && !empty($senha)) {
        $database = new Database();
        $conn = $database->getConn();
        
        if($conn != null) {

            $tatuador = new Tatuador(null, null, null, null, null, $email, $senha, null, null, null);
            $cliente = new Cliente(null, null, null, null, null, $email, $senha);

            $clienteController = new ClienteController();
            $tatuadorController = new TatuadorController();

            $tatuador = $tatuadorController->getTatuador($tatuador, $conn);
            $cliente = $clienteController->getCliente($cliente, $conn);

            if($cliente) {
                $_SESSION["adm"] = true;
                $_SESSION["admName"] = $cliente;
                header("location: ../../dashboard.php");
            } else if($tatuador) {
                $_SESSION["adm"] = true;
                $_SESSION["admName"] = $tatuador;
                header("location: ../../dashboard.php");
            } else {
                $_SESSION["login_msg"] = "Usuário/Senha incorretos.";
                header("location: ../../index.php");
            }
        }
    } else {
        $_SESSION["login_msg"] = "Dados não preenchidos. Preencha os dados e tente novamente.";
        header("location: ../../login.php");
    }
    
}

?>