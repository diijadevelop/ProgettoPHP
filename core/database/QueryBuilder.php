<?php
namespace Core\Database;
use FFI\Exception;
use PDO;

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function newDatabase($db_name){
        $sql= "CREATE DATABASE ".$db_name;
        $query=$this->pdo->prepare($sql);
        try{
            $query->execute();
            echo"Database $db_name created";
            return $query;

        }catch(Exception $e){
            die('Whooops, something went wrong.');
        }
    }

    public function newTable($table_name, array $parameters)
    {
        $sql = sprintf(
            'CREATE TABLE IF NOT EXISTS %s(%s)',
        $table_name,
        implode(',', $parameters)
        );
        try{
            $query= $this->pdo->prepare($sql);
            $query->execute();
            echo"Table $table_name created";
            return $query;
        }catch(Exception $e){
            die('Whooops, something went wrong.');
        }
    }

    public function deleteTable($table_name)
    {
        $sql="DROP TABLE {$table_name}";
        try{
            $query=$this->pro->prepare($sql);
            $query->execute($sql);
            echo"Table $table_name deleted";
            return $query;

        }catch(Exception $e){
            die('Whooops, something went wrong.');
        }
    }

    public function selectAll($table)
    {
        $sql = "SELECT * FROM {$table}";
        try{
            $query = $this->pdo->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_CLASS);
        }catch(Exception $e){
            die('Whooops, something went wrong.');
        } 

    }    
    
    public function selectAll_array($table)
    {
        $sql = "SELECT * FROM {$table}";
        try{
            $query = $this->pdo->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            die('Whooops, something went wrong.');
        } 

    }


    public function selectLastRow($table)
    {
        $sql = "SELECT * FROM {$table} ORDER BY id DESC LIMIT 1";
        try{
            $query = $this->pdo->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_CLASS);
        }catch(Exception $e){
            die('Whooops, something went wrong.');
        } 

    }

    public function showTables()
    {
        $sql = "SHOW TABLES";
        try{
            $query = $this->pdo->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_CLASS);
        }catch(Exception $e){
            die('Whooops, something went wrong.');
        } 

    }

    public function deleteDatabase($db_name)
    {
        $sql="DROP DATABASE {$db_name}";
        try{
            $query=$this->pdo->prepare($sql);
            $query->execute();
            echo"Database $db_name deleted";
            return $query;

        }catch(Exception $e){
            die('Whooops, something went wrong.');
        }
    }

    public function insertIntoDB($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s(%s) VALUES (%s)',
        $table,
        implode(',', array_keys($parameters)),
         ':' . implode(', :', array_keys($parameters))
        );
        try{
            $statement = $this->pdo->prepare($sql);
            $statement -> execute($parameters);
        }catch(Exception $e){
            die('Whooops, something went wrong.');
        }       
    }

    public function truncateTable($table)
    {
        $sql = "TRUNCATE {$table}";
        try{
            $query=$this->pdo->prepare($sql);
            $query->execute();
            echo"Your datas have been deleted from $table successfully.";
            return $query;
        }catch(Exception $e){
            die('Whooops, something went wrong.');
        }
    }
}
