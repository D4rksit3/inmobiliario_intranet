<?php
class Database {
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $dbh;
    private $error;

    public function __construct() {
        $config = require_once __DIR__ . '/../../config/config.php';
        $this->host = $config['db']['host'];
        $this->user = $config['db']['user'];
        $this->pass = $config['db']['pass'];
        $this->dbname = $config['db']['name'];

        $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function query($sql) {
        return $this->dbh->query($sql);
    }

    public function prepare($sql) {
        return $this->dbh->prepare($sql);
    }
}
