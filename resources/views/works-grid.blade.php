<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gallary | PENETRON</title>
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
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

    <!-- cdnjs -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript"
            src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
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
                            <li><a class="active" href="/works" title="">الأعمال</a></li>
                            <li><a href="/certificates" title="">الشهادات</a></li>
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
            <li><a href="/works" title="">الأعمال</a></li>
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
                <h2 class="heading-title">أعمالنا</h2>
                <ul>
                    <li><a href="/" title="">الصفحة الرئيسية</a></li>
                    <li><span>الأعمال</span></li>
                </ul>
            </div>
        </div>
    </section>


    <section id="dataphoto">
        <div class="portfolio-sec">
            <div class="container">
                <div class="portfolio-items-filter">
                    <section class="options mgbtm-35">
                        <div class="option-isotop">
                            <ul id="filter" class="option-set filters-nav" data-option-key="filter">
                                <li><a class="selected" id="all">جميع الأعمال</a></li>
                                <li><a id="ta">ترميم</a></li>
                                <li><a id="ebo">ايبوكسى</a></li>
                                <li><a id="maw">موانئ</a></li>
                                <li><a id="moe">معدات</a></li>
                                <li><a id="water">محطات مياه وصرف صحى</a></li>
                                <br>
                                <li><a id="faw">فواصل</a></li>
                                <li><a id="heed">رؤوس الخوازيق</a></li>
                                <li><a id="interio">تشطيبات</a></li>
                                <li><a id="inge">حقن</a></li>
                                <li><a id="carbon">كربون فايبر</a></li>
                            </ul>
                        </div>
                    </section>
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
                        <div class="auto-load2 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_2">المزيد</button>
                        </div>
                        <div class="auto-load3 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_3">المزيد</button>
                        </div>
                        <div class="auto-load4 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_4">المزيد</button>
                        </div>
                        <div class="auto-load5 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_5">المزيد</button>
                        </div>
                        <div class="auto-load6 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_6">المزيد</button>
                        </div>
                        <div class="auto-load7 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_7">المزيد</button>
                        </div>
                        <div class="auto-load8 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_8">المزيد</button>
                        </div>
                        <div class="auto-load9 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_9">المزيد</button>
                        </div>
                        <div class="auto-load10 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_10">المزيد</button>
                        </div>
                        <div class="auto-load11 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_11">المزيد</button>
                        </div>
                        <div class="auto-load12 col-lg-12 text-center">
                            <button class="panbutton" type="button" id="submit_12">المزيد</button>
                        </div>
                    </div>
                </div><!--portfolio-grid end-->
            </div><!--portfolio-items-filter end-->
            {{--				</div>--}}
        </div><!--portfolio-sec end-->
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('.auto-load2').hide();
    $('.auto-load3').hide();
    $('.auto-load4').hide();
    $('.auto-load5').hide();
    $('.auto-load6').hide();
    $('.auto-load7').hide();
    $('.auto-load8').hide();
    $('.auto-load9').hide();
    $('.auto-load10').hide();
    $('.auto-load11').hide();
    $('.auto-load12').hide();
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
            url: ENDPOINT + "/works?page=" + page,
            datatype: "html",
            data: {
                catego: catego
            },
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

    $("#ta").click(function () {
        $("#data-wrapper").empty().html();
        $('.auto-load2').show();
        $('.auto-load1').hide();
        $('.auto-load3').hide();
        $('.auto-load4').hide();
        $('.auto-load5').hide();
        $('.auto-load6').hide();
        $('.auto-load7').hide();
        $('.auto-load8').hide();
        $('.auto-load9').hide();
        $('.auto-load10').hide();
        $('.auto-load11').hide();
        $('.auto-load12').hide();
        $('.auto-loadl').hide();
        $('.auto-loadll').hide();

        var ENDPOINT = "{{ url('/') }}";
        page = 1;
        catego = 2;
        infinteLoadMore2(page);
        $("#submit_2").click(function () {
            page++;
            infinteLoadMore2(page);
        })

        function infinteLoadMore2(page) {
            $.ajax({
                url: ENDPOINT + "/works?page=" + page,
                datatype: "html",
                data: {
                    catego: catego
                },
                type: "get",
                beforeSend: function () {
                    $('.auto-loadll').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {
                        $('.auto-loadl').html("إكتملت الصور");
                        $('.auto-load2').hide();
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
    });

    $("#ebo").click(function () {
        $("#data-wrapper").empty().html();
        $('.auto-load3').show();
        $('.auto-load1').hide();
        $('.auto-load2').hide();
        $('.auto-load4').hide();
        $('.auto-load5').hide();
        $('.auto-load6').hide();
        $('.auto-load7').hide();
        $('.auto-load8').hide();
        $('.auto-load9').hide();
        $('.auto-load10').hide();
        $('.auto-load11').hide();
        $('.auto-load12').hide();
        $('.auto-loadl').hide();
        $('.auto-loadll').hide();


        var ENDPOINT = "{{ url('/') }}";
        page = 1;
        catego = 3;
        infinteLoadMore3(page);
        $("#submit_3").click(function () {
            page++;
            infinteLoadMore3(page);
        })

        function infinteLoadMore3(page) {
            $.ajax({
                url: ENDPOINT + "/works?page=" + page,
                datatype: "html",
                data: {
                    catego: catego
                },
                type: "get",
                beforeSend: function () {
                    $('.auto-loadll').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {
                        $('.auto-loadl').html("إكتملت الصور");
                        $('.auto-load3').hide();
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
    });

    $("#maw").click(function () {
        $("#data-wrapper").empty().html();
        $('.auto-load2').hide();
        $('.auto-load1').hide();
        $('.auto-load3').hide();
        $('.auto-load4').show();
        $('.auto-load5').hide();
        $('.auto-load6').hide();
        $('.auto-load7').hide();
        $('.auto-load8').hide();
        $('.auto-load9').hide();
        $('.auto-load10').hide();
        $('.auto-load11').hide();
        $('.auto-load12').hide();
        $('.auto-loadl').hide();
        $('.auto-loadll').hide();

        var ENDPOINT = "{{ url('/') }}";
        page = 1;
        catego = 4;
        infinteLoadMore4(page);
        $("#submit_4").click(function () {
            page++;
            infinteLoadMore4(page);
        })

        function infinteLoadMore4(page) {
            $.ajax({
                url: ENDPOINT + "/works?page=" + page,
                datatype: "html",
                data: {
                    catego: catego
                },
                type: "get",
                beforeSend: function () {
                    $('.auto-loadll').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {
                        $('.auto-loadl').html("إكتملت الصور");
                        $('.auto-load4').hide();
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
    });

    $("#moe").click(function () {
        $("#data-wrapper").empty().html();
        $('.auto-load2').hide();
        $('.auto-load1').hide();
        $('.auto-load3').hide();
        $('.auto-load4').hide();
        $('.auto-load5').hide();
        $('.auto-load6').show();
        $('.auto-load7').hide();
        $('.auto-load8').hide();
        $('.auto-load9').hide();
        $('.auto-load10').hide();
        $('.auto-load11').hide();
        $('.auto-load12').hide();
        $('.auto-loadl').hide();
        $('.auto-loadll').hide();


        var ENDPOINT = "{{ url('/') }}";
        page = 1;
        catego = 5;
        infinteLoadMore5(page);
        $("#submit_5").click(function () {
            page++;
            infinteLoadMore5(page);
        })

        function infinteLoadMore5(page) {
            $.ajax({
                url: ENDPOINT + "/works?page=" + page,
                datatype: "html",
                data: {
                    catego: catego
                },
                type: "get",
                beforeSend: function () {
                    $('.auto-loadll').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {
                        $('.auto-loadl').html("إكتملت الصور");
                        $('.auto-load5').hide();
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
    });

    $("#water").click(function () {
        $("#data-wrapper").empty().html();
        $('.auto-load2').hide();
        $('.auto-load1').hide();
        $('.auto-load3').hide();
        $('.auto-load4').hide();
        $('.auto-load5').hide();
        $('.auto-load6').show();
        $('.auto-load7').hide();
        $('.auto-load8').hide();
        $('.auto-load9').hide();
        $('.auto-load10').hide();
        $('.auto-load11').hide();
        $('.auto-load12').hide();
        $('.auto-loadl').hide();
        $('.auto-loadll').hide();

        var ENDPOINT = "{{ url('/') }}";
        page = 1;
        catego = 6;
        infinteLoadMore6(page);
        $("#submit_6").click(function () {
            page++;
            infinteLoadMore6(page);
        })

        function infinteLoadMore6(page) {
            $.ajax({
                url: ENDPOINT + "/works?page=" + page,
                datatype: "html",
                data: {
                    catego: catego
                },
                type: "get",
                beforeSend: function () {
                    $('.auto-loadll').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {
                        $('.auto-loadl').html("إكتملت الصور");
                        $('.auto-load6').hide();
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
    });

    $("#faw").click(function () {
        $("#data-wrapper").empty().html();
        $('.auto-load2').hide();
        $('.auto-load1').hide();
        $('.auto-load3').hide();
        $('.auto-load4').hide();
        $('.auto-load5').hide();
        $('.auto-load6').hide();
        $('.auto-load7').show();
        $('.auto-load8').hide();
        $('.auto-load9').hide();
        $('.auto-load10').hide();
        $('.auto-load11').hide();
        $('.auto-load12').hide();
        $('.auto-loadl').hide();
        $('.auto-loadll').hide();

        var ENDPOINT = "{{ url('/') }}";
        page = 1;
        catego = 7;
        infinteLoadMore7(page);
        $("#submit_7").click(function () {
            page++;
            infinteLoadMore7(page);
        })

        function infinteLoadMore7(page) {
            $.ajax({
                url: ENDPOINT + "/works?page=" + page,
                datatype: "html",
                data: {
                    catego: catego
                },
                type: "get",
                beforeSend: function () {
                    $('.auto-loadll').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {
                        $('.auto-loadl').html("إكتملت الصور");
                        $('.auto-load7').hide();
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
    });

    $("#heed").click(function () {
        $("#data-wrapper").empty().html();
        $('.auto-load2').hide();
        $('.auto-load1').hide();
        $('.auto-load3').hide();
        $('.auto-load4').hide();
        $('.auto-load5').hide();
        $('.auto-load6').hide();
        $('.auto-load7').hide();
        $('.auto-load8').show();
        $('.auto-load9').hide();
        $('.auto-load10').hide();
        $('.auto-load11').hide();
        $('.auto-load12').hide();
        $('.auto-loadl').hide();
        $('.auto-loadll').hide();

        var ENDPOINT = "{{ url('/') }}";
        page = 1;
        catego = 8;
        infinteLoadMore8(page);
        $("#submit_8").click(function () {
            page++;
            infinteLoadMore8(page);
        })

        function infinteLoadMore8(page) {
            $.ajax({
                url: ENDPOINT + "/works?page=" + page,
                datatype: "html",
                data: {
                    catego: catego
                },
                type: "get",
                beforeSend: function () {
                    $('.auto-loadll').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {
                        $('.auto-loadl').html("إكتملت الصور");
                        $('.auto-load8').hide();
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
    });

    $("#interio").click(function () {
        $("#data-wrapper").empty().html();
        $('.auto-load2').hide();
        $('.auto-load1').hide();
        $('.auto-load3').hide();
        $('.auto-load4').hide();
        $('.auto-load5').hide();
        $('.auto-load6').hide();
        $('.auto-load7').hide();
        $('.auto-load8').hide();
        $('.auto-load9').show();
        $('.auto-load10').hide();
        $('.auto-load11').hide();
        $('.auto-load12').hide();
        $('.auto-loadl').hide();
        $('.auto-loadll').hide();

        var ENDPOINT = "{{ url('/') }}";
        page = 1;
        catego = 9;
        infinteLoadMore9(page);
        $("#submit_9").click(function () {
            page++;
            infinteLoadMore9(page);
        })

        function infinteLoadMore9(page) {
            $.ajax({
                url: ENDPOINT + "/works?page=" + page,
                datatype: "html",
                data: {
                    catego: catego
                },
                type: "get",
                beforeSend: function () {
                    $('.auto-loadll').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {
                        $('.auto-loadl').html("إكتملت الصور");
                        $('.auto-loadl').hide();
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
    });

    $("#inge").click(function () {
        $("#data-wrapper").empty().html();
        $('.auto-load2').hide();
        $('.auto-load1').hide();
        $('.auto-load3').hide();
        $('.auto-load4').hide();
        $('.auto-load5').hide();
        $('.auto-load6').hide();
        $('.auto-load7').hide();
        $('.auto-load8').hide();
        $('.auto-load9').hide();
        $('.auto-load10').show();
        $('.auto-load11').hide();
        $('.auto-load12').hide();
        $('.auto-loadl').hide();
        $('.auto-loadll').hide();


        var ENDPOINT = "{{ url('/') }}";
        page = 1;
        catego = 10;
        infinteLoadMore10(page);
        $("#submit_10").click(function () {
            page++;
            infinteLoadMore10(page);
        })

        function infinteLoadMore10(page) {
            $.ajax({
                url: ENDPOINT + "/works?page=" + page,
                datatype: "html",
                data: {
                    catego: catego
                },
                type: "get",
                beforeSend: function () {
                    $('.auto-loadll').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {
                        $('.auto-loadl').html("إكتملت الصور");
                        $('.auto-load10').hide();
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
    });

    $("#carbon").click(function () {
        $("#data-wrapper").empty().html();
        $('.auto-load2').hide();
        $('.auto-load1').hide();
        $('.auto-load3').hide();
        $('.auto-load4').hide();
        $('.auto-load5').hide();
        $('.auto-load6').hide();
        $('.auto-load7').hide();
        $('.auto-load8').hide();
        $('.auto-load9').hide();
        $('.auto-load10').hide();
        $('.auto-load11').show();
        $('.auto-load12').hide();
        $('.auto-loadl').hide();
        $('.auto-loadll').hide();

        var ENDPOINT = "{{ url('/') }}";
        page = 1;
        catego = 11;
        infinteLoadMore11(page);
        $("#submit_11").click(function () {
            page++;
            infinteLoadMore11(page);
        })

        function infinteLoadMore11(page) {
            $.ajax({
                url: ENDPOINT + "/works?page=" + page,
                datatype: "html",
                data: {
                    catego: catego
                },
                type: "get",
                beforeSend: function () {
                    $('.auto-loadll').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {
                        $('.auto-loadl').html("إكتملت الصور");
                        $('.auto-load11').hide();
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
    });

    $("#all").click(function () {
        $("#data-wrapper").empty().html();
        $('.auto-load2').hide();
        $('.auto-load1').hide();
        $('.auto-load3').hide();
        $('.auto-load4').hide();
        $('.auto-load5').hide();
        $('.auto-load6').hide();
        $('.auto-load7').hide();
        $('.auto-load8').hide();
        $('.auto-load9').hide();
        $('.auto-load10').hide();
        $('.auto-load11').hide();
        $('.auto-load12').show();
        $('.auto-loadl').hide();
        $('.auto-loadll').hide();


        var ENDPOINT = "{{ url('/') }}";
        page = 1;
        catego = 0;
        infinteLoadMore12(page);
        $("#submit_12").click(function () {
            page++;
            infinteLoadMore12(page);
        })

        function infinteLoadMore12(page) {
            $.ajax({
                url: ENDPOINT + "/works?page=" + page,
                datatype: "html",
                data: {
                    catego: catego
                },
                type: "get",
                beforeSend: function () {
                    $('.auto-loadll').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {

                        $('.auto-loadl').html("إكتملت الصور");

                        $('.auto-load12').hide();
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
    });
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
