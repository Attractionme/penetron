<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Single Blog | PENETRON</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="شركة بنيترون مصر شركة مساهمة مصرية تابعة لقانون 159 لسنة 81 لها العديد من المشاريع داخل مصر وخارجها فى جميع مجالات الترميم ومعالجة الخرسانة والاعمال الاخرى." />
<meta name="keywords" content="  إدارة المرافق وصيانتها ,البناء , الانشاء , تشطيبات , ترميم , الانشاءات , الخرسانة , موانئ و محطات مياه" />
<link rel="stylesheet" type="text/css" href="{{asset('../../public/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('../../public/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('../../public/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('../../public/css/ionicons.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('../../public/css/dark-color.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('../../public/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('../../public/css/responsive.css')}}">
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
				<div class="row">
					<div class="header-bar col-md-10">
						<!--logo end-->
						<nav class="col-md-12">
							<ul>
								<li><a class="active" href="/" title="">الصفحة الرئيسية</a>
								</li>
								<li><a href="/works" title="">الأعمال</a></li>
								<li><a href="/certificates" title="">الشهادات</a></li>
								<li><a href="/projects" title="">المشاريع</a></li>
								<li><a href="/blog" title="">المدونة</a></li>
								<li><a href="/about" title="">من نحن</a></li>
								<li><a href="/contact" title="">تواصل معنا</a></li>
							</ul>
						</nav>
						<!--nav end-->
						<div class="mobile-menu-btn">
							<a href="#" title="" class="open-menu"><i class="fa fa-bars"></i></a>
						</div>
						<!--mobile-menu-btn end-->
					</div>
					<div class="logo col-md-2" style="background-color:#fff ;">
						<a href="/" title=""><img class="h-img" src="{{asset('images/logo-3.png')}}" style="width:80% ;" alt=""></a>
					</div>
				</div>
				<!--header-bar end-->
			</div>
			</div><!--hd_bar end-->
		</header>


		<div class="responsive-mobile-menu">
			<a href="#" title="" class="close-menu"><i class="ion-close"></i></a>
			<ul>
                <li><a href="/" title="">الصفحة الرئيسية</a></li>
                <li><a href="/works" title="">الأعمال</a>
                <li><a href="/certificates" title="">الشهادات</a></li>
                <li><a href="/projects" title="">المشاريع</a></li>
                <li><a href="/blog" title="">المدونة</a></li>
                <li><a href="/about" title="">من نحن</a></li>
                <li><a href="/contact" title="">تواصل معنا</a></li>
			</ul>
		</div><!--responsive-mobile-menu end-->


		<section>
			<div class="block no-padding">
				<div class="banner-section">
                        <img src="{{url('public/assets/images/blog_images/'.$blogs->image_profile)}}" alt="">
				</div><!--banner-section end-->
			</div>
		</section>

		<section class="main-section">
			<div class="container">
				<div class="post-page-data">
					<div class="pager-details pager-details-blog">
					</div><!--pager-details end-->
					<div class="single-post-data" dir="rtl">
						<div class="construction-company">
                            <h2>{{$blogs->tittle}}</h2>
							<ul class="post-info">
								<li><span>{{\Carbon\Carbon::parse($blogs->created_at)->format('M d,Y')}}</span></li>
							</ul>
							<h3>{{$blogs->description}}</h3>
						<div class="social-links-list">
							<ul>
								<li><a class="facebook" href="#" title=""><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#" title=""><i class="fa fa-twitter"></i></a></li>
								<li><a class="google-plus" href="#" title=""><i class="fa fa-google-plus"></i></a></li>
								<li><a class="rss" href="#" title=""><i class="fa fa-rss"></i></a></li>
							</ul>
						</div><!--social-links-list end-->
					</div><!--single-post-data end-->
				</div><!--post-page-data end-->
			</div>
		</section>

