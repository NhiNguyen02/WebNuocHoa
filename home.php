
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../WebNuocHoa/assets/css/style.css">
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
            <div class="introduce"></div>
            <div class="template-layout"></div>
            <div class="template-layout1"></div> 
            <div class="flower1">
                <img src="./assets/images/flower1.svg" alt="">
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
        <h2 style="text-align: center; font-size:50px;">Best Seller</h2>
        <div style="display: flex; flex-direction: column;align-items: center  ;">
            <hr style="width: 625px; margin-top:20px;border:1px solid #4f4f4f ;">
            <hr style="width: 295px; margin: 20px 0px; border:1px solid #515151 ;">
        </div>
        <div class="layout-bestseller">
            <div class="img-best-product">
                <a href=""><p>NƯỚC HOA NỮ <i class="fa-solid fa-arrow-right"></i> </p></a>
                <a href=""><img src="./assets/images/Maskgroup(5).png" alt=""></a>
            </div>
            <div class="img-best-product">
                <a href=""><p>NƯỚC HOA UNISEX <i class="fa-solid fa-arrow-right"></i></p> </a>
                <a href=""><img src="./assets/images/Maskgroup(4).png" alt=""></a>
            </div>
            <div class="img-best-product">
                <a href=""><p>NƯỚC HOA NICHE <i class="fa-solid fa-arrow-right"></i></p> </a>
                <a href=""><img src="./assets/images/Maskgroup(3).png" alt=""></a>
            </div>
        </div>
        <div class="content-cricle">
            <div class="cricle1">
                <img src="./assets/images/cricle1.png" alt="">
            </div>
            <div style="width: 50%;">
                <p>
                Nước hoa là hỗn hợp các chất tạo mùi như tinh dầu, chất thơm, chất hãm hương (lưu hương), và dung môi hòa tan. Dùng để tạo ra cho cơ thể người, con vật, đồ vật hay không gian một mùi hương dễ chịu. Các thành phần của nước hoa có thể được tổng hợp nhân tạo hoặc chiết xuất từ thực vật và động vật.
                </p>
            </div>
        </div>
        <div class="content-cricle">
            <div style="width: 50%;">
                <p>
                    Nước hoa là hỗn hợp các chất tạo mùi như tinh dầu, chất thơm, chất hãm hương (lưu hương), và dung môi hòa tan. Dùng để tạo ra cho cơ thể người, con vật, đồ vật hay không gian một mùi hương dễ chịu. Các thành phần của nước hoa có thể được tổng hợp nhân tạo hoặc chiết xuất từ thực vật và động vật.
                </p>
            </div>
            <div class="cricle1">
                    <img src="./assets/images/cricle2.png" alt="">
            </div>
        </div>
        <?php include "../WebNuocHoa/components/footer/footer.php" ?>
    </div>
</body>
</html>     