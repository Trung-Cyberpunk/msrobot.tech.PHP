<?php
include "db_connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email']; //lấy dữ liệu email và captcha có tồn tại
    $captchaResponse = $_POST['g-recaptcha-response'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count_rs = mysqli_num_rows($result);


    $response = array('email_exists' => ($count_rs > 0));

    echo json_encode($response);
}
?>