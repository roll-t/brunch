<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_bannoithat";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `nhom_danhmuc` where 1 ";

$result=$conn->query($sql);

$result_all=$result->fetch_all();

$sql_2 ="SELECT * FROM `phong` where 1 ";

$result_2=$conn->query($sql_2);

$result_all_2=$result_2->fetch_all();
var_dump($result_all_2) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeDesign</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Akshar&family=Archivo+Black&family=Assistant:wght@200;300&family=Bangers&family=Carter+One&family=Dancing+Script:wght@500;600&family=Fjalla+One&family=Gulzar&family=Hind+Siliguri:wght@400;500;700&family=Karla:wght@200&family=Lato&family=Ms+Madi&family=Mukta:wght@300;800&family=Nunito:wght@200;300&family=Orelega+One&family=Oswald&family=Oxygen:wght@700&family=PT+Sans+Narrow&family=Permanent+Marker&family=Poppins:wght@100&family=Quicksand:wght@500&family=Roboto+Mono:wght@300&family=Roboto:ital,wght@0,500;0,900;1,500&family=Rubik&family=Square+Peg&family=The+Nautigal:wght@400;700&family=Varela+Round&family=Vollkorn:wght@500&display=swap" rel="stylesheet">
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/product.css">
    <link rel="stylesheet" href="./assets/css/slide-2-banner.css">
    <link rel="stylesheet" href="./assets/css/room.css">
    <link rel="shortcut icon" href="./logo/logo.png" type="image/x-icon">
