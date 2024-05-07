<?php 
    if(isset($_POST['update']))
    {
        $input1='none';  
    }else{
        $input2='none';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/style.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/profile.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include "../../WebNuocHoa/components/header/header.php" ?>
        <div id="hiddenLogin"  style="display:none"> <?php include "../../WebNuocHoa/components/login/login.php" ?></div>
        <div id="hiddenRegister" style="display:none"> <?php include "../../WebNuocHoa/components/register/register.php" ?></div>
        <div style="display: block; height:80px;"></div>
        <div class="form-info">
            <div class="update-img">
                <div class="img-user" >
                    <img src="../../WebNuocHoa/assets/images/iconAccount.svg" alt="" style="width:100px; height:100px;">
                </div>
                <input type="file" name="" id="" >
            </div>
            <div>
                <form action="" method="post">
                    <h2 style="text-align: center; margin:20px 0px;">Thông tin cá nhân</h2>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Họ và tên:</label>
                        </div>    
                        <div class="input-user">
                            <p style="display: <?php echo $input1;?>;"><?php echo $_SESSION['user_name'] ?></p>
                            <p style="display: <?php echo $input2;?>;"><input type="text" value="<?php echo $_SESSION['user_name'] ?>">  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Email:</label>
                        </div>    
                        <div class="input-user">
                            <p style="display: <?php echo $input1;?>;"><?php echo $_SESSION['email'] ?></p>
                            <p style="display: <?php echo $input2;?>;"><input type="text" value="<?php echo $_SESSION['email'] ?>" >  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Địa chỉ:</label>
                        </div>
                        <div class="input-user">
                            <p style="display: <?php echo $input1;?>;">dsgbgnbm</p>
                            <p style="display: <?php echo $input2;?>;"><input type="text" value="<?php echo $_SESSION['email'] ?>" >  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Số điện thoại:</label>
                        </div>    
                        <div class="input-user">
                            <p style="display: <?php echo $input1;?>;">sfdgbgnhmj</p>
                            <p style="display: <?php echo $input2;?>;"><input type="text" value="<?php echo $_SESSION['email'] ?>" >  </p>
                        </div>
                    </div>
                    <!-- <div class="update-profile"><a href="../../WebNuocHoa/page/update_profile.php">Cập nhật thông tin</a></div> -->
                    <div class="update-profile" style="display: <?php echo $input1;?>;"><button name="update" >Cập nhật thông tin</button></div>
                    <div class="update-profile" style="display: <?php echo $input2;?>;"><button name="update1" >Lưu cập nhật</button></div>                
                </form>
            </div>
        </div>
        
        <!-- <div  style="margin:20px 0px;">
            <h3>Thông tin cá nhân</h3>
        <table id="">
        <tr>
            <th>Name</th>
            <td><?php echo $_SESSION['user_name'] ?></td>
        </tr> 
        <tr>
            <th>Email</th>
            <td></td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td></td>
        </tr>
        <?php  
            
            ?>
        </table>
        <div class=""><a href=""><button> Cập nhật thông tin</button></a></div>
        <div class=""><a href="logout.php"><button> Đăng xuất </button></a></div>
        </div> -->
        <?php include "../../WebNuocHoa/components/footer/footer.php" ?>
    </div>
</body>
</html>
