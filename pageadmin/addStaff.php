<?php

    include '../components/connect/config.php';
    if (isset($_POST['add_staff'])) {

        $name = $_POST['name'];
        $gt = $_POST['gt'];
        $ns = $_POST['ns'];
        $dt = $_POST['dt'];
        $email = $_POST['email'];
        $mk = md5(12345678);
        $dc = $_POST['dc'];
        $luong = $_POST['luong'];
        $cv = $_POST['cv'];

        $image_01 = $_FILES['image_01']['name'];
        $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
        $image_folder_01 = '../assets/images/avata/' . $image_01;

        $select = "SELECT * FROM admin WHERE EMAIL = '$email'";
        $result = mysqli_query($conn, $select);
                 
       if (mysqli_num_rows($result) == 0) {
            move_uploaded_file($image_tmp_name_01, $image_folder_01);
            
            $insert = "INSERT INTO admin(HOTEN, HINHANH, GIOITINH, NGSINH, SDT, EMAIL, MK, DIACHI, LUONG, CHUCVU) VALUES ('$name', '$image_01', '$gt', '$ns', '$dt', '$email', '$mk', '$dc', '$luong', '$cv')";
            mysqli_query($conn, $insert);
            
        }
                                                                     
        header('location:http://localhost/webNuocHoa/pageadmin/admin.php');
    }
    if(isset($_GET['delete_staff'])){

        $delete_id = $_GET['delete_staff'];
        $delete_image = mysqli_prepare($conn, "SELECT * FROM `admin` WHERE MANV  = ?");
        mysqli_stmt_bind_param($delete_image, "i", $delete_id);
        mysqli_stmt_execute($delete_image);
        $result = mysqli_stmt_get_result($delete_image);
        $fetch_delete_image = mysqli_fetch_assoc($result);

        unlink('../assets/images/avata/'.$fetch_delete_image['HINHANH']);

        $delete = mysqli_prepare($conn, "DELETE FROM `admin` WHERE MANV = ?");
        mysqli_stmt_bind_param($delete, "i", $delete_id);
        mysqli_stmt_execute($delete);

        header('location:http://localhost/webNuocHoa/pageadmin/admin.php');
        echo '<script>history.replaceState({}, "", window.location.href.split("?")[0]);</script>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/admin.css">
</head>
<body>

    <h1 style="text-align:center;">Thêm nhân viên</h1>
    <h6 style="text-align:center;">*Tài khoản đăng nhập với 'Email' nhập bên dưới*</h6>
    <h6 style="text-align:center;">*Với 'Password' mặc định là '12345678'*</h6>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- <div>
            <label for="">Mã nhân viên:</label>
            <input required type="text" >
        </div> -->
        <div>    
            <label for="">Tên nhân viên:</label>    
            <input required type="text" name="name">
        </div>
        <div>
            <label for="">Ảnh:</label>
            <input required type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div>
            <label for="">Giới tính:</label>
            <select required name="gt" id="">
                <option disabled selected hidden >-- Chọn giới tính--</option>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        <div>
            <label for="">Ngày sinh:</label>
            <input required type="date" name="ns" id="">
        </div>
        <div>
            <label for="">Số điện thoại:</label>
            <input required type="text" name="dt" id="">
        </div>
        <div>
            <label for="">Email:</label>
            <input required type="email" name="email">
        </div>
        <div>
            <label for="">Địa chỉ:</label>
            <input required type="text" name="dc">
        </div>
        <div>
            <label for="">Mức lương:</label>
            <input required type="number" name="luong">
        </div>
        <div>
            <label for="">Chức vụ:</label>
            <select required name="cv">
                <option disabled selected hidden >--Chọn chức vụ--</option>
                <option value="Nhân viên">Nhân viên</option>
                <option value="Quản lý">Quản lý</option>
            </select>
        </div>

        <div style="display: flex; justify-content:flex-end; margin-top:5px; padding:10px 30px;"><button name="add_staff">ADD</button></div>
    </form>
</body>
</html>