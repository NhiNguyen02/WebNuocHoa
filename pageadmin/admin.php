<?php
include 'beAdmin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../WebNuocHoa/assets/css/admin.css">
    <link rel="stylesheet" href="../assets//icons/fontawesome-free-6.4.0-web/css/all.min.css">
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
                        <!-- <li tabindex="1" id="tabadmin_calendar">
                            <i class="fa-solid fa-calendar-days icon"></i><span>Quản lý lịch làm việc</span>
                        </li> -->
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
                                    <th>MANV</th>
                                    <th>Tên nhân viên</th>
                                    <th>Anh</th>
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
                                <tr>
                                    <td>001</td>
                                    <td>ABC</td>
                                    <td><img src="../../WebNuocHoa/assets/images/iconAccount.svg" alt=""></td>
                                    <td>12/3/2000</td>
                                    <td>Nam</td>
                                    <td>1234567892</td>
                                    <td>fbregughbeur bghnbgfjvfdkghbrhkj</td>
                                    <td>fbhiss</td>
                                    <td>5000000</td>
                                    <td><i class="fa-solid fa-pen-to-square editstaff"></i></td>
                                    <td><i class="fa-solid fa-trash"></i></td>
                                </tr>
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
                    <!-- <div id="admin_calendar">
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Thương hiệu</th>
                                    <th>Dung tích</th>
                                    <th>Giá (VNĐ)</th>
                                    <th>Số lượng</th>
                                    <th>Hidden</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Mảng chứa thông tin sản phẩm nước hoa với các dung tích và giá tương ứng
                                $perfumes = array(
                                    array("Dior Sauvage","product2.webp", "Dior", array("50ml" => 1500000 , "100ml" => 2500000, "200ml" => 3500000),array("50ml" => 30, "100ml" => 30, "200ml" => 30), '<i class="fa-solid fa-eye"></i>','<i class="fa-solid fa-pen-to-square"></i>','<i class="fa-solid fa-trash"></i>'),
                                    array("Chanel No. 5","product2.webp", "Chanel", array("50ml" => 2000000, "100ml" => 3000000, "200ml" => 4000000),array("50ml" => 30, "100ml" => 30, "200ml" => 30), '<i class="fa-solid fa-eye"></i>','<i class="fa-solid fa-pen-to-square"></i>','<i class="fa-solid fa-trash"></i>'),
                                    array("Chanel No. 5","product2.webp", "Chanel", array("50ml" => 2000000, "100ml" => 3000000, "200ml" => 4000000),array("50ml" => 30, "100ml" => 30, "200ml" => 30), '<i class="fa-solid fa-eye"></i>','<i class="fa-solid fa-pen-to-square"></i>','<i class="fa-solid fa-trash"></i>'),
                                    array("Chanel No. 5","product2.webp", "Chanel", array("50ml" => 2000000, "100ml" => 3000000, "200ml" => 4000000),array("50ml" => 30, "100ml" => 30, "200ml" => 30), '<i class="fa-solid fa-eye"></i>','<i class="fa-solid fa-pen-to-square"></i>','<i class="fa-solid fa-trash"></i>'),
                                    array("Chanel No. 5","product2.webp", "Chanel", array("50ml" => 2000000, "100ml" => 3000000, "200ml" => 4000000),array("50ml" => 30, "100ml" => 30, "200ml" => 30), '<i class="fa-solid fa-eye"></i>','<i class="fa-solid fa-pen-to-square"></i>','<i class="fa-solid fa-trash"></i>'),
                                );

                                // Lặp qua từng sản phẩm và hiển thị thông tin trong bảng
                                foreach ($perfumes as $key => $perfume) {
                                    echo "<tr>";
                                    echo "<td>" . ($key + 1) . "</td>";
                                    echo "<td>" . $perfume[0] . "</td>";
                                    echo "<td> <div style=\"max-width:80px;\"><img src=\"../../WebNuocHoa/assets/images/products/nuochoanu/" . $perfume[1] . "\"  alt=\"image\"></div></td>";
                                    echo "<td>" . $perfume[2] . "</td>";
                                    echo "<td>";
                                    // Lặp qua mỗi dung tích và giá của sản phẩm
                                    foreach ($perfume[3] as $volume => $price) {
                                        echo "<div>" . $volume . "</div>";
                                    }
                                    echo "</td>";
                                    echo "<td>";
                                    // Lặp qua mỗi dung tích và giá của sản phẩm và hiển thị giá tương ứng
                                    foreach ($perfume[3] as $volume => $price) {
                                        echo "<div>" . number_format($price) . "</div>";
                                    }
                                    echo "</td>";
                                    echo "<td>";
                                    // Lặp qua mỗi dung tích và giá của sản phẩm và hiển thị giá tương ứng
                                    foreach ($perfume[4] as $volume => $quatity) {
                                        echo "<div>" . number_format($quatity) . "</div>";
                                    }
                                    echo "</td>";
                                    echo "<td>". $perfume[5]."</td>";
                                    echo "<td>". $perfume[6]."</td>";
                                    echo "<td>". $perfume[7]."</td>";
                                    echo "</tr>";
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
                    </div> -->
                    <div id="admin_user">
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
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
                    <div id="admin_product">
                        <div style="display: flex;justify-content: flex-end; margin-bottom:10px;"><button id="openModal2">Thêm sản phẩm</button></div>
                        <table>
                            <thead>
                                <tr>
                                    <th>MASP</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Thương hiệu</th>
                                    <th>Dung tích</th>
                                    <th>Giá (VNĐ)</th>
                                    <th>Số lượng</th>
                                    <th>Hidden</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select_products = "SELECT * FROM sanpham ";
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
                                    <td><i class="fa-solid fa-eye"></i></td>
                                    <td><i class="fa-solid fa-pen-to-square"></i></td>
                                    <td><a href="admin.php?delete=<?= $fetch_products['MASP']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                <?php
                                    }
                                } else {
                                        echo '<h2>Hiện tại chưa có sản phẩm!</h2>';
                                    }
                                    echo "</td>";
                                    echo "<td>";
                                    // Lặp qua mỗi dung tích và giá của sản phẩm và hiển thị giá tương ứng
                                    foreach ($perfume[4] as $volume => $quatity) {
                                        echo "<div>" . number_format($quatity) . "</div>";
                                    }
                                    echo "</td>";
                                    echo "<td><i class=\"fa-solid fa-eye\"></i></td>";
                                    echo "<td><i class=\"fa-solid fa-pen-to-square editproduct\"></i></td>";
                                    echo "<td><i class=\"fa-solid fa-trash\"></i></td>";
                                    echo "</tr>";

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
                            <div style="display:flex; justify-content:flex-end; margin-bottom: 10px;"><button id="">Lưu</button></div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>MADH</th>
                                        <th>Tên khách hàng</th>
                                        <th>Thời gian đặt hàng</th>
                                        <th>Tình trạng thanh toán</th>
                                        <th>Tổng tiền đơn hàng (VNĐ)</th>
                                        <th>Hình thức thanh toán</th>
                                        <th>Đã giao</th>
                                        <th>Chưa giao</th>
                                        <th>Đang chuẩn bị hàng</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>dh01</td>
                                        <td>abc</td>
                                        <td>20/04/2024</td>
                                        <td>Đã thanh toán</td>
                                        <td>6.000.000</td>
                                        <td>Chuyển khoản ngân hàng</td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                        <td><i class="fa-solid fa-trash"></i></td>
                                    </tr>
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
                        <table>
                            <thead>
                                <tr>
                                    <th>MASP</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Thương hiệu</th>
                                    <th>Số lượng tồn kho</th>
                                    <th>Đã bán</th>
                                    <th>Đang giao dịch</th>
                                    <th>Trạng thái</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>sfddh</td>
                                    <td><div class="imgproduct"><img  src="../../WebNuocHoa/assets/images/products/nuochoanu/product3.webp" alt=""></div></td>
                                    <td>hghdgi</td>
                                    <td>10</td>
                                    <td>400</td>
                                    <td>200</td>
                                    <td>Cháy hàng</td>
                                    <td><i class="fa-solid fa-pen-to-square editwarehouse"></i></td>
                                    <td><i class="fa-solid fa-trash"></i></td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="pagination"></div>
                    </div>
                    <div id="admin_megaphone">
                        <div style="display:flex; justify-content:flex-end; margin-bottom:10px;"><button id="openModal3">Tạo khuyến mãi</button></div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Khuyến mãi</th>
                                    <th>Loại khuyến mãi</th>
                                    <th>Hình thức</th>
                                    <th>Trạng thái</th>
                                    <th>Thời gian bắt đầu</th>
                                    <th>Thời gian kết thúc</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>jghkg</td>
                                    <td>fhdgfd</td>
                                    <td>vhdkfjhgdi</td>
                                    <td>fhdfa</td>
                                    <td>1/4/2024</td>
                                    <td>5/5/2024</td>
                                    <td><i class="fa-solid fa-pen-to-square editmegaphone"></i></td>
                                    <td><i class="fa-solid fa-trash" data-id="001"></i></td>

                                </tr>
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
                        $contents = [
                            file_get_contents("../../WebNuocHoa/pageadmin/addStaff.php"),
                            file_get_contents("../../WebNuocHoa/pageadmin/addProduct.php"),
                            file_get_contents("../../WebNuocHoa/pageadmin/addMegaphone.php")
                        ];
                        echo "<script>" . "var contents = " . json_encode($contents) . ";" . "</script>";
                        $updatecontents=[
                            file_get_contents("../../WebNuocHoa/pageadmin/editStaff.php"),
                            file_get_contents("../../WebNuocHoa/pageadmin/editProduct.php"),
                            file_get_contents("../../WebNuocHoa/pageadmin/editWarehouse.php"),
                            file_get_contents("../../WebNuocHoa/pageadmin/editMegaphone.php")
                        ];
                        echo "<script>" . "var updatecontents = " . json_encode($updatecontents) . ";" . "</script>";
                     ?>
                </div>
            </div>
        </div>
    </div>
    <script src="./admin.js"></script>
</body>
</html>