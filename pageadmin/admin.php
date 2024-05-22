<?php 
    include '../components/connect/config.php';
    session_start();
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
    
        $delete_orders = $conn->prepare("DELETE FROM `donhang` WHERE MAKH = ?");
        $delete_orders->bind_param("i", $delete_id);
        $delete_orders->execute();
        $delete_orders->close();
        
        header('location:admin.php');
    }
    if(isset($_GET['delete_dh'])){

        $delete_id = $_GET['delete_dh'];
    
        $delete_user = $conn->prepare("DELETE FROM `donhang` WHERE MAHD = ?");
        $delete_user->bind_param("i", $delete_id);
        $delete_user->execute();
        $delete_user->close();
        
        header('location:admin.php');
    }
    echo '<script>history.replaceState({}, "", window.location.href.split("?")[0]);</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/admin.css">
    <link rel="stylesheet" href="../assets//icons/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="admin">
            <div class="topadmin">
                <div class="logout">
                <a href="http://localhost/WebNuocHoa/page/logout.php"> 
                    <img class="icon" src="../../WebNuocHoa/assets/admin/signOut.svg" alt="">
                </a>
                </div>
            </div>
            <div class="mainadmin">
                <div class="adminleft">
                    <div>
                        <img class="" src="../../WebNuocHoa/assets/admin/userCircle.svg" alt="">
                    </div>
                    <h1>Admin</h1>
                    <p>Chúc mừng bạn trở lại</p>
                    <div>
                        <li tabindex="0" id="tabadmin_staff">
                            <i class="fa-solid fa-address-card icon"></i><span>Quản lý nhân viên</span>
                        </li>
                        <li tabindex="1" id="tabadmin_calendar">
                            <i class="fa-solid fa-calendar-days icon"></i><span>Quản lý lịch làm việc</span>
                        </li>
                        <li tabindex="2" id="tabadmin_user">
                            <i class="fa-solid fa-users icon"></i><span>Quản lí khách hàng</span>
                        </li>
                        <li tabindex="3" id="tabadmin_product">
                            <i class="fa-solid fa-tags icon"></i><span>Quản lý sản phẩm</span>
                        </li>
                        <li tabindex="4" id="tabadmin_order">
                            <i class="fa-solid fa-clipboard-list icon"></i><span>Quản lý đơn đặt hàng</span>
                        </li>
                        <li tabindex="5" id="tabadmin_warehouse">
                            <i class="fa-solid fa-warehouse icon"></i><span>Quản lý kho hàng</span>
                        </li>
                        <li tabindex="6" id="tabadmin_megaphone">
                            <i class="fa-solid fa-bullhorn icon"></i><span>Khuyến mãi & Quảng cáo</span>
                        </li>
                    </div>
                </div>
                <div class="adminright">
                    <div id="backgroundadmin">
                        <img src="../../WebNuocHoa/assets/admin/backgroundAdmin.png" alt="">
                    </div>
                    <div id="admin_staff">
                        <div style="display:flex; justify-content:flex-end; margin-bottom: 10px;"><button id="openModal1">Thêm nhân viên</button></div>
                        <table style="max-width: 1200px;">
                            <thead>
                                <tr>
                                    <th>Mã nhân viên</th>
                                    <th>Họ tên</th>
                                    <th>Hình ảnh</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Chức vụ</th>
                                    <th>Mức lượng</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select_nv = "SELECT * FROM admin ";
                                    $result_nv = mysqli_query($conn, $select_nv);
                                
                                    if(mysqli_num_rows($result_nv) > 0){
                                        while($fetch_nv = mysqli_fetch_assoc($result_nv)){ 
                                ?>
                                    <tr>
                                    <td><?= $fetch_nv['MANV']; ?></td>
                                    <td><?= $fetch_nv['HOTEN']; ?></td>
                                    <td><div class="imgproduct" style="max-width:60px;"><img src="../assets/images/avata/<?= $fetch_nv['HINHANH']; ?>" alt="image"></div></td>
                                    <td><?= $fetch_nv['NGSINH']; ?></td>
                                    <td><?= $fetch_nv['GIOITINH']; ?></td>
                                    <td><?= $fetch_nv['SDT']; ?></td>
                                    <td><?= $fetch_nv['DIACHI']; ?></td>
                                    <td><?php if($fetch_nv['CHUCVU'] == "admin") { ?>
                                                    Quản lý
                                                <?php }  
                                                elseif ($fetch_nv['CHUCVU'] == "admin_phu") { ?>
                                                    Nhân viên
                                                <?php } ?></td>
                                    <td><?= $fetch_nv['LUONG']; ?></td>
                                    <td><i data-masp="<?= $fetch_nv['DIACHI']; ?>" class="fa-solid fa-pen-to-square editproduct"></i>
                                    
                                    </td>
                                    <td><a href="addStaff.php?delete_staff=<?= $fetch_nv['MANV']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                <?php
                                    }
                                } else {
                                        echo '<h2>Hiện tại chưa có nhân sự!</h2>';
                                    }
                                ?>
                            </tbody>
                        </table>

                        <div id="pagination">
                            <span><<</span>    
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>...</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>>></span>
                        </div>
                    </div>
                    <div id="admin_calendar">
                        <div style="display:flex; justify-content:flex-end; margin-bottom: 10px;"><button id="editcalendar">Chỉnh sửa</button></div>
                        <div class="table-responsive">
                            <table class="tablecalendar">
                                <thead>
                                    <tr>
                                        <th><span>Ca</span></th>
                                        <th>
                                            <span>Thứ 2</span>
                                            <br>
                                            15/05/2024
                                        </th>
                                        <th>
                                            <span>Thứ 3</span>
                                            <br>
                                            15/05/2024
                                        </th>
                                        <th>
                                            <span>Thứ 4</span>
                                            <br>
                                            15/05/2024
                                        </th>
                                        <th>
                                            <span>Thứ 5</span>
                                            <br>
                                            15/05/2024
                                        </th>
                                        <th>
                                            <span>Thứ 6</span>
                                            <br>
                                            15/05/2024
                                        </th>
                                        <th>
                                            <span>Thứ 7</span>
                                            <br>
                                            15/05/2024
                                        </th>
                                        <th>
                                            <span>Chủ nhật</span>
                                            <br>
                                            15/05/2024
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span>Sáng</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="align-bottom">
                                        <td><span>Chiều</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span>Tối</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="align-top">This cell is aligned to the top.</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="pagination">
                            <span><<</span>    
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>...</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>>></span>
                        </div>
                    </div>                   
                    <div id="admin_user">
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Số lượng đơn hàng</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select = "SELECT * FROM taikhoan ";
                                    $result = mysqli_query($conn, $select);
                                    if(mysqli_num_rows($result) > 0){
                                        while($fetch = mysqli_fetch_assoc($result)){
                                ?>
                                    <tr>
                                        <td><?= $fetch['id']; ?></td>
                                        <td><?= $fetch['name']; ?></td>
                                        <td><?= $fetch['email']; ?></td>
                                        <td><?= $fetch['sdt']; ?></td>
                                        <td><?= $fetch['diachi']; ?></td>
                                        <td>0</td>
                                        <td><a href="admin.php?deleteuser=<?= $fetch['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>

                                <?php
                                    }
                                } else {
                                        echo '<h2>Hiện tại chưa có tài khoản khách hàng!</h2>';
                                    }
                                ?>
                            </tbody>
                        </table>
                        <div id="pagination">
                            <span><<</span>    
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>...</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>>></span>
                        </div>
                    </div>
                    <div id="admin_product">
                        <div style="display: flex;justify-content: flex-end; margin-bottom:10px;"><button id="openModal2">Thêm sản phẩm</button></div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Thương hiệu</th>
                                    <th>Dung tích</th>
                                    <th>Giá (VNĐ)</th>
                                    <th>Số lượng</th>
                                    <th>Kho hàng</th>
                                    <th>Hidden</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $select_products = "SELECT sanpham.*, TENKHO FROM sanpham, khohang WHERE sanpham.MAKHO = khohang.MAKHO ";
                                    $result_products = mysqli_query($conn, $select_products);
                                
                                    if(mysqli_num_rows($result_products) > 0){
                                        while($fetch_products = mysqli_fetch_assoc($result_products)){ 
                                ?>
                                    <tr>
                                    <td><?= $fetch_products['MASP']; ?></td>
                                    <td><?= $fetch_products['TENSP']; ?></td>
                                    <td> <div class="imgproduct" style="max-width:80px;"><img src="../assets/images/addproducts/<?= $fetch_products['image_01']; ?>"   alt="image"></div></td>
                                    <td><?= $fetch_products['THUONGHIEU']; ?></td>
                                    <td><?= $fetch_products['DUNGTICH']; ?></td>
                                    <td><?= $fetch_products['GIABAN']; ?></td>
                                    <td><?= $fetch_products['SOLUONG']; ?></td>
                                    <td><?= $fetch_products['TENKHO']; ?></td>
                                    <td><a href="http://localhost/WebNuocHoa/page/productDetail.php?pid=<?= $fetch_products['MASP']; ?>"><i class="fa-solid fa-eye"></i></a></td>
                                    <td>
                                        <i data-masp="<?= $fetch_products['MASP']; ?>" class="fa-solid fa-pen-to-square editproduct"
                                        data-masp="<?= $fetch_products['MASP']; ?>"
                                        data-mota="<?= $fetch_products['MOTA']; ?>"
                                        data-tensp="<?= $fetch_products['TENSP']; ?>"
                                        data-makho="<?= $fetch_products['MAKHO']; ?>"
                                        data-image01="<?= $fetch_products['image_01']; ?>"
                                        data-image02="<?= $fetch_products['image_02']; ?>"
                                        data-image03="<?= $fetch_products['image_03']; ?>"
                                        data-image04="<?= $fetch_products['image_04']; ?>"
                                        data-thuonghieu="<?= $fetch_products['THUONGHIEU']; ?>"
                                        data-dungtich="<?= $fetch_products['DUNGTICH']; ?>"
                                        data-giaban="<?= $fetch_products['GIABAN']; ?>"
                                        data-soluong="<?= $fetch_products['SOLUONG']; ?>"></i></td>
                                    <td><a href="addProduct.php?delete=<?= $fetch_products['MASP']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                <?php
                                    }
                                } else {
                                        echo '<h2>Hiện tại chưa có sản phẩm!</h2>';
                                    }
                                ?>
                            </tbody>
                        </table>
                        <div id="pagination">
                            <span><<</span>    
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>...</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>>></span>
                        </div>
                    </div>
                    <div id="admin_order">
                        <form action="" method="post">
                            <!-- <div style="display:flex; justify-content:flex-end; margin-bottom: 10px;"><button id="openModal1">Chỉnh sửa</button><button id="openModal1">Lưu</button></div> -->
                            <!-- <div style="display:flex; justify-content:flex-end; margin-bottom: 10px;"><button name="hoadon" >Chỉnh sửa</button><button name="hoadon1" >Lưu</button></div> -->
                            <table>
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Khách hàng</th>
                                        <th>Sản phẩm</th>
                                        <th>Thời gian đặt hàng</th>
                                        <th>Tình trạng thanh toán</th>
                                        <!-- <th>Hình thức thanh toán</th> -->
                                        <th>MÃ Voucher</th>
                                        <th>Thành tiền (VNĐ)</th>
                                        <th>Trạng thái</th>
                                        <th>Ghi chú</th>
                                        <!-- <th>Đang chuẩn bị hàng</th> -->
                                        <th>Chỉnh sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $select_dh = "SELECT donhang.*, name FROM donhang, taikhoan WHERE donhang.MAKH = taikhoan.id";
                                        $result_dh = mysqli_query($conn, $select_dh);
                                        if(mysqli_num_rows($result_dh) > 0){
                                            while($fetch_dh = mysqli_fetch_assoc($result_dh)){ 
                                    ?>
                                        <tr>
                                        <td><?= $fetch_dh['MAHD']; ?></td>
                                        <td><?= $fetch_dh['name']; ?></td>
                                        <td><?= $fetch_dh['SANPHAM']; ?></td>
                                        <td><?= $fetch_dh['NGAYBAN']; ?></td>
                                        <td style="display: <?php echo $input1;?>;"><?= $fetch_dh['NGAYBAN']; ?></td>
                                        <!-- <td style="display: <?php echo $input2;?>;"><select required name="gt" id="">
                                                <option disabled selected hidden >-Chọn trạng thái-</option>
                                                <option value="Đang xửa lý thanh toán">Đang xửa lý thanh toán</option>
                                                <option value="Đã thanh toán">Đã thanh toán</option>
                                            </select>
                                        </td> -->
                                        <td><?= $fetch_dh['THANHTOAN']; ?></td>
                                        <td><?= $fetch_dh['MACTKM']; ?></td>
                                        <td><?= $fetch_dh['THANHTIEN']; ?></td>
                                        <td style="display: <?php echo $input1;?>;"><?= $fetch_dh['TRANGTHAI']; ?></td>
                                        <!-- <td style="display: <?php echo $input2;?>;"><select required name="gt" id="">
                                                <option disabled selected hidden >-Chọn trạng thái-</option>
                                                <option value="Đợi xác thực thanh toán">Đợi xác thực thanh toán</option>
                                                <option value="Người bán đang chuẩn bị hàng">Người bán đang chuẩn bị hàng</option>
                                                <option value="Đơn hàng đang vận chuyển đến bạn">Đơn hàng đang vận chuyển đến bạn</option>
                                                <option value="Đã nhận hàng">Đã nhận hàng</option>
                                            </select>
                                        </td> -->
                                        <td><?= $fetch_dh['GHICHU']; ?></td>
                                        <td><i class="fa-solid fa-pen-to-square editorder"></i></td>
                                        <td><a href="admin.php?delete_dh=<?= $fetch_dh['MAHD']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                    <?php
                                        }
                                    } else {
                                            echo '<h2>Hiện tại chưa có đơn đặt hàng!</h2>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                        
                        <div id="pagination">
                            <span><<</span>    
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>...</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>>></span>
                        </div>
                    </div>
                    <div id="admin_warehouse"> 
                        <div style="display:flex; justify-content:flex-end; margin-bottom: 10px;"><button id="openModal4">Thêm kho hàng</button></div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã kho</th>
                                    <th>Tên kho</th>
                                    <th>Địa chỉ kho</th>
                                    <th>Số sản phẩm</th>
                                    <th>Số lượng tồn kho</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select_kh = "SELECT * FROM khohang ";
                                    $result_kh = mysqli_query($conn, $select_kh);
                                    if(mysqli_num_rows($result_kh) > 0){
                                        while($fetch = mysqli_fetch_assoc($result_kh)){
                                ?>
                                    <tr>
                                        <td><?= $fetch['MAKHO']; ?></td>
                                        <td><?= $fetch['TENKHO']; ?></td>
                                        <td><?= $fetch['DIACHI']; ?></td>
                                        <td><?= $fetch['SOSP']; ?></td>
                                        <td><?= $fetch['SLTONKHO']; ?></td>
                                        <!-- <td>0</td> -->
                                        <td><i class="fa-solid fa-pen-to-square editwarehouse"></i></td>
                                        <td><a href="addWarehouse.php?delete_kh=<?= $fetch['MAKHO']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>

                                <?php
                                    }
                                } else {
                                        echo '<h2>Hiện tại chưa có kho hàng lưu trữ!</h2>';
                                    }
                                ?>
                            </tbody>
                        </table>
                        <div id="pagination"></div>
                    </div>
                    <div id="admin_megaphone">
                        <div style="display:flex; justify-content:flex-end; margin-bottom:10px;"><button id="openModal3">Tạo khuyến mãi</button></div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã Voucher</th>
                                    <th>Chương trình khuyến mãi</th>
                                    <th>Giảm giá</th>
                                    <th>Số tiền tối thiểu</th>
                                    <th>Thời gian bắt đầu</th>
                                    <th>Thời gian kết thúc</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select_km = "SELECT * FROM khuyenmai ";
                                    $result_km = mysqli_query($conn, $select_km);
                                
                                    if(mysqli_num_rows($result_km) > 0){
                                        while($fetch_km = mysqli_fetch_assoc($result_km)){ 
                                ?>
                                    <tr>
                                    <td><?= $fetch_km['MAVOUCHER']; ?></td>
                                    <td><?= $fetch_km['TENCT']; ?></td>
                                    <td><?= $fetch_km['GIAMGIA']; ?> VNĐ</td>
                                    <td><?= $fetch_km['TIENTOITHIEU']; ?> VNĐ</td>
                                    <td><?= $fetch_km['NGAYBD']; ?></td>
                                    <td><?= $fetch_km['NGAYKT']; ?></td>
                                    <td><i class="fa-solid fa-pen-to-square editmegaphone"></i></td>
                                    <td><a href="addMegaphone.php?delete_km=<?= $fetch_km['MAVOUCHER']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                            
                                    
                                    </tr>
                                <?php
                                    }
                                } else {
                                        echo '<h2>Hiện tại chưa có chương trình khuyến mãi!</h2>';
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                        <div id="pagination">
                            <span><<</span>    
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>...</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>>></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModal" class="modal">
                <div class="modal-content" id="contentModal">
                    <span class="close">&times;</span><br>
                    <?php 
                        function getExecutedPhpContent($file) {
                            ob_start();
                            include $file;
                            return ob_get_clean();
                        }

                        $contents = [
                            getExecutedPhpContent("../../WebNuocHoa/pageadmin/addStaff.php"),
                            getExecutedPhpContent("../../WebNuocHoa/pageadmin/addProduct.php"),
                            getExecutedPhpContent("../../WebNuocHoa/pageadmin/addMegaphone.php"),
                            getExecutedPhpContent("../../WebNuocHoa/pageadmin/addWarehouse.php"),
                            getExecutedPhpContent("../../WebNuocHoa/pageadmin/editCalendar.php")
                        ];
                        echo "<script>var contents = " . json_encode($contents) . ";</script>";

                        $updatecontents = [
                            getExecutedPhpContent("../../WebNuocHoa/pageadmin/editStaff.php"),
                            getExecutedPhpContent("../../WebNuocHoa/pageadmin/editProduct.php"),
                            getExecutedPhpContent("../../WebNuocHoa/pageadmin/editOrder.php"),
                            getExecutedPhpContent("../../WebNuocHoa/pageadmin/editWarehouse.php"),
                            getExecutedPhpContent("../../WebNuocHoa/pageadmin/editMegaphone.php")
                        ];
                        echo "<script>var updatecontents = " . json_encode($updatecontents) . ";</script>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="./admin.js"></script>
</body>
</html>