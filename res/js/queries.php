<?php
require_once 'DB.php';
class Queries{
private static $instance;
private $stmt;
private $DB_con1;
  function __construct(){
     $db = DB::getInstance();
     $DB_con1 = $db->dbcon;
     print_r($db);
  }
  public function getInstance()
  {
    if (!self::$instance) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function __clone(){}


}
