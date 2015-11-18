@extends('layouts.master1')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Thông tin tài khoản| E-Shopper</title>
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
	
	<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Thông tin tài khoản</a></li>
								<li><a href="#reviews1" data-toggle="tab">Địa chỉ đơn hàng</a></li>
								<li ><a href="#reviews2" data-toggle="tab">Thay đổi mật khẩu</a></li>
								<li><a href="#reviews3" data-toggle="tab">Điểm tích lũy</a></li>
							</ul>
						</div>
				
					<div class="tab-content">
						<div class="tab-pane fade active in" id="details" >
							<div class="col-sm-5">
								<div style = "color: #FF6600; font-size: 20px"><u>Thông tin tài khoản</u></div></br>
									<form action="#">
										 <div class="form-group form-group-lg">
											<label for="email" class="control-label">Email (*)</label>
											<div class="input-group">
												<div class="input-group-addon"><i class="hd hd-user">Email</i></div>
												<input type="email" class="form-control" id="email" name="email" placeholder="Nhập email của bạn"/>
											</div>
										</div>
										<div class="form-group form-group-lg">
											<label for="fullname" class="control-label">Họ tên (*) </label>
											<div class="input-group">
												<div class="input-group-addon">Hoten</div>
												<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập họ tên" autocomplete="off"
													   
													/>
											</div>
										</div>
										<div class="form-group form-group-lg">
											<label for="phone" class="control-label">Điện thoại (*)</label>
											<div class="input-group">
												<div class="input-group-addon"><i class="fa fa-phone">  </i></div>
												<input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại" />
											</div>
										</div>
										  <div class="form-group form-group-lg">
                                        <label for="birthday" class="control-label">Ngày sinh (*)</label>
                                        <div class="input-group datepicker">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Ngày/tháng/năm"
                                                   
                                                />
                                        </div>
                                    </div>

                                    <div class="form-group form-group-lg">
                                        <label for="gender" class="control-label">Giới tính (*)</label>
                                        <div class="radio-list">
                                            <label><input type="radio" id="gender_m" name="gender" value="M"  /> Nam</label>&nbsp &nbsp
                                            <label><input type="radio" id="gender_f" name="gender" value="F"  /> Nữ</label>&nbsp &nbsp
                                            <label><input type="radio" id="gender_o" name="gender" value="O" checked="checked"/> Không khai báo</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-lg">
                                        <button type="submit"  class="btn btn-block" style ="background: #FF9900 ">CẬP NHẬT</button>
                                    </div>
									
									</form>
								</div>
							</div>
							<div  class="tab-pane fade"  id="reviews1" >
								<div class="col-sm-12">
									
									<form action="#">
									<div style = "color: #FF6600; font-size: 20px"><u>Địa chỉ giao hàng</u></div></br>
									<span>
										<div class="col-sm-2">
										
										<div>Họ tên</div></br>
										<div>Điện Thoại</div></br>
										<div>Loại địa chỉ</div></br>
										<div>Địa chỉ</div></br>
										<div>Phường / Xã</div></br>
										<div>Quận / Huyện</div></br>
										<div>Thành Phó / Tỉnh</div>
										</div>
											<div class="col-sm-3">
											<label id ="hoten"></label>
											<label id ="dienthoai"></label>
											<label id ="loaidiachi"></label>
											<label id ="diachi"></label>
											<label id ="phuong"></label>
											<label id ="quan"></label>
											<label id ="TP"></label>
											</div>
									</span>
									</div>
                                                    <div class="">
                                <button type="button" class="btnAddProfile btn btn-default border-radius"> + Thêm thông tin khác</button>
                            </div>
									</form>
								</div>
					
							<div class="tab-pane fade" id="reviews2" >
								<div class="col-sm-5">
									<div style = "color: #FF6600; font-size: 20px"><u>Thay đổi mật khẩu</u></div></br>
									<form action="#">
									
										<div class="form-group form-group-lg">
											<label for="email" class="control-label">Nhập mật khẩu cũ</label>
											<div class="input-group">
												<div class="input-group-addon"><i class="hd hd-user">Password</i></div>
												<input type="email" class="form-control" id="email" name="email" placeholder="Nhập mật khẩu cũ"/>
											</div>
										</div>
										<div class="form-group form-group-lg">
											<label for="fullname" class="control-label"> Nhập mật khẩu mới</label>
											<div class="input-group">
												<div class="input-group-addon">Password</div>
												<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập mật khẩu mới" autocomplete="off"
													   
													/>
											</div>
										</div>
										<div class="form-group form-group-lg">
											<label for="phone" class="control-label">Nhập lại mật khẩu mới</label>
											<div class="input-group">
												<div class="input-group-addon">Password </div>
												<input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập lại mật khẩu mới" />
											</div>
										</div>
										<div class="form-group form-group-lg">
											<button type="submit"  class="btn  btn-block" style ="background: #FF9900 ">CẬP NHẬT</button>
										</div>

									</form>
								</div>
							</div>
							<div class="tab-pane fade"  id="reviews3" >
								<div class="col-sm-12">
									<div style = "color: #FF6600; font-size: 20px"><u>Điểm tích lũy</u></div></br>
									<form action="#">
										
									<table class="table table--listing table--reward-points">
										
											<tr>
												<th width="20%">Ngày</th>
												<th>Nội dung</th>
												<th width="20%">Điểm tích lũy</th>
											</tr>
											<tr>
												<td colspan="3" class="text-center">Chưa có dữ liệu</td>
											</tr>                           

                                     </table>
									</form>
								</div>
							</div>
					
						</div>
	</div>
	
		
	

	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
@endsection