</head>
<body>
    <div class="wrapper">
        <header id="top" class="header  header-banner">
            <div class="headline">
                <div class="left-headline"  >
                    <div class="show-menu"><ion-icon name="menu-outline"></ion-icon></div>
                    <h2 class="logo">Home<span style="color:#E99C2E;">Design</span></h2>
                </div>
                <div class="center-headline">
                    <nav class="menu">
                        <li class="menu-items menu-items-product"><a href="./index.php">Home</a></li>
                        <li class="menu-items menu-items-product"><a href="./product.php">Sản Phẩm</a><ion-icon name="chevron-down-outline"></ion-icon>
                        <div class="menu-level-2">
                            <ul class="list-menu-level-2">
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Sofa</a></li>
                                    <li class="items-menu-level-2"><a href="#">Sofa góc</a></li>
                                    <li class="items-menu-level-2"><a href="#">Ghế thư giản</a></li>
                                    <li class="items-menu-level-2"><a href="#">Armchair</a></li>
                                    <li class="items-menu-level-2"><a href="#">Ghế dài & đôn</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ TV</a></li>
                                    <li class="items-menu-level-2"><a href="#">Kệ trưng bày</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ Giày</a></li>
                                </ul>
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Bàn ăn</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ ăn</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ Ly</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ bếp</a></li>
                                </ul>
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Giường ngủ</a></li>
                                    <li class="items-menu-level-2"><a href="#">Bàn đầu giường</a></li>
                                    <li class="items-menu-level-2"><a href="#">Bàn trang điểm</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ áo</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ âm tường</a></li>
                                    <li class="items-menu-level-2"><a href="#">Niệm</a></li>
                                </ul>
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Bàn làm việc</a></li>
                                    <li class="items-menu-level-2"><a href="#">Ghế làm việc</a></li>
                                    <li class="items-menu-level-2"><a href="#">Kệ sách</a></li>
                                    <li class="items-menu-level-2"><a href="#">Bàn ngoài trời</a></li>
                                    <li class="items-menu-level-2"><a href="#">Bàn ngoài trời</a></li>
                                    <li class="items-menu-level-2"><a href="#">Ghế ngoài trời</a></li>
                                </ul>
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Đèn trang trí </a></li>
                                    <li class="items-menu-level-2"><a href="#">Thảm trang trí</a></li>
                                    <li class="items-menu-level-2"><a href="#">Bình trang trí</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tranh</a></li>
                                    <li class="items-menu-level-2"><a href="#">Đồng hồ</a></li>
                                    <li class="items-menu-level-2"><a href="#">Khung hình</a></li>
                                </ul>
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Dụng cụ bếp</a></li>
                                    <li class="items-menu-level-2"><a href="#">Hàng trang trí khác</a></li>
                                </ul>
                            </ul>
                        </div>
                        </li>
                        <li class="menu-items menu-items-product  active"><a href="./room.html">Phòng</a><ion-icon name="chevron-down-outline"></ion-icon>
                            <div class="menu-level-2 kitchen">
                                <ul class="list-menu-level-2">
                                    <ul class="group-list">

                                    <?php 

                                    froeach($$result_all_2 as $row){
                                        echo '<li class="items-menu-level-2"><a href="#">'.$row[0][2].'</a></li>';
                                    }
                                    
                                    
                                    ?>

                                        
                                        <li class="items-menu-level-2"><a href="#">Phòng Ăn</a></li>
                                        <li class="items-menu-level-2"><a href="#">Phòng Ngủ</a></li>
                                        <li class="items-menu-level-2"><a href="#">Phòng Làm việc</a></li>
                                        <li class="items-menu-level-2"><a href="#">Phòng Bếp</a></li>
                                    </ul>
                                </ul>
                            </div>
                       </li>
                        <li class="menu-items menu-items-product"><a href="./design.html">Góc Cảm Hứng</a></li>
                    </nav>
                </div>
                <div class="right-headline">
                    <div class="search"><input class="input-search" type="text" placeholder=""><ion-icon name="search-outline"></ion-icon></div>
                    <div class="cart"><div class="quantity-items-cart"></div><ion-icon name="cart-outline"></ion-icon></div>
                    <a href="./account.html" class="account"><ion-icon name="person-circle-outline"></ion-icon><h3>Account</h3></a>
                </div>
            </div>
            <div class="banner-room">
                <div class="address address-room">
                    <h2 class="title-address">
                        Phòng Khách
                    </h2>
                    <ul class="list-link">
                        <li class="link-items"><a href="index.html">Trang Chủ</a></li>
                        <span></span>
                        <li class="link-items"><a href="#">Phòng khách</a></li>
                    </ul>
                </div>
                <div class="carousel">
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Paris</div>
                        <div class="num">01</div>
                        <img src="./images/room/living-room/img-1.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Warsaw</div>
                        <div class="num">02</div>
                        <img src="./images/room/living-room/img-2.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Moscow</div>
                        <div class="num">03</div>
                        <img src="./images/room/living-room/img-3.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Sydney</div>
                        <div class="num">04</div>
                        <img src="./images/room/living-room/img-4.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Istanbul</div>
                        <div class="num">05</div>
                        <img src="./images/room/living-room/img-5.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Prague</div>
                        <div class="num">06</div>
                        <img src="./images/room/living-room/img-6.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Munich</div>
                        <div class="num">07</div>
                        <img src="./images/room/living-room/img-7.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Venice</div>
                        <div class="num">08</div>
                        <img src="./images/room/living-room/img-8.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Oslo</div>
                        <div class="num">09</div>
                        <img src="./images/room/living-room/img-9.png" />
                    </div>
                    </div>
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">London</div>
                        <div class="num">10</div>
                        <img src="./images/room/living-room/img-10.png" />
                    </div>
                    </div>
                </div>
                <div class="cursor"></div>
                <div class="cursor cursor2"></div>
            </div>
            <div class="body-left-meu">
                <div class="left-menu">
                    <ul class="list-menu-left">
                    <?php           
                    foreach($result_all as $value){
                        echo ' <li class="items-menu-left">';
                        echo '        <span>'.$value[1].'</span><ion-icon name="chevron-down-outline"></ion-icon>';
                        echo '        <ul class="list-menu-chilrent">';
                                    $sql_2 ="SELECT * FROM `danhmuc` as a JOIN `nhom_danhmuc` as b WHERE a.NDM_ID=b.NDM_ID and a.NDM_ID=$value[0]";
                                    $result_2=$conn->query($sql_2);
                                    $result_all_2=$result_2->fetch_all();
                                    foreach($result_all_2 as $items){
                                        echo '<li class="menu-chilrent-items">';
                                        echo '<a href="#">'.$items[2].'</a>';
                                        echo '</li>';
                                    }
                        echo'       </ul>';
                        echo'   </li>';
                    }
                        ?>
                    </ul>
                </div>
                <div class="list-right">
                    <div class="point-exit"><ion-icon name="close-outline"></ion-icon></div>
                </div>
            </div>
            <div class="body-cart">
                <div class="main-cart">
                    <div class="headline-cart">
                        <h3 class="title-cart">Giỏ Hàng</h3>
                        <div class="total-price">Tổng Tiền: <span>0</span><p>VND</p></div>
                        <div class="check-all"><input name="check-all" type="checkbox"><label for="check-all">All</label></div>
                    </div>

                    <ul class="list-product-cart">
                    </ul>
                    <div class="checkout">
                        Thanh Toán
                    </div>
                </div>
                <div class="space-left">
                    <div class="point-exit"><ion-icon name="close-outline"></ion-icon></div>
                </div>  
            </div>
        </header>
        <div class="container container-room">
            <div class="left-body-room">
               <div class="content-left-room">
                <h3 class="title">Nội Thất Phòng Khách</h3>
                <h4 class="des">Mẫu Phòng Khách</h4>
                <ul class="list-title-product">
                    <li class="title-items-product"><a href="#">Sofa</a></li>
                    <li class="title-items-product"><a href="#">Sofa góc</a></li>
                    <li class="title-items-product"><a href="#">Sofa da</a></li>
                    <li class="title-items-product"><a href="#">Sofa</a></li>
                </ul>
                <ul class="list-title-product">
                    <li class="title-items-product"><a href="#">Ghế Thư Giản</a></li>
                    <li class="title-items-product"><a href="#">Amchair</a></li>
                    <li class="title-items-product"><a href="#">Ghế Dài & Đôn</a></li>
                </ul>
                <ul class="list-title-product">
                    <li class="title-items-product"><a href="#">Bàn Nước</a></li>
                    <li class="title-items-product"><a href="#">Bàn Bên</a></li>
                    <li class="title-items-product"><a href="#">Bàn console</a></li>
                    <li class="title-items-product"><a href="#">Tủ TiVi</a></li>
                </ul>
               </div>
            </div>
            <div class="right-body-room">
                <ul class="list-living-room">
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-1.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-2.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-3.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-4.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-5.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-6.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-7.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-8.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-9.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-10.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="body-find-store">

            <div class="content">
                <h2 class="title" data-text="Xem,Chạm Và Cảm Nhận">Xem,Chạm Và Cảm Nhận</h2>
                <button class="btn-find"><a href="#">Tìm Cửa Hàng</a><ion-icon name="chevron-forward-outline"></ion-icon></button>
            </div>
        </div>
        <div  class="body-6">
            <ul class="list-client">
                <li class="clients">
                    <img src="./images/clients/c1.png" alt="">
                </li>
                <li class="clients">
                    <img src="./images/clients/c2.png" alt="">
                </li>
                <li class="clients">
                    <img src="./images/clients/c3.png" alt="">
                </li>
                <li class="clients">
                    <img src="./images/clients/c4.png" alt="">
                </li>
                <li class="clients">
                    <img src="./images/clients/c5.png" alt="">
                </li>
            </ul>
        </div>
        <div id="contact" class="body-7">
            <div class="list-contact">
                <div class="list-contact-items">
                    <li class="items-contact title">
                        Information 
                    </li>
                    <li class="items-contact"><a href="#">
                        About Us
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Contact Us
                    </a></li>
                    <li class="items-contact"><a href="#">
                        News
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Store
                    </a></li>
                </div>
                <div class="list-contact-items">
                    <li class="items-contact title">
                        Collections
                    </li>
                    <li class="items-contact"><a href="#">
                        Wooden Chair
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Royal Cloth Sofa
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Accent Chair
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Bed
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Hanging Lamp
                    </a></li>
                </div>
                <div class="list-contact-items">
                    <li class="items-contact title">
                        My Accounts
                    </li>
                    <li class="items-contact"><a href="#">
                        My Account
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Wishlist
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Community
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Order History
                    </a></li>
                    <li class="items-contact"><a href="#">
                        My Cart
                    </a></li>
                </div>
                <div class="list-contact-items">
                    <li class="items-contact title">
                        Newsletter
                    </li>
                    <li class="items-contact"><a href="#">
                        Subscribe to get latest news,update and information
                    </a></li>
                    <li class="items-contact">
                        <div class="letter">
                            <input class="input-letter" type="text" placeholder="Enter Email Here...">
                            <ion-icon name="send"></ion-icon>
                        </div>
                    </li>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="list-icon">
                <li class="icon-items"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li class="icon-items"><a href="#"><ion-icon name="logo-pinterest"></ion-icon></a></li>
                <li class="icon-items"><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                <li class="icon-items"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li class="icon-items"><a href="#"><ion-icon name="logo-behance"></ion-icon></a></li>
            </div>
            <div class="text">©Copyright. Designed And Developed By Themesine</div>
        </footer>
    </div>
</body>
<script src="./assets/javascript/show-search.js"></script>
<script src="./assets/javascript/cr-menu-item-product.js"></script>
<script src="./assets/javascript/show-left-meu.js"></script>
<script src="./assets/javascript/slide-2-banner.js"></script>
<script src="./assets/javascript/sticky-header.js"></script>
<script src="./assets/javascript/cart.js"></script>
</html>