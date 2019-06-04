<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php

include_once "config.php";
$ten = '';
$giatien = '';
$tonkho = '';
$nhacungcap = '';
$ngaytao = '';

if (isset($_GET['id'])){
    $id_sanpham = (int) $_GET['id'];
    $sqlSelect = "SELECT * FROM sanpham WHERE id = " . $id_sanpham;
    $result = mysqli_query($connection, $sqlSelect);
    $row = mysqli_fetch_assoc($result);

    $ten = isset($row['ten']) ? $row['ten'] : '';
    $giatien = isset($row['giatien']) ? $row['giatien'] : '';
    $tonkho = isset($row['tonkho']) ? $row['tonkho'] : '';
    $nhacungcap = isset($row['nhacungcap']) ? $row['nhacungcap'] : '';
    $ngaytao = isset($row['ngaytao']) ? $row['ngaytao'] : '';
}
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa sản phẩm</h1>
            <div>
                <form name="update" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo (int) $_GET['id'] ?>">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="ten" value="<?php echo $ten?>">

                    </div>
                    <div class="form-group">
                        <label>Giá tiền</label>
                        <input type="text" class="form-control" name="giatien" value="<?php echo $giatien?>">

                    </div>
                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="tonkho" value="<?php echo $tonkho?>">

                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="nhacungcap" value="<?php echo $nhacungcap?>">

                    </div>
                    <div class="form-group">
                        <label>Ngày tạo</label>
                        <input type="date" class="form-control" name="ngaytao" value="<?php echo $ngaytao?>">

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>