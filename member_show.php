<link rel="stylesheet" href = "style.css"/>
<?php
  include "connect.php";
  
  $sql = "SELECT * FROM tbl_member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  ?>
  <table class="table"> 
    <th>ชื่อ - นามสกุล </th>
    <th>อีเมล </th>
    <th>เบอร์โทร</th>
    <th>ที่อยู่</th>
    <th>edit</th>
    <th>delete</th>
  <?php
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo"$row[firstname] $row[lastname]"; ?> </td>
      <td><?php echo"$row[email]"; ?> </td>
      <td><?php echo"$row[phone]"; ?> </td>
      <td><?php echo"$row[address]"; ?> </td>
      <td><?php echo"<a href='member_edit.php?id=$row[id]'>edit</a>"; ?></td>
      <td><?php echo"<a href='member_del.php?id=$row[id]'>delete</a>"; ?></td>
  </tr>
  <?php
  }
  ?>
  </table>
  <?php
} else {
  echo "0 results";
}

mysqli_close($conn);                              # <table style="border:1px solid#990055">กรอบ style sheet เเบบ in line (solid เส้นทึบ)(tr เเถว)(td คอลัม)(th หัวข้อ)
?>