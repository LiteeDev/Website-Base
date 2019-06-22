<?php

  // ---------------------------
  // Database Class
  // Handles the current configuration and connections to the database
  // ---------------------------
  // Author: LiteSpeed

  class DB {

    /* Database Variables */
    public $database_username = "";
    public $database_password = "";
    public $database_host = "";
    public $database_name = "";
    public $PDO;

    public function __construct()
    {
      $this->PDO = $this->__connect();
    }

    public function __connect()
    {
      try
      {
       $odb = new PDO("mysql:host={$this->database_host};dbname={$this->database_name}",$this->database_username,$this->database_password);
       $odb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       return $odb;
      }
      catch(PDOException $e)
      {
        die("Site is unable to connect to database. Please check your Configuration and Try Again!");
      }
    }


  }

?>
