<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!--Get your own code at fontawesome.com-->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_url();?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/metro.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/tooltip.css">
    <!--[ if IE]-->
    <script src="<?php echo get_template_directory_uri();?>/js/html5shiv.js"></script>
    <!--[end if]-->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery-1.8.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/scrollbar.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.easy-ticker.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/tooltip.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#metro-box").mCustomScrollbar({
            horizontalScroll: true,
        });
    });
    </script>

    <script type="text/javascript">
    $(function() {
        $(".demo").easyTicker({
            direction: 'up',
            easing: 'swing',
            speed: 'slow',
            interval: 2000,
            height: 'auto',
            visible: 0,
            mousePause: true,
            controls: {
                up: '',
                down: '',
                toggle: '',
                playText: 'Play',
                stopText: 'Stop'
            },
            callbacks: {
                before: false,
                after: false
            }
        });
    });
    </script>

</head>

<body>
    <div class="head-menu">
        <div class="main-menu">
            <div class="search-icon" role="search">
                <form action="" method="">
                    <input type="text" name="" value="">
                </form>
            </div>
            <ul>
                <li><a href="#"></a>درباره ما</li>
                <li><a href="#"></a>تماس با ما</li>
                <li><a href="#"></a>تبلیفات </li>
            </ul>
        </div>
    </div>
    <div class="main" role="main">
        <header>
            <nav class="header-nav" role="navigation">
                <ul>
                    <li style="background-color: #1289A7;"><a href="#">
                            <div class="fa fa-home" style='font-size:36px'></div>
                            <div class="nav-txt">صفحه اصلی
                        </a></li>
                    <li style="background-color: #0652DD"><a href="#">
                            <div class="fa fa-gears" style='font-size:36px'></div>
                            <div class="nav-txt">نرم افزار
                        </a></li>
                    <li style="background-color: #029e36"><a href="#">
                            <div class="fa fa-music" style='font-size:36px'></div>
                            <div class="nav-txt">موزیک
                        </a></li>
                    <li style="background-color: #A3CB38"><a href="#">
                            <div class="fa fa-code-fork" style='font-size:36px'></div>
                            <div class="nav-txt">شبکه
                        </a></li>
                    <li style="background-color: #FFC312"><a href="#">
                            <div class="fa fa-android" style='font-size:36px'></div>
                            <div class="nav-txt">اندروید
                        </a></li>
                    <li style="background-color: #EE5A24"><a href="#">
                            <div class="fa fa-apple" style='font-size:36px'></div>
                            <div class="nav-txt">ios
                        </a></li>
                    <li style="background-color: #EA2027;"><a href="#">
                            <div class="fa fa-weibo" style='font-size:36px'></div>
                            <div class="nav-txt">web
                        </a></li>
                </ul>
            </nav>
            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
        </header>
        <div class="clear"></div>
        <div id="metro-box">
            <div class="column">
                <div class="metro-item big">
                    <div class="box-img">
                        <a href="#"><img src="images/slider/1.jpg" alt=""></a>
                        <div class="metro-content color_1">
                            <h3>تماس رایگان با line</h3>
                            <div class="description">
                                <p>بللیبلذاتلسثی56فغعتی56فغالیبهعنلغبفیغفاغتالعغتقابعفغتابزبسبی</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="metro-item ">
                    <div class="box-img">
                        <a href="#"><img src="images/slider/3.jpg" alt=""></a>
                        <div class="metro-content color_3">
                            <h3>تماس رایگان با line</h3>
                            <div class="description">
                                <p>بللیبلذاتلسثی56فغعتی56فغالیبهعنلغبفیغفاغتالعغتقابعفغتابزبسبی</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="metro-item ">
                    <div class="box-img">
                        <a href="#"><img src="images/slider/4.jpg" alt=""></a>
                        <div class="metro-content color_4">
                            <h3>تماس رایگان با line</h3>
                            <div class="description">
                                <p>بللیبلذاتلسثی56فغعتی56فغالیبهعنلغبفیغفاغتالعغتقابعفغتابزبسبی</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="metro-item big">
                    <div class="box-img">
                        <a href="#"><img src="images/slider/1.jpg" alt=""></a>
                        <div class="metro-content color_1">
                            <h3>تماس رایگان با line</h3>
                            <div class="description">
                                <p>بللیبلذاتلسثی56فغعتی56فغالیبهعنلغبفیغفاغتالعغتقابعفغتابزبسبی</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="column">
                <div class="metro-item ">
                    <div class="box-img">
                        <a href="#"><img src="images/slider/5.jpg" alt=""></a>
                        <div class="metro-content color_5">
                            <h3>تماس رایگان با line</h3>
                            <div class="description">
                                <p>بللیبلذاتلسثی56فغعتی56فغالیبهعنلغبفیغفاغتالعغتقابعفغتابزبسبی</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="metro-item ">
                    <div class="box-img">
                        <a href="#"><img src="images/slider/5.jpg" alt=""></a>
                        <div class="metro-content color_5">
                            <h3>تماس رایگان با line</h3>
                            <div class="description">
                                <p>بللیبلذاتلسثی56فغعتی56فغالیبهعنلغبفیغفاغتالعغتقابعفغتابزبسبی</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="metro-item big">
                    <div class="box-img">
                        <a href="#"><img src="images/slider/1.jpg" alt=""></a>
                        <div class="metro-content color_1">
                            <h3>تماس رایگان با line</h3>
                            <div class="description">
                                <p>بللیبلذاتلسثی56فغعتی56فغالیبهعنلغبفیغفاغتالعغتقابعفغتابزبسبی</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="metro-item ">
                    <div class="box-img">
                        <a href="#"><img src="images/slider/2.jpg" alt=""></a>
                        <div class="metro-content color_2">
                            <h3>تماس رایگان با line</h3>
                            <div class="description">
                                <p>بللیبلذاتلسثی56فغعتی56فغالیبهعنلغبفیغفاغتالعغتقابعفغتابزبسبی</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="metro-item ">
                    <div class="box-img">
                        <a href="#"><img src="images/slider/2.jpg" alt=""></a>
                        <div class="metro-content color_2">
                            <h3>تماس رایگان با line</h3>
                            <div class="description">
                                <p>بللیبلذاتلسثی56فغعتی56فغالیبهعنلغبفیغفاغتالعغتقابعفغتابزبسبی</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </section>




        <div class="main-container">


            <div class="main-post">
                <div class="ourpost">
                    <h3>مطالب پیشنهادی</h3>
                    <div class="demo">
                        <ul>
                            <li>
                                <img src="images/slider/2.jpg" alt=""><a href="#">تماس با ما</a><span>باردید</span>
                            </li>
                            <li>
                                <img src="images/slider/2.jpg" alt=""><a href="#">تماس با ما</a><span>باردید</span>
                            </li>
                            <li>
                                <img src="images/slider/2.jpg" alt=""><a href="#">تماس با ما</a><span>باردید</span>
                            </li>
                            <li>
                                <img src="images/slider/2.jpg" alt=""><a href="#">تماس با ما</a><span>باردید</span>
                            </li>
                            <li>
                                <img src="images/slider/2.jpg" alt=""><a href="#">تماس با ما</a><span>باردید</span>
                            </li>
                            <li>
                                <img src="images/slider/2.jpg" alt=""><a href="#">تماس با ما</a><span>باردید</span>
                            </li>
                            <li>
                                <img src="images/slider/2.jpg" alt=""><a href="#">تماس با ما</a><span>باردید</span>
                            </li>
                            <li>
                                <img src="images/slider/2.jpg" alt=""><a href="#">تماس با ما</a><span>باردید</span>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="ads-in"><img src="images/ads.jpg" alt=""></div>
                <div class="clear"></div>

                <article class="post">
                    <header>
                        <div class="post_title">
                            <h2>دانلود مرورگر firefox</h2>
                        </div>
                    </header>
                    <div class="post_img">
                        <img src="images/firefox.jpg" alt="">
                    </div>
                    <div class="post_content">
                        <p>فغعفغاذ تث5صقثفقغفغعاثل7689عخهلعبغعفق43ص6457ف6غع</p>
                    </div>

                    <footer>

                        <div>
                            <a href="#" onmouseover="tooltip(this,'#sub1.',{position:0,effect:'slide'})"> <span
                                    class="fa fa-user fa-2x"></span></a>
                            <div style="display: none;">
                                <div id="sub1">
                                    nevisande
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href=""> <span class="fa fa-comments-o fa-2x"></span></a>
                        </div>
                        <div>
                            <a href=""> <span class="fa fa-sitemap fa-2x"></span></a>

                        </div>
                        <div>
                            <a href=""> <span class="fa fa-tags fa-2x"></span></a>
                        </div>
                        <div>
                            <a href=""> <span class="fa fa-calendar fa-2x"></span></a>
                        </div>
                        <div class="more-link">
                            <a href="#">adame matlab </a>
                        </div>

                    </footer>


                </article>

                <article class="post">
                    <header>
                        <div class="post_title">
                            <h2>دانلود مرورگر firefox</h2>
                        </div>
                    </header>
                    <div class="post_img">
                        <img src="images/firefox.jpg" alt="">
                    </div>
                    <div class="post_content">
                        <p>فغعفغاذ تث5صقثفقغفغعاثل7689عخهلعبغعفق43ص6457ف6غع</p>
                    </div>

                    <footer>

                        <div>
                            <a href="#" onmouseover="tooltip(this,'#sub1.',{position:0,effect:'slide'})"> <span
                                    class="fa fa-user fa-2x"></span></a>
                            <div style="display: none;">
                                <div id="sub1">
                                    nevisande
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href=""> <span class="fa fa-comments-o fa-2x"></span></a>
                        </div>
                        <div>
                            <a href=""> <span class="fa fa-sitemap fa-2x"></span></a>

                        </div>
                        <div>
                            <a href=""> <span class="fa fa-tags fa-2x"></span></a>
                        </div>
                        <div>
                            <a href=""> <span class="fa fa-calendar fa-2x"></span></a>
                        </div>

                        <div class="more-link">
                            <a href="#">adame matlab </a>
                        </div>
                    </footer>
                </article>

                <article class="post">
                    <header>
                        <div class="post_title">
                            <h2>دانلود مرورگر firefox</h2>
                        </div>
                    </header>
                    <div class="post_img">
                        <img src="images/firefox.jpg" alt="">
                    </div>
                    <div class="post_content">
                        <p>فغعفغاذ تث5صقثفقغفغعاثل7689عخهلعبغعفق43ص6457ف6غع</p>
                    </div>
                    <footer>

                        <div>
                            <a href="#" onmouseover="tooltip(this,'#sub1.',{position:0,effect:'slide'})"> <span
                                    class="fa fa-user fa-2x"></span></a>
                            <div style="display: none;">
                                <div id="sub1">
                                    nevisande
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href=""> <span class="fa fa-comments-o fa-2x"></span></a>
                        </div>
                        <div>
                            <a href=""> <span class="fa fa-sitemap fa-2x"></span></a>

                        </div>
                        <div>
                            <a href=""> <span class="fa fa-tags fa-2x"></span></a>
                        </div>
                        <div>
                            <a href=""> <span class="fa fa-calendar fa-2x"></span></a>
                        </div>

                        <div class="more-link">
                            <a href="#">adame matlab </a>
                        </div>

                    </footer>
                </article>

                <nav class="post">
                    <div class="wp-pagenavi">
                        <span>safe 1 ta 100</span>

                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                    </div>
                </nav>
            </div>

            <aside class="left-sidebar">
                <section class="sidebox">
                    <h3>akharin mataleb</h3>
                    <ul>
                        <li><a href="#">kjdhszxd</li>
                        <li><a href="#">kjdhszxd</li>
                        <li><a href="#">kjdhszxd</li>
                        <li><a href="#">kjdhszxd</li>
                        <li><a href="#">kjdhszxd</li>
                        <li><a href="#">kjdhszxd</li>
                        <li><a href="#">kjdhszxd</li>
                        <li><a href="#">kjdhszxd</li>
                        <li><a href="#">kjdhszxd</li>
                    </ul>
                </section>

                <section class="sidebox">
                    <h3>tablighat</h3>
                    <img src="images/ads-sidebar.jpg" alt="">
                    <img src="images/ads-sidebar.jpg" alt="">
                    <section class="ads_single"><img src="images/ads.jpg" alt=""></section>

                </section>

                <section class="adsbox">
                    <h3>tablighat matni</h3>
                    <ul>
                        <li><a href="#">
                                <span>tablighat oi;gkjvgjh,jml</span>
                                <span>tablighat oi;gkjvgjh,jml</span>
                                <span>tablighat oi;gkjvgjh,jml</span>
                                <span>tablighat oi;gkjvgjh,jml</span>
                        </li>

                    </ul>
                </section>


            </aside>

        </div>


    </div>
    <div class="clear"></div>

    <div class="footer-nav">
        <div class="main-footer">
            <div class="about">
                <h5>darbare ma</h5>
                <p>uihghfsfawerstyukljnjbvcfdsteretrjyhvcrfeasdfgiukjcxzsEwa5yuyi</p>
            </div>
            <div class="social">
                <h5>ba ma hamrah bashid</h5>
                <ul>
                    <li><a href="#"></a><img src="images/Facebook.png" alt=""></li>
                    <li><a href="#"></a><img src="images/Twitter.png" alt=""></li>
                    <li><a href="#"></a><img src="images/Linkedin.png" alt=""></li>
                    <li><a href="#"></a><img src="images/Google+.png" alt=""></li>
                </ul>
            </div>
            <div class="support">
                <h5>hamiyan ma </h5>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <div class="footer-bot" role="contentinfo">
                <div class="copyright">
                    <p>jgyhjgvtrdfyth</p>
                </div>
                <div class="ui">
                    hjghhjhjhjhjhjhjhj
                </div>
            </div>
        </div>

        </footer>

</body>

</html>