<?php
    include "db_connection.php";

    // Kiểm tra xem đã nhấn nút đăng nhập chưa
    if(isset($_POST['login'])) {
    // Lấy thông tin đăng nhập từ form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập trong cơ sỡ dữ liệu
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    // Kiểm tra email và mật khẩu
    if(mysqli_num_rows($result)) {

    // Thực hiện các hành động khác, ví dụ: lưu thông tin người dùng vào session, vv.
    // Chuyển hướng đến trang chính bằng JavaScript
    // echo '<script>
    // window.location.href = "home.php";
    // </script>';
    setcookie("user", $email, time() + (86400*7),"/");

    exit;

    } else {
    // Đăng nhập thất bại
    echo "Thông tin đăng nhập không đúng!";
    }
}


                // Kiểm tra xem đã nhấn nút đăng nhập chưa
                if(isset($_POST['login_2'])) {
                    // Lấy thông tin đăng nhập từ form
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    // Kiểm tra thông tin đăng nhập trong cơ sỡ dữ liệu
                    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
                    $result = mysqli_query($conn, $sql);

                    // Kiểm tra email và mật khẩu
                    if(mysqli_num_rows($result)) {
                        // Đăng nhập thành công

                        // Lưu thông tin người dùng vào session, vv.

                        // Chuyển hướng đến trang mục tiêu (home1.php)
                        echo '<script>
                        window.location.href = "home.php";
                        </script>';
                        setcookie("user", $email, time() + (86400*7),"/");
                        exit;
                    } else {
                        // Đăng nhập thất bại
                        echo "Thông tin đăng nhập không đúng!";
                    }
                }
mysqli_close($conn);


//Nút logout
if(isset($_POST['logout'])){
    // Xóa Cookie
    setcookie('user', '$email', time() - 3600, '/');
    header("location: home.php");
    exit;
}
    ?>