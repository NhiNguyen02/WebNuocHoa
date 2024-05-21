<?php

    include '../components/connect/config.php';

    if(isset($_POST['update_sp'])){

        $masp = $_POST['masp'];
        $name = $_POST['name'];
        $tenTH = $_POST['tenTH'];
        $mota = $_POST['mota'];
        $dt = $_POST['dt'];
        $gia = $_POST['gia'];
        $sl = $_POST['sl'];
        $makho = $_POST['makho'];

        $select = "SELECT * FROM sanpham WHERE MASP = $masp ";
        $result = mysqli_query($conn, $select);
        $fetch = mysqli_fetch_assoc($result);
        $sl_1 =  (int) $fetch['SOLUONG'];
        $select = "SELECT * FROM khohang WHERE MAKHO = $makho ";
        $result = mysqli_query($conn, $select);
        $fetch = mysqli_fetch_assoc($result);
        $stk =  (int) $fetch['SLTONKHO'];
        $stk = $stk - $sl_1 + $sl;
        $update = mysqli_prepare($conn, "UPDATE `khohang` SET SLTONKHO = ? WHERE MAKHO = ?");
        mysqli_stmt_bind_param($update, "ii", $stk, $makho);
        mysqli_stmt_execute($update);

        $update_product = $conn->prepare("UPDATE `sanpham` SET TENSP = ?, DUNGTICH = ?, GIABAN = ?, MOTA = ?, THUONGHIEU = ?, SOLUONG = ? WHERE MASP = ?");
        $update_product->bind_param("siissii", $name, $dt, $gia, $mota, $tenTH, $sl, $masp);
        $update_product->execute();
        $update_product->close();

        $old_image_01 = $_POST['old_image_01'];
        $image_01 = $_FILES['image_01']['name'];
        $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
        $image_folder_01 = '../assets/images/addproducts/'.$image_01;

        if(!empty($image_01)){

            $update_image_01 = $conn->prepare("UPDATE `sanpham` SET image_01 = ? WHERE MASP = ?");
            $update_image_01->bind_param("si", $image_01, $masp);
            $update_image_01->execute();
            $update_image_01->close();
            move_uploaded_file($image_tmp_name_01, $image_folder_01);
            unlink('../assets/images/addproducts/'.$old_image_01);
        
        }
    
        $old_image_02 = $_POST['old_image_02'];
        $image_02 = $_FILES['image_02']['name'];
        $image_tmp_name_02 = $_FILES['image_02']['tmp_name'];
        $image_folder_02 = '../assets/images/addproducts/'.$image_02;
    
        if(!empty($image_02)){

            $update_image_02 = $conn->prepare("UPDATE `sanpham` SET image_02 = ? WHERE MASP = ?");
            $update_image_02->bind_param("si", $image_02, $masp);
            $update_image_02->execute();
            $update_image_02->close();
            move_uploaded_file($image_tmp_name_02, $image_folder_02);
            unlink('../assets/images/addproducts/'.$old_image_02);
        
        }
    
        $old_image_03 = $_POST['old_image_03'];
        $image_03 = $_FILES['image_03']['name'];
        $image_tmp_name_03 = $_FILES['image_03']['tmp_name'];
        $image_folder_03 = '../assets/images/addproducts/'.$image_03;
    
        if(!empty($image_03)){

            $update_image_03 = $conn->prepare("UPDATE `sanpham` SET image_03 = ? WHERE MASP = ?");
            $update_image_03->bind_param("si", $image_03, $masp);
            $update_image_03->execute();
            $update_image_03->close();
            move_uploaded_file($image_tmp_name_03, $image_folder_03);
            unlink('../assets/images/addproducts/'.$old_image_03);
        
        }
    
        $old_image_04 = $_POST['old_image_04'];
        $image_04 = $_FILES['image_04']['name'];
        $image_tmp_name_04 = $_FILES['image_04']['tmp_name'];
        $image_folder_04 = '../assets/images/addproducts/'.$image_04;
    
        if(!empty($image_04)){

            $update_image_04 = $conn->prepare("UPDATE `sanpham` SET image_04 = ? WHERE MASP = ?");
            $update_image_04->bind_param("si", $image_04, $masp);
            $update_image_04->execute();
            $update_image_04->close();
            move_uploaded_file($image_tmp_name_04, $image_folder_04);
            unlink('../assets/images/addproducts/'.$old_image_04);
        
        }

    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

    <h1 style="text-align:center;">Chỉnh sửa thông tin sản phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" id="masp" name="masp" >
        <input type="hidden" id="makho" name="makho" >
        <input type="hidden" name="old_image_01" id="image01">
        <input type="hidden" name="old_image_02" id="image02">
        <input type="hidden" name="old_image_03" id="image03">
        <input type="hidden" name="old_image_04" id="image04">
        <div>    
            <label for="">Tên sản phẩm:</label>    
            <input required id="tensp" type="text" name="name">
        </div>
        <div>
            <label for="">Thương hiệu:</label>
            <input required id="thuonghieu" type="text" name="tenTH">
        </div>
        <div>
            <label for="">Thông tin chi tiết:</label>
            <textarea required value="d" style="resize: none;" cols="30" name="mota" rows="10" name="" id="mota"></textarea>
        </div>
        <div>
            <label  for="">Dung tích:</label>
            <input required id="capacity" type="text" name="dt">
        </div>
        <div>
            <label  for="">Giá (VNĐ):</label>
            <input required id="giaban" type="number" name="gia">
        </div>
        <div>
            <label for="">Tổng số lượng:</label>
            <input required  id="soluong" type="number" name="sl">
        </div>
        <div>
            <label for="file1">Hình 1:</label>
            <input id="image01" type="file" accept="image/jpg, image/jpeg, image/png, image/webp" name="image_01">
        </div>
        <div>
            <label for="file2">Hình 2:</label>
            <input id="file2" type="file" accept="image/jpg, image/jpeg, image/png, image/webp" name="image_02">
        </div>
        <div>
            <label for="file3">Hình 3:</label>
            <input id="file3" type="file" accept="image/jpg, image/jpeg, image/png, image/webp" name="image_03">
        </div>
        <div>
            <label for="file4">Hình 4:</label>
            <input id="file4" type="file" accept="image/jpg, image/jpeg, image/png, image/webp" name="image_04">
        </div>
        <div style="display: flex; justify-content:flex-end; margin-top:5px; padding:10px 30px;"><button name="update_sp">UPDATE</button></div>   
    </form>   
</body>
</html>