<?php
include_once("connect.php");
session_start();

if(isset($_POST)){
    $id_schedule = $_POST['id_schedule'];
    $total = $_POST['total_money'];

    mysqli_query($mysqli, "INSERT INTO `bill` (`booking_id`, `total`) 
            VALUES ('$id_schedule','$total')");
    mysqli_query($mysqli, "UPDATE `schedule_booking` SET `status` = '1' WHERE `schedule_booking`.`id` = '$id_schedule';");

}

?>
<a href="index.php"><h4>Thanh toán thành công! Quay lại trang chủ</h4></a>
