<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $user_type = 'user';

   $select = " SELECT * FROM taikhoan WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $pass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO taikhoan(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         
      }
   }

};
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
                <form action=""style="text-align: center;" method="post">
                    <h1 style="margin-bottom: 5px;">Đăng kí</h1>
                    <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                    ?>
                    <div class="input-common">
                        <p id="lable1">Name</p>
                        <input id="inputField1" type="text" name="name">
                    </div>
                    <div class="input-common">
                        <p id="lable1">Email</p>
                        <input id="inputField1" type="text" name="email">
                    </div>
                    <div class="input-common">
                        <p id="lable2">Password</p>
                        <input id="inputField2" type="password" name="password">
                    </div>
                    <div style="display: flex; justify-content:space-around ;align-items: center; padding-top: 20px; padding-bottom: 20px;">
                            <h4><input type="checkbox" name="" id=""> Tôi đồng với điều khoản và dịch vụ</h4>
                    </div>
                    <div class="button-log" >
                        <button name="submit">Đăng kí</button>
                    </div>
                    <span>Đã có tài khoản? <strong onclick="swapLogin()" style="margin-left: 5px; cursor: pointer;">Đăng nhập</strong></span>
                </form>
                <div class="exit">
                    <button onclick="closeRegister()"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>