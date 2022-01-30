<?php

namespace App\Models;
//questa directory contiene i modelli degli elementi contenuti nel database
//la struttura di ogni classe deve rispettare lo schema della rispettiva tabella sul database
//devi dunque inserire gli stessi attributi

class Libro{
    private $pdo;
    private $table_name = "libri";
    public $isbm; 
    public $autore; 
    public $titolo; 
    public function __construct($pdo)
    {       
        $this->pdo=$pdo;
    }

    public function read()
    {
        $query="SELECT a.isbm, a.autore, a.titolo FROM" .$this->table_name." a ";
        $statement= $this->pdo->prepare($query);
        $statement->execute();
        return $statement;
    }
    public function insert()
    {
        # code...
    }
    public function delete()
    {
        # code...
    }
    public function update()
    {
        # code...
    }
}