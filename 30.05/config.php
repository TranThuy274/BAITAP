<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 5/30/2019
 * Time: 7:09 PM
 */

/**
 * Tạo ra 4 hằng số để kết nối db
 *
 */

//cách khai bảo hằng số
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "baitap");

$connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
/**
 * Kiểm tra xem kết nối có thành công không
 * nếu không thành công thì ngắn chương trình
 */

if(!$connection){
    die("Kết nối CSDL lỗi : " . mysqli_connect_error());
}
