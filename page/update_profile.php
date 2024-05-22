<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/style.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/profile.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/icons/fontawesome-free-6.4.0-web/css/all.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <?php include "../../WebNuocHoa/components/header/header.php" ?>
        <div id="hiddenLogin"  style="display:none"> <?php include "../../WebNuocHoa/components/login/login.php" ?></div>
        <div id="hiddenRegister" style="display:none"> <?php include "../../WebNuocHoa/components/register/register.php" ?></div>
        <div id="hiddenPassword" style="display:none"> <?php include "../../WebNuocHoa/components/replacePassword/replacePassword.php" ?></div>
        <div style="display: block; height:80px;"></div>
        <div class="form-info">
            <div class="update-img">
                <div class="img-user" >
                    <img src="../../WebNuocHoa/assets/images/iconAccount.svg" alt="" style="width:100px; height:100px;">
                </div>
                <input type="file" name="" id="" >
            </div>
            <div>
                <form action="">
                    <h2 style="text-align: center; margin:20px 0px;">Thông tin cá nhân</h2>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Họ và tên:</label>
                        </div>    
                        <div class="input-user">
                            <p><input type="text" value="<?php echo $_SESSION['user_name'] ?>">  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Email:</label>
                        </div>    
                        <div class="input-user">
                            <p><input type="text" value="<?php echo $_SESSION['email'] ?>" >  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Địa chỉ:</label>
                            
                        </div>
                        <div class="input-user">
                            <p><input type="text" >  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Số điện thoại:</label>
                        </div>    
                        <div class="input-user">
                            <p><input type="text" >  </p>
                        </div>
                    </div>
                    <div class="update-profile"><a href="../../WebNuocHoa/page/profile.php">Lưu cập nhật</a></div>
                </form>
            </div>
        </div>
        <?php include "../../WebNuocHoa/components/footer/footer.php" ?>
    </div>
</body>
</html>