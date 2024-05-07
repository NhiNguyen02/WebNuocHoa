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
                <div class="checkoutform_main">
                    <form action="" method="post">
                        <div class="checkoutmain">
                            <div class="checkoutmain_info">
                                <h3>Thông tin mua hàng</h3>
                                <div class="maininfo">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="maininfo">
                                    <input type="text" placeholder="Họ và tên">
                                </div>
                                <div class="maininfo">
                                    <input type="text" placeholder="Số điện thoại">
                                </div>
                                <div class="maininfo">
                                    <input type="text" placeholder="Địa chỉ">
                                </div>
                                <div class="maininfo">
                                    <input type="text" placeholder="Tỉnh thành">
                                </div>
                                <div class="maininfo">
                                    <input type="text" placeholder="Quận huyện">
                                </div>
                                <div class="maininfo">
                                    <input type="text" placeholder="Phường xã">
                                </div>
                                <div >
                                    <input type="checkbox" name="" id="">
                                    Giao hàng đến địa chỉ khác
                                </div>
                                <div>
                                    <textarea name="" id="" rows="3" placeholder="ghi chú (tùy chọn)"></textarea>
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
                                <h3>Thanh toán</h3>
                                <div>
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
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="checkout_coupon">
                    <h3>Đơn hàng</h3>
                    <div>
                        <div class="checkout_coupon_top">
                            <div class="checkout_coupon_top_img">
                                <img src="../../WebNuocHoa/assets/images/products/nuochoanu/product1.webp" alt="">
                            </div>
                            <div>
                                <p>LANCOME MIRACLE</p>
                            </div>
                            <div>
                                <p>Số lượng</p>
                                <p>2</p>
                            </div>
                            <div>
                                <p>9.000.000đ</p>
                            </div>
                        </div>
                        <div class="checkout_coupon_main">
                            <div class="checkout_coupon_main_">
                                <div class="checkcode_coupon">
                                    <input type="text" placeholder="Nhập mã giảm giá">
                                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                                <div class="checkout_coupon_main_footer">
                                    <p>Tạm tính:</p>
                                    <span>9.000.000đ</span>
                                </div>
                                <div class="checkout_coupon_main_footer">
                                    <p>Phí vận chuyển</p>
                                    <span>29.000đ</span>
                                </div>
                                <div class="checkout_coupon_main_footer">
                                    <p>Tổng cộng:</p>
                                    <span><strong>9.024.000đ</strong></span>
                                </div>
                                <div class="checkout_coupon_main_footer">
                                    <a href="../../WebNuocHoa/page/cart.php">< Quay  lại giỏ hàng</a>
                                    <button>ĐẶT HÀNG</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../components/footer/footer.php" ?>
    </div>
</body>
</html>