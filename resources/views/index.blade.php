@extends('layouts.master1')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trang Chu | E-Shopper</title>
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
	
	
	

	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Dành thời gian cho người mình yêu thương</h2>
									<h4 style = "color:#FF6600; font-family: Courier"><i>Luôn bên bạn mọi lúc mọi nơi.</i></h4>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div> 
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2 style ="">Giao hàng tận nơi </h2>
									<h4 style = "color:#FF6600; font-family: Courier"><i>Giao hàng khắp nơi trên toàn quốc</i></h4>
									
								</div>
								<div class="col-sm-6">
									
									<img src="images/home/girl2.jpg"  class="girl2" alt=""  />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Mua sắm thả ga săn ngay nhiều quà</h2>
									<h4 style = "color:#FF6600; font-family: Courier"><i> Nhiều quà tặng hấp dẫn đang chào đón bạn.</i></h5>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">

				
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">SẢN PHẨM</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product1.jpg" alt="" />
											<h2>119K</h2>
											<p>Áo Sơ Mi Oversize Đa Phong Cách</p>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>119K</h2>
												<p>Áo Sơ Mi Oversize Đa Phong Cách</p>
												<a href="/product-details" class="btn btn-default add-to-cart">Xem Thông tin sản phẩm</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="/blog"><i class="fa fa-plus-square"></i>Thêm vào sản phẩm yêu thích</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product2.jpg" alt="" />
										<h2>99K</h2>
										<p>Yếm Jean Năng Động</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>99K</h2>
											<p>Yếm Jean Năng Động</p>
											<a href= "/product-details" class="btn btn-default add-to-cart">Xem thông tin sản phẩm</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="/blog"><i class="fa fa-plus-square"></i>Thêm vào sản phẩm yêu thích</a></li>
								
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/qn2.jpg" alt="" />
										<h2>189K</h2>
										<p>Quần Jeans Nam</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>189K</h2>
											<p>Quần Jeans Nam</p>
											
											<a href= "/product-details" class="btn btn-default add-to-cart">Xem thông tin sản phẩm</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="/blog"><i class="fa fa-plus-square"></i>Thêm vào sản phẩm yêu thích</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product4.jpg" alt="" />
										<h2>175K</h2>
										<p>Đầm Sọc Tay Lở Phối Voan</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$56</h2>
											<p>Đầm Sọc Tay Lở Phối Voan</p>
											<a href="/product-details" class="btn btn-default add-to-cart">Xem thông tin sản phẩm</a>
										</div>
									</div>
									<img src="images/home/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="/blog"><i class="fa fa-plus-square"></i>Thêm vào sản phẩm yêu thích</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/an2.jpg" alt="" />
										<h2>160K</h2>
										<p>Áo Sơ Mi D&G Cao Cấp</p>
										</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>160K</h2>
											<p>Áo Sơ Mi D&G Cao Cấp</p>
											<a href="/product-details "class="btn btn-default add-to-cart">Xem thông tin sản phẩm</a>
										</div>
									</div>
									<img src="images/home/sale.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="/blog"><i class="fa fa-plus-square"></i>Thêm vào sản phẩm yêu thích</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/an4.jpg" alt="" />
										<h2>199K</h2>
										<p>Áo Nam tay dài</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>199K</h2>
											<p>Áo Nam tay dài</p>
											<a href="/product-details" class="btn btn-default add-to-cart">Xem thông tin sản phẩm</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="/blog"><i class="fa fa-plus-square"></i>Thêm vào sản phẩm yêu thích</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">Áó Thun</a></li>
								<li><a href="#blazers" data-toggle="tab"> Áo Sơ Mi</a></li>
								<li><a href="#sunglass" data-toggle="tab">Đầm - Váy</a></li>
								<li><a href="#kids" data-toggle="tab">Quần - jean</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Áo khoác</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>189K</h2>
												<p>Áo thun nữ cá tính thời trang thu đông</p>
												<a href="/cart" class="btn btn-default add-to-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>199K</h2>
												<p>Set Áo In Hình + Chân Váy Xòe</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>99K</h2>
												<p>Áo Thun Nam Polo Màu Mới Nhất</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>139K</h2>
												<p>Áo Thun Nam Phối Màu Korea</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="blazers" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery5.jpg" alt="" />
												<h2>159K</h2>
												<p>Áo Sơ Mi Tay Dài Holliser Cao Cấp</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery6.jpg" alt="" />
												<h2>259K</h2>
												<p>Áo Sơ Mi Nam/ Nữ Fndojack Từ Thái</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery7.jpg" alt="" />
												<h2>198K</h2>
												<p>Áo Kiểu Đính Bông Tà Nhún Dini</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery8.jpg" alt="" />
												<h2>186K</h2>
												<p>Áo Sơ Mi Tay Dài Cổ Trụ Cao Cấp</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="sunglass" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery9.jpg" alt="" />
												<h2>186K</h2>
												<p>Đầm Xếp Ly Tra Nút Belinda</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery10.jpg" alt="" />
												<h2>156K</h2>
												<p>Chân Váy Len Form Ôm</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery11.jpg" alt="" />
												<h2>196K</h2>
												<p>Chân Váy Vintage Sắc Màu</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery12.jpg" alt="" />
												<h2>286K</h2>
												<p>Đầm Vintage Cao Cấp</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="kids" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery13.jpg" alt="" />
												<h2>157K</h2>
												<p>Quần Dài Họa Tiết Cao Cấp</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery14.jpg" alt="" />
												<h2>96K</h2>
												<p>Quần Legging Đính Hạt Dini</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery15.jpg" alt="" />
												<h2>69K</h2>
												<p>Quần Dài Họa Tiết Hoa Dini</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery16.jpg" alt="" />
												<h2> 159K</h2>
												<p>Quần Tây Công Sở Nữ</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="poloshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery17.jpg" alt="" />
												<h2>156K</h2>
												<p>Áo Khoác Form Dài Mimikawa </p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery18.jpg" alt="" />
												<h2>196K</h2>
												<p>Áo Khoác Len Form Dài Xẻ Tà Thời Trangh</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery19.jpg" alt="" />
												<h2>136K</h2>
												<p>Áo Khoác Kaki Nam Polo Bigsize</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery20.jpg" alt="" />
												<h2>196K</h2>
												<p>Áo Khoác Dù Phối Màu Dạo Phố</p>
												<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm xem thêm</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>198K</h2>
													<p>Áo Khoác Nam Tính</p>
													<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>256K</h2>
													<p>Áo Sơ Mi Nam/ Nữ Fndojack Từ Thái</p>
													<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Đầm Jessy Phối Ren </p>
													<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/gallery7.jpg" alt="" />
													<h2>198K</h2>
													<p>Áo sơ mi cá tính</p>
													<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/gallery8.jpg" alt="" />
													<h2>256K</h2>
													<p>Áo sơ mi Xẻ Vạt Free Size</p>
													<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/gallery9.jpg" alt="" />
													<h2>$156</h2>
													<p>Đầm kiểu dáng xinh xắn </p>
													<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
@endsection