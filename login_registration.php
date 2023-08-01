<?php
    include "db_connection.php";

// Sử dụng thư viện PHPMailer để xử lý gửi email "https://github.com/PHPMailer/PHPMailer"

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    // require ("PHPMailer/PHPMailer.php");
    // require ("PHPMailer/SMTP.php");
    // require ("PHPMailer/Exception.php");
    
    require 'vendor/autoload.php';
     
    
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

    // Chuyển hướng đến trang chính bằng JavaScript
    echo '<script>
    window.location.href = "home.php";
    </script>';
    setcookie("user", $email, time() + (86400*7),"/");

    exit;

    } else {
    // Đăng nhập thất bại
    echo '<script>
            
            alert("Thông tin đăng nhập không đúng");
            </script>';
    }
}

// registration

if(isset($_POST['sigup'])){
    // lấy giá trị
     $email = $_POST['email'];
     $password = $_POST['password'];
     $confirmPassword = $_POST['confirmpassword'];

    //  Tạo mã xác nhận ngẫu nhiên
    $verificationCode = bin2hex(random_bytes(16));

    //  Kiểm tra xác nhận mật khẩu

    if($password != $confirmPassword){
        echo '<script>
        window.location.href = "home.php";
        alert("Mật khẩu không trùng khớp");
        </script>';
        exit;
    }
    //  Kiểm tra tài khoản có tồn tại hay chưa
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        echo '<script>
        window.location.href = "home.php";
        alert("Tài khoản đã tồn tại");
        </script>';
        exit;
    }

    // Thực hiện đăng ký bổ xung database
    $query = "INSERT INTO user (email, password, verification_code) VALUES ('$email', '$password', '$verificationCode')";
    mysqli_query($conn, $query);
   
    function sendMail($email, $v_code)
    {   
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Bật đầu ra gỡ lỗi chi tiết
            $mail->isSMTP();                                            //Gửi bằng SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Đặt máy chủ SMTP để gửi qua
            $mail->SMTPAuth   = true;                                   //Bật xác thực SMTP
            $mail->Username   = 'trungx1406@gmail.com';                     //tên người dùng SMTP
            $mail->Password   = 'toilatrung';                               //mật khẩu SMTP
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Kích hoạt mã hóa TLS ẩn
                $mail->Port       = 587;                                    //Cổng TCP để kết nối; sử dụng 587 nếu bạn đã đặt `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
            //Recipients
            $mail->setFrom('trungx1406@gmail.com', 'Trung Gửi Mail Xác Nhận');
            $mail->addAddress($email);     ///Thêm người nhậ

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Email Verification From TJ WEBDEV';
            $mail->Body    = "Thanks for registration! 
                            Click the link below to verify the email address 
                            <a href = 'http://localhost:3000/msrobot.tech.PHP/login_email.php?email=$email&code=$v_code'>Verify</a>";

        
            $mail->send();
            return true;

        } catch (Exception $e) {
            echo "Gửi email thất bại: " . $mail->ErrorInfo;
            return false;
        }
    }

    if(sendMail($email, $verificationCode)){
        echo '<script>
        window.location.href = "login_email.php"
        </script>';
    }else{
        echo '<script>
        window.location.href = "home.php";
        alert("Lỗi xấc nhận email");
        </script>';
    }
      
}


// Kiểm tra mã xác nhận từ URL mail gửi tới
if(isset($_GET['code'])){
    $verificationCode = $_GET['code'];

    // Tìm email trùng với mã xác nhận gửi tới trong database

    $query = "SELECT * FROM user WHERE verification_code = '$verificationCode'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        // Tìm thấy tài khoản trùng với code cập nhật trạng thái is_verified = 1
        $query = "UPDATE user SET is_verified = 1 WHERE verification_code = '$verificationCode'";

        echo '<script>
        alert("Xác nhận đăng ký thành công.");
        </script>';
    } else{
        echo '<script>
        alert("Mã xác nhận không hợp lệ.");
        </script>';
    }
// }else{
//     echo '<script>
//         alert("Không tìm thấy mã xác nhận.");
//         </script>';
}

// gửi mail xác nhận
    // $go = $email;
    // $subject = "Xác Nhận Email";
    // $message = "Vui lòng nhấp vào liên kết sau để xác nhận email của bạn:\n\n";
    // $message .= "http://localhost:3000/msrobot.tech.PHP/login_email.php?code=$verificationCode";
    // $headers = "From: yourwebsite@example.com";
    // mail($to, $subject, $message, $headers);

    



// Login page
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