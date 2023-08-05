<?php
include "db_connection.php";


if(isset($_POST['new_pw']) && isset($_POST['verify_pw']) && isset($_POST['email_2'])){

    $email = $_POST['email_2'];
    $new_pw = $_POST['new_pw'];
    $verify_pw = $_POST['verify_pw'];

   
    if($new_pw != $verify_pw){
        echo json_encode(array('error' => true, 'message' => 'Mật khẩu không khớp'));
    }else{  
        
       $sql_update = "UPDATE user SET password = '$new_pw' WHERE email = '$email'";
       $result_update = mysqli_query($conn, $sql_update);

       if ($result_update) {
            echo json_encode(array('error' => true, 'message' => 'Cập nhật mật khẩu thành công'));
       } else {
            echo json_encode(array('error' => true, 'message' => 'Cập nhật mật khẩu không thành công'));
       }
    }

}


?>