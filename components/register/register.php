<?php

@include 'config.php';
if(isset($_POST['submit1'])){
    $username=$_POST['name'];
    $email=$_POST['email'];
    $password1=md5($_POST['password1']);
    $select = " SELECT * FROM taikhoan WHERE email = '$email'";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
        echo '<script type="text/javascript">
            window.onload = function () { alert("Email đã đăng ký tài khoản"); }
        </script>';
    }else{
        $insert="INSERT INTO taikhoan(name, email, password) VALUES ('$username','$email', '$password1')";
        mysqli_query($conn,$insert);
        echo '<script type="text/javascript">
            window.onload = function () { alert("Đăng ký thành công"); }
        </script>';
    }
    echo '<script>history.replaceState({}, "", window.location.href.split("?")[0]);</script>';
    mysqli_close($conn);
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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div id="wraperLogin">
            <div class="template-login">
                <a href=""></a>
                <form action="" method="post" name="myForm" onsubmit="return checkFormRegister()">
                    <h1 style="margin-bottom: 5px; text-align:center">Đăng kí</h1>
                    <div class="input-common">
                        <p id="lable1">Name</p>
                        <input id="inputField1" type="text" name="name">
                        <div id="error1" style="color: red; font-size:12px;"></div>
                    </div>
                    <div class="input-common">
                        <p id="lable1">Email</p>
                        <input id="inputField1" type="text" name="email">
                        <div id="error2" style="color: red; font-size:12px;"></div>
                    </div>
                    <div class="input-common">
                        <p id="lable2">Password</p>
                        <input id="inputField2" type="password" name="password1">
                        <div id="error3" style="color: red; font-size:12px;"></div>
                    </div>
                    <div class="input-common">
                        <p id="lable2">Confirm Password</p>
                        <input id="inputField2" type="password" name="password2">
                        <div id="error4" style="color: red; font-size:12px;"></div>
                    </div>
                    <div style="display: flex; justify-content:space-around ;align-items: center; padding-top: 20px; padding-bottom: 20px;">
                            <h4><input type="checkbox" name="" id=""> Tôi đồng với điều khoản và dịch vụ</h4>
                    </div>
                    <div class="button-log" >
                        <button   name="submit1">Đăng kí</button>
                    </div>
                    <span style="display:flex; justify-content: center;">Đã có tài khoản? <strong onclick="swapLogin()" style="margin-left: 5px; cursor: pointer;">Đăng nhập</strong></span>
                </form>
                <div class="exit">
                    <button onclick="closeRegister()"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../../WebNuocHoa/assets/js/checkform.js"></script>


</html>