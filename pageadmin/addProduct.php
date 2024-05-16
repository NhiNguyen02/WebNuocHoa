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
            <label for="">Tên sản phẩm:</label>    
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Thương hiệu:</label>
            <input type="text" name="tenTH">
        </div>
        <!-- <div>
            <label for="">Loại sản phẩm:</label>
            <input type="text">
        </div> -->
        <div>
            <label for="">Thông tin chi tiết:</label>
            <textarea style="resize: none;" cols="30" rows="10" name="mota" id=""></textarea>
        </div>
        <!-- <div>
            <label  for="">Số loại dung tích:</label>
            <input id="capacity" type="number">
        </div> -->
        <div>
            <label  for="">Dung tích:</label>
            <input id="capacity" type="number" name="dt">
        </div>
        <div>
            <label  for="">Giá (VNĐ):</label>
            <input id="capacity" type="number" name="gia">
        </div>
        <!-- <div style="justify-content:flex-end">
            <button type="button" id="createrow">Create</button>
        </div>
        <div id="addFields"></div> -->
        <div>
            <label for="">Tổng số lượng:</label>
            <input type="number" name="sl">
        </div>
        <div>
            <label for="">Hình 1:</label>
            <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div>
            <label for="">Hình 2:</label>
            <input type="file" name="image_02" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div>
            <label for="">Hình 3:</label>
            <input type="file" name="image_03" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div>
            <label for="">Hình 4:</label>
            <input type="file" name="image_04" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div style="display: flex; justify-content:flex-end; margin-top:5px; padding:10px 30px;" ><button name="add_product">ADD</button></div>   
    </form>   
</body>
</html>