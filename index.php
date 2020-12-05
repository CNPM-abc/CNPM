<?php
include_once("connect.php");
session_start();

$query_schedule = "SELECT * FROM `schedule_booking` where status = 0";
$result = $mysqli->query($query_schedule);

$query_product = "SELECT * FROM `product`";
$result_product = $mysqli->query($query_product);

$query_bill = "SELECT schedule_booking.booking_name,schedule_booking.booking_contact,bill.total,bill.created_at FROM `bill` left join `schedule_booking` on schedule_booking.id = bill.booking_id";
$result_bill = $mysqli->query($query_bill);

$products = $result_product->fetch_all();
$schedules = $result->fetch_all();
$bills = $result_bill->fetch_all();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>Quản lý sân bóng</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Lịch đặt trong ngày</a></li>
        <li><a data-toggle="tab" href="#menu1">Danh sách Hóa đơn</a></li>
        <li><a data-toggle="tab" href="#menu2">Danh sách Sản phẩm</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>Lịch đặt</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_schedule" style="margin: 20px 0">
                Thêm lịch hẹn
            </button>
            <div class="modal" id="modal_add_schedule">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Thông tin lịch hẹn</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="addData.php" method="post">
                                <div class="form-row">
                                    <div class="col" style="margin: 10px 0">
                                        <label for="name">Họ và tên:</label>
                                        <input type="text" class="form-control" id="name" placeholder="Nhập tên" name="name" required>
                                    </div>
                                    <div class="col" style="margin: 10px 0">
                                        <label for="phone">Số điện thoại liên hệ:</label>
                                        <input type="number" class="form-control" placeholder="Nhập SĐT" name="phone" required>
                                    </div>
                                    <div class="col" style="margin: 10px 0">
                                        <label for="time_start">Thời gian bắt đầu:</label>
                                        <input type="datetime-local" class="form-control" name="time_start" required>
                                    </div>
                                    <div class="col" style="margin: 10px 0">
                                        <label for="time_end">Thời gian kết thúc:</label>
                                        <input type="datetime-local" class="form-control" name="time_end" required>
                                    </div>
                                    <div class="col" style="margin: 10px 0">
                                        <button type="submit" name="addSchedule" class="btn btn-primary mb-2">Thêm mới</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table-data" >
                <thead>
                <tr>
                    <th>Người đặt</th>
                    <th>Số điện thoại</th>
                    <th>Thời gian bắt đầu</th>
                    <th>Thời gian kết thúc</th>
                    <th>Chức năng</th>
                </tr>
                </thead>
                <tbody>
                    <?php if(!empty($schedules)):?>
                        <?php foreach ($schedules as $schedule):?>
                            <tr>
                                <td><?php echo $schedule[1] ?></td>
                                <td><?php echo $schedule[2] ?></td>
                                <td><?php echo $schedule[3] ?></td>
                                <td><?php echo $schedule[4] ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modal_schedule_<?php echo $schedule[0]?>">
                                        Thanh toán
                                    </button>
                                    <div class="modal" id="modal_schedule_<?php echo $schedule[0]?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Thanh toán hóa đơn</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form action="payment.php" method="post">
                                                        <label class="mr-sm-2">Thanh toán hóa đơn cho: </label>
                                                        <input type="text" name="id_schedule" value="<?php echo $schedule[0]?>" hidden>
                                                        <input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $schedule[1]?>" disabled style="margin-bottom: 20px">
                                                        <label class="mr-sm-2">Giờ bắt đầu: </label>
                                                        <input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $schedule[3]?>" disabled style="margin-bottom: 20px">
                                                        <label class="mr-sm-2">Giờ kết thúc: </label>
                                                        <input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $schedule[4]?>" disabled style="margin-bottom: 20px">
                                                        <label class="mr-sm-2">Thời gian sử dụng: </label>
                                                        <?php
                                                        $timestamp_time_start = strtotime($schedule[3]);
                                                        $timestamp_time_end = strtotime($schedule[4]);
                                                        $timestamp_use = $timestamp_time_end-$timestamp_time_start;
                                                        $min = intval($timestamp_use / 60);
                                                        ?>
                                                        <input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $min.' Phút'?>" disabled style="margin-bottom: 20px">
                                                        <label class="mr-sm-2">Tổng tiền: </label>
                                                        <?php
                                                        $price_per_minute = 2000;
                                                        $total = number_format($price_per_minute *$min, 0, '', ',')
                                                        ?>
                                                        <input type="text" name="total_money" value="<?php echo $price_per_minute *$min;?>" hidden>
                                                        <input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $total.' VNĐ'; ?>" disabled style="margin-bottom: 20px">
                                                        <input type="submit" class="btn btn-success"  name="payment" value="Thanh toán">
                                                    </form>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    <?php endif;?>
                </tbody>
            </table>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>Hóa đơn</h3>
            <table class="table-data" >
                <thead>
                <tr>
                    <th>Khách hàng</th>
                    <th>Liên hệ</th>
                    <th>Thời gian thanh toán</th>
                    <th>Tổng hóa đơn</th>
                </tr>
                </thead>
                <tbody>
                <?php $stt_bill = 0;?>
                <?php if(!empty($bills)):?>
                    <?php foreach ($bills as $bill):?>
                        <tr>
                            <td><?php echo $bill[0] ?></td>
                            <td><?php echo $bill[1] ?></td>
                            <td><?php echo $bill[3] ?></td>
                            <td><?php echo number_format($bill[2], 0, '', ','); ?></td>
                        </tr>
                    <?php endforeach;?>
                <?php endif;?>
                </tbody>
            </table>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Sản phẩm</h3>
            <table class="table-data" >
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Giá</th>
                </tr>
                </thead>
                <tbody>
                <?php $stt_product = 0;?>
                <?php if(!empty($products)):?>
                    <?php foreach ($products as $product):?>
                        <tr>
                            <td><?php echo $stt_product+=1 ?></td>
                            <td><?php echo $product[1] ?></td>
                            <td><?php echo number_format($product[2], 0, '', ','); ?></td>
                        </tr>
                    <?php endforeach;?>
                <?php endif;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.table-data').DataTable();
    } );
</script>
</body>
</html>