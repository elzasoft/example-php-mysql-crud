<?php $__title = 'CRUD operations in PHP'; ?><!DOCTYPE html>
<?php require_once('db.php'); ?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title><?php echo $__title; ?></title>
</head>

<body>
<h1><?php echo $__title; ?></h1>

<?php
$result = $mysqli->query("SELECT username FROM users");
$users = $result->fetch_array(MYSQLI_ASSOC);

$data = $users;
?>

<table>
  <thead>
    <tr>
      <th colspan="2">Users</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<pre style="background: grey; color: white;">
<?php var_dump($data); ?>
</pre>

</body>
</html>
