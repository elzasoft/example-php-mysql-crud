<?php $__title = 'CRUD operations in PHP'; ?><!DOCTYPE html>
<?php require_once('lib/class.dbglog.php'); ?>
<?php require_once('db.php'); ?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title><?php echo $__title; ?></title>
</head>

<body>
<h1><?php echo $__title; ?></h1>

<p><a href="index.php">Refresh</a></p>

<?php include '_insert.php'; ?>
<?php include '_update.php'; ?>
<?php include '_select.php'; ?>
<?php $data = $users; ?>

<pre style="background: grey; color: white;">
<?php var_dump($data); ?>
</pre>

</body>
</html>
