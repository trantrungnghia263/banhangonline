<?php
session_start();
  require_once('../mySql_general/function_helper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="footer.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@600&family=Saira:ital,wght@1,700&family=Source+Serif+Pro:ital,wght@1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: -1%;
    }
    .carousel-indicators{
        opacity: 0.5;
    }
    .product li i{
      
      font-size: 30px;
      margin-right:  10px;
  }
  .product li #mui_ten{
      position: absolute;
      top:23px;
      left: 62px;
      }

    .drop_header{
        display: flex;
        justify-content: space-between;
        justify-items: center;
        height: 61px;

        }
.drop_header #search #search_item{
    margin-top: 5px;
}
#search #search_icon{
    background-color: #cc0000;
    color: white;
    padding: 15px 22px;
    margin-right: 25px;
    position: absolute;
    right: 18px;
    top: 6%;
}
.drop_header #danh_muc i {
    position: absolute;
    color: #fff;
    top: 20px !important;
    left: 40px !important;
    font-size: 24px;
    font-weight: 100;
}
.fixed{
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 10;
    padding: 10px;
    background-color:#Dc2617;
    border-radius:50%;
    animation: hieuung .9s ease-in-out infinite;
}
@keyframes hieuung{
    0%{
        transform: scale(1,1);
    }

    50%{
        transform: scale(0.5,0.5);
    }
    100%{
        transform: scale(1,1);
    }
}
.fixed i{
    font-size: 40px;
    color: #fff;
    z-index: 10;
}
.fixed #contact_message:hover{
    opacity: 25%;
}
.product_bottom .product_price_2 p{
    text-align: center;
    color: red;
    font-size: 20px;
}

/* css phan noi dung ch??nh */
.about{
    margin-top: 60px;
    margin-left: 37px;
    font-family: Arial;
    border: 1px solid #696969;
    width: 304px;
}
.about ul li{
    list-style: none;
    margin-left: -23px;
}
.about ul li a{
    color: #EE5C42;
}
.about ul li a:hover{
    color: 	#F4A460;
}
.about p{
    margin-top: 10px;
    text-align: center;
    font-size: 20px;
}
.about .an a{
    color: #EE5C42;
    font-size: 17px;
}
    </style>
  <!-- <link rel="stylesheet" href="danhmuc.css"> -->
    <!-- <link rel="stylesheet" href="../search//danhmucsp.css"> -->
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>B??I VI???T</title>
</head>
<body>

