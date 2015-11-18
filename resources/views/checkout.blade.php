@extends('layouts.master1')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kiểm tra| E-Shopper</title>
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
		
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/shop">Shop</a></li>
				  <li class="active">Kiểm tra</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Bước 1</h2>
			</div>
			<div class="checkout-options">
				<h3>Người dùng mới</h3>
				<p>Tùy chọn thanh toán</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Tùy chọn thanh toán</label>
					</li>
					<li>
						<label><input type="checkbox"> Khách hàng Thanh toán</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Hủy bỏ</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Vui lòng sử dụng Đăng ký và Thanh toán dễ dàng có được quyền truy cập vào lịch sử đơn hàng của bạn, hoặc sử dụng Kiểm tra </p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Thông tin người mua hàng</p>
							<form>
								<input type="text" placeholder="Địa chỉ Email">
								<input type="text" placeholder="Tên người dùng">
								<input type="password" placeholder="Mật Khẩu">
								<input type="password" placeholder="Nhập lại mật khẩu">
							</form>
							<a class="btn btn-primary" href="/shop">Tiếp tục mua hàng</a>
							<a class="btn btn-primary" href="">Tiếp tục</a>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Thôn tin</p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Email*">
									<input type="text" placeholder="Mật khẩu Email">
									
									<input type="text" placeholder="Tên đăng nhập">
									<input type="text" placeholder="Mật khẩu*">
									
								</form>
							</div>
							<div class="form-two">
								<form>
									
									<select>
										<option>-- Tỉnh thành --</option>
										<option>Quận/huyện</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									
										
										<input type="text" placeholder="Quận / huyện*">
									
									<input type="password" placeholder="Xã / Phường">
									<input type="text" placeholder="Số nhà">
									<input type="text" placeholder="Số diện thoại">
									<input type="text" placeholder="Fax">
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Vận chuyển</p>
							<textarea name="message"  placeholder="Lời dặn dò của bạn:" rows="16"></textarea>
							<label><input type="checkbox"> Vận chuyển đến địa chỉ theo hóa đơn</label>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Đánh Giá và Thanh Tóa</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description"></td>
							<td class="price">Đơn giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng cộng</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<tr>
							<td class="cart_product">
								<a href="/shop"><img src="images/cart/1.jpg" alt="" height = "250px"></a>
							</td>
							<td class="cart_description">
								<h4><a href="/shop"></a>Đầm Hana Dễ Thương</h4>
								<p>Web ID: 1089784</p>
							</td>
							<td class="cart_price">
								<p>169K</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">169K</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href="/shop"><img src="images/cart/2.jpg" alt="" height = "250px"></a>
							</td>
							<td class="cart_description">
								<h4><a href="/shop">Áo Sơ Mi Oversize Đa Phong Cách</a></h4>
								<p>Web ID: 1089775</p>
							</td>
							<td class="cart_price">
								<p>159K</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">159K</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href="/shop"><img src="images/cart/3.jpg" alt="" height = "250px"></a>
							</td>
							<td class="cart_description">
								<h4><a href="/shop">Yếm Jean Năng Động</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>135K</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">135K</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="3" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">463K</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="/shop"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Số tiền</td>
										<td>463K</td>
									</tr>
									<tr>
										<td>Số lượng</td>
										<td>3</td>
									</tr>
									<tr>
										<td>Mức thuế</td>
										<td>2K</td>
									</tr>
									<tr class="shipping-cost">
										<td>Phí vận chuyển</td>
										<td> 0K</td>										
									</tr>
									<tr>
										<td>Tổng cộng</td>
										<td><span>465K</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Chuyển khoản ngân hàng </label>
					</span>
					<span>
						<label><input type="checkbox"> Trả tiền mặt khi nhận hàng</label>
					</span>
					<span>
						<input class="btn btn-primary" type = "submit" value ="Thanh Toán"> </a>
					</span>
					
				</div>
		</div>
	</section> <!--/#cart_items-->

	

	

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
@endsection