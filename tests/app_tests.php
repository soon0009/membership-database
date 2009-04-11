<?php
require_once('./require.php');
require_once('./auth_test.php');
require_once('./database_test.php');

$test = &new GroupTest('All tests');
$test->addTEstCase(new TestAuth());
$test->addTEstCase(new TestDatabase());
$test->run(new HtmlReporter());
?>
