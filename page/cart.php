<?php
include '../components/connect/config.php';
session_start();

if(!isset($_SESSION['user_id'])){
    header('location:http://localhost/WebNuocHoa/home.php');
}else{
    $user_id = $_SESSION['user_id'];
}
 if(isset($_GET['delete'])){
    $cart_id = $_GET['delete'];
    $delete_cart_item = $conn->prepare("DELETE FROM `giohang` WHERE MAGH = ?");
    $delete_cart_item->bind_param("i", $cart_id);
    $delete_cart_item->execute();
    $delete_cart_item->close();
}

if(isset($_POST['update_qty'])) {
    foreach($_POST['update_qty'] as $cart_id => $action) {
        $qty = $_POST['qty'][$cart_id];
        
        if($action == '-') {
            // Decrement quantity
            $qty = max(1, $qty - 1); // Ensure quantity doesn't go below 1
        } elseif($action == '+') {
            // Increment quantity
            $qty += 1;
        }
        
        // Update quantity in the database
        $update_qty = $conn->prepare("UPDATE `giohang` SET SOLUONG = ? WHERE MAGH = ?");
        $update_qty->bind_param("ii", $qty, $cart_id);
        $update_qty->execute();
        $update_qty->close();
    }

    $select = " SELECT giohang.SOLUONG AS slg, sanpham.SOLUONG AS slsp FROM `giohang`
                JOIN `sanpham` ON giohang.MASP = sanpham.MASP
                WHERE giohang.MAKH = $user_id ";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);
    $slsp = $row['slsp'];
    $slg = $row['slg'];
    if($slg > $slsp){
        $update_qty = $conn->prepare("UPDATE `giohang` SET SOLUONG = ? WHERE MAGH = ?");
        $update_qty->bind_param("ii", $slsp, $cart_id);
        $update_qty->execute();
        $update_qty->close();
    }
    echo '<script>history.replaceState({}, "", window.location.href.split("?")[0]);</script>';
}
if(isset($_POST['mua'])){
    header('Location:http://localhost/WebNuocHoa/page/checkout.php');
}
if(isset($_POST['sp'])){
    header('Location:http://localhost/WebNuocHoa/page/product.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/style.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/cart.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include "../components/header/header.php" ?>
        <div id="hiddenLogin"  style="display:none"> <?php include "../../WebNuocHoa/components/login/login.php" ?></div>
        <div id="hiddenRegister" style="display:none"> <?php include "../../WebNuocHoa/components/register/register.php" ?></div>
        <div style="display: block; height:80px;"></div>
        <div class="cart-container">
            <div class="top-cart">
                <h3>GIỎ HÀNG</h3>
                <span> (12 sản phẩm )</span>
            </div>
            <div class="main-cart">
                <div id="hiddenmain-cart-none">
                    <div class="main-cart-none" >
                        <div class="img-cart">
                            <img src="../../WebNuocHoa/assets/images/empty-bags.png" alt="">
                        </div>
                        <div class="come-back">
                            <a href="../../WebNuocHoa/page/product.php">TIẾP TỤC LỰA CHỌN</a>
                        </div>
                    </div>
                </div>
                <div id="hiddenmaincartproduct">
                    <div class="maincartproduct">
                        <div class="maincart_product">
                            <form action="" method="post">
                                <div class="maincart_product_">
                                    <?php
                                        $grand_total = 0;
                                        $select_cart = $conn->prepare("SELECT giohang.*, TENSP, GIABAN, image_01 FROM `giohang`
                                                                        JOIN `sanpham` ON giohang.MASP = sanpham.MASP
                                                                        WHERE giohang.MAKH = ?");
                                        $select_cart->bind_param("i", $user_id);
                                        $select_cart->execute();
                                        $result = $select_cart->get_result();

                                        if($result->num_rows > 0){
                                            echo '<script>
                                                    document.getElementById("hiddenmain-cart-none").style.display="none";
                                                    </script>';
                                            echo '<script>
                                                    document.getElementById("hiddenmaincartproduct").style.display="block";
                                                </script>';
                                            while($fetch_cart = $result->fetch_assoc()){
                                    ?>

                                    <div class="maincart_product__">
                                        <input type="hidden" name="cart_id" value="<?= $fetch_cart['MAGH']; ?>">
                                        <div class="maincart_product_img">
                                            <div>
                                                <img src="../assets/images/addproducts/<?= $fetch_cart['image_01']; ?>" alt="">
                                            </div>
                                        </div>
                                        <a href=""><?= $fetch_cart['TENSP']; ?></a>
                                        <span><?= $fetch_cart['GIABAN']; ?></span>
                                        <div>
                                        <div class="quantity-product">   
                                            <button id="decrement" name="update_qty[<?= $fetch_cart['MAGH']; ?>]" type="submit" value="-"> - </button>
                                            <input id="quantity_<?= $fetch_cart['MAGH']; ?>" data-cartid="<?= $fetch_cart['MAGH']; ?>"  name="qty[<?= $fetch_cart['MAGH']; ?>]" type="number" value="<?= $fetch_cart['SOLUONG']; ?>" min="1" inputmode="numeric" autocomplete="off" class="no-spinner" >
                                            <button id="increment" name="update_qty[<?= $fetch_cart['MAGH']; ?>]" type="submit" value="+"> + </button>
                                        </div>

                                        </div>
                                        <div class="maincart_product_remove">
                                            <a type="submit" name="delete" href="cart.php?delete=<?= $fetch_cart['MAGH']; ?>"> <i class="fa-solid fa-trash-can"></i></a> 
                                        </div>
                                    </div>
                                    <?php 
                                        $sub_total = ($fetch_cart['GIABAN'] * $fetch_cart['SOLUONG']);
                                        $grand_total += $sub_total;
                                            }
                                        }else {
                                            echo '<script>
                                                    document.getElementById("hiddenmain-cart-none").style.display="block";
                                                    </script>';
                                            echo '<script>
                                                        document.getElementById("hiddenmaincartproduct").style.display="none";
                                                    </script>';
                                        }
                                            $select_cart->close();
                                    ?>
                                </div>
                            </form>
                        </div>
                        <div class="maincart_totalprice">
                            <div class="maincart_totalprice_">
                                <p>Tạm tính: </p><span><?= $grand_total ?> VNĐ</span>
                            </div>
                            <div class="maincart_totalprice_">
                                <p>Thành tiền: </p><span><strong style="font-size: large; font-weight:bold;"></p><span><?= $grand_total ?> VNĐ</strong></span>
                            </div>
                            <form method="post">
                                <button name="mua" > MUA NGAY </button>
                                <button name="sp" > TIẾP TỤC MUA HÀNG </button>
                            </form> 
                        </div>
                    </div> 
                </div>
                              
            </div>
        </div>
        <?php include "../components/footer/footer.php" ?>
    </div>
    <script src="../../WebNuocHoa/assets/js/cart.js"></script>
</body>
</html>