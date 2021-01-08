<h2>CREATE (INSERT)</h2>

<form method="POST" action="index.php">
  <label for="username">
    Username: <input type="text" name="username" id="username">
  </label>
  <br>
  <label for="password">
    Password: <input type="password" name="password" id="password">
  </label>
  <br>
  <label for="fullname">
    Full Name: <input type="text" name="fullname" id="fullname">
  </label>
  <br>

  <input type="hidden" name="create" value="1">
  <input type="submit" value="Create">
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
