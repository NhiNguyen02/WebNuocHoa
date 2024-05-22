<?php

    include '../components/connect/config.php';
    if (isset($_POST['add_product'])) {

        $name = $_POST['name'];
        $tenTH = $_POST['tenTH'];
        $mota = $_POST['mota'];
        $dt = $_POST['dt'];
        $gia = $_POST['gia'];
        $sl = $_POST['sl'];
        $kho = $_POST['kho'];

        $image_01 = $_FILES['image_01']['name'];
        $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
        $image_folder_01 = '../assets/images/addproducts/' . $image_01;

        $image_02 = $_FILES['image_02']['name'];
        $image_tmp_name_02 = $_FILES['image_02']['tmp_name'];
        $image_folder_02 = '../assets/images/addproducts/' . $image_02;

        $image_03 = $_FILES['image_03']['name'];
        $image_tmp_name_03 = $_FILES['image_03']['tmp_name'];
        $image_folder_03 = '../assets/images/addproducts/' . $image_03;

        $image_04 = $_FILES['image_04']['name'];
        $image_tmp_name_04 = $_FILES['image_04']['tmp_name'];
        $image_folder_04 = '../assets/images/addproducts/' . $image_04;

        $select_products = "SELECT * FROM sanpham WHERE TENSP = '$name'";
        $result_products = mysqli_query($conn, $select_products);

        if (mysqli_num_rows($result_products) == 0) {
            move_uploaded_file($image_tmp_name_01, $image_folder_01);
            move_uploaded_file($image_tmp_name_02, $image_folder_02);
            move_uploaded_file($image_tmp_name_03, $image_folder_03);
            move_uploaded_file($image_tmp_name_04, $image_folder_04);
            
            $insert = "INSERT INTO sanpham(TENSP, DUNGTICH, GIABAN, MOTA, THUONGHIEU, SOLUONG, image_01, image_02, image_03, image_04, MAKHO) VALUES ('$name', '$dt', '$gia', '$mota', '$tenTH', '$sl', '$image_01', '$image_02', '$image_03', '$image_04', '$kho')";
            mysqli_query($conn, $insert);
            
            $select = "SELECT * FROM khohang WHERE MAKHO = $kho";
            $result = mysqli_query($conn, $select);
            $fetch = mysqli_fetch_assoc($result);
            $ssp = $fetch['SOSP'] + 1;
            $stk = $fetch['SLTONKHO'] + $sl;

            $update = mysqli_prepare($conn, "UPDATE `khohang` SET SOSP = ?, SLTONKHO = ? WHERE MAKHO = ?");
            mysqli_stmt_bind_param($update, "iii", $ssp, $stk, $kho);
            mysqli_stmt_execute($update);
         
        }
        
        header('location:http://localhost/webNuocHoa/pageadmin/admin.php');
    }
    if(isset($_GET['delete'])){

        $delete_id = $_GET['delete'];
        $select = "SELECT khohang.*, SOLUONG FROM sanpham, khohang WHERE sanpham.MAKHO = khohang.MAKHO AND khohang.MAKHO = $delete_id";
        $result = mysqli_query($conn, $select);
        $fetch = mysqli_fetch_assoc($result);
        $a =  (int) $fetch['SOSP'];
        $b =  (int) $fetch['SLTONKHO'];
        $c =  (int) $fetch['SOLUONG'];
        $ssp = $a - 1;
        $stk = $b - $c;

        $update = mysqli_prepare($conn, "UPDATE khohang
                                        INNER JOIN sanpham ON khohang.MAKHO = sanpham.MAKHO
                                        SET khohang.SOSP = ?,
                                            khohang.SLTONKHO = ?
                                        WHERE sanpham.MASP = ?;");
        mysqli_stmt_bind_param($update, "iii", $ssp, $stk, $delete_id);
        mysqli_stmt_execute($update);
        
        $delete_product_image = mysqli_prepare($conn, "SELECT * FROM `sanpham` WHERE MASP  = ?");
        mysqli_stmt_bind_param($delete_product_image, "i", $delete_id);
        mysqli_stmt_execute($delete_product_image);
        $result = mysqli_stmt_get_result($delete_product_image);
        $fetch_delete_image = mysqli_fetch_assoc($result);

        unlink('../assets/images/addproducts/'.$fetch_delete_image['image_01']);
        unlink('../assets/images/addproducts/'.$fetch_delete_image['image_02']);
        unlink('../assets/images/addproducts/'.$fetch_delete_image['image_03']);
        unlink('../assets/images/addproducts/'.$fetch_delete_image['image_04']);

        $delete_cart = mysqli_prepare($conn, "DELETE FROM `giohang` WHERE MASP = ?");
        mysqli_stmt_bind_param($delete_cart, "i", $delete_id);
        mysqli_stmt_execute($delete_cart);

        $delete_product = mysqli_prepare($conn, "DELETE FROM `sanpham` WHERE MASP = ?");
        mysqli_stmt_bind_param($delete_product, "i", $delete_id);
        mysqli_stmt_execute($delete_product);

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

</head>
<body>

    <h1 style="text-align:center;">Thêm sản phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <div>
            <label for="">Chọn kho lưu trữ:</label>
            <select required name="kho" >
                <option value="">--- Chọn kho ---</option>
                <?php
                    $select = "SELECT * FROM khohang ";
                    $result = mysqli_query($conn, $select);
                    if(mysqli_num_rows($result) > 0){
                        while($fetch = mysqli_fetch_assoc($result)){
                ?>
                    <option value="<?= $fetch['MAKHO']; ?>">Kho hàng <?= $fetch['TENKHO']; ?> (<?= $fetch['DIACHI']; ?>)</option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <div>    
            <label for="">Tên sản phẩm:</label>    
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="">Thương hiệu:</label>
            <input type="text" name="tenTH" required>
        </div>
        <!-- <div>
            <label for="">Loại sản phẩm:</label>
            <input type="text">
        </div> -->
        <div>
            <label for="">Thông tin chi tiết:</label>
            <textarea required style="resize: none;" cols="30" rows="10" name="mota" id=""></textarea>
        </div>
        <div>
            <label  for="">Dung tích:</label>
            <input id="capacity" type="number" name="dt" required>
        </div>
        <div>
            <label  for="">Giá (VNĐ):</label>
            <input id="capacity" type="number" name="gia" required>
        </div>
        <!-- <div style="justify-content:flex-end">
            <button type="button" id="createrow">Create</button>
        </div>
        <div id="addFields"></div> -->
        <div>
            <label for="">Tổng số lượng:</label>
            <input type="number" name="sl" required>
        </div>
        <div>
            <label for="">Hình 1:</label>
            <input required type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div>
            <label for="">Hình 2:</label>
            <input  required type="file" name="image_02" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div>
            <label for="">Hình 3:</label>
            <input required type="file" name="image_03" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div>
            <label for="">Hình 4:</label>
            <input required type="file" name="image_04" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        
        <div style="display: flex; justify-content:flex-end; margin-top:5px; padding:10px 30px;" ><button name="add_product">ADD</button></div>   
    </form>   
</body>
</html>