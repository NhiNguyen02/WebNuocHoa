<?php 
    include '../components/connect/config.php';
    if (isset($_POST['add_kh'])) {

        $ten = $_POST['ten'];
        $dc = $_POST['dc'];
    
        $select_k = "SELECT * FROM khohang WHERE TENKHO = '$ten'";
        $result_k = mysqli_query($conn, $select_k);
    
        if (mysqli_num_rows($result_k) == 0) { 
            $insert = "INSERT INTO khohang (TENKHO, DIACHI) VALUES ('$ten', '$dc')";
            mysqli_query($conn, $insert);
            
        } 
        
        header('location:http://localhost/webNuocHoa/pageadmin/admin.php');

    }
    if(isset($_GET['delete_kh'])){

        $delete_id = $_GET['delete_kh'];

        $delete_product_image = mysqli_prepare($conn, "SELECT * FROM `sanpham` WHERE MAKHO  = ?");
        mysqli_stmt_bind_param($delete_product_image, "i", $delete_id);
        mysqli_stmt_execute($delete_product_image);
        $result = mysqli_stmt_get_result($delete_product_image);
        if (mysqli_fetch_assoc($result)>0){
        $fetch_delete_image = mysqli_fetch_assoc($result);

        unlink('../assets/images/addproducts/'.$fetch_delete_image['image_01']);
        unlink('../assets/images/addproducts/'.$fetch_delete_image['image_02']);
        unlink('../assets/images/addproducts/'.$fetch_delete_image['image_03']);
        unlink('../assets/images/addproducts/'.$fetch_delete_image['image_04']);
        }
        $delete_product = mysqli_prepare($conn, "DELETE FROM `sanpham` WHERE MAKHO = ?");
        mysqli_stmt_bind_param($delete_product, "i", $delete_id);
        mysqli_stmt_execute($delete_product);

        $delete_cart = mysqli_prepare($conn, "DELETE FROM `giohang`WHERE MAKHO = ? ");
        mysqli_stmt_bind_param($delete_cart, "i", $delete_id);
        mysqli_stmt_execute($delete_cart);

        $delete_km = $conn->prepare("DELETE FROM `khohang` WHERE MAKHO = ?");
        $delete_km->bind_param("i", $delete_id);
        $delete_km->execute();
        $delete_km->close();
     
        header('location:http://localhost/webNuocHoa/pageadmin/admin.php');

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

    <h1 style="text-align:center;">Thêm sản phẩm vào kho</h1>
    <form action="" method="post">
        <div>    
            <label for="">Tên kho hàng:</label>    
            <input type="text" name="ten">
        </div>
        <div>
            <label for="">Địa chỉ kho:</label>
            <input type="text" name="dc">
        </div>
        <div style="display: flex; justify-content:flex-end; margin-top:5px; padding:10px 30px;" ><button name="add_kh">ADD</button></div>   
    </form>   
</body>
</html>