<?php $__title = 'CRUD operations in PHP'; ?><!DOCTYPE html>
<?php require_once('lib/class.dbglog.php'); ?>
<?php require_once('db.php'); ?>
<html>
<head>
  <?php require_once('_common.php'); ?>
</head>

<body>
<h1><?php echo $__title; ?></h1>

<p><a href="index.php">Refresh</a></p>

<section class="create">
  <?php include '_insert.php'; ?>
</section>
<?php include '_update.php'; ?>
<?php include '_delete.php'; ?>
<?php include '_select.php'; ?>
<?php $data = $users; ?>

<pre style="background: grey; color: white;">
<?php var_dump($data); ?>
</pre>

</body>
</html>
