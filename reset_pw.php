<?php
include "db_connection.php";

if (isset($_POST['email'])) {
    $email = $_POST['email']; //lấy dữ liệu email và captcha có tồn tại
    $captchaResponse = $_POST['g-recaptcha-response'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count_rs = mysqli_num_rows($result);


    $response = array('email_exists' => ($count_rs > 0));

    echo json_encode($response);


    if(isset($_POST['new_pw']) && isset($_POST['verify_pw'])){

        $new_pw = $_POST['new_pw'];
        $verify_pw = $_POST['verify_pw'];


        if($new_pw != $verify_pw){
            echo '<script>
            window.location.href = "home.php";
            </script>;
            alert("Mat Khau Khong Trung Khop!");
            ';
        }else{
           // Update the password in the database (without hashing)
           $sql_update = " UPDATE user SET password = '$new_pw' WHERE email = '$email'";
           $result_update = mysqli_query($conn, $sql_update);

           echo $new_pw;
           echo $verify_pw;


           if ($result_update) {
               echo '<script>
               window.location.href = "home.php";
               </script>;
               alert("Mat Khau Da Cap Nhat!");
               ';
           } else {
               echo '<script>
               window.location.href = "home.php";
               </script>;
               alert("Co loi xay ra, vui long thu lai sau!");
               ';
           }
        }

    }


}
?>