<?php
include "db_connection.php";

if($_SERVER["REQUEST_METHOD"] = "POST"){
    $productId = isset($_POST['product_id']) ? $_POST['product_id'] : '';
    $userName = isset($_POST['name_rv']) ? $_POST['name_rv'] : '';
    $userEmail = isset($_POST['mail_rv']) ? $_POST['mail_rv'] : '';
    $userRating = isset($_POST['user_rating']) ? $_POST['user_rating'] : '';
    $userReview = isset($_POST['user_review']) ? $_POST['user_review'] : '';    
    $datetime = date('Y-m-d H:i:s');
    
    // $productId = $_POST['product_id'];
    // $userName = $_POST['user_name'];
    // $userEmail = $_POST['email'];
    // $userRating = $_POST['user_rating'];
    // $userReview = $_POST['user_review'];
    // $datetime = date('Y-m-d H:i:s');


    $sql = "INSERT INTO review_table (review_id, user_name, email, user_rating, user_review, datetime)
        VALUES ('$productId','$userName', '$userEmail', '$userRating', '$userReview', '$datetime')";




    // if (mysqli_query($conn, $sql)) {
    //     echo "Đánh giá đã được lưu thành công.";
    // } else {
    //     echo "Lỗi: " . mysqli_error($conn);
    // }
}

$conn->close();

?>