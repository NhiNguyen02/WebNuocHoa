<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/admin.css">
</head>
<body>

    <h1 style="text-align:center;">Chỉnh sửa thông tin nhân viên</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- <div>
            <label for="">Mã nhân viên:</label>
            <input required type="text" >
        </div> -->
        <div>    
            <label for="">Tên nhân viên:</label>    
            <input required type="text" name="name">
        </div>
        <div>
            <label for="">Ảnh:</label>
            <input required type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div>
            <label for="">Giới tính:</label>
            <select required name="gt" id="">
                <option disabled selected hidden >-- Chọn giới tính--</option>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        <div>
            <label for="">Ngày sinh:</label>
            <input required type="date" name="ns" id="">
        </div>
        <div>
            <label for="">Số điện thoại:</label>
            <input required type="text" name="dt" id="">
        </div>
        <div>
            <label for="">Email:</label>
            <input required type="email" name="email">
        </div>
        <div>
            <label for="">Địa chỉ:</label>
            <input required type="text" name="dc">
        </div>
        <div>
            <label for="">Mức lương:</label>
            <input required type="number" name="luong">
        </div>
        <div>
            <label for="">Chức vụ:</label>
            <select required name="cv">
                <option disabled selected hidden >--Chọn chức vụ--</option>
                <option value="admin_phu">Nhân viên</option>
                <option value="admin">Quản lý</option>
            </select>
        </div>

        <div style="display: flex; justify-content:flex-end; margin-top:5px; padding:10px 30px;"><button name="add_staff">ADD</button></div>
    </form>
</body>
</html>