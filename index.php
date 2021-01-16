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

<?php if (isset($_GET["update"]) or isset($_GET['updateId'])) { ?>
  <section class="update">
    <?php include '_update.php'; ?>
  </section>
<?php } ?>

<?php if (isset($_GET['deleteId'])) { ?>
  <section class="delete">
    <?php include '_delete.php'; ?>
  </section>
<?php } ?>

<section class="read">
  <?php include '_select.php'; ?>
</section>

<?php $data = $users; ?>

<pre style="background: grey; color: white;">
<?php var_dump($data); ?>
</pre>

</body>
</html>
