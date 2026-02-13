<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<h2>All Users</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>
<tr>
    <td>
  <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
  <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>
<?php } ?>
</table>
