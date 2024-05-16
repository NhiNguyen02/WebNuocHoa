<?php

@include 'config.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=md5($_POST['password1']);
    $select = " SELECT * FROM taikhoan WHERE email = '$email' && password = '$pass' ";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
       $row = mysqli_fetch_array($result);
 
       if($row['user_type'] == 'user'){
         $_SESSION['user_id'] = $row['id'];
          $_SESSION['user_name'] = $row['name'];
          header('location:http://localhost/WebNuocHoa/home.php');
       }
       if($row['user_type'] == 'admin'){
         $_SESSION['user_name_ad'] = $row['name'];
 
         $_SESSION['email_ad'] = $row['email'];
         header('location:http://localhost/WebNuocHoa/pageadmin/admin.php');
       }
      
    }else{
        echo '<script type="text/javascript">
        window.onload = function () { alert("Đăng nhập thất bại (Bạn đã có tài khoản chưa?)"); }
        </script>';
    }
    echo '<script>history.replaceState({}, "", window.location.href.split("?")[0]);</script>';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../WebNuocHoa/components/login/login.css">
    <link rel="stylesheet" href="../../../WebNuocHoa/assets/css/style.css">
    <link rel="stylesheet" href="../../../WebNuocHoa/assets/icons/fontawesome-free-6.4.0-web/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
        <div id="wraperLogin">
            <div class="template-login">
                <form action="" method="post" name="formLogin" onsubmit="return checkFormLogin()">
                    <h1 style="margin-bottom: 5px; text-align:center;">Đăng nhập</h1>
                    <div class="input-common">
                        <p id="lable1">Email</p>
                        <input id="inputField1" type="text" name="email">
                        <div id="error5" style="color: red; font-size: 12px;"></div>
                    </div>
                    <div class="input-common">
                        <p id="lable2">Password</p>
                        <input id="inputField2" type="password" name="password1">
                        <div id="error6" style="color: red; font-size: 12px;"></div>
                    </div>
                    <div style="display: flex; padding: 15px 0px;">
                            <h4 style="margin-right: 30px;"><input type="checkbox" name="" id="">Lưu mật khẩu</h4>
                            <a href="" > <strong>Quên mật khẩu</strong></a>
                    </div>
                    <div class="button-log" >
                        <button name="submit" >Đăng nhập</button>
                    </div>
                    <span style="display:flex; justify-content: center;">Chưa có tài khoản? <strong onclick="swapRegister()" style="margin-left: 5px; cursor: pointer;">Đăng kí</strong></span>
                </form>
                <div class="exit">
                    <button onclick="closeLogin()"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></button>
                </div>
            </div>
        </div>
        
</body>
<script src="../../../WebNuocHoa/assets/js/checkform.js"></script>
</html>