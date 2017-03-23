<!DOCTYPE html>
<html>
<head>
	<title>Vay tín chấp - Thẻ tín dụng ngân hàng</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">

	<script type="text/javascript" src="{{Asset('vendor/moment/moment/min/moment.min.js')}}"></script>
	<!-- <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
	<script type="text/javascript" src="vendor/twbs/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="vendor/twbs/jquery-validation/dist/jquery.validate.js"></script>
	<script type="text/javascript" src="vendor/twbs/jquery-validation/dist/additional-methods.js"></script>

	<script type="text/javascript" src="vendor/twbs/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="vendor/twbs/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"> -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="{{Asset('css/main.css')}}"/>
	<script type="text/javascript" src="{{Asset('js/main.js')}}"></script>

	<link rel="icon" type="image/png" href="https://www.vpbank.com.vn/misc/favicon.ico">
</head>
<body>
	<!-- BEGIN body -->
		<!-- BEGIN menu -->
		<header class="navbar navbar-fixed-top">
			<ul class="menu">
				<li>
					<a href="/" class="menu-a active navbar-header">
					TRANG CHỦ
					<!-- <label class="navbar-header-ten">TEN</label>
					<label class="navbar-header-dem">TRANGWEB</label>
					<label class="navbar-header-duoi">.XXX</label> -->
					</a>
				</li>
				<li class="dropdown">
					<a href="" class="menu-a "> 
						VAY TÍN CHẤP
						<span class="caret"></span>
					</a>
					<div class="dropdown-content">
						<a href="vay-tin-chap-ca-nhan">HỘ KINH DOANH</a>
						<a href="vay-tin-chap-ho-kinh-doanh">VAY THEO LƯƠNG</a>
						<a href="vay-tin-chap-doanh-nghiep">VAY THEO HOÁ ĐƠN ĐIỆN NƯỚC</a>
						<a href="vay-tin-chap-doanh-nghiep">VAY THEO BẢO HIỂM NHÂN THỌ</a>
					</div>
				</li>
				<li><a href="the-tin-dung" class="menu-a ">THẺ TÍN DỤNG</a></li>
				<li><a href="qui-trinh-vay-von" class="menu-a ">QUI TRÌNH VAY VỐN</a></li>
				<li class="dropdown">
					<a href="cong-cu-tinh-toan" class="menu-a ">
						TÍNH LÃI SUẤT
						<span class="caret"></span>
					</a>
					<div class="dropdown-content">
							<a href="tinh-lai-vay-von">TÍNH LÃI VAY VỐN</a>
							<a href="tinh-lai-tiet-kiem">TÍNH LÃI TIẾT KIỆM</a>
							<a href="ngoai-te">CHUYỂN ĐỔI NGOẠI TỆ</a>
					</div>
				</li>
				<li  class="right">
					<a href="thong-tin" class="menu-a ">
					<span class="glyphicon glyphicon-user"></span>
					THÔNG TIN
					</a>
				</li>
			</ul>
		</header>
		<!-- END menu -->

		<!-- BEGIN content -->
		<section class="content container">

			<div class="menu-info col-md-12">
				<div class="col-md-4">
					<h5>Tư vấn<span class="alert"> trực tiếp</span> </h5>
					<h5>Lãi suất<span class="alert"> hấp dẫn</span></h5>
					<h5>Liên hệ ngay: <a href="tel:01692871868" class="alert">01692871868</a></h5>
				</div>
				<div class="col-md-4">
					<h5>thoi gian lam viec</h5>
					<h5>thoi gian lam viec</h5>
					<h5>thoi gian lam viec</h5>
				</div>
				<div class="col-md-4">
					<h5>Tư vấn<span class="alert"> trực tiếp</span> </h5>
					<h5>Lãi suất<span class="alert"> hấp dẫn</span></h5>
					<h5>Liên hệ ngay: <a href="tel:01692871868" class="alert">01692871868</a></h5>
				</div>
			</div>


			<div class="slideshow-container col-md-8">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
  				<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

				  	<!-- Wrapper for slides -->
				  	<div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img src="{{Asset('images/slide/img_slide1_tet.png')}}" alt="vaytinchapsieutoc">
					    </div>

					    <div class="item">
					      <img src="{{Asset('images/slide/img_slide_2.jpg')}}" alt="thetindung">
					    </div>

					    <div class="item">
					      <img src="{{Asset('images/slide/img_slide_3.jpg')}}" alt="vaykhongthutuc">
					    </div>

					    <div class="item">
					      <img src="{{Asset('images/slide/img_slide_4.jpg')}}" alt="thetindungdoanhnghiep">
					    </div>
				  	</div>

				  	<!-- Left and right controls -->
				  	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
				  	</a>
				  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
				  	</a>
				</div>
			</div>

			<div class="menu-rightform col-md-4">
				<div class="title">
					<p>ĐĂNG KÝ VAY VỐN</p>
				</div>
				<form class="form-group">
					<label class="input-group" for="nameClientInp">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" name="nameClientInp" id="nameClientInp" class="form-control" placeholder="Họ và tên">
					</label>
					<label class="input-group" for="phoneClientInp">
						<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
						<input type="text" name="phoneClientInp" id="phoneClientInp" class="form-control" placeholder="Số điện thoại">
					</label>
					<label class="input-group" for="emailClientInp">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input type="email" name="emailClientInp" id="emailClientInp" class="form-control" placeholder="Địa chỉ email">
					</label>
					<label class="input-group" for="CMTClientInp">
						<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
						<input type="text" name="CMTClientInp" id="CMTClientInp" class="form-control" placeholder="Số chứng minh thư nhân dân">
					</label>
					<label class="input-group" for="typeClientInp">
						<select name="typeClientInp" class="form-control" id="typeClientInp">
							<option>Chọn hình thức vay</option>
							<option value="luong">Vay qua lương</option>
							<option value="tinchap">Vay tín chấp</option>
							<option value="tindung">Thẻ tín dụng</option>
							<option value="thechap">Vay thế chấp</option>
						</select>
					</label>
					<button type="submit" class="btn btn-success" class="form-control">Gửi Đăng ký</button>
				</form>
			</div>

			<div class="content-news col-md-8">
				<div class="title">
					<p>VAY VỐN NGÂN HÀNG DÀNH CHO CÁ NHÂN & DOANH NGHIỆP</p>
					<div class="text">
						<span>
												
						Hỗ trợ vay vốn ngân hàng cho cá nhân từ 10 triệu đến 150 triệu đồng, cho doanh nghiệp lên đến 15 tỉ đồng tại các ngân hàng uy tín Việt Nam. Giúp bạn giải ngân nhanh nhu cầu vốn từ 2 đến 3 ngày.

						Chúng tôi giúp gì được bạn ?

					- Được gặp ngay các tư vấn viên tư vấn giúp bạn khoản vay phù hợp với điều kiện và nhu cầu của bạn hiện nay.
					- Được tư vấn các gói ưu đãi lãi suất, thông tin mới nhất về lãi suất của các ngân hàng.
					- Hỗ trợ thủ tục giấy tờ cho khách hàng đang còn gặp khó khăn khi vay tiền ngân hàng.
					- Hỗ trợ làm thủ tục vay tiền ngân hàng miễn phí với khoản vay lên đến 15 tỷ VNĐ, giải ngân nhanh trong 2 ngày.
					- Là nơi tin tưởng khi bạn cần vay vốn ngân hàng nhanh, không tốn phí.
					Sản Phẩm cho vay

						+ Sản phẩm vay tín chấp: Vay theo lương, Vay tiền điện, Vay theo bảo hiểm nhân thọ, Vay thêm vốn bằng cách làm thẻ tín dụng cá nhân.
						+ Sản phẩm vay thế chấp: Cho vay thế sổ đỏ, vay thế chấp ô tô mới và cũ, thế chấp nhà xưởng …, thẩm định tận nơi, làm hồ sơ nhanh chóng, Đặc biệt giải ngân trên 80% giá trị tài sản thực.
						</span>
					</div>
				</div>

				<div class="title">
					<p>CÂU HỎI THƯỜNG GẶP</p>
					<div class="col-sm-4">
						NỘI DUNG CÂU HỎI
						NỘI DUNG CÂU HỎI
						NỘI DUNG CÂU HỎI
					</div>
					<div class="col-sm-4">
						NỘI DUNG CÂU HỎI
						NỘI DUNG CÂU HỎI
						NỘI DUNG CÂU HỎI
					</div>
					<div class="col-sm-4">
						NỘI DUNG CÂU HỎI
						NỘI DUNG CÂU HỎI
						NỘI DUNG CÂU HỎI
					</div>
				</div>
			</div>

			<div class="content-news col-md-4">
				<div class="title">
					<p>TIN TỨC NGÂN HÀNG</p>
				</div>
			</div>

			



		</section>
		<!-- END content -->

		<!-- BEGIN footer -->
		<footer class="footer col-md-12">
			<div class="container">
				<!-- BEGIN footer shortcut -->
				<div class="footer-tag col-md-4">
					<div class="footer-content border-right">
						<div class="footer-content-title">
							GỢI Ý
						</div>
						<ul>
							<li>
								<a href="">Vay tín chấp cá nhân</a>
							</li>
							<li>
								<a href="">Vay tín chấp doanh nghiệp</a>
							</li>
							<li>
								<a href="">Vay tiêu dùng</a>
							</li>
							<li>
								<a href="">Vay hộ kinh doanh</a>
							</li>
							<li>
								<a href="">Vay tín chấp cá nhân</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="footer-thutuc col-md-4">
					<div class="footer-content border-right">
						<div class="footer-content-title">
							THỦ TỤC VAY
						</div>
						<ul>
							<li>
								<a href="">Mẹo vay nhanh</a>
							</li>
							<li>
								<a href="">Lưu ý trước khi làm hồ sơ vay vốn</a>
							</li>
							<li>
								<a href="">Thủ tục cho hộ kinh doanh</a>
							</li>
							<li>
								<a href="">Thủ tục cho doanh nghiệp</a>
							</li>
							<li>
								<a href="">Thủ tục vay vốn cho cán bộ viên chức</a>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="footer-tool col-md-4">
					<div class="footer-content">
						<div class="footer-content-title">
							CÔNG CỤ
						</div>
						<ul>
							<li><a href="">Đăng ký vay vốn</a></li>
							<li><a href="">Nhận </a></li>
							<li><a href="">Tính lãi gửi hàng tháng</a></li>
							<li><a href="">Tính lãi suất vay</a></li>
							<li><a href="">Tính lãi gửi hàng tháng</a></li>
						</ul>
					</div>
				</div>
				<!-- END footer shortcut -->

				<!-- BEGIN footer info  -->
				<div class="footer-info col-md-8">
					<div class="footer-content">
						<div class="footer-content-title">
							Tentrangweb.xxx
						</div>
						<ul>
							<li>Suport online 24/7</li>
							<li>
								<i class="glyphicon glyphicon-phone"></i>
								<a href="tel:01692871868">01692871868</a>
							</li>
							<li>
								<i class="glyphicon glyphicon-envelope"></i>
								<a href="mailto:ducanh30@yahoo.com">ducanh30@yahoo.com</a>
							</li>
							<li>
								
								<address><i class="glyphicon glyphicon-home"></i> Số xxx Đường xxx Phường xxx Quận xxx Tp xxx</address>
							</li>
						</ul>
					</div>
				</div>

				<div class="footer-link col-md-4">
					<div class="footer-content">
						<div class="footer-content-title">
							LIÊN KẾT
						</div>
						<ul>
							<li><a href="">Ngân hàng VPBank</a></li>
							<li><a href="">Ngân hàng VPBank</a></li>
							<li><a href="">Ngân hàng VPBank</a></li>
							<li><a href="">Ngân hàng VPBank</a></li>
							
						</ul>
					</div>
				</div>
				<!-- END footer info -->
			</div>
			<!-- BEGIN footer copyright -->
			<div class="footer-copyright">
				<p class="copyright">
					® Tentrangweb.xxx giữ bản quyền nội dung trên website này.
				</p>
				<p class="copyright">
					© Copyright 2017 Tentrangweb. All Rights Reserved.
				</p>
			</div>
			<!-- END footer copyright -->
		</footer>
		<!-- END footer -->
	<!-- END body -->
</body>
</html>