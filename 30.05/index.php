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
$sql = "SELECT * FROM sanpham";

/**
 * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query
 *
 */

$result = mysqli_query($connection, $sql);



?>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            <div style="margin: 30px 0">
                <a href="create.php" class="btn btn-success">Thêm mới sản phẩm</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Giá tiền</th>
                    <th scope="col">Tồn kho</th>
                    <th scope="col">Nhà cung cấp</th>
                    <th scope="col">Ngày tạo</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']?></th>
                            <td><?php echo $row['ten']?></td>
                            <td><?php echo $row['giatien']?></td>
                            <td><?php echo $row['tonkho']?></td>
                            <td><?php echo $row['nhacungcap']?></td>
                            <td><?php echo $row['ngaytao']?></td>
                            <td>
                                <div>
                                    <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id'] ?>">Sửa sản phẩm</a>
                                </div>

                                <div>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Xóa sản phẩm</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                } else{
                    echo "<br> Không có bản ghi nào trong CSDL";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>