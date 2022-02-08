<?php
namespace App\Models;

use PDOException;

class Garbage{
    private $table_name='garbage_type';
    private $pdo;
    public $id;
    public $name;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function read()
    {
        $sql = "SELECT name FROM {$this->table_name}";
        $statement = $this->pdo->prepare($sql);
        try{
            $statement->execute();
            return $statement;
        }catch(PDOException $e){
            die("There was an error: " . $e->getMessage());
        }
    }
}
