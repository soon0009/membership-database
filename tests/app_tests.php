<?php
require_once('./require.php');
require_once('./auth_test.php');

$test = &new GroupTest('All tests');
$test->addTEstCase(new TestAuth());
$test->run(new HtmlReporter());
?>
