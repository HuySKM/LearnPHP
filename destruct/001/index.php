<?php
session_start();
require_once 'User.class.php';

$user = new User('Huy', '12345678');
echo "<br> HELLO WORLD";
?>

<h1>Hàm Destruct được chạy khi các lớp được khởi tạo nhưng nó sẽ chạy và thực thi các lệnh ở trong đó ở cuối trang</h1>
