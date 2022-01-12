<?php
class dbConfig {
    protected $serverName;
    protected $userName;
    protected $password;
    protected $dbName;
    function dbConfig() {
        $this -> serverName ='localhost';
        $this -> username = 'root';
        $this -> password ='';
        $this -> dbName ='mydb';
    }
}
?>