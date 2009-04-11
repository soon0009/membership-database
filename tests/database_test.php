<?php
require_once('./require.php');

class TestDatabase extends UnitTestCase {
  function testCreateObject() {
    $db = new Database();
    $this->assertNotNull($db);
  }
}
?>
