<?php
@include 'config.php';


if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM taikhoan WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'user'){
        $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['email'] = $row['email'];
         header('location:http://localhost/WebNuocHoa/home.php');
      }
      if($row['user_type'] == 'admin'){
        $_SESSION['user_name_ad'] = $row['name'];

        $_SESSION['email_ad'] = $row['email'];
        header('location:http://localhost/WebNuocHoa/pageadmin/admin.php');
      }
     
   }else{
      $error[] = 'incorrect email or password!';
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
        <div id="wraperLogin">
            <div class="template-login">
                <form action=""style="text-align: center; " method="post">
                    <h1 style="margin-bottom: 5px;">Đăng nhập</h1>
                    <?php
                        if(isset($error)){
                            foreach($error as $error){
                                echo '<span class="error-msg">'.$error.'</span>';
                            };
                        };
                    ?>
                    <div class="input-common">
                        <p id="lable1">Email</p>
                        <input id="inputField1" type="text" name="email">
                    </div>
                    <div class="input-common">
                        <p id="lable2">Password</p>
                        <input id="inputField2" type="password" name="password">
                    </div>
                    <div style="display: flex; padding: 15px 0px;">
                            <h4 style="margin-right: 30px;"><input type="checkbox" name="" id="">Lưu mật khẩu</h4>
                            <a href="" > <strong>Quên mật khẩu</strong></a>
                    </div>
                    <div class="button-log" >
                        <button name="submit">Đăng nhập</button>
                    </div>
                    <span>Chưa có tài khoản? <strong onclick="swapRegister()" style="margin-left: 5px; cursor: pointer;">Đăng kí</strong></span>
                </form>
                <div class="exit">
                    <button onclick="closeLogin()"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></button>
                </div>
            </div>
        </div>
</body>
</html>