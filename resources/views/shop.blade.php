@extends('layouts.master1')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>ề
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
	
	
	<section id="advertisement">
		<div class="container">
			<img src="images/shop/im1.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh Mục</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<a href = "/shop"/>Khuyến mãi mới nhất
										</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Thời Trang Nam
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="/Tatca">Tất Cả</a></li>
											<li><a href="/Quannam">Quần Nam</a></li>
											<li><a href="/Aonam">Áo Nam</a></li>
											<li><a href="/Phukiennam">Phụ kiện</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Thời Thời Trang Nữ
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="/Tatca1">Tất Cả</a></li>
											<li><a href="/Quannu">Quần Nữ</a></li>
											<li><a href="/Aonu">Áo Nữ</a></li>
											<li><a href="/Phukiennu">Phụ Kiện</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="/Thoitrangtreem">Thời trang trẻ em</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="/1">Nhà cửa - gia dụng</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="/pk1">Công nghệ - Phụ kiện</a></h4>
								</div>
							</div>
							
							
						</div><!--/category-products-->
					
					
						<div class="brands_products"><!--brands_products-->
							<h2>Thương</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="/Benplay"> <span class="pull-right">(10)</span>Benplay – Benplay </a></li>
									<li><a href="/Cindydrella"> <span class="pull-right">(10)</span>Cindydrella</a></li>
									<li><a href="/D&N FASHION"> <span class="pull-right">(10)</span>D&N FASHION</a></li>
									<li><a href="/JULIUS"> <span class="pull-right">(10)</span>JULIUS</a></li>
									
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Phạm Vi Giá</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>0Đ</b> <b class="pull-right"> 600Đ</b>
							</div>
						</div><!--/price-range-->
						
						
						
					</div>
				</div>
				<section>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản Phẩm</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/product10.jpg" alt="" />
										<h2>119K</h2>
											<p>Đầm Body Dệt Kim Phối Màu</p>
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
										<img src="images/shop/product11.jpg" alt="" />
										<h2>119K</h2>
											<p>Áo Thun Xẻ Cổ Chữ V</p>
									</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>119K</h2>
												<p>Áo Thun Xẻ Cổ Chữ V</p>
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
										<img src="images/shop/product12.jpg" alt="" />
										<h2>179K</h2>
										<p>Đầm Ren Thanh Lịch HD2</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>179K</h2>
											<p>Đầm Ren Thanh Lịch HD2</p>
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
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/product9.jpg" alt="" />
										<h2>79K</h2>
										<p>Áo Len Sắc Màu</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>79K</h2>
											<p>Áo Len Sắc Màu</p>
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
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/product8.jpg" alt="" />
										<h2>169K</h2>
										<p>Áo Voan 2 Lớp Mùa Hè</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>169K</h2>
											<p>Áo Voan 2 Lớp Mùa Hè</p>
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
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/product7.jpg" alt="" />
										<h2>199K</h2>
										<p>Áo Voan 2 Lớp Mùa Hè</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>199K</h2>
											<p>Áo Voan 2 Lớp Mùa Hè</p>
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
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/product6.jpg" alt="" />
										<h2>159K</h2>
										<p>Đầm Denim Gigi</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>159K</h2>
											<p>Đầm Denim Gigi</p>
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
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/product5.jpg" alt="" />
										<h2>129K</h2>
										<p>Quần Jean Nữ Dạo Phố Sành Điệu</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>129K</h2>
											<p>Quần Jean Nữ Dạo Phố Sành Điệu</p>
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
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/product4.jpg" alt="" />
										<h2>199K</h2>
										<p>Quần Jeans Nữ Hani Trẻ Trung</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>199K</h2>
											<p>Quần Jeans Nữ Hani Trẻ Trung</p>
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
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/product3.jpg" alt="" />
										<h2>165K</h2>
										<p>Áo Khoác Jean Xanh Trẻ Trung</p>
										
										</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>165K</h2>
											<p>Áo Khoác Jean Xanh Trẻ Trung</p>
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
						
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/product2.jpg" alt="" />
										<h2>185K</h2>
										<p>Đầm Yếm Thun Dạo Phố Thu</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>185K</h2>
											<p>Đầm Yếm Thun Dạo Phố Thu</p>
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
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/product1.jpg" alt="" />
										<h2>189K</h2>
										<p>Đầm Veela Thanh Lịch</p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>189K</h2>
											<p>Đầm Veela Thanh Lịch</p>
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
						
						<ul class="pagination">
							<li class="active"><a href="/shop">1</a></li>
							<li ><a href="/shop1">2</a></li>
							<li><a href="/shop2">3</a></li>
							<li><a href="/shop">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
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