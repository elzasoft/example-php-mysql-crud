<h2>DELETE (DELETE)</h2>

<?php
if (isset($_GET["deleteId"])) {
  $result = $mysqli->query(sprintf(
    "DELETE FROM `users` WHERE id = %d",
    $_GET['deleteId']
  ));

  if ($result) {
    echo '<p>OK</p>';
  } else {
    echo '<p>Error</p>';
  }
}
?>
