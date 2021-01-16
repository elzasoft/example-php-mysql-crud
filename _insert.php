<h2>CREATE (INSERT)</h2>

<form method="POST" action="index.php">
  <label for="username">
    <span class="title">Username:</span> <input type="text" name="username" id="username">
  </label>

  <label for="password">
    <span class="title">Password:</span> <input type="password" name="password" id="password">
  </label>

  <label for="fullname">
    <span class="title">Full Name:</span> <input type="text" name="fullname" id="fullname">
  </label>

  <input type="hidden" name="create" value="1">

  <label for="createButton">
    <input type="submit" value="Create" id="createButton">
  </label>
</form>

<?php
if (isset($_POST["create"])) {
  $_POST['username'] = $mysqli->real_escape_string($_POST['username']);
  $_POST['password'] = $mysqli->real_escape_string($_POST['password']);
  $_POST['fullname'] = $mysqli->real_escape_string($_POST['fullname']);


  $result = $mysqli->query(sprintf(
    "INSERT INTO `users` (`username`, `password`, `fullname`) VALUES ('%s', '%s', '%s')",
    $_POST["username"], $_POST["password"], $_POST["fullname"]
  ));

  if ($result) {
    echo '<p>OK</p>';
  } else {
    echo '<p>Error</p>';
  }
}
?>
