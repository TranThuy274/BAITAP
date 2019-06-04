<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 5/30/2019
 * Time: 9:05 PM
 */

include_once "config.php";
if (isset($_POST['id']) && isset($_POST['ten']) && isset($_POST['giatien']) && isset($_POST['tonkho']) && isset($_POST['nhacungcap']) && isset($_POST['ngaytao'])){
    if($_POST['ten'] && ($_POST['giatien'] > 0) && ($_POST['tonkho'] > 0) && $_POST['nhacungcap'] && $_POST['ngaytao']){
        $ten = $_POST['ten'];
        $giatien = $_POST['giatien'];
        $tonkho = $_POST['tonkho'];
        $nhacungcap = $_POST['nhacungcap'];
        $ngaytao = $_POST['ngaytao'];

        $sqlUpdate = "UPDATE sanpham SET ten='$ten',giatien=$giatien,tonkho=$tonkho, nhacungcap='$nhacungcap', ngaytao=$ngaytao WHERE id = " . (int) $_POST['id'];
        if(mysqli_query($connection, $sqlUpdate)){
            echo "Update thành công";
            /**
             * hàm header được dùng để chuyển hướng url
             */
            header('Location: index.php');
            exit();
        } else {
            echo "Update thất bại";
        }
    }
}