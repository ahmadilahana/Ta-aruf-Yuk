<?php

class Koneksi{
  public $server = "localhost";
  public $username = "root";
  public $password = "";
  public $conn;
  public $stmt;

  public function __construct()
  {
    try {
      $this->conn = new PDO("mysql:host=$this->server;dbname=db_taaruf", $this->username, $this->password);
      // set the PDO error mode to exception
      // $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully";
      // return $pdo;
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    } 
  }
  public function prepare($query)
  {
    $this->stmt = $this->conn->prepare($query);
  }
  public function execute()
  {
    $this->stmt->execute();
  }
  public function get_array()
  {
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function get_data()
  {
    $this->stmt->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }
}

// $file = new Koneksi;
?>