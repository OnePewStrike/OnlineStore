<?php
  class DatabaseController {
    private function connect() {
      try {
        $username = "root";
        $password = "";
        $dbh = new PDO('mysql:host=localhost;dbname=online_store', $username, $password);
        return $dbh;
      } catch (PDOException $e) {
        print "Error: " . $e->getMessage() . "<br/>";
        die();
      }
    }

  }
?>