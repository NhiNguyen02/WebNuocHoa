<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/style.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/icons/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/contact.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include "../components/header/header.php" ?>
        <div id="hiddenLogin"  style="display:none"> <?php include "../../WebNuocHoa/components/login/login.php" ?></div>
        <div id="hiddenRegister" style="display:none"> <?php include "../../WebNuocHoa/components/register/register.php" ?></div>
        <div id="hiddenPassword" style="display:none"> <?php include "../../WebNuocHoa/components/replacePassword/replacePassword.php" ?></div>
        <div style="display: block; height:80px;"></div>
        <div class="form-contact">
            <div>
                <span style="margin:50px 0px 10px 0px; font-size:30px;">Liên hệ chúng tôi</span>
                <hr style="border: 1px solid #000000;">
                <p style="margin:20px 0px 10px 0px;">Helene prefume - Nước hoa chính hãng</p>
                <hr>
                <div style="display: flex; justify-content:center;">
                    <div class="info">
                        <div>
                            <p style=" padding: 0px 20px 0px 0px;">Helene perfume hoạt động với tiêu chí mang đến lợi ích tối đa cho khách hàng, lấy chữ tín làm tiền để phát triển. Với tầm nhìn trở thành địa điểm cung cấp nước hoa chính hãng tin cậy hàng đầu giúp chị em yên tâm khi mua sắm và làm đẹp.</p>
                        </div>
                        <div>
                            <p><i class="fa-solid fa-location-dot"></i>  CN1: 96 Phạm Thị Tánh( đường cũ 152 Cao Lỗ), Phường 4, Quận 8, Tp.HCM</p>
                            <p><i class="fa-solid fa-location-dot"></i> CN2: 15/54 - Định Công Thượng, quận Hoàng Mai, Hà Nội.</p>
                        </div>
                        <div>
                            <p><i class="fa-solid fa-phone"></i><Strong> Điện thoại:</Strong> +84778871783</p>
                            <p><i class="fa-solid fa-phone"></i><strong> Hotline:</strong> 0921.744.333</p>
                        </div>
                        <div>
                            <p><strong>Giờ mở cửa</strong></p>
                            <p>Bạn có thể đặt hàng online 24/24. Thời gian hỗ trợ online qua chat và hotline từ 8h - 00h tất cả các ngày.</p>
                            <p><strong>Ý kiến đóng góp</strong></p> 
                            <p><i class="fa-solid fa-envelope"></i> Email: info@Heleneperfume.com</p>
                        </div>
                    </div>
                </div>
                <hr>
                <p style="margin:10px 0px;"> Thông tin liên hệ</p>
                <hr>
                <div class="box-contact">
                        <form action="">
                            <div class="input-contact">
                                <div class="tab1"><label for="">Họ và tên<span>* </span>:</label></div>
                                <div class="tab2"><input type="text" placeholder="Họ và tên" style="height: 40px;"></div> 
                            </div>
                            <div class="input-contact">
                                <div class="tab1"><label for="">E-mail hoặc sđt<span>* </span>:</label></div>
                                <div class="tab2"><input type="text" placeholder="E-mail hoặc sđt" style="height: 40px;"></div> 
                            </div>
                            <div class="input-contact">
                                <div class="tab1"><label for="">Nội dung<span>* </span>:</label></div>
                                <div class="tab2"><textarea name="" id="" cols="30" rows="10" style="resize: none;" placeholder="Nội dung"></textarea></div> 
                            </div>
                            <button>Gửi đi</button>
                        </form>
                </div>
            </div>
        </div>
        <?php include "../../WebNuocHoa/components/footer/footer.php" ?>
    </div>
</body>
</html>