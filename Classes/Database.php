<?php
    include_once "SessionWrapper.php";
    class Database
    {
        private $host = "localhost";
        private $user = "root";
        private $pwd = "";
        private $db = "podcast";
    
        protected $DBHandler;
    
        public function __construct()
        {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->db;
            try{
                $this->DBHandler = new PDO($dsn,$this->user,$this->pwd);
                $this->DBHandler->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                $this->DBHandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die("Database connection failed : ".$e->getMesaage());
            }
        }
    }
    SessionWrapper::start();
    //SessionWrapper::destroy();
?>