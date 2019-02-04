<?php

$conn=mysqli_connect("localhost", "root", "", "wechat");
if (!$conn) {
	die("connection failed".mysqli_connect_error());
}
?>