<?php

@include '../WebNuocHoa/components/connect/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   $action1='block';
   $action2='';
}else{
    $user_info=$_SESSION['user_name'];
    $action1='none';
    $action2='<a href="../../../WebNuocHoa/page/profile.php"><li>' . $user_info . '</li></a>
    <a href="../../../WebNuocHoa/page/logout.php"><li>Đăng xuất</li></a>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../WebNuocHoa/components/header/header.css">
    <!-- <link rel="stylesheet" href="../login/login.css"> -->
    <link rel="stylesheet" href="../../../WebNuocHoa/assets/icons/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="../../../WebNuocHoa/assets/css/style.css">
    <script src="../../../WebNuocHoa/components/login/loginOC.js"></script>
    <script src="../../../WebNuocHoa/components/register/registerOC.js"></script>
    <title>Document</title>
</head>
<body>
        <header>
            <div class="Logo">
                <a href="../../../WebNuocHoa/home.php"><img src="../../../WebNuocHoa/assets/images/logo.svg" alt=""></a>
            </div>
            <div class="menu">
                <li><a href="../../../WebNuocHoa/home.php">TRANG CHỦ</a></li>
                <li><a href="../../../WebNuocHoa/page/about.php">GIỚI THIỆU</a></li>
                <li class="list-type-product">
                    <a href="../../../WebNuocHoa/page/product.php">SẢN PHẨM</a>
                    <ul>
                        <li>Nước hoa Nữ</li>
                        <li>Nước hoa Unisex</li>
                        <li>Nước hoa Niche</li>
                    </ul>
                </li>
                <li><a href="../../../WebNuocHoa/page/contact.php">LIÊN HỆ</a></li>
            </div>
            <div class="others">
                <li><input placeholder="Search" type="text"><i class="fa-solid fa-magnifying-glass"></i></li>
                <li style="display: <?php echo $action1; ?> ;"><button onclick="openLogin()">Đăng nhập</button></li>
                <li style="display: <?php echo $action1; ?> ;"><button onclick="openRegister()">Đăng kí</button></li>
                <li style="position: relative;"><a href="../../../WebNuocHoa/page/cart.php"><img  src="../../../WebNuocHoa/assets/images/iconCart.svg" alt=""></a><i class="fa-solid fa-circle" style="color: #fb0505;"></i></li>
                <li class="link-profile"><a href="../../../WebNuocHoa/page/profile.php"></a><img src="../../../WebNuocHoa/assets/images/iconAccount.svg" alt="">
                    <ul>
                        <!-- <a href=""><li>Thông tin cá nhân</li></a>
                        <a href="../../../WebNuocHoa/page/logout.php"><li>Đăng xuất</li></a> -->
                        <?php echo $action2;?>
                    </ul> 
                    
                    
                </li>
            </div>
        </header>
</body>