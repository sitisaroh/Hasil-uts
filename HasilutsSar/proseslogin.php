<?php
is (isset($_POST['Login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
if($user == "saroh" && $pass =="0301"){
header('location:formulirkaryawan.php');
//echo "Login Berhasil";
}else {
echo "Login Gagal";
}
}
?>