{{--		<section>--}}
{{--			<div class="container" dir="rtl">--}}
{{--				<div class="related-posts bd-top">--}}
{{--					<h2>أجدد المدونات</h2>--}}
{{--					<div class="posts-sec">--}}
{{--						<div class="row">--}}
{{--                            @foreach($latest_blogs as $lat_blogs)--}}
{{--                                <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                                    <div class="post">--}}
{{--                                        <div class="post-img">--}}
{{--                                            <img src="http://via.placeholder.com/370x301" alt="">--}}
{{--                                            <img src="../{{asset('assets/images/blog_images/'.$lat_blogs->image)}}"  alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="post-details">--}}
{{--                                            <ul class="post-info">--}}
{{--                                                <li><span>Jun 20,2017</span></li>--}}
{{--                                                <li><a href="#" title="">Admin</a></li>--}}
{{--                                                <li><span>{{\Carbon\Carbon::parse($lat_blogs->created_at)->format('M d,Y')}}</span></li>--}}
{{--                                                <li><a href="#" title="">{{$lat_blogs->tittle}}</a></li>--}}
{{--                                            </ul>--}}
{{--                                            <h3><a href="{{route('single-blog',['id' => $lat_blogs->id])}}" title="">{{$lat_blogs->description}}</a></h3>--}}
{{--                                            <a href="{{route('single-blog',['id' => $lat_blogs->id])}}" title="">قراءة المزيد<i class="fa fa-angle-right"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div><!--post end-->--}}
{{--                                </div>--}}
{{--                            @endforeach--}}

{{--							<div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--								<div class="post">--}}
{{--									<div class="post-img">--}}
{{--										<img src="http://via.placeholder.com/370x301" alt="">--}}
{{--									</div>--}}
{{--									<div class="post-details">--}}
{{--										<ul class="post-info">--}}
{{--											<li><span>Jun 7,2017</span></li>--}}
{{--											<li><a href="#" title="">Paul Murren</a></li>--}}
{{--										</ul>--}}
{{--										<h3><a href="#" title="">The Amazing Of Roof With Wood’s Structure By Ron Architect</a></h3>--}}
{{--										<a href="#" title="">full article   <i class="fa fa-angle-right"></i></a>--}}
{{--									</div>--}}
{{--								</div><!--post end-->--}}
{{--							</div>--}}
{{--							<div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--								<div class="post">--}}
{{--									<div class="post-img">--}}
{{--										<img src="http://via.placeholder.com/370x301" alt="">--}}
{{--									</div>--}}
{{--									<div class="post-details">--}}
{{--										<ul class="post-info">--}}
{{--											<li><span>Jun 2,2017</span></li>--}}
{{--											<li><a href="#" title="">LoganCee</a></li>--}}
{{--										</ul>--}}
{{--										<h3><a href="#" title="">Launch Project UK Railway Roar</a></h3>--}}
{{--										<a href="#" title="">full article   <i class="fa fa-angle-right"></i></a>--}}
{{--									</div>--}}
{{--								</div><!--post end-->--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div><!--posts-sec-->--}}
{{--				</div><!--related-posts end-->--}}
{{--			</div>--}}
{{--		</section>--}}

