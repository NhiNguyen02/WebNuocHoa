<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

    <h1 style="text-align:center;">Chỉnh sửa thông tin sản phẩm</h1>
    <form action="">
        <div>
            <label for="">Mã sản phẩm:</label>
            <input value="1asd" type="text">
        </div>
        <div>    
            <label for="">Tên sản phẩm:</label>    
            <input value="Dior Sauvage" type="text">
        </div>
        <div>
            <label for="">Thương hiệu:</label>
            <input value="Dior" type="text">
        </div>
        <div>
            <label for="">Loại sản phẩm:</label>
            <input value="d" type="text">
        </div>
        <div>
            <label for="">Thông tin chi tiết:</label>
            <textarea value="d" style="resize: none;" cols="30" rows="10" name="" id=""></textarea>
        </div>
        <!-- <div>
            <label  for="">Số loại dung tích:</label>
            <input id="capacity" type="number">
        </div> -->
        <div>
            <label  for="">Dung tích:</label>
            <input value="50 ml" id="capacity" type="text">
        </div>
        <!-- <div style="justify-content:flex-end">
            <button type="button" id="createrow">Create</button>
        </div>
        <div id="addFields"></div> -->
        <div>
            <label for="">Tổng số lượng:</label>
            <input value="20" type="number">
        </div>
        <div>
            <label for="file0">Hình 0:</label>
            <input id="file0" value="sp1.png" type="file">
        </div>
        <div>
            <label for="file1">Hình 1:</label>
            <input id="file1" value="sp1.png" type="file">
        </div>
        <div>
            <label for="file2">Hình 2:</label>
            <input id="file2" value="sp2.png" type="file">
        </div>
        <div>
            <label for="file3">Hình 3:</label>
            <input id="file3" value="sp3.png" type="file">
        </div>
        <div style="display: flex; justify-content:flex-end; margin-top:5px; padding:10px 30px;"><button>UPDATE</button></div>   
    </form>   
</body>
</html>