<?php
/**
 * Requires 
 * model/usuario.php and
 * config/database.php
 * to works perfectly
 */
class UsuarioController 
{

    public function saveUsuario($usuario, $conn) {
        $sql = "INSERT INTO ".UsuarioEntries::TBNAME."(".UsuarioEntries::MATRICULA.", ".UsuarioEntries::NOME.", ".UsuarioEntries::EVENTO.", ".UsuarioEntries::DATA.", ".UsuarioEntries::MES.", ".UsuarioEntries::ANO.")
        VALUES (:matricula, :nome, :evento, :data, :mes, :ano)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":matricula", $usuario->getMatricula());
        $stmt->bindValue(":nome", $usuario->getNome());
        $stmt->bindValue(":evento", $usuario->getEvento());
        $stmt->bindValue(":data", $usuario->getData());
        $stmt->bindValue(":mes", $usuario->getMes());
        $stmt->bindValue(":ano", $usuario->getAno());
        
        return $stmt->execute(); 
    }

    public function deleteUsuario($usuario, $conn) {
        $sql = "DELETE FROM ".UsuarioEntries::TBNAME." WHERE ".UsuarioEntries::MATRICULA." = :matricula";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":matricula", $usuario->getMatricula());
        return $stmt->execute();
    }
    
    public function getUsuario($conn) {
        $sql = "SELECT * FROM ".UsuarioEntries::TBNAME;
        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Usuario", array(UsuarioEntries::MATRICULA,UsuarioEntries::NOME,UsuarioEntries::EVENTO,UsuarioEntries::DATA,UsuarioEntries::MES, UsuarioEntries::ANO));
        $stmt->execute(); 
        return $stmt->fetchAll();
    }

    public function gerarCertificado($documento, $conn) {
        $sql = "SELECT * FROM ".UsuarioEntries::TBNAME." WHERE ".UsuarioEntries::MATRICULA." = :matricula";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":matricula", $documento->getMatricula());
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Usuario", array(UsuarioEntries::MATRICULA,UsuarioEntries::NOME,UsuarioEntries::EVENTO,UsuarioEntries::DATA,UsuarioEntries::MES, UsuarioEntries::ANO));
        $stmt->execute(); 
        return $stmt->fetch();
    }

    
}

class UsuarioEntries 
{
    const TBNAME = "usuario";
    const MATRICULA = "matricula";
    const NOME = "nome";
    const EVENTO = "evento";
    const DATA = "data";
    const MES = "mes";
    const ANO = "ano";
}

?>