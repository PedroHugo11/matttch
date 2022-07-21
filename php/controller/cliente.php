<?php
/**
 * Requires 
 * model/user.php and
 * config/database.php
 * to works perfectly
 */
class ClienteController  
{
    
    public function saveCliente($cliente, $conn) {
        $sql = "INSERT INTO ".ClienteEntries::TBNAME."(".ClienteEntries::FIRSTNAME.", ".ClienteEntries::LASTNAME.", ".ClienteEntries::CIDADE.", ".ClienteEntries::ESTADO.", ".ClienteEntries::GENERO.", ".ClienteEntries::EMAIL.", ".ClienteEntries::SENHA.") VALUES (:first_name, :last_name, :cidade, :estado, :genero, :email, :senha)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":first_name", $cliente->getFirstName());
        $stmt->bindValue(":last_name", $cliente->getLastName());
        $stmt->bindValue(":cidade", $cliente->getCidade());
        $stmt->bindValue(":estado", $cliente->getEstado());
        $stmt->bindValue(":genero", $cliente->getGenero());
        $stmt->bindValue(":email", $cliente->getEmail());
        $stmt->bindValue(":senha", $cliente->getSenha());
        
        return $stmt->execute(); 
    }
        
    public function getCliente($cliente, $conn) {
        $sql = "SELECT * FROM ".ClienteEntries::TBNAME." WHERE ".ClienteEntries::EMAIL." = :email AND ".ClienteEntries::SENHA." = :senha";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":email", $cliente->getEmail());
        $stmt->bindValue(":senha", $cliente->getSenha());
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "cliente", array(ClienteEntries::FIRSTNAME,ClienteEntries::LASTNAME,ClienteEntries::CIDADE,ClienteEntries::ESTADO,ClienteEntries::GENERO,ClienteEntries::EMAIL,ClienteEntries::SENHA));
        $stmt->execute();
        
        return $stmt->fetch();
    }
    
    /**
    *public function getUserInformation($galeria, $conn) {
    *    $sql = "SELECT * FROM ".FuncionarioEntries::TBNAME." WHERE ".FuncionarioEntries::ID." = :cpf";
    *    $stmt = $conn->prepare($sql);
    *    $stmt->bindValue(":cpf", $galeria->getCpf());
    *    $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "User", array(FuncionarioEntries::ID,FuncionarioEntries::NAME,FuncionarioEntries::PASSWORD,FuncionarioEntries::EMAIL,FuncionarioEntries::PHONE,FuncionarioEntries::ESTADO,FuncionarioEntries::COURSE,FuncionarioEntries::FORMATION));
    *    $stmt->execute(); 
    *    return $stmt->fetch();
    *}
    */
    
}

class ClienteEntries 
{
    const TBNAME = "cliente";
    const FIRSTNAME = "first_name";
    const LASTNAME = "last_name";
    const CIDADE = "cidade";
    const ESTADO = "estado";
    const GENERO = "genero";
    const EMAIL = "email";
    const SENHA = "senha";
}

?>