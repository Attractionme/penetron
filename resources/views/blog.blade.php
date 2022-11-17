<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>PENETRON|blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/dark-color.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
</head>

<body>



	<div class="page-loading">
		<div class="thecube">
			<div class="cube c1"></div>
			<div class="cube c2"></div>
			<div class="cube c4"></div>
			<div class="cube c3"></div>
		</div>
	</div>
	<!--page-loading end-->



	<div class="wrapper ms-overlay">


		<header class="stick">
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
			</div>
			<!--hd_bar end-->
		</header>


		<div class="responsive-mobile-menu">
			<a href="#" title="" class="close-menu"><i class="ion-close"></i></a>
			<ul>
				<li><a href="/" title="">الصفحة الرئيسية</a></li>
				<li><a href="/works" title="">الأعمال</a>
					{{-- <ul>--}}
					{{-- <li><a href="/PENETRON/works" title="">جميع الأعمال</a></li>--}}
					{{-- <li><a href="works-grid.blade.php" title="">ترميم</a></li>--}}
					{{-- <li><a href="work-masonary.html" title="">ايبوكسى</a></li>--}}
					{{-- <li><a href="works-parallax.html" title="">موانئ</a></li>--}}
					{{-- <li><a href="project-details.html" title="">معدات</a></li>--}}
					{{-- <li><a href="project-details.html" title="">محطات مياه وصرف صحى</a></li>--}}
					{{-- <li><a href="project-details.html" title="">فواصل</a></li>--}}
					{{-- <li><a href="project-details.html" title="">رؤوس الخوازيق</a></li>--}}
					{{-- <li><a href="project-details.html" title="">تشطبيات</a></li>--}}
					{{-- <li><a href="project-details.html" title="">حقن</a></li>--}}
					{{-- <li><a href="project-details.html" title="">كربون فايبر</a></li>--}}
					{{-- </ul>--}}
				</li>
				<li><a href="/certificates" title="">الشهادات</a></li>
				<li><a href="/projects" title="">المشاريع</a></li>
				<li><a class="active" href="/blog" title="">المدونة</a></li>
				<li><a href="/about" title="">من نحن</a></li>
				<li><a href="/contact" title="">تواصل معنا</a></li>
			</ul>
		</div>
		<!--responsive-mobile-menu end-->


		<section>
			<div class="container">
				<div class="pager-details full text-center">
					<h2 class="heading-title">المدونة</h2>
					<ul>
						<li><a href="/" title="">الصفحة الرئيسية</a></li>
						<li><span>المدونة</span></li>
					</ul>
				</div>
			</div>
		</section>


		{{-- <section>--}}
		{{-- <div class="portfolio-sec">--}}
		{{-- <div class="container">--}}
		{{-- <div class="portfolio-items-filter">--}}
		{{-- <section class="options mgbtm-65">--}}
		{{-- <div class="option-isotop">--}}
		{{-- <ul id="filter" class="option-set filters-nav" data-option-key="filter">--}}
		{{-- <li><a class="selected" data-option-value="*">جميع التدوينات</a></li>--}}
		{{-- <li><a data-option-value=".news">News</a></li>--}}
		{{-- <li><a data-option-value=".events">Events</a></li>--}}
		{{-- <li><a data-option-value=".inspiration">Inspiration</a></li>--}}
		{{-- <li><a data-option-value=".business">Business</a></li>--}}
		{{-- </ul>--}}
		{{-- </div>--}}
		{{-- </section>--}}
		<div class="portfolio-grid">
			<div class="container">
				<div dir="rtl" class=" row" id="data-wrapper" style="height: 100%!important;">
				</div>
				<div class="auto-loadll text-center" style="color: white;padding: 40px">
					<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
						<path fill="#fff" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
							<animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" />
						</path>
					</svg>
				</div>

				<div class="auto-loadl text-center" style="color: white;padding: 40px">
					<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
						<path fill="#fff" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
							<animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" />
						</path>
					</svg>
				</div>

				<div style="margin-bottom: 20px;" class="auto-load1 col-lg-12 text-center">
					<button class="panbutton" type="button" id="submit_1">المزيد</button>
				</div>
				{{-- <div class="masonary style2 margin-bottom-minus">--}}

				{{-- @foreach($blogs as $blog)--}}
				{{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 news">--}}
				{{-- <div class="post">--}}
				{{-- <div class="post-img">--}}
				{{-- <img src="http://via.placeholder.com/370x300" alt="">--}}
				{{-- <img src="{{asset('assets/images/blog_images/'.$blog->image)}}" alt="">--}}
				{{-- </div>--}}
				{{-- <div class="post-details">--}}
				{{-- <ul class="post-info">--}}
				{{-- <li><span>Jun 16,2022</span></li>--}}
				{{-- <li><a href="#" title="">Admin</a></li>--}}
				{{-- <li><span>{{$blog->created_at}}</span></li>--}}
				{{-- <li><span>{{\Carbon\Carbon::parse($blog->created_at)->format('M d,Y')}}</span></li>--}}
				{{-- <li><a href="" title="">{{$blog->tittle}}</a></li>--}}
				{{-- </ul>--}}
				{{-- <h3><a href="{{url('single-blog/'.$blog->id)}}" title="">{{$blog->tittle}}</a></h3>--}}
				{{-- <p>{{Str::limit($blog->description, 80)}}</p>--}}


				{{-- <h3><a href="{{route('single-blog',['id' => $blog->id])}}" title="">{{$blog->description}}</a></h3>--}}
				{{-- <a href="{{route('single-blog',['id' => $blog->id])}}" title="">المقال كامل <i class="fa fa-angle-left"></i></a>--}}
				{{-- </div>--}}
				{{-- </div><!--post end-->--}}
				{{-- </div>--}}
				{{-- @endforeach--}}


				{{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 events">--}}
				{{-- <div class="post">--}}
				{{-- <div class="post-img">--}}
				{{-- <img src="http://via.placeholder.com/370x300" alt="">--}}
				{{-- </div>--}}
				{{-- <div class="post-details">--}}
				{{-- <ul class="post-info">--}}
				{{-- <li><span>Jun 12,2022</span></li>--}}
				{{-- <li><a href="#" title="">Paul Murren</a></li>--}}
				{{-- </ul>--}}
				{{-- <h3><a href="https://aleqaria.com.eg/post/details/81344/%D9%85%D8%AF%D9%8A%D9%86%D8%A9-%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D9%86" title="">الإسكان: الانتهاء من تشطيب الواجهات لـ15 برجا بالعلمين</a></h3>--}}
				{{-- <a href="https://aleqaria.com.eg/post/details/81344/%D9%85%D8%AF%D9%8A%D9%86%D8%A9-%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D9%86" title="">المقال كامل  <i class="fa fa-angle-left"></i></a>--}}
				{{-- </div>--}}
				{{-- </div><!--post end-->--}}
				{{-- </div>--}}
				{{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 inspiration">--}}
				{{-- <div class="post">--}}
				{{-- <div class="post-img">--}}
				{{-- <img src="http://via.placeholder.com/370x300" alt="">--}}
				{{-- </div>--}}
				{{-- <div class="post-details">--}}
				{{-- <ul class="post-info">--}}
				{{-- <li><span>Jun 12,2022</span></li>--}}
				{{-- <li><a href="#" title="">LoganCee</a></li>--}}
				{{-- </ul>--}}
				{{-- <h3><a href="https://aleqaria.com.eg/post/details/81315/%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D9%86-%D8%A7%D9%84%D8%AC%D8%AF%D9%8A%D8%AF%D8%A9-46413" title="">وزير الإسكان يتفقد "العلمين الجديدة" لمتابعة معدلات تنفيذ المشروعات</a></h3>--}}
				{{-- <a href="https://aleqaria.com.eg/post/details/81315/%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D9%86-%D8%A7%D9%84%D8%AC%D8%AF%D9%8A%D8%AF%D8%A9-46413" title="">المقال كامل  <i class="fa fa-angle-left"></i></a>--}}
				{{-- </div>--}}
				{{-- </div><!--post end-->--}}
				{{-- </div>--}}
				{{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 business">--}}
				{{-- <div class="post">--}}
				{{-- <div class="post-img">--}}
				{{-- <img src="http://via.placeholder.com/370x300" alt="">--}}
				{{-- </div>--}}
				{{-- <div class="post-details">--}}
				{{-- <ul class="post-info">--}}
				{{-- <li><span>May 12,2022</span></li>--}}
				{{-- <li><a href="#" title="">LoganCee</a></li>--}}
				{{-- </ul>--}}
				{{-- <h3><a href="https://aleqaria.com.eg/post/details/77610/%D9%88%D8%B2%D9%8A%D8%B1-%D8%A7%D9%84%D8%A5%D8%B3%D9%83%D8%A7%D9%86-53993" title="">وزير الإسكان: انتهاء تنفيذ الهياكل الرئيسية للأبراج بمنطقة الأعمال المركزية بالعاصمة الإدارية</a></h3>--}}
				{{-- <a href="https://aleqaria.com.eg/post/details/77610/%D9%88%D8%B2%D9%8A%D8%B1-%D8%A7%D9%84%D8%A5%D8%B3%D9%83%D8%A7%D9%86-53993" title="">المقال كامل  <i class="fa fa-angle-left"></i></a>--}}
				{{-- </div>--}}
				{{-- </div><!--post end-->--}}
				{{-- </div>--}}
				{{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 news">--}}
				{{-- <div class="post">--}}
				{{-- <div class="post-img">--}}
				{{-- <img src="http://via.placeholder.com/370x300" alt="">--}}
				{{-- </div>--}}
				{{-- <div class="post-details">--}}
				{{-- <ul class="post-info">--}}
				{{-- <li><span>Aug 26,2022</span></li>--}}
				{{-- <li><a href="#" title="">Admin</a></li>--}}
				{{-- </ul>--}}
				{{-- <h3><a href="https://www.elwatannews.com/news/details/6271045" title="">استئناف أعمال ترميم صالة الأعمدة الكبرى بمعابد الكرنك في الأقصر</a></h3>--}}
				{{-- <a href="https://www.elwatannews.com/news/details/6271045" title="">المقال كامل  <i class="fa fa-angle-left"></i></a>--}}
				{{-- </div>--}}
				{{-- </div><!--post end-->--}}
				{{-- </div>--}}
				{{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 business">--}}
				{{-- <div class="post">--}}
				{{-- <div class="post-img">--}}
				{{-- <img src="http://via.placeholder.com/370x300" alt="">--}}
				{{-- </div>--}}
				{{-- <div class="post-details">--}}
				{{-- <ul class="post-info">--}}
				{{-- <li><span>March 04,2022</span></li>--}}
				{{-- <li><a href="#" title="">Admin</a></li>--}}
				{{-- </ul>--}}
				{{-- <h3><a href="https://www.youm7.com/story/2022/3/4/%D8%AA%D9%81%D8%A7%D8%B5%D9%8A%D9%84-%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D8%A7%D9%84%D8%AA%D8%B1%D9%85%D9%8A%D9%85-%D9%88%D8%A7%D9%84%D8%AA%D8%B7%D9%88%D9%8A%D8%B1-%D8%A8%D9%85%D8%B9%D8%A8%D8%AF-%D8%AF%D9%86%D8%AF%D8%B1%D8%A9-%D9%81%D9%89-%D9%82%D9%86%D8%A7/5678373" title="">تفاصيل أعمال الترميم والتطوير بمعبد دندرة فى قنا</a></h3>--}}
				{{-- <a href="https://www.youm7.com/story/2022/3/4/%D8%AA%D9%81%D8%A7%D8%B5%D9%8A%D9%84-%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D8%A7%D9%84%D8%AA%D8%B1%D9%85%D9%8A%D9%85-%D9%88%D8%A7%D9%84%D8%AA%D8%B7%D9%88%D9%8A%D8%B1-%D8%A8%D9%85%D8%B9%D8%A8%D8%AF-%D8%AF%D9%86%D8%AF%D8%B1%D8%A9-%D9%81%D9%89-%D9%82%D9%86%D8%A7/5678373" title="">المقال كامل  <i class="fa fa-angle-left"></i></a>--}}
				{{-- </div>--}}
				{{-- </div><!--post end-->--}}
				{{-- </div>--}}
				{{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 inspiration">--}}
				{{-- <div class="post">--}}
				{{-- <div class="post-img">--}}
				{{-- <img src="http://via.placeholder.com/370x300" alt="">--}}
				{{-- </div>--}}
				{{-- <div class="post-details">--}}
				{{-- <ul class="post-info">--}}
				{{-- <li><span>Aug 04,2022</span></li>--}}
				{{-- <li><a href="#" title="">Admin</a></li>--}}
				{{-- </ul>--}}
				{{-- <h3><a href="https://www.altabah1aloula.com/2022/08/24/%D8%A7%D9%84%D8%A2%D8%AB%D8%A7%D8%B1-%D8%AA%D9%88%D8%A7%D8%B5%D9%84-%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D8%A7%D9%84%D8%AA%D8%B1%D9%85%D9%8A%D9%85-%D8%A8%D8%AC%D9%85%D9%8A%D8%B9-%D8%A7%D9%84%D9%85%D9%88/" title="">الآثار تواصل أعمال الترميم بجميع المواقع الأثرية بمصر</a></h3>--}}
				{{-- <a href="https://www.altabah1aloula.com/2022/08/24/%D8%A7%D9%84%D8%A2%D8%AB%D8%A7%D8%B1-%D8%AA%D9%88%D8%A7%D8%B5%D9%84-%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D8%A7%D9%84%D8%AA%D8%B1%D9%85%D9%8A%D9%85-%D8%A8%D8%AC%D9%85%D9%8A%D8%B9-%D8%A7%D9%84%D9%85%D9%88/" title="">المقال كامل  <i class="fa fa-angle-left"></i></a>--}}
				{{-- </div>--}}
				{{-- </div><!--post end-->--}}
				{{-- </div>--}}
				{{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 events">--}}
				{{-- <div class="post">--}}
				{{-- <div class="post-img">--}}
				{{-- <img src="http://via.placeholder.com/370x300" alt="">--}}
				{{-- </div>--}}
				{{-- <div class="post-details">--}}
				{{-- <ul class="post-info">--}}
				{{-- <li><span>Jun 7,2017</span></li>--}}
				{{-- <li><a href="#" title="">Paul Murren</a></li>--}}
				{{-- </ul>--}}
				{{-- <h3><a href="https://www.masrawy.com/news/news_reports/details/2016/7/28/908138/%D8%A3%D8%B1%D8%B6%D9%8A%D8%A7%D8%AA-%D8%A7%D9%84%D8%A7%D9%8A%D8%A8%D9%88%D9%83%D8%B3%D9%8A-%D8%A7%D9%84%D9%85%D8%AC%D8%B3%D9%85%D8%A9-%D8%A7%D9%84%D8%AE%D9%8A%D8%A7%D9%84-%D8%A7%D9%84%D9%82%D8%A7%D8%AA%D9%84-" title="">أرضيات "الايبوكسي" المجسمة</a></h3>--}}
				{{-- <a href="https://www.masrawy.com/news/news_reports/details/2016/7/28/908138/%D8%A3%D8%B1%D8%B6%D9%8A%D8%A7%D8%AA-%D8%A7%D9%84%D8%A7%D9%8A%D8%A8%D9%88%D9%83%D8%B3%D9%8A-%D8%A7%D9%84%D9%85%D8%AC%D8%B3%D9%85%D8%A9-%D8%A7%D9%84%D8%AE%D9%8A%D8%A7%D9%84-%D8%A7%D9%84%D9%82%D8%A7%D8%AA%D9%84-" title="">المقال كامل  <i class="fa fa-angle-left"></i></a>--}}
				{{-- </div>--}}
				{{-- </div><!--post end-->--}}
				{{-- </div>--}}
				{{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 inspiration">--}}
				{{-- <div class="post">--}}
				{{-- <div class="post-img">--}}
				{{-- <img src="http://via.placeholder.com/370x300" alt="">--}}
				{{-- </div>--}}
				{{-- <div class="post-details">--}}
				{{-- <ul class="post-info">--}}
				{{-- <li><span>Aug 15,2022</span></li>--}}
				{{-- <li><a href="#" title="">Admin</a></li>--}}
				{{-- </ul>--}}
				{{-- <h3><a href="https://pressn.net/article/14289574?news=%D8%AA%D8%B9%D8%B1%D9%81-%D8%B9%D9%84%D9%89-%D8%A3%D8%B1%D8%B6%D9%8A%D8%A7%D8%AA-%D8%A7%D9%84%D8%A5%D9%8A%D8%A8%D9%88%D9%83%D8%B3%D9%8A-%D9%88%D8%A3%D9%87%D9%85-%D9%85%D9%85%D9%8A%D8%B2%D8%A7%D8%AA%D9%87%D8%A7-%D9%88%D8%B9%D9%8A%D9%88%D8%A8%D9%87%D8%A7" title="">تعرف على أرضيات الإيبوكسي وأهم مميزاتها وعيوبها</a></h3>--}}
				{{-- <a href="https://pressn.net/article/14289574?news=%D8%AA%D8%B9%D8%B1%D9%81-%D8%B9%D9%84%D9%89-%D8%A3%D8%B1%D8%B6%D9%8A%D8%A7%D8%AA-%D8%A7%D9%84%D8%A5%D9%8A%D8%A8%D9%88%D9%83%D8%B3%D9%8A-%D9%88%D8%A3%D9%87%D9%85-%D9%85%D9%85%D9%8A%D8%B2%D8%A7%D8%AA%D9%87%D8%A7-%D9%88%D8%B9%D9%8A%D9%88%D8%A8%D9%87%D8%A7" title="">المقال كامل  <i class="fa fa-angle-left"></i></a>--}}
				{{-- </div>--}}
				{{-- </div><!--post end-->--}}
				{{-- </div>--}}
				{{-- </div><!--masonary end-->--}}
				{{-- <div class="post-pagination">--}}
				{{-- <nav aria-label="Page navigation">--}}
				{{-- <ul class="pagination">--}}
				{{-- <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>--}}
				{{-- <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
				{{-- <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
				{{-- <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
				{{-- <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
				{{-- <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>--}}
				{{-- </ul>--}}
				{{-- </nav>--}}
				{{-- </div><!--load-more-items end-->--}}




				{{-- </div>--}}
			</div>
			<!--portfolio-grid end-->
		</div>
		<!--portfolio-items-filter end-->
	</div>
	</div>
	</div>
	<!--portfolio-sec end-->
	</section>

	<footer>
		<div class="footer-data">
			<div class="container">
				<div class="ft-contact-info">
					<h1>info@penetronegypt.net</h1>
					<h3>حافظ رمضان - أبراج الشرطة الدور الثاني شقة رقم 2 - مدينة نصر - القاهرة</h3>
					<h3>01146600440</h3>
					<h3>300 737 22 02</h3>
					<h3>700 742 22 02</h3>
				</div>
				<!--ft-contact-info end-->
				<div class="social-copyright">
					<ul>
						<li><a href="#" title="">Twitter</a></li>
						<li><a href="#" title="">Facebook</a></li>
						<li><a href="#" title="">Behance</a></li>
						<li><a href="#" title="">Dribbble</a></li>
					</ul>
					<div class="copyright-text">
						<p>© 2022 Attractiomme. All Right Reserved</p>
					</div>
				</div>
				<!--social-copyright end-->
			</div>
		</div>
		<!--footer-data end-->
	</footer>


	</div>
	<!--wrapper end-->




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
		$('.auto-loadl').hide();
		$('.auto-loadll').hide();

		var ENDPOINT = "{{ url('/') }}";
		var page = 1;
		infinteLoadMore(page);
		$("#submit_1").click(function() {
			page++;
			infinteLoadMore(page);
		})

		function infinteLoadMore(page) {
			$.ajax({
					url: ENDPOINT + "/blog?page=" + page,
					datatype: "html",
					type: "get",
					beforeSend: function() {
						$('.auto-loadll').show();
					}
				})
				.done(function(response) {
					if (response.length == 0) {
						$('.auto-loadl').html("إكتملت التدوينات");
						$('.auto-load1').hide();
						$('.auto-loadl').show();
						$('.auto-loadll').hide();
						return;
					}
					$("#data-wrapper").append(response);
					$('.auto-loadll').hide();

				})
				.fail(function(jqXHR, ajaxOptions, thrownError) {
					console.log('Server error occured');
				});
		}
	</script>

	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/isotope.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/html5lightbox.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>

</html>