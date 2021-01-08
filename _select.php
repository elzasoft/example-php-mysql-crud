<h2>READ (SELECT)</h2>

<table>
  <thead>
    <tr>
      <th colspan="2">Users</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $result = $mysqli->query("SELECT username, fullname FROM users");

    $users = array();
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
        ?>
        <tr>
          <td><?php echo $row['username'] ?></td>
          <td><?php echo $row['fullname'] ?></td>
        </tr>
        <?php
      }
    }
    ?>
  </tbody>
</table>
