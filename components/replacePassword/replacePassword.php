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
                <form action="" method="post" name="formPassword" onsubmit="return checkFormPassword()">
                    <h1 style="margin-bottom: 5px; text-align:center;">Đổi mật khẩu</h1>
                    <div class="input-common">
                        <p id="lable2">Current Password</p>
                        <input id="inputField1" type="password" name="password1">
                        <div id="error7" style="color: red; font-size:12px;"></div>
                    </div>
                    <div class="input-common">
                        <p id="lable2">A new password</p>
                        <input id="inputField2" type="password" name="password2">
                        <div id="error8" style="color: red; font-size:12px;"></div>
                    </div>
                    <div class="input-common">
                        <p id="lable2">Enter a new password</p>
                        <input id="inputField3" type="password" name="password3">
                        <div id="error9" style="color: red; font-size:12px;"></div>
                    </div>
                    <div class="button-log" >
                        <button name="submit2" style="margin-top: 25px;">Thay đổi</button>
                    </div>
                </form>
                <div class="exit">
                    <button onclick="closePassword()"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></button>
                </div>
            </div>
        </div>
        
</body>
<script src="../../../WebNuocHoa/assets/js/checkform.js"></script>
</html>