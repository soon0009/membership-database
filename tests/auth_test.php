<?php
require_once('./require.php');

class TestAuth extends UnitTestCase {
  function testCreateObject() {
    $cur_auth = new Auth();
    $this->assertNotNull($cur_auth);
  }
}
?>
