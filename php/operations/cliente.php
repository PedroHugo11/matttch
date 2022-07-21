<?php
include_once "../config/database.php";
include_once "../model/cliente.php";
include_once "../controller/cliente.php";

session_start();

if(isset($_POST['saveCliente'])) {

    $database = new Database();
    $conn = $database->getConn();

    $clienteController = new ClienteController();
  
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $genero = isset($_POST['genero']) ? $_POST['genero'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    $cliente = new Cliente ($first_name, $last_name, $cidade, $estado, $genero, $email, $senha);
    $clienteController->saveCliente($cliente, $conn);

    $_SESSION['message'] = 'Trabalho submetido com sucesso';

    header('location: ../../login.php');
    
} elseif(isset($_POST['delete-noticia'])) {

    $database = new Database();
    $conn = $database->getConn();

    $id = isset($_POST['delete-noticia']) ? $_POST['delete-noticia'] : '';

    if(empty($id)) {
        $message = "Desculpe, aconteceu um erro com o seu envio.";
        $_SESSION['message'] = $message;
        header('location: ../../adm/tabelaNoticia.php');
        exit;
    }

    $noticiaController = new NoticiaController();
    $noticia = new Noticia (null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null , null, $id);
    $success = $noticiaController->deleteNoticia($noticia, $conn);

    header('location: ../../adm/tabelaNoticia.php');
}
    
?>