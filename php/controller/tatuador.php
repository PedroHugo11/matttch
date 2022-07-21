<?php
/**
 * Requires 
 * model/usuario.php and
 * config/database.php
 * to works perfectly
 */
class TatuadorController  
{

    public function saveTatuador($tatuador, $conn) {
        $sql = "INSERT INTO ".TatuadorEntries::TBNAME."(".TatuadorEntries::FIRSTNAME.", ".TatuadorEntries::LASTNAME.", ".TatuadorEntries::CIDADE.", ".TatuadorEntries::ESTADO.", ".TatuadorEntries::GENERO.", ".TatuadorEntries::EMAIL.", ".TatuadorEntries::SENHA.", ".TatuadorEntries::EXPERIENCIA.", ".TatuadorEntries::INSTAGRAM.") VALUES (:first_name, :last_name, :cidade, :estado, :genero, :email, :senha, :experiencia, :especialidade, :instagram)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":first_name", $tatuador->getFirstName());
        $stmt->bindValue(":last_name", $tatuador->getLastName());
        $stmt->bindValue(":cidade", $tatuador->getCidade());
        $stmt->bindValue(":estado", $tatuador->getEstado());
        $stmt->bindValue(":genero", $tatuador->getGenero());
        $stmt->bindValue(":email", $tatuador->getEmail());
        $stmt->bindValue(":senha", $tatuador->getSenha());
        $stmt->bindValue(":experiencia", $tatuador->getExperiencia());
        $stmt->bindValue(":especialidade", $tatuador->getEspecialidade());
        $stmt->bindValue(":instagram", $tatuador->getInstagram());
        
        return $stmt->execute(); 
    }

    public function getTatuador($tatuador, $conn) {
        $sql = "SELECT * FROM ".TatuadorEntries::TBNAME." WHERE ".TatuadorEntries::EMAIL." = :email AND ".TatuadorEntries::SENHA." = :senha";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":email", $tatuador->getEmail());
        $stmt->bindValue(":senha", $tatuador->getSenha());
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "tatuador", array(TatuadorEntries::FIRSTNAME,TatuadorEntries::LASTNAME,TatuadorEntries::CIDADE,TatuadorEntries::ESTADO,TatuadorEntries::GENERO,TatuadorEntries::EMAIL,TatuadorEntries::SENHA,TatuadorEntries::EXPERIENCIA,TatuadorEntries::INSTAGRAM));
        $stmt->execute(); 
        return $stmt->fetchAll();
    }

    
}

class TatuadorEntries 
{
    const TBNAME = "tatuador";
    const FIRSTNAME = "first_name";
    const LASTNAME = "last_name";
    const CIDADE = "cidade";
    const ESTADO = "estado";
    const GENERO = "genero";
    const EMAIL = "email";
    const SENHA = "SENHA";
    const EXPERIENCIA = "experiencia";
    const INSTAGRAM = "instagram";
}

?>