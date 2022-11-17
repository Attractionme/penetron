<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Certificates | PENETRON</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dark-color.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.css')}}">
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


<div class="wrapper ms-overlay">


    <header class="stick">
        <div class="hd_bar">
            <div class="container">
                <div class="header-bar">
                    <div class="logo">
                        <a href="/" title=""><img src="{{asset('images/logo-3.png')}}" alt=""></a>
                    </div><!--logo end-->
                    <nav>
                        <ul>
                            <li><a href="/" title="">الصفحة الرئيسية</a></li>
                            <li><a href="/works" title="">الأعمال</a>
                            </li>
                            <li><a class="active" href="/certificates" title="">الشهادات</a></li>
                            <li><a href="/projects" title="">المشاريع</a></li>
                            <li><a href="/blog" title="">المدونة</a></li>
                            <li><a href="/about" title="">من نحن</a></li>
                            <li><a href="/contact" title="">تواصل معنا</a></li>
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
            <li><a href="/works" title="">الأعمال</a>
            </li>
            <li><a href="/certificates" title="">الشهادات</a></li>
            <li><a href="/projects" title="">المشاريع</a></li>
            <li><a href="/blog" title="">المدونة</a></li>
            <li><a href="/about" title="">من نحن</a></li>
            <li><a href="/contact" title="">تواصل معنا</a></li>
        </ul>
    </div><!--responsive-mobile-menu end-->


    <section>
        <div class="container">
            <div class="pager-details full text-center works-h">
                <h2 class="heading-title">شهاداتنا</h2>
                <ul>
                    <li><a href="/" title="">الصفحة الرئيسية</a></li>
                    <li><span>الشهادات</span></li>
                </ul>
            </div>
        </div>
    </section>


    <section>
        <div class="portfolio-sec">
            <div class="container">
                <div class="portfolio-items-filter">
                    <div class="portfolio-grid">
                        <div class=" row" id="data-wrapper" style="height: 100%!important;">
                        </div>
                        <div class="auto-loadll text-center" style="color: white;padding: 40px">
                            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0"
                                 xml:space="preserve">
                <path fill="#fff"
                      d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                      from="0 50 50" to="360 50 50" repeatCount="indefinite"/>
                </path>
            </svg>
                        </div>

                        <div class="auto-loadl text-center" style="color: white;padding: 40px">
                            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0"
                                 xml:space="preserve">
                <path fill="#fff"
                      d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                      from="0 50 50" to="360 50 50" repeatCount="indefinite"/>
                </path>
            </svg>
                        </div>

                        <div class="auto-load1 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_1">المزيد</button>
                        </div>
                    </div><!--portfolio-grid end-->
                </div><!--portfolio-items-filter end-->
            </div>
        </div><!--portfolio-sec end-->
    </section>


</div><!--wrapper end-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('.auto-loadl').hide();
    $('.auto-loadll').hide();

    var ENDPOINT = "{{ url('/') }}";
    var page = 1;
    catego = 0;
    infinteLoadMore(page);
    $("#submit_1").click(function () {
        page++;
        infinteLoadMore(page);
    })

    function infinteLoadMore(page) {
        $.ajax({
            url: ENDPOINT + "/certificates?page=" + page,
            datatype: "html",
            type: "get",
            beforeSend: function () {
                $('.auto-loadll').show();
            }
        })
            .done(function (response) {
                if (response.length == 0) {
                    $('.auto-loadl').html("إكتملت الصور");
                    $('.auto-load1').hide();
                    $('.auto-loadl').show();
                    $('.auto-loadll').hide();
                    return;
                }
                $("#data-wrapper").append(response);
                $('.auto-loadll').hide();

            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }


</script>
<script type="text/javascript" src="{{asset('js/lightbox-plus-jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('js/html5lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>

</html>
