<?php

    include '../components/connect/config.php';
    if(isset($_POST['update_lich'])){
        $manv = $_POST['manv'];
        $buoi = $_POST['buoi'];
        $ca = $_POST['ca'];
    
        $select_products = "SELECT * FROM lichlamviec WHERE MANV = '$manv' AND BUOI = '$buoi' AND CA = '$ca'";
        $result_products = mysqli_query($conn, $select_products);
        if (mysqli_num_rows($result_products) == 0) {
            $insert = "INSERT INTO lichlamviec(MANV, BUOI, CA) VALUES ('$manv', '$buoi', '$ca')";
            mysqli_query($conn, $insert);
        }
    } 
    if (isset($_GET['delete_lich'])) {

        $delete_id = $_GET['delete_lich'];
    
        $delete_user = $conn->prepare("DELETE FROM `lichlamviec` WHERE MALICH = ?");
        $delete_user->bind_param("i", $delete_id);
        $delete_user->execute();
        $delete_user->close();
    
        header('location:admin.php');
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

    <h1 style="text-align:center;">Chỉnh sửa lịch làm việc</h1>
    <form action="" method="post">
        <div>
            <label for="">Nhân viên:</label>
            <select required name="manv" >
                <option disabled selected hidden >--- Chọn nhân viên ---</option>
                <?php
                    $select = "SELECT * FROM admin ";
                    $result = mysqli_query($conn, $select);
                    if(mysqli_num_rows($result) > 0){
                        while($fetch = mysqli_fetch_assoc($result)){
                ?>
                    <option value="<?= $fetch['MANV']; ?>">(Mã nhân viên: <?= $fetch['MANV']; ?>) <?= $fetch['HOTEN']; ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <div>
            <label for="">Chọn ngày làm việc:</label>
            <select name="buoi" id="">
                <option disabled selected hidden >Chọn ngày trong tuần</option>
                <option value="Thứ 2">Thứ 2</option>
                <option value="Thứ 3">Thứ 3</option>
                <option value="Thứ 4">Thứ 4</option>
                <option value="Thứ 5">Thứ 5</option>
                <option value="Thứ 6">Thứ 6</option>
                <option value="Thứ 7">Thứ 7</option>
                <option value="Chủ nhật">Chủ nhật</option>
            </select>
        </div>
        <div>  
            <label for="">Chọn ca làm việc:</label>  
            <select name="ca" id="">
                <option disabled selected hidden >Chọn ca</option>
                <option value="Sáng">Sáng</option>
                <option value="Chiều">Chiều</option>
                <option value="Tối">Tối</option>
            </select>
        </div>
        <div style="display: flex; justify-content:flex-end; margin-top:5px; padding:10px 30px;"><button name="update_lich">UPDATE</button></div>
    </form>
</body>
</html>