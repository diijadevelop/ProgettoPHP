<?php
namespace App\Models;
use PDOException;

class Calendar
{
    private $table_name = 'calendar';
    private $pdo;
    public $id;
    public $day;
    public $assigned_user;
    public $assigned_garbage;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function read()
    {
        $query = "SELECT * FROM {$this->table_name}";
        $statement = $this->pdo->prepare($query);
        try {
            $statement->execute();
            return $statement;
        } catch (PDOException $e) {
            die("Error in execution of query: " . $e->getMessage());
        }
    }

    public function update()
    {
        $query="UPDATE {$this->table_name} 
        SET assigned_user=:name, 
            assigned_garbage=:garb 
        WHERE id=:id";
        $statement = $this->pdo->prepare($query);
        $this->assigned_user = htmlspecialchars(strip_tags($this->assigned_user));
        $this->assigned_garbage = htmlspecialchars(strip_tags($this->assigned_garbage));
        $this->id = htmlspecialchars(strip_tags($this->id));
        $statement->bindParam(':id', $this->id);
        $statement->bindParam(':name', $this->assigned_user);
        $statement->bindParam(':garb', $this->assigned_garbage);
        try{
            $statement->execute();
            return $statement;
        }catch(PDOException $e){
            die("Error in execution of query: " . $e->getMessage());
        }
    }
}
