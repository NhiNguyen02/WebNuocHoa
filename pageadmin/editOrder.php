<?php
    include '../components/connect/config.php';
    if(isset($_POST['update_hd'])){
        $mahd = $_POST['mahd'];
        $tt = $_POST['tt'];
        $gh = $_POST['gh'];
        $mota = $_POST['mota'];

        $update_product = $conn->prepare("UPDATE `donhang` SET XULYTT = ?, TRANGTHAI = ?, GHICHU = ? WHERE MAHD = ?");
        $update_product->bind_param("sssi", $tt, $gh, $mota, $mahd);
        $update_product->execute();
        $update_product->close();
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

    <h1 style="text-align:center;">Cập nhật đơn đặt hàng</h1>
    <form action="" method="post">
        <!-- <div>
            <label for="">Mã đơn hàng:</label>
            <input  value="mahd" type="number" name="mahd" id="mahd">
            
        </div> -->
        <!-- readonly -->
        <div>
            <label for="">Mã đơn hàng:</label>
            <select required name="mahd" >
                <option disabled selected hidden >--- Chọn mã đơn hàng ---</option>
                <?php
                    $select = "SELECT * FROM donhang ";
                    $result = mysqli_query($conn, $select);
                    if(mysqli_num_rows($result) > 0){
                        while($fetch = mysqli_fetch_assoc($result)){
                ?>
                    <option value="<?= $fetch['MAHD']; ?>">Mã <?= $fetch['MAHD']; ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <div>
            <label for="">Trạng thái thanh toán:</label>
            <select required name="tt" id="">
                <option disabled selected hidden >-Chọn trạng thái-</option>
                <option value="Đang xửa lý thanh toán">Đang xửa lý thanh toán</option>
                <option value="Đã thanh toán">Đã thanh toán</option>
                <option value="Hoàn trả">Hoàn trả thành công</option>
            </select> 
        </div>
        <div>
            <label for="">Trạng thái giao hàng:</label>
            <select name="gh" id="">
                <option disabled selected hidden >-Chọn trạng thái-</option>
                <option value="Người bán đang chuẩn bị hàng">Người bán đang chuẩn bị hàng</option>
                <option value="Đơn hàng đang vận chuyển">Đơn hàng đang vận chuyển</option>
                <option value="Đã nhận hàng">Đã nhận hàng</option>
                <option value="Hủy đơn hàng">Hủy đơn hàng</option>
            </select>
        </div>
        <div>
            <label for="">Ghi chú:</label>
            <textarea required value="d" style="resize: none;" cols="30" name="mota" rows="10"></textarea>
        </div>
        <div style="display: flex; justify-content:flex-end; margin-top:5px; padding:10px 30px;"><button name="update_hd">UPDATE</button></div>
    </form>
</body>
</html>