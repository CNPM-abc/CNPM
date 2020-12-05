<?php
include_once("connect.php");
session_start();

if(isset($_POST)){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $time_start = str_replace("T"," ",$_POST['time_start']);
    $time_end = str_replace("T"," ",$_POST['time_end']);

    mysqli_query($mysqli, "INSERT INTO `schedule_booking` (`booking_name`, `booking_contact`, `time_start`,`time_end`) 
            VALUES ('$name','$phone','$time_start','$time_end')");
}

?>
<a href="index.php"><h4>Thêm thành công! Quay lại trang chủ</h4></a>
