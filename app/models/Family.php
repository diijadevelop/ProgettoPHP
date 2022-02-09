<?php

namespace App\Models;
use PDOException;

class Family {
    private $pdo;
    private $table_name = "family";
    public $id;
    public $name; 
    public function __construct($pdo)
    {       
        $this->pdo=$pdo;
    }

    public function read()
    {
        $query="SELECT * FROM {$this->table_name}";
        $statement= $this->pdo->prepare($query);
        try{
            $statement->execute();
            return $statement;
        }catch(PDOException $e){
            die("Error in execution of query: " . $e->getMessage());
        }
    }
    public function create()
    {
        $query="INSERT INTO {$this->table_name} SET name=:name";
        $statement = $this->pdo->prepare($query);
        $this->name = htmlspecialchars(strip_tags($this->name));
        $statement->bindParam(':name', $this->name);
        try{
            $statement->execute();
            return $statement;
        }catch(PDOException $e){
            die("Error in execution of query: " . $e->getMessage());
        }
    }
    public function delete()
    {
        $query="DELETE FROM {$this->table_name} WHERE id=:id";
        $statement = $this->pdo->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $statement->bindParam(':id', $this->id);
        try{
            $statement->execute();
            return $statement;
        }catch(PDOException $e){
            die("Error in execution of query: " . $e->getMessage());
        }    }
    public function update()
    {
        $query="UPDATE {$this->table_name} SET name=:name WHERE id=:id";
        $statement = $this->pdo->prepare($query);
        $this->name = htmlspecialchars(strip_tags($this->name));
        $statement->bindParam(':id', $this->id);
        $statement->bindParam(':name', $this->name);
        try{
            $statement->execute();
            return $statement;
        }catch(PDOException $e){
            die("Error in execution of query: " . $e->getMessage());
        }
    }
    public function truncateTable(){
        $query="TRUNCATE {$this->table_name}";
        $statement = $this->pdo->prepare($query);
        try{
            $statement->execute();
            return $statement;
        }catch(PDOException $e){
            die("Error in execution of query: " . $e->getMessage());
        }
    }
}