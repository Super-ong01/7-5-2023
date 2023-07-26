<?php
include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./images/" . $filename;

$sql ="UPDATE tbl_member SET 
    firstname='$_POST[firstname]', 
    lastname='$_POST[lastname]' ,
    email='$_POST[email]', 
    phone='$_POST[phone]' ,
    address='$_POST[address]',
    photo='$filename'
    WHERE id='$_GET[id]' ";

if (mysqli_query($conn,$sql)) {
    echo"deleting done";
    header("location: member_show.php");
} else {
    echo "error deleting record" . mysqli_error($conn);
}

mysqli_close($conn);
?>