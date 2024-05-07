<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/style.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/cart.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/productDetail.css">
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
                <div class="main-cart-none">
                    <div class="img-cart">
                        <img src="../../WebNuocHoa/assets/images/empty-bags.png" alt="">
                    </div>
                    <div class="come-back">
                        <a href="../../WebNuocHoa/page/product.php">TIẾP TỤC LỰA CHỌN</a>
                    </div>
                </div>
                <!-- <div class="maincartproduct">
                    <div class="maincart_product">
                        <form action="" method="post">
                            <div class="maincart_product_">
                                <div class="maincart_product_img">
                                    <img src="../../WebNuocHoa/assets/images/products/nuochoanu/product3.webp" alt="">
                                </div>
                                <a href="">MCM EAU DE PARFUM</a>
                                <span>9.000.000₫</span>
                                <div>
                                    <div class="quantity-product">
                                        <input id="decrement" type="button" value="-">
                                        <input id="quantity" type="number" value="1" min="1" step="1" inputmode="numeric" autocomplete="off" class="no-spinner" >
                                        <input id="increment" type="button" value="+">
                                    </div>
                                </div>
                                <div class="maincart_product_remove">
                                    <a href=""> <i class="fa-solid fa-trash-can"></i></a> 
                                </div>
                            </div>
                            <div class="maincart_product_">
                                <div class="maincart_product_img">
                                    <img src="../../WebNuocHoa/assets/images/products/nuochoanu/product3.webp" alt="">
                                </div>
                                <a href="">MCM EAU DE PARFUM</a>
                                <span>9.000.000₫</span>
                                <div>
                                    <div class="quantity-product">
                                        <input id="decrement" type="button" value="-">
                                        <input id="quantity" type="number" value="1" min="1" step="1" inputmode="numeric" autocomplete="off" class="no-spinner" >
                                        <input id="increment" type="button" value="+">
                                    </div>
                                </div>
                                <div class="maincart_product_remove">
                                    <a href=""> <i class="fa-solid fa-trash-can"></i></a> 
                                </div>
                            </div>
                            <div class="maincart_product_">
                                <div class="maincart_product_img">
                                    <img src="../../WebNuocHoa/assets/images/products/nuochoanu/product3.webp" alt="">
                                </div>
                                <a href="">MCM EAU DE PARFUM</a>
                                <span>9.000.000₫</span>
                                <div>
                                    <div class="quantity-product">
                                        <input id="decrement" type="button" value="-">
                                        <input id="quantity" type="number" value="1" min="1" step="1" inputmode="numeric" autocomplete="off" class="no-spinner" >
                                        <input id="increment" type="button" value="+">
                                    </div>
                                </div>
                                <div class="maincart_product_remove">
                                    <a href=""> <i class="fa-solid fa-trash-can"></i></a> 
                                </div>
                            </div>
                        </form>
                    </div>
                        <div class="maincart_totalprice">
                            <div class="maincart_totalprice_">
                                <p>Tạm tính: </p><span>9.000.000₫</span>
                            </div>
                            <div class="maincart_totalprice_">
                                <p>Thành tiền: </p><span><strong style="font-size: large; font-weight:bold;">9.000.000₫</strong></span>
                            </div>
                            <button>MUA NGAY</button>
                            <button>TIẾP TỤC MUA HÀNG</button>
                        </div>
                </div> -->
                
            </div>
        </div>
        <?php include "../components/footer/footer.php" ?>
    </div>
    <script src="../../WebNuocHoa/assets/js/quantity.js"></script>
</body>
</html>