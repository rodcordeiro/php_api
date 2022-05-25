<?php
class DBClass {

    private $host = getenv('CONN_URI');
    private $username = getenv('CONC_MYSQL_USER');
    private $password = getenv('CONC_MYSQL_PASSWORD');
    private $database = getenv('CONC_MYSQL_DATABASE');

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
