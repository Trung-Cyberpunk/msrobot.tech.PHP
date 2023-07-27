<?php
include "db_connection.php"; //kết nối DataBase

if (isset($_POST['min']) && isset($_POST['max'])) {
    $min = $_POST['min'];// lấy giá trị min
    $max = $_POST['max'];// lấy giá trị max
    // $search = $_POST['searchData'];// lấy giá trị tìm kiếm
    
    $search = isset($_POST['searchData']) ? $_POST['searchData'] : '';// Lấy giá trị tìm kiếm và kiểm tra 
    
    // xử lý tìm kiếm kèm theo giá min -> max
    $sql = "SELECT * FROM product WHERE name_Product LIKE '%$search%' AND price_Product BETWEEN '$min' AND '$max'";
    
  } elseif (isset($_POST['searchData'])) { //kiểm tra tìm kiếm
    $search = $_POST['searchData'];
    // thực hiện 
    
    $sql = "SELECT * FROM product WHERE name_Product LIKE '%$search%'";

  } else {// Nếu không có AJAX request ban đầu 
    $sql = "SELECT * FROM product ORDER BY id ASC";
  }
  
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  
  if ($count == 0) {
    echo "Không tồn tại sản phẩm";
  } else {
    while ($row = mysqli_fetch_assoc($result)) {
      $p_id = $row['id'];
      $p_name = $row['name_Product'];
      $p_price = $row['price_Product'];
      $p_img = $row['img_Product'];
      ?>
<!-- In sản phẩm -->
<a href="ecommerce_product.php?id=<?php echo $p_id?>">
    <div class="box_phone">
        <img src="assets/img/phone/<?php echo $p_img; ?>" alt="Phone">
        <h3 class="title_phone"><?php echo $p_name; ?></h3>
        <strong class="price">$<?php echo $p_price; ?>.00</strong>
    </div>
</a>
<?php
    }
  }
  mysqli_close($conn);//đóng database
?>