<?php
include "db_connection.php"; //kết nối data base

if (isset($_POST['min']) && isset($_POST['max'])) {
  $min = $_POST['min'];// lấy giá trị min
  $max = $_POST['max'];// lấy giá trị max

  //kiểm tra sản phẩm giá từ min tới max
  $sql = "SELECT * FROM product WHERE price_Product BETWEEN '$min' AND '$max';";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);

  if ($count == 0) {
    echo "Không tồn tại sản phẩm";
  } else {
    while ($row = mysqli_fetch_assoc($result)) {
      $p_name = $row['name_Product'];   
      $p_price = $row['price_Product'];
      $p_img = $row['img_Product'];
      ?>
<!-- IN sản phẩm -->
<a href="ecommerce_product.php">
    <div class="box_phone">
        <img src="assets/img/phone/<?php echo $p_img; ?>" alt="Phone">
        <h3 class="title_phone"><?php echo $p_name; ?></h3>
        <strong class="price">$<?php echo $p_price; ?>.00</strong>
    </div>
</a>

<?php
    }
  }
}
// tìm kiếm
elseif(isset($_POST['searchData'])){
    $search = $_POST['searchData'];

    $sql_2 = "SELECT * FROM product WHERE name_Product LIKE '%$search%'";
    $r = mysqli_query($conn, $sql_2); 
    $count = mysqli_num_rows($r);

    if($count == 0){
        echo "Không tồn tại sản phẩm";
    }
    else{
        while ($row = mysqli_fetch_assoc($r)) {
            $p_name = $row['name_Product'];
            $p_price = $row['price_Product'];
            $p_img = $row['img_Product'];

?>
<!-- In sản phẩm -->
<a href="ecommerce_product.php">
    <div class="box_phone">
        <img src="assets/img/phone/<?php echo $p_img; ?>" alt="Phone">
        <h3 class="title_phone"><?php echo $p_name; ?></h3>
        <strong class="price">$<?php echo $p_price; ?>.00</strong>
    </div>
</a>

<?php
        }
    }
}
// Nếu không có AJAX request ban đầu
else{
    $sql_2 = "SELECT * FROM product ORDER BY id ASC";
    $r = mysqli_query($conn, $sql_2); 
?>
<?php
                    while($row = mysqli_fetch_assoc($r)){
                        $p_name = $row['name_Product'];
                        $p_price = $row['price_Product'];
                        $p_img = $row['img_Product'];
                    
                    ?>
<a href="ecommerce_product.php">
    <div class="box_phone">
        <img src="assets/img/phone/<?php echo $p_img;?>" alt="Phone">
        <h3 class="title_phone"><?php echo $p_name;?></h3>
        <strong class="price">$<?php echo $p_price;?>.00</strong>
    </div>
</a>

<?php 
    } 
}
mysqli_close($conn);
?>