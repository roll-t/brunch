<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_banhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>

<?php 
if(isset($_GET["id_chang"])){
echo '      <div class="info-product-add">';
echo '    <div class="left-side-add"> ';
echo '    <div class="wrap-input"> ';
echo '        <label for="name-product">Tên sản phẩm</label> ';
echo '        <input type="text" name="name-product" placeholder="Nhap vao ten san pham"> ';
echo '    </div> ';
echo '    <div class="wrap-input"> ';
echo '        <label for="name-product">Giá sản phẩm</label> ';
echo '        <input type="text" name="name-product" placeholder="Nhap vao ten san pham"> ';
echo '    </div> ';
echo '    <div class="wrap-input"> ';
echo '        <label for="name-product">Giảm Giá (nếu có)</label> ';
echo '        <input type="text" name="name-product" placeholder="Nhap vao ten san pham"> ';
echo '    </div> ';
echo '    <div class="wrap-input"> ';
echo '        <label for="name-product">Mô tả</label> ';
echo '        <textarea  name="name-product" id="" cols="30" rows="5"></textarea> ';
echo '    </div> ';
echo '    <div class="wrap-input"> ';
echo '        <label for="name-product">Ảnh sản phẩm</label> ';
echo '        <input type="file" name="name-product" placeholder="Nhap vao ten san pham"> ';
echo '    </div> ';
echo '    <div class="wrap-input">';
echo '     <input class="btn-add-product" type="submit" value="Xác Nhận Thay Đổi"> ';
echo '    </div> ';
echo '</div> ';
echo '<div class="right-side-add"> ';
echo '    <div class="preview">Xem thử</div> ';
echo '    <li class="product-items"> ';
echo '        <div class="top-product"> ';
echo '            <img src="./images/collection/arrivals1.png" alt=""> ';
echo '            <div class="add-cart"> ';
echo '                <div class="left-add"> ';
echo '                    <ion-icon name="cart-outline"></ion-icon> ';
echo '                    <p>Add to cart</p> ';
echo '                </div> ';
echo '                <div class="right-add"> ';
echo '                    <ion-icon name="heart-outline"></ion-icon> ';
echo '                    <ion-icon name="expand-outline"></ion-icon> ';
echo '                </div> ';
echo '            </div> ';
echo '            <div class="texture"></div> ';
echo '            <div class="sale-ticker"> ';
echo '                Sale ';
echo '            </div> ';
echo '        </div> ';
echo '        <div class="product-content"> ';
echo '            <h3 class="name-product">Wooden Chair</h3> ';
echo '            <div class="product-price"><span>$</span><p>65.00</p></div> ';
echo '        </div> ';
echo '    </li> ';
echo '</div> ';
echo '</div>';
}

if(isset($_GET["id_detail"])){
echo '   <div class="body-detail body-detail-admin">   ';
echo '                            <div class="left-side-add add-product">';
echo '                                <div class="wrap-input">';
echo '                                    <label for="name-product">Chất liệu</label>';
echo '                                <select name="" id="">';
echo '                                    <option value="go">Gỗ</option>';
echo '                                    <option value="go">Kim Loại</option>';
echo '                                    <option value="go">Nhựa</option>';
echo '                                    <option value="go">inox</option>';
echo '                                    <option value="go">Hợp kim</option>';
echo '                                    <option value="go">khác</option>';
echo '                                </select>';
echo '                                </div>';
echo '                                <div class="wrap-input">';
echo '                                    <label for="name-product">Màu sắc</label>';
echo '                                    <input type="text" name="name-product" placeholder="Nhap vao ten san pham">';
echo '                                </div>';
echo '                                <div class="wrap-input">';
echo '                                    <label for="name-product">kích thước (cm)</label>';
echo '                                    <div class="wrap-input size">';
echo '                                        <input type="number" name="name-product" min="1" placeholder="Ngang">';
echo '                                        <input type="number" name="name-product" min="1" placeholder="Rộng">';
echo '                                        <input type="number" name="name-product" min="1" placeholder="Cao ">';
echo '                                    </div>';
echo '                                </div>';
echo '                                <div class="wrap-input">';
echo '                                    <label for="name-product">Nặng (kg)</label>';
echo '                                    <input type="number" name="name-product" min="1">';
echo '                                </div>';
echo '                                <div class="wrap-input">';
echo '                                    <label for="name-product">Tình trạng hàng trong kho</label>';
echo '                                    <div class="wrap-input status">';
echo '                                        <div class="item-input"><label for="status_pd">còn nhiều</label><input type="radio" name="status_pd" min="1"></div>';
echo '                                        <div class="item-input"><label for="status_pd">Sắp hết</label><input type="radio" name="status_pd" min="1"></div>';
echo '                                        <div class="item-input"><label for="status_pd">Hết hàng</label><input type="radio" name="status_pd" min="1"></div>';
echo '                                    </div>';
echo '                                </div>';
echo '                                <div class="wrap-input">';
echo '                                    <label for="name-product">Mô tả</label>';
echo '                                    <textarea  name="name-product" id="" cols="30" rows="5"></textarea>';
echo '                                </div>';
echo '                                <div class="wrap-input img">';
echo '                                    <label for="name-product">Hình 1</label>';
echo '                                    <input type="file" name="name-product" placeholder="Nhap vao ten san pham">';
echo '                                </div>';
echo '                                <div class="wrap-input img">';
echo '                                    <label for="name-product">Hình 2</label>';
echo '                                    <input type="file" name="name-product" placeholder="Nhap vao ten san pham">';
echo '                                </div>';
echo '                                <div class="wrap-input img">';
echo '                                    <label for="name-product">Hình 3</label>';
echo '                                    <input type="file" name="name-product" placeholder="Nhap vao ten san pham">';
echo '                                </div>';
echo '                                <div class="wrap-input img">';
echo '                                    <label for="name-product">Hình 4</label>';
echo '                                    <input type="file" name="name-product" placeholder="Nhap vao ten san pham">';
echo '                                </div>';
echo '                                <div class="wrap-input">';
echo '                                 <input class="btn-add-product" type="submit" value="Thêm Chi Tiết">';
echo '                                </div>';
echo '                            </div>';
echo '                            <div class="left-detail">';
echo '                                <div class="control">';
echo '                                    <ion-icon name="chevron-up-outline"></ion-icon>';
echo '                                    <ion-icon name="chevron-down-outline"></ion-icon>';
echo '                                </div>';
echo '                                <ul class="list-img">';
echo '                                    <li class="img-items">';
echo '                                        <img src="./images/collection/arrivals4.png" alt="">';
echo '                                    </li>';
echo '                                    <li class="img-items">';
echo '                                        <img src="./images/collection/arrivals5.png" alt="">';
echo '                                    </li>';
echo '                                    <li class="img-items">';
echo '                                        <img src="./images/collection/arrivals6.png" alt="">';
echo '                                    </li>';
echo '                                    <li class="img-items">';
echo '                                        <img src="./images/collection/arrivals7.png" alt="">';
echo '                                    </li>';
echo '                                    <li class="img-items">';
echo '                                        <img src="./images/collection/arrivals8.png" alt="">';
echo '                                    </li>';
echo '                                </ul>';
echo '                            </div>';
echo '                            <div class="center-detail">';
echo '                                <div class="main-img-detail">';
echo '                                    <img src="./images/collection/arrivals3.png" alt="">';
echo '                                </div>';
echo '                            </div>';
echo '                        </div>';
}
?>