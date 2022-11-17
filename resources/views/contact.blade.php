<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact | PENETRON</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/dark-color.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
<link rel="icon" type="image/x-icon" href="{{asset('/images/fav icon.ico')}}">

</head>

<body>


	<div class="page-loading">
		<div class="thecube">
			<div class="cube c1"></div>
			<div class="cube c2"></div>
			<div class="cube c4"></div>
			<div class="cube c3"></div>
		</div>
	</div><!--page-loading end-->

	<div class="wrapper">


		<header class="pb stick">
			<div class="hd_bar">
				<div class="container">
					<div class="header-bar">
						<div class="logo">
							<a href="/" title=""><img src="{{asset('images/logo-3.png')}}" alt=""></a>
						</div><!--logo end-->
						<nav>
							<ul>
								<li><a href="/" title="">الصفحة الرئيسية</a></li>
								<li><a href="/works" title="">الأعمال</a></li>
                                <li><a href="/certificates" title="">الشهادات</a></li>
                                <li><a href="/projects" title="">المشاريع</a></li>
                                <li><a href="/blog" title="">المدونة</a></li>
								<li><a href="/about" title="">من نحن</a></li>
								<li><a class="active" href="/contact" title="">تواصل معنا</a></li>
							</ul>
						</nav><!--nav end-->
						<div class="mobile-menu-btn">
							<a href="#" title="" class="open-menu"><i class="fa fa-bars"></i></a>
						</div><!--mobile-menu-btn end-->
					</div><!--header-bar end-->
				</div>
			</div><!--hd_bar end-->
		</header>

		<div class="responsive-mobile-menu">
			<a href="#" title="" class="close-menu"><i class="ion-close"></i></a>
			<ul>
				<li><a href="/" title="">الصفحة الرئيسية</a></li>
				<li><a href="/works" title="">الأعمال</a></li>
                <li><a href="/certificates" title="">الشهادات</a></li>
                <li><a href="/projects" title="">المشاريع</a></li>
                <li><a href="/blog" title="">المدونة</a></li>
				<li><a href="/about" title="">من نحن</a></li>
				<li><a href="/contact" title="">تواصل معنا</a></li>
			</ul>
		</div><!--responsive-mobile-menu end-->

		<section>
			<div class="block no-padding">
				<div class="main-map">
					<div  class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3418.438325942375!2d31.392972685381448!3d31.041894977718602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z2KfZhNmF2YbYtdmI2LHYqSAxNCDYtNin2LHYuSDYp9mE2LHYtNmK2K_ZiSAtINi02KfYsdi5INmB2K7YsSDYp9mE2K_ZitmGINiu2KfZhNivIA!5e0!3m2!1sar!2seg!4v1663752183273!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
				</div><!--main-map end-->
			</div>
		</section>


		<section>
            <div style="margin-top: 20px" class=container-fluid>
                @if (session('success'))
                    <div class="alert text-center alert-primary">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
			<div class="contact-info-sec">
				<div class="container">
					<div class="cntct-details">
						<div class="row">
							<div class="col-lg-6">
								<div class="contact-address">
                                    <h2><strong>القاهرة</strong></h2>
{{--									<h2><strong>Brooklyn, </strong>New York</h2>--}}
									<p>حافظ رمضان - أبراج الشرطة الدور الثاني شقة رقم 2 - مدينة نصر - القاهرة.</p>
									<span><b>البريد الالكترونى :</b> info@penetronegypt.net</span>
								</div><!--contact-address end-->
							</div>
							<div class="col-lg-6">
								<div class="contact-more-info">
									<h5>للتواصل المباشر :</h5>
									<h2>01146600440</h2>
                                    <h2>300 737 22 02</h2>
                                    <h2>700 742 22 02</h2>
									<div class="address">
										<h3>وقت العمل :</h3>
                                        <span>السبت-الخميس : 8.00 - 17.00 , الجمعة مغلق</span>
{{--										<span>Mon - Sat: 8.00 - 17.00, Sunday closed</span>--}}
									</div>
								</div><!--contact-more-info end-->
							</div>
						</div>
					</div><!--cntct-details end-->
					<div class="contact-form-sec">
						<h3>هل لديك استفسار ؟ تواصل معنا.</h3>
						<p class="success alert alert-success" id="success" style="display:none;"></p>
                        <p class="error alert alert-danger" id="error" style="display:none;"></p>
						<form action="{{route('storeMassage')}}" id="contact_form_3" method="post">
                            @csrf
                            <input type="hidden" value="contact_3">
							<div class="row">
								<div class="col-lg-4">
									<input type="text" name="name" id="username" placeholder="الاسم*">
								</div>
								<div class="col-lg-4">
									<input type="text" name="email" id="email" placeholder="البريد الالكترونى*">
								</div>
								<div class="col-lg-4">
									<input type="text" name="subject" placeholder="الموضوع (اختيارى)">
								</div>
								<div class="col-lg-12">
									<textarea name="messege" id="description" placeholder="الرسالة"></textarea>
								</div>
								<div class="col-lg-12 text-center">
									<button type="submit" id="submit_3">ارسال</button>
								</div>
							</div>
						</form>
					</div><!--contact-form-sec end-->
				</div>
			</div><!--contact-info-sec end-->
		</section>

		<footer>
			<div class="footer-data">
				<div class="container">
					<div class="ft-contact-info">
                        <h1>info@penetronegypt.net</h1>
                        <h3>حافظ رمضان - أبراج الشرطة الدور الثاني شقة رقم 2 - مدينة نصر - القاهرة</h3>
                        <span>01146600440</span><span class="mx-1"> - 300 737 22 02 - </span><span> 700 742 22 02 </span>
                    </div><!--ft-contact-info end-->
					<div class="social-copyright">
						<ul>
							<li><a href="#" title="">Twitter</a></li>
							<li><a href="#" title="">Facebook</a></li>
							<li><a href="#" title="">Behance</a></li>
							<li><a href="#" title="">Dribbble</a></li>
						</ul>
						<div class="copyright-text">
							<p>© 2022 Attractionme. All Right Reserved</p>
						</div>
					</div><!--social-copyright end-->
				</div>
			</div><!--footer-data end-->
		</footer>


	</div><!--wrapper end-->







<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/html5lightbox.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCEprRgdAfS753As69Wak04p2fvCzKbXQU"></script>
<script src="{{asset('js/gmap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/contact-form.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>

</html>
