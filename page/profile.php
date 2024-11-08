<?php 

include '../components/connect/config.php';
session_start();

    if(!isset($_SESSION['user_name'])){
    header('location:http://localhost/WebNuocHoa/');
    }else{
        $user_id = $_SESSION['user_id'];
    }
    
    if(isset($_POST['update']))
    {
        $input1='none';  
    }else{
        $input2='none';
    }

    if(isset($_POST['update1'])){

        $id = $_SESSION['user_id'];
        $name = $_POST['name'];     
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $t = $_POST['t'];
        $h = $_POST['h'];
        $x = $_POST['x'];
        $sn = $_POST['sn'];
        $update_user = mysqli_prepare($conn, "UPDATE `taikhoan` SET name = ?, email = ?, sdt = ?, tinhthanh = ?, quanhuyen = ?, phuongxa = ?, sonha = ? WHERE id = ?");
        mysqli_stmt_bind_param($update_user, "ssissssi", $name, $email, $sdt, $t, $h, $x, $sn, $id);
        mysqli_stmt_execute($update_user);
 
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/style.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/profile.css">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/admin.css">
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
                <form action="" method="post">
                    <h2 style="text-align: center; margin:20px 0px;">Thông tin cá nhân</h2>
                    <?php
                        $id = $_SESSION['user_id'];
                        $select = " SELECT * FROM taikhoan WHERE id = '$id' ";
                        $result = mysqli_query($conn, $select);
                        $row = mysqli_fetch_array($result);
                        $_SESSION['user_name'] = $row['name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['sdt'] = $row['sdt'];
                        $_SESSION['t'] = $row['tinhthanh'];
                        $_SESSION['h'] = $row['quanhuyen'];
                        $_SESSION['x'] = $row['phuongxa'];
                        $_SESSION['sn'] = $row['sonha'];
                    ?>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Họ và tên:</label>
                        </div>    
                        <div class="input-user">
                            <p style="display: <?php echo $input1;?>;"><?php echo $_SESSION['user_name'] ?></p>
                            <p style="display: <?php echo $input2;?>;"><input type="text" value="<?php echo $_SESSION['user_name'] ?>" name="name">  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Email:</label>
                        </div>    
                        <div class="input-user">
                            <p style="display: <?php echo $input1;?>;"><?php echo $_SESSION['email'] ?></p>
                            <p style="display: <?php echo $input2;?>;"><input type="email" value="<?php echo $_SESSION['email'] ?>" name="email">  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Số điện thoại:</label>
                        </div>    
                        <div class="input-user">
                            <p style="display: <?php echo $input1;?>;"><?php echo $_SESSION['sdt'] ?></p>
                            <p style="display: <?php echo $input2;?>;"><input type="text" value="<?php echo $_SESSION['sdt'] ?>" name="sdt">  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Tỉnh thành:</label>
                        </div>
                        <div class="input-user">
                            <p style="display: <?php echo $input1;?>;"><?php echo $_SESSION['t'] ?></p>
                            <p style="display: <?php echo $input2;?>;"><input type="text" value="<?php echo $_SESSION['t'] ?>" name="t" >  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Quận huyện:</label>
                        </div>
                        <div class="input-user">
                            <p style="display: <?php echo $input1;?>;"><?php echo $_SESSION['h'] ?></p>
                            <p style="display: <?php echo $input2;?>;"><input type="text" value="<?php echo $_SESSION['h'] ?>" name="h" >  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Phường xã:</label>
                        </div>
                        <div class="input-user">
                            <p style="display: <?php echo $input1;?>;"><?php echo $_SESSION['x'] ?></p>
                            <p style="display: <?php echo $input2;?>;"><input type="text" value="<?php echo $_SESSION['x'] ?>" name="x" >  </p>
                        </div>
                    </div>
                    <div class="info-user">
                        <div class="label-user">
                            <label for="">Số nhà:</label>
                        </div>
                        <div class="input-user">
                            <p style="display: <?php echo $input1;?>;"><?php echo $_SESSION['sn'] ?></p>
                            <p style="display: <?php echo $input2;?>;"><input type="text" value="<?php echo $_SESSION['sn'] ?>" name="sn" >  </p>
                        </div>
                    </div>
                    <div class="update-profile" style="display: <?php echo $input1;?>;"><button name="update" >Cập nhật thông tin</button></div>
                    <div class="update-profile" style="display: <?php echo $input2;?>;"><button name="update1" >Lưu cập nhật</button></div>                
                </form>
            </div>
        </div>
        <div class="inforOder" style="display: <?php echo $input1;?>;">
            <div>
                <!-- <div>
                    <div><span>Trạng thái:</span> <span>Đã giao</span></div>
                    <div><span>Số lượng đơn hàng:</span> <span>100</span></div>
                    <div><span>Tạm tính:</span> <span>100.000 đ</span></div>
                </div>
                <div>
                    <div><span>Trạng thái:</span> <span>Đang giao</span></div>
                    <div><span>Số lượng đơn hàng:</span> <span>100</span></div>
                    <div><span>Tạm tính:</span> <span>100.000 đ</span></div>
                </div>
                <div>
                    <div><span>Trạng thái:</span> <span>Đang chuẩn bị hàng</span></div>
                    <div><span>Số lượng đơn hàng:</span> <span>100</span></div>
                    <div><span>Tạm tính:</span> <span>100.000 đ</span></div>
                </div> -->
                <table style="max-width: 1200px;">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Sản phẩm</th>
                                        <th>Thời gian đặt hàng</th>
                                        <th>Hình thức thanh toán</th>
                                        <th>Tình trạng thanh toán</th>
                                        <th>MÃ Voucher</th>
                                        <th>Thành tiền (VNĐ)</th>
                                        <th>Trạng thái</th>
                                        <th>Ghi chú</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $select_dh = "SELECT donhang.*, name FROM donhang, taikhoan WHERE donhang.MAKH = taikhoan.id AND donhang.MAKH = $user_id";
                                        $result_dh = mysqli_query($conn, $select_dh);
                                        if(mysqli_num_rows($result_dh) > 0){
                                            while($fetch_dh = mysqli_fetch_assoc($result_dh)){ 
                                    ?>
                                            <tr>
                                                <td><?= $fetch_dh['MAHD']; ?></td>
                                                <td><?= $fetch_dh['SANPHAM']; ?></td>
                                                <td><?= $fetch_dh['NGAYBAN']; ?></td>
                                                <td><?= $fetch_dh['THANHTOAN']; ?></td>
                                                <td><?= $fetch_dh['XULYTT']; ?></td>
                                                <td><?= $fetch_dh['MACTKM']; ?></td>
                                                <td><?= $fetch_dh['THANHTIEN']; ?></td>
                                                <td><?= $fetch_dh['TRANGTHAI']; ?></td>
                                                <td><?= $fetch_dh['GHICHU']; ?></td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                            echo '<h2>Hiện tại chưa có đơn đặt hàng!</h2>';
                                        }
                                    ?>
                                </tbody>
                            </table>
            </div>
        </div>
        <?php include "../../WebNuocHoa/components/footer/footer.php" ?>
    </div>
</body>
</html>