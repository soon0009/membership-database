<?php
require_once('./require.php');

class TestDatabase extends UnitTestCase {
  function testCreateObject() {
    $db = new Database();
    $this->assertNotNull($db);
  }
  function testSelect() {
        $db = new Database();
        $sql = "SELECT COUNT(*) AS count FROM members";
        $result = $db->select($sql);
        $this->assertTrue($result[0]["count"]===0);
  }
}
?>
