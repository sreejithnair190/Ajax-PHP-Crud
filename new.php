<?php
$conn = mysqli_connect("localhost", "root", "", "test2");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql = "INSERT INTO users('fname','lname','email','phone') VALUES('$fname','$lname','$email',$phone)";
mysqli_query($conn, $sql);
?>