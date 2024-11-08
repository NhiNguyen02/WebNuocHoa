<?php

include '../components/connect/config.php';
session_start();

if(!isset($_SESSION['user_id'])){
    header('location:http://localhost/WebNuocHoa/');
}else{
    $user_id = $_SESSION['user_id'];
}
if(isset($_POST['order'])){

    $id = $_SESSION['user_id'];
    $name = $_POST['name'];     
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $t = $_POST['t'];
    $h = $_POST['h'];
    $x = $_POST['x'];
    $sn = $_POST['sn'];

    $tt = $_POST['tt'];
    $sp = $_POST['sp'];
    $tongia = $_POST['tongia'];
    $gc = $_POST['gc'];
    $ttgiao = "Người bán đang chuẩn bị hàng";
    $tttt = "Đang xửa lý thanh toán";
    $km = '';

    $update_user = mysqli_prepare($conn, "UPDATE `taikhoan` SET name = ?, email = ?, sdt = ?, tinhthanh = ?, quanhuyen = ?, phuongxa = ?, sonha = ? WHERE id = ?");
    mysqli_stmt_bind_param($update_user, "ssissssi", $name, $email, $sdt, $t, $h, $x, $sn, $id);
    mysqli_stmt_execute($update_user);

    $select_cart = $conn->prepare("SELECT giohang.*, sanpham.SOLUONG AS SP_SL FROM `giohang`
                                                            JOIN `sanpham` ON giohang.MASP = sanpham.MASP
                                                            WHERE giohang.MAKH = ?");
    $select_cart->bind_param("i", $user_id);
    $select_cart->execute();
    $result = $select_cart->get_result();
    while($fetch_cart = $result->fetch_assoc()){
        $sl = $fetch_cart['SP_SL'] - $fetch_cart['SOLUONG'];
        $update_sp = mysqli_prepare($conn, "UPDATE `sanpham` SET SOLUONG = ? WHERE MASP = ?");
        mysqli_stmt_bind_param($update_sp, "ii", $sl, $fetch_cart['MASP']);
        mysqli_stmt_execute($update_sp);
        mysqli_stmt_close($update_sp);

        $delete_cart = mysqli_prepare($conn, "DELETE FROM `giohang` WHERE MAKH = ?");
        mysqli_stmt_bind_param($delete_cart, "i", $id);
        mysqli_stmt_execute($delete_cart);
    }

    $insert_dh = $conn->prepare("INSERT INTO `donhang`(MAKH, SANPHAM, MACTKM, THANHTOAN, THANHTIEN, TRANGTHAI, XULYTT,GHICHU) VALUES(?,?,?,?,?,?,?,?)");
    $insert_dh->bind_param("isssisss", $id, $sp, $km, $tt, $tongia, $ttgiao, $tttt, $gc);
    $insert_dh->execute();
    $insert_dh->close();

    header('location:profile.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/style.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/checkout.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include "../components/header/header.php" ?>
        <div id="hiddenLogin"  style="display:none"> <?php include "../../WebNuocHoa/components/login/login.php" ?></div>
        <div id="hiddenRegister" style="display:none"> <?php include "../../WebNuocHoa/components/register/register.php" ?></div>
        <div style="display: block; height:80px;"></div>
        <div class="containercheckout">
            <div class="checkoutform">
                <form method="post">
                    <?php
                        $id = $_SESSION['user_id'];
                        $select = " SELECT * FROM taikhoan WHERE id = '$id' ";
                        $result = mysqli_query($conn, $select);
                        $row = mysqli_fetch_array($result);
                        $_SESSION['user_name'] = $row['name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['sdt'] = $row['sdt'];
                        $_SESSION['t'] = $row['tinhthanh'];
                        $_SESSION['h'] = $row['quanhuyen'];
                        $_SESSION['x'] = $row['phuongxa'];
                        $_SESSION['sn'] = $row['sonha'];
                    ?>
                        <div class="checkoutform_main">
                            <!-- <form action="" method="post"> -->
                                <div class="checkoutmain">
                                    <div class="checkoutmain_info">
                                        <h3>Thông tin mua hàng</h3>
                                        <div class="maininfo">
                                            <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" placeholder="Email" required>
                                        </div>
                                        <div class="maininfo">
                                            <input type="text" name="name" value="<?php echo $_SESSION['user_name'] ?>" placeholder="Họ và tên" required>
                                        </div>
                                        <div class="maininfo">
                                            <input type="text" name="sdt" value="0<?php echo $_SESSION['sdt'] ?>" placeholder="Số điện thoại" required>
                                        </div>
                                        <div class="maininfo">
                                            <input type="text" name="t" value="<?php echo $_SESSION['t'] ?>" placeholder="Tỉnh thành" required>
                                        </div>
                                        <div class="maininfo">
                                            <input type="text" name="h" value="<?php echo $_SESSION['h'] ?>" placeholder="Quận huyện" required>
                                        </div>
                                        <div class="maininfo">
                                            <input type="text" name="x" value="<?php echo $_SESSION['x'] ?>" placeholder="Phường xã" required>
                                        </div>
                                        <div class="maininfo">
                                            <input type="text" name="sn" value="<?php echo $_SESSION['sn'] ?>" placeholder="Số nhà,..." required>
                                        </div>
                                        <!-- <div >
                                            <input type="checkbox" name="" id="">
                                            Giao hàng đến địa chỉ khác
                                        </div> -->
                                        <div>
                                            <textarea name="gc" id="" rows="3" placeholder="ghi chú (tùy chọn)"></textarea>
                                        </div>
                                    </div>
                                    <div class="checkoutmain_others">
                                        <h3>Vận chuyển</h3>
                                        <div>
                                            <div>
                                                <input type="radio" name="" id="" checked='true'>
                                                <label for="">Phí vận chuyển</label>
                                            </div>
                                            <span>29.000đ</span>
                                        </div>
                                        
                                        <div>
                                            <h3>Thanh toán</h3>
                                            <select name="tt" required>
                                            <option value="Thanh toán khi nhận hàng (COD)">Thanh toán khi nhận hàng (COD)</option>
                                            <option value="Thanh toán qua MOMO">Thanh toán qua MOMO</option>
                                            <option value="Thanh toán qua VNPay-QR">Thanh toán qua VNPay-QR</option>
                                            <option value="Chuyển khoản qua ngân hàng">Chuyển khoản qua ngân hàng</option>
                                            </select>
                                        </div>
                                        <!-- <div>
                                            <div>
                                                <input type="radio" name="" id="">
                                                <label for="">Thanh toán qua VNPay-QR</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <input type="radio" name="" id="">
                                                <label for="">Chuyển khoản qua ngân hàng</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <input type="radio" name="" id="">
                                                <label for="">Thanh toán khi nhận hàng (COD)</label>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            <!-- </form> -->
                        </div>
                        <div class="checkout_coupon">
                            <h3>Đơn hàng</h3>
                            <div>
                                <?php
                                    $grand_total = 0;
                                    $cart_items[] = '';
                                    $select_cart = $conn->prepare("SELECT giohang.*, TENSP, GIABAN, image_01 FROM `giohang`
                                                                    JOIN `sanpham` ON giohang.MASP = sanpham.MASP
                                                                    WHERE giohang.MAKH = ?");
                                    $select_cart->bind_param("i", $user_id);
                                    $select_cart->execute();
                                    $result = $select_cart->get_result();

                                    if($result->num_rows > 0){
                                        while($fetch_cart = $result->fetch_assoc()){
                                            $cart_items[] = $fetch_cart['TENSP'].' ('.$fetch_cart['GIABAN'].'VNĐ x '. $fetch_cart['SOLUONG'].')
                                            ';
                                            $total_products = implode($cart_items);
                                ?>
                                <div class="checkout_coupon_top">
                                    <div class="checkout_coupon_top_img">
                                        <img src="../assets/images/addproducts/<?= $fetch_cart['image_01']; ?>" alt="">
                                    </div>
                                    <div>
                                        <p><?= $fetch_cart['TENSP']; ?></p>
                                    </div>
                                    <div>
                                        <p>Số lượng</p>
                                        <p><?= $fetch_cart['SOLUONG']; ?></p>
                                    </div>
                                    <div>
                                        <p><?= $fetch_cart['GIABAN']; ?> VNĐ</p>
                                    </div>
                                </div>
                                <?php
                                    $grand_total += ($fetch_cart['GIABAN'] * $fetch_cart['SOLUONG']);
                                    }            
                                } 
                                ?>
                                <div class="checkout_coupon_main">
                                    <div class="checkout_coupon_main_">
                                        <div class="checkcode_coupon">
                                            <input type="text" placeholder="Nhập mã giảm giá">
                                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                        </div>
                                        <div class="checkout_coupon_main_footer">
                                            <p>Tạm tính:</p>
                                            <span><?= $grand_total; ?> VNĐ</span>
                                        </div>
                                        <div class="checkout_coupon_main_footer">
                                            <p>Phí vận chuyển</p>
                                            <span>29000 VNĐ</span>
                                        </div>
                                        <div class="checkout_coupon_main_footer">
                                            <p>Tổng cộng:</p>
                                            <input type="hidden" name="sp" value="<?= $total_products; ?>">
                                            <input type="hidden" name="tongia" value="<?= $grand_total+=29000; ?>">
                                            <span><strong><?= $grand_total; ?> VNĐ</strong></span>
                                        </div>
                                        <div class="checkout_coupon_main_footer">
                                            <a href="../../WebNuocHoa/page/cart.php">< Quay  lại giỏ hàng</a>
                                            <button name="order" >ĐẶT HÀNG</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form> 
            </div>
        </div>
        <?php include "../components/footer/footer.php" ?>
    </div>
</body>
</html>