<?php

include 'components/connect/config.php';


if(isset($_POST['submit1'])){


    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = md5($_POST['password']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $user_type = 'user';

    //$select = " SELECT * FROM taikhoan WHERE email = '$email' && password = '$pass' ";

    //$result = mysqli_query($conn, $select);

    $select = $conn->prepare("SELECT * FROM `taikhoan` WHERE email = ?");
    $select->execute([$email,]);
    $row = $select->fetch(PDO::FETCH_ASSOC);
    if($select->rowCount() > 0){

        $error1[] = 'user already exist!';

    }else{

        if($pass != $pass){
            $error1[] = 'password not matched!';
        }else{
            $insert = $conn->prepare("INSERT INTO `taikhoan`(name, email, password, user_type) VALUES(?,?,?,?)");
            $insert->execute([$name, $email, $pass, $user_type]);

            //$insert = "INSERT INTO taikhoan(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
            //mysqli_query($conn, $insert);
            
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
                <form action=""style="text-align: center;" method="post">
                    <h1 style="margin-bottom: 5px;">Đăng kí</h1>
                    <?php
                    if(isset($error1)){
                        foreach($error1 as $error1){
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
                        <input id="inputField1" type="email" name="email">
                    </div>
                    <div class="input-common">
                        <p id="lable2">Password</p>
                        <input id="inputField2" type="password" name="password">
                    </div>
                    <div style="display: flex; justify-content:space-around ;align-items: center; padding-top: 20px; padding-bottom: 20px;">
                            <h4><input type="checkbox" name="" id=""> Tôi đồng với điều khoản và dịch vụ</h4>
                    </div>
                    <div class="button-log" >
                        <button name="submit1">Đăng kí</button>
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