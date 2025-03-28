<?php
require_once 'db.php';

class Model{
    static function getUsers()
        {
            global $pdo;
            $stmt = $pdo->query("SELECT * FROM classement");
            return $stmt->fetchAll();
        }
    
}

$users = Model::getUsers()

?>
