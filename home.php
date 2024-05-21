
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../WebNuocHoa/assets/css/style.css">
    <link rel="stylesheet" href="../WebNuocHoa/assets/css/product.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <?php include "../WebNuocHoa/components/header/header.php" ?>
        <div id="hiddenLogin"  style="display:none"> <?php include "../WebNuocHoa/components/login/login.php" ?></div>
        <div id="hiddenRegister" style="display:none"> <?php include "../WebNuocHoa/components/register/register.php" ?></div>
        <div style="display: block; height: 1000px;">
            <div class="template-layout"></div>
            <div class="template-layout1"></div> 
            <div class="flower1">
                <img src="./assets/images/flower1.svg" alt="">
            </div>
            <div class="slogan">
                <h1>BẮT ĐẦU MỘT NGÀY VỚI PERFUME HELENE</h1>
                <p>"Sự cân bằng nghệ thuật nơi mỗi bông hoa thể hiện bản thân với sự gợi cảm và tươi mới."</p>
            </div>
            <div class="slide">
                <swiper-container class="mySwiper" slidesPerView="1" slidesPerGroup="4" centered-slides="true" autoplay-delay="2300">
                    <swiper-slide><img src="./assets/images/slideShow/slide1.png" alt=""></swiper-slide>
                    <swiper-slide><img src="./assets/images/slideShow/slide2.png" alt=""></swiper-slide>
                    <swiper-slide><img src="./assets/images/slideShow/slide3.png" alt=""></swiper-slide>
                    <swiper-slide><img src="./assets/images/slideShow/slide4.png" alt=""></swiper-slide>
                </swiper-container>
            </div>
        </div>
        <div class="layout-bestseller">
            <div class="layoutbestseller">
                <div class="imgcategorytype">
                    <a href=""><p>NƯỚC HOA NỮ <i class="fa-solid fa-arrow-right"></i> </p></a>
                    <a href=""><img src="./assets/images/Maskgroup(5).png" alt=""></a>
                </div>
                <div class="imgcategorytype">
                    <a href=""><p>NƯỚC HOA UNISEX <i class="fa-solid fa-arrow-right"></i></p> </a>
                    <a href=""><img src="./assets/images/Maskgroup(4).png" alt=""></a>
                </div>
                <div class="imgcategorytype">
                    <a href=""><p>NƯỚC HOA NICHE <i class="fa-solid fa-arrow-right"></i></p> </a>
                    <a href=""><img src="./assets/images/Maskgroup(3).png" alt=""></a>
                </div>
            </div>
        </div>
        <h2 style="text-align: center; font-size:50px;">Best Seller</h2>
        <div style="display: flex; flex-direction: column;align-items: center  ;">
            <hr style="width: 625px; margin-top:20px;border:1px solid #4f4f4f ;">
            <hr style="width: 295px; margin: 20px 0px; border:1px solid #515151 ;">
        </div>
        <!-- <div class="layout-bestseller">
            <div class="layoutbestseller">
                <div class="img-best-product">
                    <a href=""><img src="../WebNuocHoa/assets/images/products/sp2.png" alt=""></a>
                </div>
                <div class="img-best-product">
                    <a href=""><img src="../WebNuocHoa/assets/images/products/sp3.png" alt=""></a>
                </div>
                <div class="img-best-product">
                    <a href=""><img src="../WebNuocHoa/assets/images/products/sp1.png" alt=""></a>
                </div>
                <div class="img-best-product">
                    <a href=""><img src="../WebNuocHoa/assets/images/products/sp4.png" alt=""></a>
                </div>
            </div>
        </div> -->
        <div style="display: flex; justify-content:center;">
            <div class="layout-product">
                <div class="product">
                    <div class="productComponents">
                        <a class="productdetail" href="../../WebNuocHoa/page/productDetail.php">
                            <div class="picture">
                                <div>
                                    <img src="../../WebNuocHoa/assets/images/products/nuochoanu/product1.webp" alt="">
                                </div>
                            </div>
                            <div class="styleProduct">
                                <p>Lancome La Vie Est Belle EDP</p>
                            </div>
                            <div class="price">
                                <p>130,000 - 3,400,000</p>
                            </div>
                        </a>
                        <div class="buttonBuy">
                            <button onclick="window.location.href='../../WebNuocHoa/page/checkout.php'">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="productComponents">
                        <a class="productdetail" href="../../WebNuocHoa/page/productDetail.php">
                            <div class="picture">
                                <div>
                                    <img src="../../WebNuocHoa/assets/images/products/nuochoanu/product2.webp" alt="">
                                </div>
                            </div>
                            <div class="styleProduct">
                                <p>Armaf Club De nuit Milestone EDP</p>
                            </div>
                            <div class="price">
                                <p>130,000 - 3,400,000</p>
                            </div>
                        </a>
                        <div class="buttonBuy">
                            <button onclick="window.location.href='../../WebNuocHoa/page/checkout.php'">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="productComponents">
                        <a class="productdetail" href="../../WebNuocHoa/page/productDetail.php">
                            <div class="picture">
                                <div>
                                    <img src="../../WebNuocHoa/assets/images/products/nuochoanu/product3.webp" alt="">
                                </div>
                            </div>
                            <div class="styleProduct">
                                <p>Chanel Coco Mademoiselle EDP</p>
                            </div>
                            <div class="price">
                                <p>130,000 - 3,400,000</p>
                            </div>
                        </a>
                        <div class="buttonBuy">
                            <button onclick="window.location.href='../../WebNuocHoa/page/checkout.php'">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="productComponents">
                        <a class="productdetail" href="../../WebNuocHoa/page/productDetail.php">
                            <div class="picture">
                                <div>
                                    <img src="../../WebNuocHoa/assets/images/products/nuochoanu/product4.webp" alt="">
                                </div>
                            </div>
                            <div class="styleProduct">
                                <p>Christian Dior Miss Dior EDP</p>
                            </div>
                            <div class="price">
                                <p>130,000 - 3,400,000</p>
                            </div>
                        </a>
                        <div class="buttonBuy">
                            <button onclick="window.location.href='../../WebNuocHoa/page/checkout.php'">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
        
        <div class="content-cricle">
            <div>
                <div class="cricle1">
                    <img src="./assets/images/cricle1.png" alt="">
                </div>
                <div class="contentcricle" >
                    <h1>Hương Thơm Cho Phái Đẹp</h1>
                    <p>Cũng giống nhưu việc tìm kiếm một bộ trang phục, một kiểu tóc phù hợp với phong cách, cá tính của nàng, việc lựa chọn một mùi nước hoa phù hợp với nàng cũng khá là khó. Nó không chỉ phụ thuộc vào cá tính của nàng mà còn phụ thuộc vào mỗi dịp khác nhau, nàng sẽ hợp với những mùi hương khác nhau. Nàng hãy thử thật nhiều mùi hương để tìm ra chân ái của mình nhé!</p>
                </div>
            </div>
        </div>
        <div class="content-cricle">
            <div>
                <div class="contentcricle">
                    <h1>Helene, thiên đường nước hoa nữ!</h1>
                    <p>Helene Perfume chúng tôi có rất nhiều sản phẩm nước hoa với những mùi hương khác nhau để các nàng có thể lựa chọn thoải mái. Hãy mạnh dạn lựa chọn những mùi hương mà mình thích nha các nàng!</p>
                    <p style="text-align: center; font-weight:bold; color:#b3747f;font-family:'Cormorant Garamond';">MẠNH DẠN YÊU BẢN THÂN</p>
                    <p style="text-align: center; font-weight:bold; color:#b3747f;font-family:'Cormorant Garamond';">Khám phá để yêu bản thân và cùng nhau thay đổi.</p>
                </div>
                <div class="cricle1">
                        <img src="./assets/images/cricle2.png" alt="">
                </div>
            </div>
        </div>
        <h2 style="text-align: center; font-size:50px; margin-top:50px;">Review</h2>
        <div style="display: flex; flex-direction: column;align-items: center  ;">
            <hr style="width: 625px; margin-top:20px;border:1px solid #4f4f4f ;">
            <hr style="width: 295px; margin: 20px 0px; border:1px solid #515151 ;">
        </div>
        <div class="reviewnewhome">
            <div>
                <div class="reviewnewhome_template">
                    <div class="reviewnewhome_user_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/user1.png" alt="">
                    </div>
                    <div class="ratingreview_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/rating4star.png" alt="">
                    </div>
                    <div class="contentreview">
                        <p>Rất thơm, đúng như mô tả, mùi hương sang trọng, quyến rũ.</p>
                    </div>
                </div>
                <div class="reviewnewhome_template">
                    <div class="reviewnewhome_user_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/user2.png" alt="">
                    </div>
                    <div class="ratingreview_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/rating3star.png" alt="">
                    </div>
                    <div class="contentreview">
                        <p>Mùi hương tươi mát, nhẹ nhàng hợp với những cô nàng tiểu thư, mình rất thích sản phẩm này</p>
                    </div>
                </div>
                <div class="reviewnewhome_template">
                    <div class="reviewnewhome_user_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/user3.png" alt="">
                    </div>
                    <div class="ratingreview_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/rating4star.png" alt="">
                    </div>
                    <div class="contentreview">
                        <p>Mùi thơm ngọt ngào, thanh lịch, lưu hương lâu, tỏa hương tốt</p>
                    </div>
                </div>
                <div class="reviewnewhome_template">
                    <div class="reviewnewhome_user_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/user4.png" alt="">
                    </div>
                    <div class="ratingreview_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/rating4star.png" alt="">
                    </div>
                    <div class="contentreview">
                        <p>Hương thơm nữ tính nhẹ nhàng của hoa làm mình thấy rất dễ chịu, Nước hoa thơm nhưng không quá nồng, mùi hương hoa tạo cảm giác thoải mái, sang trọng. Khuyết điểm là độ lưu hương không lâu vì hương thơm nhẹ</p>
                    </div>
                </div>
                <div class="reviewnewhome_template">
                    <div class="reviewnewhome_user_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/user5.png" alt="">
                    </div>
                    <div class="ratingreview_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/rating4star.png" alt="">
                    </div>
                    <div class="contentreview">
                        <p>mùi khá thiên nhiên hoa cỏ mát mẻ ý, sẽ hợp với thời thiết mùa thu hơi se lạnh hoặc cho những bạn ngồi văn phòng có điều hòa. Độ lưu hương: 5-6h</p>
                    </div>
                </div>
                <div class="reviewnewhome_template">
                    <div class="reviewnewhome_user_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/user6.png" alt="">
                    </div>
                    <div class="ratingreview_img">
                        <img src="../WebNuocHoa/assets/images/reviewImg/rating5star.png" alt="">
                    </div>
                    <div class="contentreview">
                        <p>Nước hoa thơm ngọt ngào, vừa phải không quá nồng, lại có chút thanh mát, thiết kế xinh xắn. Giữ mùi lâu, mình xịt từ sáng đến klúc tấn làm vẫn thơm thoảng thoảng. Rất ưng em này</p>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../WebNuocHoa/components/footer/footer.php" ?>
    </div>
</body>
</html>     