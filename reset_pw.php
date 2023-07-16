<?php
include "db_connection.php";

if (isset($_POST['email_rs']) && isset($_POST['g-recaptcha-response'])) {
    $email = $_POST['email_rs']; //lấy dữ liệu email và captcha có tồn tại
    $captchaResponse = $_POST['g-recaptcha-response'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count_rs = mysqli_num_rows($result);

    if ($count_rs == 0) {
        header("Location: home.php");
        exit();
    } else {
        
    }
}
?>