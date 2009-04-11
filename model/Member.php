<?php
class Member {
  public $firstname;
  public $lastname;
  public $password;
  private $db;

  function __construct() {
    $this->db = new Database();
  }

  function addMember() {
    if (!$this->validMemberData()) {
      return false;
    }
    $sql = "INSERT INTO members (firstname, lastname, password) " .
           "VALUES ('{$this->firstname}','{$this->lastname}','{$this->password}') ";
    $this->db->sql_run($sql);
    return true;
  }

  function delMember() {
    if (!$this->validMemberData()) {
      return false;
    }
    $sql = "DELETE FROM members WHERE " .
           "firstname = '{$this->firstname}'";
    $this->db->sql_run($sql);
    return true;
  }

  function validMemberData() {
    if (!isset($this->firstname) || trim($this->firstname) == "") {
      return false;
    }
    if (!isset($this->lastname) || trim($this->lastname) == "") {
      return false;
    }
    if (!isset($this->password) || trim($this->password) == "") {
      return false;
    }
    return true;
  }
}
?>
