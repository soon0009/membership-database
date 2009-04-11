<?php
$member = new Member();
if (isset($_POST['firstname'])) {
  $member->firstname = $_POST['firstname'];
  $member->lastname = "foo";
  $member->password = "bar";
  
  $member->addMember();
  print "<h2>Added record</h2>";
}
?>
<form method="post">
  <input type="text" name="firstname" value=""/>
  <input type="submit" value="submit"/>
</form>