{{--		<section>--}}
{{--			<div class="container">--}}
{{--				<div class="post-control-links">--}}
{{--					<div class="row">--}}
{{--						<div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--							<div class="pv-post">--}}
{{--								<a href="#" title="">Older</a>--}}
{{--								<h4>Italy Winner AMMA 2017</h4>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--							<div class="pv-post ta-right">--}}
{{--								<a href="#" title="">Newer</a>--}}
{{--								<h4>Morroco Shopping Center By Kons</h4>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div><!--post-control-links end-->--}}
{{--			</div>--}}
{{--		</section>--}}

		<section>
			<div class="contact-section" dir="rtl">
				<div class="block">
					<div class="container">
						<div class="user-comment-form">
							<div class="user-comment">
								<h2>{{$numOfCount}} تعليقات</h2>
								<ul>
                                    @foreach($comments as $comment )
                                        <li>
                                            <div class="user-img">
                                                <img src="../{{asset('assets/images/faces/2.jpg')}}" alt="">
                                            </div>
                                            <div class="user-say">
                                                <div class="comment-time">
                                                    <h4>{{$comment->name}}</h4>
{{--                                                    <span>- Jul 17,2015 at 15 hours ago</span>--}}

                                                    <span>{{\Carbon\Carbon::parse($comment->comment_date)->format('M d,Y')}}</span>
{{--                                                    <span>{{$comment->comment_date}}</span>--}}
                                                </div>
{{--                                                <p>Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla. Sedmi quam. Lorem In euismod urna ac massa adipiscing interdum.</p>--}}
                                                <p>{{$comment->messege}}</p>
                                            </div><!--user-say end-->
                                        </li>
                                    @endforeach

{{--									<li>--}}
{{--										<div class="user-img">--}}
{{--											<img src="http://via.placeholder.com/70x70" alt="">--}}
{{--										</div>--}}
{{--										<div class="user-say">--}}
{{--											<div class="comment-time">--}}
{{--												<h4>Ellie Glouding</h4>--}}
{{--												<span>- Jul 17,2015 at 15 hours ago</span>--}}
{{--											</div>--}}
{{--											<p>Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla. Sedmi quam. Lorem In euismod urna ac massa adipiscing interdum.</p>--}}
{{--											<a href="#" title="">Reply</a>--}}
{{--										</div><!--user-say end-->--}}
{{--									</li>--}}
								</ul>
							</div><!--user-comment end-->
							<div class="contact-form-section">
								<h2>اترك تعليق</h2>
								<p class="success alert alert-success" id="success" style="display:none;"></p>
                                <p class="error alert alert-danger" id="error" style="display:none;"></p>
								<form action="{{route('storeComment')}}" name="contact_form_3" id="contact_form_3" method="post">
                                    @csrf
{{--									<input type="hidden" name="id-post" value="{{$blogs->id}}">--}}
									<div class="row">
{{--										<div class="col-lg-6 pd-left-none">--}}
{{--											<input type="text" name="username" id="username" placeholder="Name*">--}}
{{--										</div>--}}
{{--										<div class="col-lg-6 pd-right-none">--}}
{{--											<input type="text" name="email" id="email" placeholder="Email*">--}}
{{--										</div>--}}
										<div class="col-lg-12 pd-left-none pd-right-none">
											<input type="text" name="name" placeholder="الاسم">
										</div>
										<div class="col-lg-12 pd-left-none pd-right-none">
											<textarea name="messege" id="messege" placeholder="التعليق"></textarea>
										</div>
                                        <input type="hidden" name="id_post" value="{{$blogs->id}}">
										<div class="col-lg-12 pd-left-none">
											<button type="submit" id="submit_3">اضافة تعليق</button>
										</div>
									</div>
								</form>
							</div><!--contact-form-section end-->
						</div><!--user-comment-form end-->
					</div>
				</div>
			</div>
		</section>


{{--        <div class="col-12">--}}
{{--            @if (session('success'))--}}
{{--                <div class="alert text-center alert-success">--}}
{{--                    {{ session('success') }}--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}



		<footer>
			<div class="footer-data">
				<div class="container">
					<div class="ft-contact-info">
                        <h1>info@penetronegypt.net</h1>
                        <h3>حافظ رمضان - أبراج الشرطة الدور الثاني شقة رقم 2 - مدينة نصر - القاهرة</h3>
                        <h3>01146600440</h3>
                        <h3>300 737 22 02</h3>
                        <h3>700 742 22 02</h3>
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







<script type="text/javascript" src="{{asset('../../public/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../../public/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('../../public/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../../public/js/contact-form.js')}}"></script>
<script type="text/javascript" src="{{asset('../../public/js/html5lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('../../public/js/script.js')}}"></script>
</body>

</html>
