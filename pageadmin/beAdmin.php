<?php

include '../components/connect/config.php';
session_start();

// if(!isset($_SESSION['user_name_ad'])){
//    header('location:http://localhost/WebNuocHoa/');
// }

if (isset($_POST['add_product'])) {

    $name = $_POST['name'];
    $tenTH = $_POST['tenTH'];
    $mota = $_POST['mota'];
    $dt = $_POST['dt'];
    $gia = $_POST['gia'];
    $sl = $_POST['sl'];

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
        
        $insert = "INSERT INTO sanpham(TENSP, DUNGTICH, GIABAN, MOTA, THUONGHIEU, SOLUONG, image_01, image_02, image_03, image_04) VALUES ('$name', '$dt', '$gia', '$mota', '$tenTH', '$sl', '$image_01', '$image_02', '$image_03', '$image_04')";
        mysqli_query($conn, $insert);
        $message = 'Thêm sản phẩm thành công!';
        
    } else {
        $message = 'Sản phẩm đã tồn tại!';
    }
}

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_product_image = mysqli_prepare($conn, "SELECT * FROM `sanpham` WHERE MASP  = ?");
   mysqli_stmt_bind_param($delete_product_image, "i", $delete_id);
   mysqli_stmt_execute($delete_product_image);
   $result = mysqli_stmt_get_result($delete_product_image);
   $fetch_delete_image = mysqli_fetch_assoc($result);
   
   unlink('../assets/images/addproducts/'.$fetch_delete_image['image_01']);
   unlink('../assets/images/addproducts/'.$fetch_delete_image['image_02']);
   unlink('../assets/images/addproducts/'.$fetch_delete_image['image_03']);
   unlink('../assets/images/addproducts/'.$fetch_delete_image['image_04']);

   $delete_product = mysqli_prepare($conn, "DELETE FROM `sanpham` WHERE MASP = ?");
   mysqli_stmt_bind_param($delete_product, "i", $delete_id);
   mysqli_stmt_execute($delete_product);
   
   $delete_cart = mysqli_prepare($conn, "DELETE FROM `giohang` WHERE MASP = ?");
   mysqli_stmt_bind_param($delete_cart, "i", $delete_id);
   mysqli_stmt_execute($delete_cart);

   header('location:admin.php');
}

if(isset($_GET['deleteuser'])){

    $delete_id = $_GET['deleteuser'];

    $delete_user = $conn->prepare("DELETE FROM `taikhoan` WHERE id = ?");
    $delete_user->bind_param("i", $delete_id);
    $delete_user->execute();
    $delete_user->close();
    
    $delete_cart = $conn->prepare("DELETE FROM `giohang` WHERE MAKH = ?");
    $delete_cart->bind_param("i", $delete_id);
    $delete_cart->execute();
    $delete_cart->close();

    // Prepare and execute DELETE query for orders
    // $delete_orders = $conn->prepare("DELETE FROM `orders` WHERE user_id = ?");
    // $delete_orders->bind_param("i", $delete_id);
    // $delete_orders->execute();
    // $delete_orders->close();
    
    // Prepare and execute DELETE query for messages
    // $delete_messages = $conn->prepare("DELETE FROM `messages` WHERE user_id = ?");
    // $delete_messages->bind_param("i", $delete_id);
    // $delete_messages->execute();
    // $delete_messages->close();
    
    header('location:admin.php');
 }

?>