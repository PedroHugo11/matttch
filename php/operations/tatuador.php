<?php
include_once "../config/database.php";
include_once "../model/tatuador.php";
include_once "../controller/tatuador.php";

session_start();

if (isset($_POST['save-tatuador'])) {

    $database = new Database();
    $conn = $database->getConn();

    $tatuadorController = new TatuadorController();

    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $genero = isset($_POST['genero']) ? $_POST['genero'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    $experiencia = isset($_POST['experiencia']) ? $_POST['experiencia'] : '';
    $especialidade = isset($_POST['especialidade']) ? $_POST['especialidade'] : '';
    $instagram = isset($_POST['instagram']) ? $_POST['instagram'] : '';

    $tatuador = new Tatuador($first_name, $last_name, $cidade, $estado, $genero, $email, $senha, $experiencia, $especialidade, $instagram);
    $tatuadorController->saveTatuador($tatuador, $conn);

    $_SESSION['message'] = 'tatuador cadastrado com sucesso';

    header('location: ../../login.php');

}
