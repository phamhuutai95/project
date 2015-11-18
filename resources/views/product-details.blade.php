@extends('layouts.master1')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
	<section>
		<div class="container">
			<div class="row">
				<!--  -->
				
				<div class="col-sm-12 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="images/product-details/similar.jpg" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href="/shop"><img src="images/product-details/similar4.jpg" alt=""width = "70px"></a>
										  <a href="/shop"><img src="images/product-details/similar7.jpg" alt="" width = "70px"></a>
										  <a href="/shop"><img src="images/product-details/similar5.jpg" alt=""width = "70px"></a>
										  <a href="/shop"><img src="images/product-details/similar9.jpg" alt=""width = "70px"></a>
										</div>
										<div class="item">
										  <a href="/shop"><img src="images/product-details/similar4.jpg" alt="" width = "70px"></a>
										  <a href="/shop"><img src="images/product-details/similar5.jpg" alt="" width = "70px"></a>
										  <a href="/shop"><img src="images/product-details/similar6.jpg" alt="" width = "70px"></a>
										  <a href="/shop"><img src="images/product-details/similar7.jpg" alt=""width = "70px"></a>
										</div>
										<div class="item">
										  <a href="/shop"><img src="images/product-details/similar7.jpg" alt="" width = "70px"></a>
										  <a href="/shop"><img src="images/product-details/similar8.jpg" alt="" width = "70px"></a>
										  <a href="/shop"><img src="images/product-details/similar9.jpg" alt="" width = "70px"></a>
										  <a href="/shop"><img src="images/product-details/similar4.jpg" alt=""width = "70px"></a>
										</div>
										
									</div>
									
								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>
							</br>
							
								
								
								


						</div>
						
							
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>Set Váy + Áo Caro Chữ A</h2>
								<p>Web ID: 1089772</p>
								<p>Mô tả: Set áo cổ tròn tay con + chân váy xếp ly xòe là set đồ đáng yêu, ngọt ngào cho những nàng nữ tính.
									- Thiết kế caro ton sur ton có thể mặc cùng set, hoặc tách ra làm áo và váy để phối hợp với trang phục khác.
									- Chất liệu có độ thông thoáng nhẹ nhàng, thoải mái.
									- Dễ dàng phối cùng nhiều kiểu trang sức, phụ kiện</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>165.000đ</span>
									<label>Số lượng:</label>
									<input type="text" value="0" /> 
									<label>Số lần xem :</label>
									<input type="text" value="0" />
									<br/>
									<span>
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										<a href="/cart">Thêm vào giỏ hàng
									</button>
									<button type="button" class="btn btn-fefault cart">
										<i ></i>
										<a href="/checkout">Đặt mua hàng
									</button>
									</span>
								</span>
								
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					<div>
							<div style =" font-size:20px; color: #000000">THÔNG TIN CHI TIẾT SẢN PHẨM </div>
								<div border ="1px">
									<hr/>
								</div>
								<div style =" font-size:15px; color: #000000">Thông tin sản phẩm:</div>
								<div>- Tên sản phẩm:  Set Váy + Áo Caro Chữ A</div>
								<div>- Xuất xứ: Việt Nam</div>
								<div>- Chất liệu: </div>
								<div>- Màu sắc: caro đỏ sọc trắng, đen sọc trắng...</div>
								<div>- Size: M, S, L</div>
								<div>- Trọng lượng: 385gr</div>
								<div style = "text-align:center; margin: 0px"> <div style =" font-size:15px; color: #000000">THAY ĐỔI PHONG CÁCH  MỚI MẺ SET VÁY + ÁO CARO CHỮ A</div>
									</br>
									<img src="images/product-details/similar.jpg" alt="" width = "50%"/>	
								
								</div>
								<div style = "text-align:center; margin-top: 10px"> <div style =" font-size:15px; color: #000000">Sành điệu xuống phố cùng set váy + áo caro chữ A</div>
									</br>
									<img src="images/product-details/similar.jpg" alt="" width = "50%"/>
								</div>
								<div style = "text-align:center; margin-top: 10px"> <div style =" font-size:15px; color: #000000">Set Váy + Áo Caro Chữ A thiết kế bắt mắt, khiến người mặc trông lôi cuốn, nổi bật hơn.</div>
									</br>
									<img src="images/product-details/similar7.jpg" alt="" width = "50%"/>
								</div>
								<div style = "text-align:center; margin-top: 10px"> <div style =" font-size:15px; color: #000000">Set Váy + Áo Caro Chữ A năng động, hiện đại, vô cùng phù hợp xu hướng.</div>
									</br>
									<img src="images/product-details/similar9.jpg" alt=""width = "50%"/>
								</div></br>
								<div> <u>Click vào MUA hàng ngay nào!</u>
								</div></br>
									
								
					</div>
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Có thể bạn quan tâm</a></li>
								
								<li class="active"><a href="#reviews" data-toggle="tab">Nhận xét vào thảo luận</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>86K</h2>
												<p>Sơ Mi Nữ In Hình Ngộ Nghĩnh</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/1.jpg" alt="" />
												<h2>186K</h2>
												<p>Set Đầm Sát Nách Kèm Áo Khoác </p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/2.jpg" alt="" />
												<h2>106K</h2>
												<p>Áo Sơ Mi Nữ Họa Tiết Móc Neo </p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/3.jpg" alt="" />
												<h2>135K</h2>
												<p>Áo Cổ Tay Tròn Xina</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>96K</h2>
												<p> Quần Jeans Nữ Wax Nhẹ Xuất Khẩu</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>86K</h2>
												<p>Sơ Mi Nữ In Hình Ngộ Nghĩnh</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>185K</h2>
												<p>Chân vay cách điệu mới hàng xuất khẩu</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>176K</h2>
												<p>Đầm ôm body kiểu dáng hàn quốc</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									
									<form action="#">
										<span>
											<input type="text" placeholder="Tên"/>
											<input type="email" placeholder="Địa chỉ Email"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="submit" class="btn btn-default pull-right">
											Gửi
										</button>
										<div>
										Danh sách bình luận
										</div>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
@endsection