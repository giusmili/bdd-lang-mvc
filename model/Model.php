<?php
require_once 'db.php';

class Model{
    static function getUsers()
        {
            global $pdo;
            $stmt = $pdo->query("SELECT * FROM top_10_langages_2024");
            return $stmt->fetchAll();
        }
    
}

$users = Model::getUsers()

?>
