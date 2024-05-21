<?php 

    include '../components/connect/config.php';

    if (isset($_POST['CTKM'])) {

        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        $sogiam = $_POST['sogiam'];
        $tongtien = $_POST['tongtien'];
        $bd = $_POST['bd'];
        $kt = $_POST['kt'];
    
        $select_products = "SELECT * FROM khuyenmai WHERE MAVOUCHER = '$ma'";
        $result_products = mysqli_query($conn, $select_products);
    
        if (mysqli_num_rows($result_products) == 0) { 
            $insert = "INSERT INTO khuyenmai(MAVOUCHER, TENCT, GIAMGIA, TIENTOITHIEU, NGAYBD, NGAYKT) VALUES ('$ma', '$ten', '$sogiam', '$tongtien', '$bd', '$kt')";
            mysqli_query($conn, $insert);
        }

        header('location:http://localhost/webNuocHoa/pageadmin/admin.php');
    }
    if(isset($_GET['delete_km'])){

        $delete_id = $_GET['delete_km'];

        $delete_km = $conn->prepare("DELETE FROM `khuyenmai` WHERE MAVOUCHER = ?");
        $delete_km->bind_param("s", $delete_id);
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
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/admin.css">
</head>
<body>

    <h1 style="text-align:center;">Tạo khuyến mãi</h1>
    <form action="" method="post">
        <div>
            <label for="">Mã Voucher:</label>
            <input type="text" name="ma" required>
        </div>
        <div>
            <label for="">Tên chương trình khuyến mãi:</label>
            <input type="text" name="ten" required>
        </div>
        <div>    
            <label for="">Mức giá giảm:</label>    
            <input type="text" name="sogiam" required>
        </div>
        <div>
            <label for="">Số tiền tối thiểu:</label>
            <input type="text" name="tongtien" required>
        </div>
        <div>
            <label for="">Thời gian bắt đầu:</label>
            <input type="date" name="bd" required>
        </div>
        <div>
            <label for="">Thời gian kết thúc:</label>
            <input type="date" name="kt" required>
        </div>      
        <div style="display: flex; justify-content:flex-end; margin-top:5px; padding:10px 30px;"><button name="CTKM">ADD</button></div>
    </form>
</body>
</html>