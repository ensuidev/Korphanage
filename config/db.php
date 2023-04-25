<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "orphanage");

Class DatabasePDO {
    private $host      = DB_HOST;
    private $user      = DB_USER;
    private $pass      = DB_PASS;
    private $dbname    = DB_NAME;

    public function conn(){
        try{

            $database = new PDO('mysql:host=localhost;dbname=' . $this->dbname, $this->user, $this->pass);
            if ($database) {
                return $database;
        
            }
        }catch(Exception $e){
            return "Ocurrió algo con la base de datos: " . $e->getMessage();
        }
    }
}
