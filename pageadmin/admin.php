<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name_ad'])){
   header('location:http://localhost/WebNuocHoa/');
}
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
                <!-- <div class="Logo">
                    <img src="../../WebNuocHoa/assets/images/logo.svg" alt="">
                </div> -->
                <div class="logout">
                    <img class="icon" src="../../WebNuocHoa/assets/admin/signOut.svg" alt="">
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
                            <img class="icon" src="../../WebNuocHoa/assets/admin/card.svg" alt=""><span>Quản lý nhân viên</span>
                        </li>
                        <li tabindex="1" id="tabadmin_calendar">
                            <img class="icon" src="../../WebNuocHoa/assets/admin/calendar.svg" alt=""><span>Quản lý lịch làm việc</span>
                        </li>
                        <li tabindex="2" id="tabadmin_user">
                            <img class="icon" src="../../WebNuocHoa/assets/admin/user.svg" alt=""><span>Quản lí khách hàng</span>
                        </li>
                        <li tabindex="3" id="tabadmin_product">
                            <img class="icon" src="../../WebNuocHoa/assets/admin/tags.svg" alt=""><span>Quản lý sản phẩm</span>
                        </li>
                        <li tabindex="4" id="tabadmin_order">
                            <img class="icon" src="../../WebNuocHoa/assets/admin/group.svg" alt=""><span>Quản lý đơn đặt hàng</span>
                        </li>
                        <li tabindex="5" id="tabadmin_warehouse">
                            <img class="icon" src="../../WebNuocHoa/assets/admin/warehouse.svg" alt=""><span>Quản lý kho hàng</span>
                        </li>
                        <li tabindex="6" id="tabadmin_megaphone">
                            <img class="icon" src="../../WebNuocHoa/assets/admin/megaphone.svg" alt=""><span>Khuyến mãi & Quảng cáo</span>
                        </li>
                    </div>
                </div>
                <div class="adminright">
                    <!-- <div>
                        <img src="../../WebNuocHoa/assets/admin/backgroundAdmin.png" alt="">
                    </div> -->
                    <div id="admin_staff">
                    admin_staff
                    </div>
                    <div id="admin_calendar">
                    admin_calendar
                    </div>
                    <div id="admin_user">
                        <table>
                            <tr> 
                                <th>STT</th>
                                <th>Tên người dùng</th>
                                <th>Email</th>
                            </tr>
                            <tr>
                                <td>Tên sản phẩm</td>
                                <td>tdương hiệu</td>
                                <td>Loại sản phẩm</td>
                            </tr>
                            <tr>
                                <td>Tên sản phẩm</td>
                                <td>tdương hiệu</td>
                                <td>Loại sản phẩm</td>
                            </tr>
                        </table>
                    </div>
                    <div id="admin_product">
                        <table>
                            <tr>
                                <th><input id="checkAll" onclick="checkAll()" type="checkbox"> Chọn tất cả</th>
                                <th>Tên sản phẩm</th>
                                <th>Thương hiệu</th>
                                <th>Loại sản phẩm</th>
                                <th>40ML</th>
                                <th>50ML</th>
                                <th>60ML</th>
                                <th>Hidden</th>
                                <th>Remove</th>
                                <th>Edit</th>
                                <th><button id="openModal">Thêm sản phẩm</button></th>
                            </tr>
                            <tr>
                                <td><input class="check" type="checkbox"></td>
                                <td>Tên sản phẩm</td>
                                <td>tdương hiệu</td>
                                <td>Loại sản phẩm</td>
                                <td>40ML</td>
                                <td>50ML</td>
                                <td>60ML</td>
                                <td><i class="fa-regular fa-eye"></i><span></td>
                                <td><i class="fa-regular fa-trash-can"></i></td>
                                <td><i class="fa-solid fa-pen"></i></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input class="check" type="checkbox"></td>
                                <td>Tên sản phẩm</td>
                                <td>tdương hiệu</td>
                                <td>Loại sản phẩm</td>
                                <td>40ML</td>
                                <td>50ML</td>
                                <td>60ML</td>
                                <td><i class="fa-regular fa-eye"></i><span></td>
                                <td><i class="fa-regular fa-trash-can"></i></td>
                                <td><i class="fa-solid fa-pen"></i></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input class="check" type="checkbox"></td>
                                <td>Tên sản phẩm</td>
                                <td>tdương hiệu</td>
                                <td>Loại sản phẩm</td>
                                <td>40ML</td>
                                <td>50ML</td>
                                <td>60ML</td>
                                <td><i class="fa-regular fa-eye"></i><span></td>
                                <td><i class="fa-regular fa-trash-can"></i></td>
                                <td><i class="fa-solid fa-pen"></i></td>
                                <td></td>
                            </tr>
                        </table>
                        <div id="myModal" class="modal">
                            <div class="modal-content" id="contentModal">
                                <span class="close">&times;</span><br>
                                <form action="">
                                    <label for="">Tên sản phẩm:</label>    
                                    <input type="text">
                                    <label for="">Thương hiệu:</label>
                                    <input type="text">
                                    <label for="">Loại sản phẩm:</label>
                                    <input type="text">
                                    <label for="">Số lượng dung tích:</label>
                                    <input id="capacity" type="number">
                                    <div id="addFields"></div>
                                </form>
                            </div>
                        </div>      
                    </div>
                    <div id="admin_order">
                    admin_order
                    </div>
                    <div id="admin_warehouse">
                    admin_warehouse
                    </div>
                    <div id="admin_megaphone">
                    admin_megaphone
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./admin.js"></script>
</body>
</html>