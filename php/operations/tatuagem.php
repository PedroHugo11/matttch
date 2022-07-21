<?php
include_once "../config/database.php";
include_once "../model/Galeria.php";
include_once "../controller/Galeria.php";

session_start();

if(isset($_POST['galeria-button'])) {

    $database = new Database();
    $conn = $database->getConn();

    $galeriaController = new GaleriaController();

    $emissor = isset($_POST['emissor']) ? $_POST['emissor'] : '';
    $dia = isset($_POST['dia']) ? $_POST['dia'] : '';
    $mes = isset($_POST['mes']) ? $_POST['mes'] : '';
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
    $legenda = isset($_POST['legenda']) ? $_POST['legenda'] : '';
    $id = isset($_POST['cod']) ? $_POST['cod'] : '';


    if(empty($titulo) || empty($id) || empty($legenda)) {
        $message = "Desculpe, mas sentimos falta de alguns dados, insira os dados corretamente e tente novamente.";
        $_SESSION['message'] = $message;
        header('location: ../../adm/areaImagem.php');
    }

    $_UP['folder'] = '/../../arquivos/galeria/';
    $_UP['size'] = 1024 * 1024 * 50; // 50MB
    
    $_UP['error'][0] = 'Não houve erro';
    $_UP['error'][1] = 'O arquivo no upload é maior do que o limite permitido';
    $_UP['error'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
    $_UP['error'][3] = 'O upload do arquivo foi feito parcialmente';
    $_UP['error'][4] = 'Não foi feito o upload do arquivo';

    $message = null;

    if ($_FILES['img']['error'] > 0) {
        $message = "Desculpe, aconteceu um erro com o seu envio. Erro: ".$_UP['error'][$_FILES['img']['error']];
        $_SESSION['message'] = $message;
        header('location: ../../adm/areaImagem.php');
        exit;
    }

    $extension = explode(".", $_FILES['img']['name']);
    $extension = strtolower(end($extension));
    
    if ($_UP['size'] < $_FILES['img']['size']) {
        $message = "Envie o arquivo com, no máximo, 50 MB. O arquivo enviado possuía: ".($_FILES['img']['size']/1024*1024)." MB";
        $_SESSION['message'] = $message;
        header('location: ../../adm/areaImagem.php');
        exit;
    }
    
    $filename = md5(time()).".".$extension;

    if(is_uploaded_file($_FILES['img']['tmp_name'])) {

        $success = move_uploaded_file($_FILES['img']['tmp_name'], dirname(__FILE__) . $_UP['folder'] . $filename);

        if($success) {
            $link = "arquivos/galeria/".$filename;

            $galeria = new Galeria($emissor, $dia, $mes, $titulo, $link , $legenda, $id);
            $success = $galeriaController->saveGaleria($galeria, $conn);
            
            $_SESSION['message'] = 'Trabalho submetido com sucesso';
        } else {
            $_SESSION['message'] = 'Desculpe-nos, mas houve um erro desconhecido com seu upload. Tente novamente mais tarde.';
        }
    } else {
        $_SESSION['message'] = 'Desculpe-nos, mas não conseguimos salvar o seu arquivo no armazenamento interno do servidor.';
    }

    header('location: ../../adm/areaImagem.php');
    
} elseif(isset($_POST['delete-galeria'])) {

    $database = new Database();
    $conn = $database->getConn();

    $id = isset($_POST['delete-galeria']) ? $_POST['delete-galeria'] : '';

    if(empty($id)) {
        $message = "Desculpe, aconteceu um erro com o seu envio.";
        $_SESSION['message'] = $message;
        header('location: ../../adm/tabelaGaleria.php');
        exit;
    }

    $galeriaController = new GaleriaController();
    $galeria = new Galeria(null, null, null, null, null, null, $id);
    $success = $galeriaController->deleteGaleria($galeria, $conn);

    header('location: ../../adm/tabelaGaleria.php');
}
    
?>