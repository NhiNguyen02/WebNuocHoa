<?php

    include '../components/connect/config.php';
    

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

    <h1 style="text-align:center;">Chỉnh sửa khuyến mãi</h1>
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