<?php  include '../pageHeader/header.php'?>
    <div id="wraper" style="margin-top: 20px;">
    <div class="drop_header">
        <div id="danh_muc" style="position: relative; left: 35px;">
            <i class="fas fa-align-left"></i>
            <p> DANH M???C</p>
        </div>
        <form action="" method="GET">
        <div id="search">
            <input type="text"  id="search_item" name="search"  id="search" placeholder="T??m Ki???m S???n Ph???m" >
            <div id="search_icon">
               <i class="fas fa-search"></i> 
            </div>
        </div>
        </form>
    </div>
    <div class="prev_product">
        <div class="left">
        <ul class="product">
        <li>
                <i class="fa fa-forward" aria-hidden="true" style="opacity: 50%;"></i>               
                <a href=""> <span>Thi???t b??? ??i???n</span>
                </a>
                <i id="mui_ten1" class="far fa-chevron-right"></i>
                <ul class="sub_danhmuc">
                                                                <!-- _blank : chuy???n m??? sang tab m???i -->
                    <li> <a href="../search/binhthuydien.php" target=""><span>B??nh th???y ??i???n</span></a></li>
                    <li> <a href="../search/banla.php" target="">  <span>B??n l?? c???m tay</span> </a></li>
                </ul>     
            </li>
            <li>
            <!-- danh muc left -->
             <i class="fa fa-forward" aria-hidden="true" style="opacity: 50%;"></i> 
                <a id="shoes" href=""><span >V???t d???ng b???p</span> </a>
                <i id="mui_ten" class="far fa-chevron-right"></i>
                <ul class="sub_danhmuc"> 
                                                              <!-- _blank : chuy???n m??? sang tab m???i-->
                    <li> <a href="../search/bonoichao.php" target=""> <span>B??? n???i ch???o</span> </a></li> 
                    <li> <a href="../search/bepdientu.php">  <span>B???p ??i???n t???</span> </a></li>
                </ul>     
            </li>
            <li>
            <i class="fa fa-forward" aria-hidden="true" style="opacity: 50%;"></i> 
                <a id="balo" href=""><span>Thi???t b??? gia ????nh</span></a>
                <i id="mui_ten" class="far fa-chevron-right"></i>
                <ul class="sub_danhmuc"> 
                                                              <!-- _blank : chuy???n m??? sang tab m???i-->
                    <li> <a href="../search/dondepnha.php" target=""> <span>M??y h??t b???i</span> </a></li> 
                    <li> <a href="../search/maynuocnong.php">  <span>M??y n?????c n??ng</span> </a></li>
                </ul>  
            </li>
            <li>
            <i class="fa fa-forward" aria-hidden="true" style="opacity: 50%;"></i> 
                <a id="other" href="../search/sanphamkhac.php"> <span> S???n ph???m kh??c</span></a>
            </li>
        </ul>
        <div class="info">
            <div id="facebook">
                <img src="../main//images/me.JPG" alt="???nh ?????i di???n">
                <i class="fab fa-facebook-square"></i>
                <a href="https://www.facebook.com/263ttn/">2IM NGHIA </a>
            </div>
            <div id="zalo">
                <i  class="fas fa-phone-square-alt"></i>
                <a href="https://zalo.me/+84339779454">0399 602 281</a>
            </div>
            <div id="address">
                <i class="fal fa-location-arrow"></i>
                <a href="https://www.google.com/maps/place/Th%C3%B4n+Y%C3%AAn+M%E1%BB%B9+x%C3%A3+Li%C3%AAn+Minh+%C4%90%E1%BB%A9c+Th%E1%BB%8D+H%C3%A0+T%C4%A9nh/@18.5359047,105.6058617,17z/data=!3m1!4b1!4m5!3m4!1s0x3139c92aca736c17:0xa41e4f359ce1be83!8m2!3d18.5358996!4d105.6080504" target="_blank">?????C TH??? H?? T??NH</a>
            </div>
        </div>
        <div class="about">
            <p>N???i dung ch??nh
            <span class="an">
                [<a href="#">???n</a>]
            </span>
            </p>
            <ul class="about_nd">
                <li>
                    <a href="../main/main.php">
                        <span>0.0 Website b??n ????? gia d???ng c???a Tr???n Trung Ngh??a</span>
                    </a>
                </li>
                <li>
                    <a href="https://th.bing.com/th/id/R.41d9f6b697cac9ed8ef4b28bcd4ff0e4?rik=1CuGTtkyiXV%2bGA&riu=http%3a%2f%2fgiadunglongviet.com%2fwp-content%2fuploads%2f2016%2f12%2fdo-nau.jpg&ehk=zBV07Kp%2fVrg%2b5BpfCWuXmoCQlNLbjDKtF0FVhTqE8t8%3d&risl=&pid=ImgRaw&r=0" target="_blank">
                        <span>1 ????? gia d???ng l?? g?? ? Website b??n ????? gia d???ng gi?? r???</span>
                    </a>
                </li>
                <li>
                    <a href="https://perfectusa.com.vn/collections/all" target="_blank">
                        <span>2 S???n ph???m gia d???ng ch???t l?????ng</span>
                    </a>
                </li>
                <li>
                    <a href="https://thegioidogiadung.com.vn/gia-dung-duc" target="_blank">
                        <span>3 M???t s??? ?????a ch??? b??n ????? gia d???ng n???i ti???ng</span>
                    </a>
                </li>
                <li>
                    <a href="../DichVuKhachHang/huongDanMuaHang&ThanhToan.php" target="_blank">
                        <span>4 H?????ng d???n chi ti???t khi mua s???m gia d???ng online</span>
                    </a>
                </li>
                <li>
                    <a href="https://tongkhobuonsi.com/co-nen-mua-do-gia-dung-online-hay-khong-n70008.html" target="_blank">
                        <span>5 C?? n??n mua ????? gia d???ng online kh??ng ?</span>
                    </a>
                </li>
                <li>
                    <a href="../product/product.php">
                        <span>6 B???n c???n ????? gia d???ng ? ?????n v???i website gia d???ng 2IM NGHIA </span>
                    </a>
                </li>
                <li>
                    <a href="http://mamnonblienninh.edu.vn/tin-tuc-su-kien/thong-diep-9k-cua-bo-y-te-phong-chong-covid-19.html" target="_blank">
                        <span>7 Th??ng ??i???p ph??ng ch???ng COVID-19</span>
                    </a>
                </li>
            </ul>
        </div>
     </div>
     <div id="right">
     <?php  include '../pageHeader/header.php'?>    
    </div>
    <div class="baiviet">
        <h3 style="text-align: center; margin-top :10px;color:#Dc2617; font-size :30px;">
            WEBSITE ????? GIA D???NG 2IM NGHIA <br> <h5 style="text-align: center; color :rgb(255 153 0)">B??I VI???T</h5>
            <hr style="color: #EE5C42; border-width :3px;">
        </h3>
        <br> <br>
        <table >
            <tr style=" border-style: dashed;">
            <td valign="top">
            <a href="https://shop.vnexpress.net/gia-dung" target="_blank"><img src="https://th.bing.com/th/id/R.41d9f6b697cac9ed8ef4b28bcd4ff0e4?rik=1CuGTtkyiXV%2bGA&riu=http%3a%2f%2fgiadunglongviet.com%2fwp-content%2fuploads%2f2016%2f12%2fdo-nau.jpg&ehk=zBV07Kp%2fVrg%2b5BpfCWuXmoCQlNLbjDKtF0FVhTqE8t8%3d&risl=&pid=ImgRaw&r=0" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="https://shop.vnexpress.net/gia-dung" target="_blank"><h2>????? gia d???ng l?? g?? ? Website b??n ????? gia d???ng gi?? r???</h2></a>
							<p>
								<font size="4">
                                ????? gia d???ng c??n ???????c g???i l?? thi???t b??? gia d???ng, l?? c???m t??? ???????c s??? d???ng ????? ch??? chung c??c ph???m ???????c thi???t k??? v?? s???n xu???t v???i m???c ????ch ph???c v??? nh???ng nhu c???u thi???t y???u trong sinh ho???t h???ng ng??y c???a c??c gia ????nh. 
								</font>
							</p>
						</td>
            </tr>
            <tr style="border-style: dashed;">
            <td valign="top">
							<a href="https://perfectusa.com.vn/collections/all" target="_blank"><img src="https://vinasem.com.vn/administrator/webroot/upload/image/images/tin-tuc/viet-luan-van-chat-luong-sp.jpg" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="https://perfectusa.com.vn/collections/all" target="_blank"><h2>S???n ph???m gia d???ng ch???t l?????ng</h2></a>
							<p>
								<font size="4">
                                Ch???t l?????ng ch??nh l?? bi???u hi???n, l?? k???t qu??? c???a qu???n l?? ch???t l?????ng. Qu???n l?? ch???t l?????ng t???t th?? s???n ph???m s???n xu???t ra ?????m b???o theo y??u c???u ch???t l?????ng ???? ???????c ?????t ra. Ng?????c l???i ch???t l?????ng s???n ph???m t???t ph???n ??nh qu???n l?? ch???t l?????ng ???? th???c hi???n ????ng c??c ch???c n??ng nhi???m v??? c???a m??nh trong qu?? tr??nh t???o ra s???n ph???m.
								</font>
							</p>
						</td>
            </tr>
            <tr style=" border-style: dashed;">
            <td valign="top">
							<a href="https://thegioidogiadung.com.vn/gia-dung-duc" target="_blank"><img src="https://duhocnhatysk.edu.vn/sites/default/files/chia-se-bi-quyet-su-dung-do-dien-gia-dung-hieu-qua-va-tiet-kiem-1.jpg" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="https://thegioidogiadung.com.vn/gia-dung-duc" target="_blank"><h2> M???t s??? ?????a ch??? b??n ????? gia d???ng n???i ti???ng</h2></a>
							<p>
								<font size="4">
                                Top 5 ?????a ch??? chuy??n b??? s??? ????? gia d???ng, ????? d??ng nh?? b???p gi?? r??? v?? uy t??n nh???t H?? N???i <br>
                                Si??u th??? online tr???c tuy???n h??ng gia d???ng ch??nh h??ng ,ch??? y???u t???p trung v??o m???t s??? c??c danh m???c nh??: qu???t kh??ng c??nh, b???p t???, n???i chi??n kh??ng d???u, ???m ??un si??u t???c, robot h??t b???i t??? ?????ng,  , m??y r???a b??t,m??y l???c kh??ng kh?? ,m??y s?????i ??i???n...
								</font>
							</p>
						</td>
            </tr>
            <tr style=" border-style: dashed;">
            <td valign="top">
							<a href="../DichVuKhachHang/huongDanMuaHang&ThanhToan.php" target="_blank"><img src="../DichVuKhachHang/img/hdonline.jpg " width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="../DichVuKhachHang/huongDanMuaHang&ThanhToan.php" target="_blank"><h2>H?????ng d???n chi ti???t khi mua s???m gia d???ng online</h2></a>
							<p>
								<font size="4">
								????? mua h??ng online ???????c nhanh ch??ng v?? ti???t ki???m th?? b???n c???n ch?? ?? nh???ng ??i???m sau ????y?? <br>
                                ????ng k?? t??i kho???n tr??? ti???n: n??i chung c???t l?? b???n c?? ti???n ch??? kh??ng quan tr???ng l?? b???n d??ng h??nh th???c n??o tr??? ti???n. ??Tuy nhi??n nh???ng h??nh th???c sau t????ng ?????i ph??? th??ng <br>
                                Th??? t??n d???ng - Th??? ATM n???i ?????a - Tr??? g??p b???ng th??? t??n d???ng...
								</font>
							</p>
						</td>
            </tr>
            <tr style="border-style: dashed;">
            <td valign="top">
							<a href="https://tongkhobuonsi.com/co-nen-mua-do-gia-dung-online-hay-khong-n70008.html" target="_blank"><img src="https://hdfashion.net/wp-content/uploads/2020/02/online-shopping-768x512.jpg" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="https://tongkhobuonsi.com/co-nen-mua-do-gia-dung-online-hay-khong-n70008.html" target="_blank"><h2>C?? n??n mua ????? gia d???ng online kh??ng ?</h2></a>
							<p>
								<font size="4">
									N??n mua h??ng online ??? tr??n m???ng ? N???u b???n c?? nhu c???u mua h??ng gia d???ng v?? b??n kho??n th?? c???n n??n l???a ch???n Lazada , Shoppe , Tiki... T??? b???p ??i???n, n???i c??m ??i???n, m??y xay sinh t???, l?? vi s??ng,...?????u ???????c ????nh gi?? cao v??? ch???t l?????ng. C??c s???n ph???m s??? ???????c ????ng g??i c???n th???n n??n kh??ng c???n lo vi???c b??? h?? h???ng khi v???n chuy???n.
								</font>
							</p>
						</td>
            </tr>
            <tr style=" border-style: dashed;">
            <td valign="top">
							<a href="../product/product.php" target="_blank"><img src="https://nhadepso.com/wp-content/uploads/2017/09/do-gia-dung-thong-minh_do-gia-dung-thong-thuong.jpg" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="../product/product.php" target="_blank"><h2>B???n c???n ????? gia d???ng ? ?????n v???i website gia d???ng 2IM NGHIA</h2></a>
							<p>
								<font size="4">
                                B???n mu???n mua ????? d??ng nh?? b???p gi?? s???? B???n mu???n t??m ki???m ngu???n h??ng d???i d??o, s??? l?????ng l???n? B???n v???n ??ang kh?? kh??n trong vi???c t??m ki???m m???t ?????a ch??? chuy??n b??? s??? ????? gia d???ng, ????? d??ng nh?? b???p gi?? r??? v?? uy t??n nh???t H?? N???i? B??i vi???t n??y c???a Toplist s??? gi??p b???n tr??? l???i nh???ng th???c m???c tr??n.
								</font>
							</p>
						</td>
            </tr>
            <tr style=" border-style: dashed;">
            <td valign="top">
							<a href="http://mamnonblienninh.edu.vn/tin-tuc-su-kien/thong-diep-9k-cua-bo-y-te-phong-chong-covid-19.html" target="_blank"><img src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2020/12/info5k_eqsm_thumb_thumb.jpg" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="http://mamnonblienninh.edu.vn/tin-tuc-su-kien/thong-diep-9k-cua-bo-y-te-phong-chong-covid-19.html" target="_blank"><h2>Th??ng ??i???p 5K ph??ng ch???ng COVID-19</h2></a>
							<p>
								<font size="4">
                                Theo B??? Y t???, hi???n nay, d???ch b???nh COVID - 19 ??ang di???n bi???n h???t s???c ph???c t???p. ????? ch??? ?????ng ph??ng, ch???ng d???ch hi???u qu???, c??c l???c l?????ng ch???c n??ng v?? ng?????i d??n c???n th???c hi???n th??ng ??i???p 9K, v???i c??c n???i dung ch??nh sau
								</font>
							</p>
						</td>
            </tr>
        </table>
    </div>
    </div>
     </div> 
     <br>
     <br>
     <!-- <div  class="camket_sp">
        <div class="text">
            <div id="text1" >
                <span> <marquee behavior="" direction="right">100% s???n ph???m ch??nh h??ng</marquee></span>
           </div>
           <div id="text2" >
               <span><marquee behavior="" direction="" vspace="0.4%">H??? tr??? ?????i tr??? tho???i m??i</marquee></span>
           </div >
           <div id="text3"  >
            <span><marquee behavior="" direction="up"> Uy T??n ch???t l?????ng</marquee></span>
        </div >
        </div>
    </div> -->
    </div> 
    </div>
  <div class="contact_fixed">
      <div class="fixed">
         <a href="https://www.facebook.com/263ttn/" target="_blank">
         <i class="fab fa-facebook-messenger" id="contact_message"></i>
         </a>
      </div>
      <div class="alert alert-secondary alert-dismissible fade show" style="width: 260px;height:auto; padding:13px 0px 10px 0px; margin-right: 10px; position: fixed; right: 80px; bottom: 30px; z-index: 20; text-align: center; background-color: rgb(255 153 0) ;" >
        <button type="button" class="close" data-dismiss="alert">&times;</button>Nh???n tin cho shop t???i ????y.
      </div>
</body>
<?php  include '../footer/footer.php'?>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="main.js"></script>
<script src="slider.js"></script>
</html>