<?php
class Database {
  private $dbuser;
  private $dbpass;
  private $dbname;
  private $server;

  function __construct() {
    $this->server = $_SERVER['SERVER_NAME'];
    $this->dbuser = "memberadmin";
    $this->dbpass = "qwerty";
    $this->dbname = "membership";
  }

  private function connect() {
    $connection = mysql_connect($this->db_server, $this->db_user, $this->db_pass);
    if (!$connection) {
      die('Error: ' . mysql_error());
    }
    $db_result = mysql_select_db($this->db_name, $connection);
    if (!$db_result) {
      die('Error selecting db: ' . mysql_error());
    }
    return $connection;
  }

  function select($query) {
    $query_result = false;
    $connection = $this->connect();
    $result = mysql_query($query, $connection);
    if (!$result) {
      die('Error: ' . mysql_error());
    }
    while ($row = mysql_fetch_assoc($result)) {
      $query_result[] = $row;
    }
    
    mysql_close($connection);
    return $query_result;
  }

  function sql_run($query) {
    $connection = $this->connect();
    $result = mysql_query($query, $connection);
    if (!$result) {
      die('Error: ' . mysql_error());
    }
    mysql_close($connection);
  }
}
?>
