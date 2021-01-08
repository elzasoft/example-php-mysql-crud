<h2>UPDATE (UPDATE)</h2>

<?php
if (isset($_GET["update"])) {
  $result = $mysqli->query(sprintf(
    "UPDATE `users` SET `fullname` = '%s' WHERE `id` = %d",
    $_POST['fullname'], $_GET['updateId']
  ));

  if ($result) {
    echo '<p>OK</p>';
  } else {
    echo '<p>Error</p>';
  }
}
?>

<?php if (isset($_GET['updateId'])) { ?>
  <?php
  $result = $mysqli->query(sprintf("SELECT username, fullname FROM users where id = '%d'", $_GET['updateId']));
  $user = $result->fetch_assoc();
  ?>

  <form method="POST" action="index.php?updateId=<?php echo $_GET['updateId']; ?>&update=1">
    <label for="username">
      Username: <input type="text" name="username" id="username" disabled="disabled" value="<?php echo $user['username']; ?>">
    </label>
    <br>
    <label for="fullname">
      Full Name: <input type="text" name="fullname" id="fullname" value="<?php echo $user['fullname']; ?>">
    </label>
    <br>

    <input type="submit" value="Update">
  </form>
<?php } ?>
