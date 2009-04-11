<?php
require_once('./require.php');

class TestMember extends UnitTestCase {
  function testAddMember() {
    $db = new Database();
    $member = new Member();
    $member->firstname = "Nigel";
    $member->lastname = "Soon";
    $member->password = "foobar";

    Helper::remove_members();
    $member->addMember();

    $sql = "SELECT count(*) as count FROM members WHERE firstname = 'Nigel'";
    $result = $db->select($sql);
    $this->assertEqual($result[0]['count'], 1);
    unset($member->firstname);
    Helper::remove_members();
    $this->assertFalse($member->addMember());
  }

  function testDelMember() {
    $db = new Database();
    $member = new Member();
    $member->firstname = "Nigel";
    $member->lastname = "Soon";
    $member->password = "foobar";

    $member->addMember();
    $member->delMember();

    $sql = "SELECT count(*) as count FROM members WHERE firstname = 'Nigel'";
    $result = $db->select($sql);
    $this->assertEqual($result[0]['count'], 0);

  }
}

?>
