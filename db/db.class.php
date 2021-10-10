<?php
class DBClass {

    private $host = "localhost";
    private $username = "id8060145_cordeiro";
    private $password = "@Drigo13";
    private $database = "id8060145_conceptive";

    public $connection;

    // get the database connection
    public function getConnection(){

        $this->connection = null;

        try{
            $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
            $this->connection->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Error: " . $exception->getMessage();
        }

        return $this->connection;
    }
}
?>
