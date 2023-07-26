<link rel="stylesheet" href="style.css">
<div class="con">
<form action="member_insert.php"method="post"enctype="multipart/form-data">
ชื่อ <input type = "text" name="firstname"/><br>
นามสกุล <input type = "text" name="lastname"/> <br/>
email <input type = "email" name="email"/> <br/>
password ไม่ลับ <input type="text" name="password"><br/>
เบอร์โทร <input type = "text" name="phone"/> <br/>
ที่อยู่ <textarea name = "address"></textarea><br/>
เเนบรูป <input type = "file" name="photo"/> <br/>
<input type = "submit" value="บันทึกข้อมูล"/>
</form>
</div>