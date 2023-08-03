<?php
include "db_connection.php";

if(isset($_POST['name_rv']) && isset($_POST['product_id']) && !empty($_POST['name_rv']) && !empty($_POST['product_id'])){
    $productId = $_POST['product_id'];
    $userName = $_POST['name_rv'];
    $userEmail = $_POST['mail_rv'];
    $userRating = $_POST['user_rating'];
    $userReview = $_POST['user_review'];
    $datetime = date('Y-m-d H:i:s');


    $sql = "INSERT INTO review_table (product_id, user_name, email, user_rating, user_review, datetime)
        VALUES ('$productId','$userName', '$userEmail', '$userRating', '$userReview', '$datetime')";


        
if (mysqli_query($conn, $sql)) {

    // echo '    
    // alert("Đánh giá sản phẩm thành công!");
    // ';
    
} else {
    echo "Lỗi khi lưu đánh giá: " . mysqli_error($conn);
}
}

$conn->close();

?>