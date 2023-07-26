<?php
include "connect.php";
$sql = "SELECT * FROM tbl_member WHERE id='$_GET[id]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result)
?>


<link rel="stylesheet" href="style.css">
<div class ="con">

<form action="member_update.php?id=<?php echo $row[id] ?>"method="post"enctype="multipart/form-data">
ชื่อ <input type = "text" name="firstname" value="<?php echo $row[firstname]; ?>"/><br>
นามสกุล <input type = "text" name="lastname"value="<?php echo $row[lastname]; ?>"/> <br/>
email <input type = "email" name="email"value="<?php echo $row[email]; ?>"/> <br/>
เบอร์โทร <input type = "text" name="phone"value="<?php echo $row[phone]; ?>"/> <br/>
ที่อยู่ <textarea name = "address"><?php echo $row[address]; ?></textarea><br/>
เเนบรูป <input type = "file" name="photo"value="<?php echo $row[photo]; ?>"/><br/><br/>
<input type = "submit" value="บันทึกข้อมูล"/>
</form>
</div>