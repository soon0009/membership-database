<?php
/******************************************************************
  This test deletes data!
  Do not run on production.
******************************************************************/
require_once('./require.php');

class TestAuth extends UnitTestCase {
  function testCreateObject() {
    $cur_auth = new Auth();
    $this->assertNotNull($cur_auth);
  }
}
?>
