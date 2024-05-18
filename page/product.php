<?php

include '../components/connect/config.php';
session_start();
if(isset($_POST['mua'])){
    $product_id = $fetch_products['MASP'];
    header('Location: http://localhost/WebNuocHoa/page/productDetail.php?pid= . $product_id');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/product.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/style.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/icons/fontawesome-free-6.4.0-web/css/all.css">
    
    <title>Document</title>

</head>
<body>
    <div class="container">

        <?php include "../components/header/header.php" ?>
        <div id="hiddenLogin"  style="display:none"> <?php include "../../WebNuocHoa/components/login/login.php" ?></div>
        <div id="hiddenRegister" style="display:none"> <?php include "../../WebNuocHoa/components/register/register.php" ?></div>
        <div style="display: block; height:80px;"></div>
        <div class="bannerProduct">
            <img src="../../WebNuocHoa/assets/images/products/bannerProduct.png" alt="">
        </div>
        <div class="templatePage">
            <div class="filter">
                <div class="top-filter"  style="text-align: center;margin:20px 0px;">
                    <p style="font-size:36px;" >Bộ Lọc</p>
                    <p style="font-size:14px; margin:5px 0px;">Giúp lọc nhanh sản phẩm bạn tìm kiếm</p>
                </div>
                <hr >
                <div class="filter-brand" >
                    <p style="font-size:20px; text-align: center;">THƯƠNG HIỆU</p>
                    <div class="search-brand">
                        <input type="text" placeholder="Search">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="scrollbar">  
                        <div class="check-brand">
                            <input type="checkbox" name="" id=""> <span>Thuong hieu</span>
                        </div>
                        <div class="check-brand">
                            <input type="checkbox" name="" id=""> <span>Thuong hieu</span>
                        </div>
                        <div class="check-brand">
                            <input type="checkbox" name="" id=""> <span>Thuong hieu</span>
                        </div>
                        <div class="check-brand">
                            <input type="checkbox" name="" id=""> <span>Thuong hieu</span>
                        </div>
                        <div class="check-brand">
                            <input type="checkbox" name="" id=""> <span>Thuong hieu</span>
                        </div>
                        <div class="check-brand">
                            <input type="checkbox" name="" id=""> <span>Thuong hieu</span>
                        </div>
                        <div class="check-brand">
                            <input type="checkbox" name="" id=""> <span>Thuong hieu</span>
                        </div>
                        <div class="check-brand">
                            <input type="checkbox" name="" id=""> <span>Thuong hieu</span>
                        </div>
                    </div>
                    <div class=".force-overflow"></div>
                </div>
                <hr>
                <div class="filter-price">
                    <p style="font-size:20px; text-align: center;">GIÁ SẢN PHẨM</p>
                    <div class="scrollbar">
                        <div class="check-price">
                            <input type="checkbox" name="" id=""><span >130,000 - 2,400,000</span>
                        </div>
                        <div class="check-price">
                            <input type="checkbox" name="" id=""><span >130,000 - 2,400,000</span>
                        </div>
                        <div class="check-price">
                            <input type="checkbox" name="" id=""><span >130,000 - 2,400,000</span>
                        </div>
                        <div class="check-price">
                            <input type="checkbox" name="" id=""><span >130,000 - 2,400,000</span>
                        </div>
                        <div class="check-price">
                            <input type="checkbox" name="" id=""><span >130,000 - 2,400,000</span>
                        </div>
                        <div class="check-price">
                            <input type="checkbox" name="" id=""><span >130,000 - 2,400,000</span>
                        </div>
                        <div class="check-price">
                            <input type="checkbox" name="" id=""><span >130,000 - 2,400,000</span>
                        </div>
                        <div class="check-price">
                            <input type="checkbox" name="" id=""><span >130,000 - 2,400,000</span>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="list-product">
                <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                <p style="font-size: 36px; margin-top: 15px; margin-left: 15px;">Tất cả sản phẩm</p>
                <div class="layout-product">
                <?php
                    $select_products = "SELECT * FROM sanpham ";
                    $result_products = mysqli_query($conn, $select_products);
                
                    if(mysqli_num_rows($result_products) > 0){
                        while($fetch_products = mysqli_fetch_assoc($result_products)){ 
                ?> 
                <form action="" method="post" class="product">
                        <div class="productComponents">
                            <a class="productdetail" href="productDetail.php?pid= <?= $fetch_products['MASP']; ?>">
                                <div class="picture">
                                    <div>
                                        <img src="../assets/images/addproducts/<?= $fetch_products['image_01']; ?>" alt="">
                                    </div>
                                </div>
                                <div class="styleProduct">
                                    <p><?= $fetch_products['TENSP']; ?></p>
                                </div>
                                <div class="price">
                                    <p><?= $fetch_products['GIABAN']; ?> VNĐ</p>
                                </div>
                            </a>
                            <div class="buttonBuy">
                                <button name="mua">Buy Now</button>
                            </div>
                        </div>
                </form>
                <?php
                    }
                } else {
                        echo '<h2>Hiện tại chưa có sản phẩm để bán!!! :)))</h2>';
                    }
                ?>
                </div>
                <nav aria-label="Page navigation example ">
                    <ul class="pagination" style="display: flex; justify-content: center; margin: 30px 0px;">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <?php include "../../WebNuocHoa/components/footer/footer.php" ?>
    </div>
</body>
</html>