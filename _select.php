<h2>READ (SELECT)</h2>

<table>
  <thead>
    <tr>
      <th>Username</th>
      <th>Fullname</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $result = $mysqli->query("SELECT id, username, fullname FROM users");

    $users = array();
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
        ?>
        <tr>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['fullname']; ?></td>
          <td><a href="index.php?updateId=<?php echo $row['id']; ?>">UPDATE</a></td>
          <td><a href="index.php?deleteId=<?php echo $row['id']; ?>">DELETE</a></td>
        </tr>
        <?php
      }
    }
    ?>
  </tbody>
</table>
