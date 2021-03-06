<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <!-- Global site tag (gtag.js) - Google Ads: 882052461 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-882052461"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-882052461');
</script>
    
    <!-- Event snippet for Test1 conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-882052461/9ZnACNjNsrwBEO2azKQD',
      'event_callback': callback
  });
  return false;
}
$(".tracking-button").click(function() {gtag_report_conversion()});
});
</script>
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121364308-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121364308-1');
    </script>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ************************************ -->
    <!-- Changeable Titles and MetaTags -->
    <!-- ************************************ -->

    @yield('meta')

    <!-- ************************************ -->
    <!-- End - Changeable Titles and MetaTags -->
    <!-- ************************************ -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/vendor/custombox/dist/custombox.min.css">
    <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
    <!-- CSS Space Template -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <!--  -->
    <style>
        article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
            direction: rtl !important;
        }
        input,
        button,
        select,
        optgroup,
        textarea {
            direction : rtl !important;
        }
        .u-header--bordered .navbar-expand-lg .u-header__navbar-brand {
            border-left: 1px solid #e3e6f0;
            margin-left: 1.375rem;
        }

        .help_box {
            position: fixed;
            left: 6.3%;
            bottom: -5px;
            z-index: 10000;
            width: 175px;
            text-align: center;
            background-color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
        }

    </style>

</head>

<body>

<!-- ========== HEADER ========== -->

<header id="header" class="u-header u-header--modern u-header--bordered u-header--bg-transparent u-header--white-nav-links u-header--sticky-top-lg">
    <div class="u-header__section">
        <div id="logoAndNav" class="container-fluid">

            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar">

                <!-- Logo -->
                <div class="u-header__navbar-brand-wrapper">

                    @yield('logo')

                </div>
                <!-- End Logo -->
                
                <!-- Responsive Toggle Button -->
                <button type="button" class="navbar-toggler btn u-hamburger u-header__hamburger"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar">
                    <span class="d-none d-sm-inline-block">Menu</span>
                    <span id="hamburgerTrigger" class="u-hamburger__box ml-3">
                  <span class="u-hamburger__inner"></span>
                </span>
                </button>
                <!-- End Responsive Toggle Button -->
                <!-- Navigation -->
                
                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse py-0">
       <a href="Tel:920033120"  class="nav-link u-header__nav-link hotline"><i class = "fa fa-phone"></i>  920033120 </a>

                
                    <ul class="navbar-nav u-header__navbar-nav">

                        <!-- Navbar - Link 1 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://www.exacall.com/#what">تعرف علينا</a>
                        </li>
                        <!-- Navbar - Link 1 -->

                        <!-- Navbar - Link 2 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://www.exacall.com/services">الحلول والخدمات </a>
                        </li>
                        <!-- Navbar - Link 2 -->

                        <!-- Navbar - Link 3 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://www.exacall.com/pricing">الأسعار والباقات</a>
                        </li>
                        <!-- Navbar - Link 3 -->

                        <!-- Navbar - Link 7 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://www.exacall.com/faqs">الأسئلة المتكررة</a>
                        </li>
                        <!-- Navbar - Link 7 -->

                        <!-- Navbar - Link 4 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://blog.exacall.com">المدونة</a>
                        </li>
                        <!-- Navbar - Link 4 -->

                        <!-- Navbar - Link 5 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://www.exacall.com/contact-us">اتصل بنا</a>
                        </li>
                        <!-- Navbar - Link 5 -->

                        <!-- Navbar - Link 6 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://www.exacall.com/en">English</a>
                        </li>
                        <!-- Navbar - Link 6 -->

                    </ul>
                </div>
                <!-- End Navigation -->
            </nav>
            <!-- End Nav -->
        </div>
    </div>
</header>
<!-- ========== END HEADER ========== -->

@yield('content')

<!-- ========== END MAIN CONTENT ========== -->

<div class="help_box">
    <a href="tel:920033120" class="btn"><b>تواصل مع المبيعات</b></a>
</div>

<!-- ========== FOOTER ========== -->
<footer class="bg-dark">
    <div class="container space-2">
        <div class="row justify-content-md-between">

            <!-- Logo and About -->
            <div class="col-12 col-md-3 col-lg-3 mb-7 mb-lg-0">
                <!-- Logo -->
                <a class="d-inline-block mb-5" href="https://www.exacall.com" aria-label="Space">
                    <img src="assets/svg/logos/exacall_logo_white_2.png" alt="Logo" style="width: 80px; max-width: 100%;">
                </a>
                <!-- End Logo -->
                <p class="small text-white text-justify">اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال</p>
<li class="list-inline-item ml-3">
                        <a class="text-white" href="Tel:920033120"><i class="fa fa-phone ml-2"></i><b>920033120</b></a>
                    </li><br>
                <p class="small text-white">جميع الحقوق محفوظة © ExaCall 2018</p>
            </div>

            <!-- About the company -->
            <div class="col-12 col-md-3 col-lg-3 mb-7 mb-lg-0">
                <h3 class="h3 text-white mb-3">عن الشركة</h3>
                <ul>
                    <li>
                        <span class="fa fa-angle-left font-size-13 ml-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com">الرئيسية</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-left font-size-13 ml-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/services">الحلول والخدمات</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-left font-size-13 ml-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/pricing">الأسعار والباقات</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-left font-size-13 ml-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/faqs">الأسئلة المتكررة</a>
                    </li>
                    {{--<li>
                        <span class="fa fa-angle-left font-size-13 ml-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/team">فريق العمل</a>
                    </li>--}}
                    <li>
                        <span class="fa fa-angle-left font-size-13 ml-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/privacy-policy">سياسة الخصوصية</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-left font-size-13 ml-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/terms-conditions">الشروط والأحكام</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-left font-size-13 ml-3 text-white"></span>
                        <a class="text-white" href="https://blog.exacall.com">المدونة</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-left font-size-13 ml-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/contact-us">اتصل بنا</a>
                    </li>
                </ul>
            </div>


            <div class="col-12 col-md-3 col-lg-3 mb-7 mb-lg-0">
                <h3 class="h3 text-white mb-3">تابعنا على</h3>
                <ul class="list-inline" style="padding-right: 0px;">
                    <li class="list-inline-item ml-3">
                        <a class="text-white" href="https://twitter.com/ExaCall"><i class="fab fa-twitter ml-2"></i><b>تويتر</b></a>
                    </li><br>
                    
                     <li class="list-inline-item ml-3">
                        <a class="text-white" href="https://www.facebook.com/ExaCall-257708981807980/"><i class="fab fa-facebook ml-2"></i><b>فيس بوك</b></a>
                    </li><br>
                   
                    <li class="list-inline-item ml-3">
                        <a class="text-white" href="http://linkedin.com/company/exacall"><i class="fab fa-linkedin ml-2"></i><b>لينكد ان</b></a>
                    </li><br>
                   
                </ul>
                <br>
                <h3 class="h3 text-white mb-3">قم بزيارتنا</h3>
                <p class="small text-white text-justify">شركة اكساء لتقنية المعلومات طريق العباس بن عبدالمطلب ، حي التعاون ، الرياض ، المملكة العربية السعودية</p>
                <a href="https://goo.gl/maps/BpRvPKTrEZDYDrps5" target="_blank" class="text-white"><b>رابط الموقع على قوقل ماب</b></a>
            </div>

        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

<!-- JS Global Compulsory -->
<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/vendor/custombox/dist/custombox.min.js"></script>
<script src="assets/vendor/custombox/dist/custombox.legacy.min.js"></script>
<script src="assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Space -->
<script src="assets/js/hs.core.js"></script>
<script src="assets/js/components/hs.header.js"></script>
<script src="assets/js/components/hs.unfold.js"></script>
<script src="assets/js/components/hs.validation.js"></script>
<script src="assets/js/helpers/hs.focus-state.js"></script>
<script src="assets/js/components/hs.malihu-scrollbar.js"></script>
<script src="assets/js/components/hs.modal-window.js"></script>
<script src="assets/js/components/hs.show-animation.js"></script>
<script src="assets/js/components/hs.slick-carousel.js"></script>
<script src="assets/js/components/hs.fancybox.js"></script>
<script src="assets/js/components/hs.go-to.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(window).on('load', function () {
        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991,
            hideTimeOut: 0
        });
    });

    $(document).on('ready', function () {

        $('#orderNow').click(function(){
            var email = $('#Email').val();
            var reg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([\w-]+\.)+[\w-]{2,4})?$/;
            if (reg.test(email)){
                return 0;
            }
            else{
                alert('Please Enter Business Email Address \n لا نقبل البريد الإلكتروني الشخصي ( gmail , hotmail , yahoo ) ، رجاء قم بإدخال البريد الإلكتروني المخصص لشركتك');
                return false;
            }
        });

        // initialization of header
        $.HSCore.components.HSHeader.init($('#header'));

        // initialization of forms
        $.HSCore.helpers.HSFocusState.init();

        // initialization of malihu scrollbar
        $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

        // initialization of autonomous popups
        $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
            autonomous: true
        });

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of fancybox
        $.HSCore.components.HSFancyBox.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

    });

</script>

<!-- Zoho SalesIQ -->
{{--<script type="text/javascript">--}}
    {{--var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq ||--}}
        {{--{widgetcode:"40c318ec8f5548febcd8b0341463720e1bbde8a72871d2ba498f1435ed7426c9", values:{},ready:function(){}};--}}
    {{--var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;--}}
    {{--s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");--}}
{{--</script>--}}

<!-- Twitter universal website tag code -->
<script>
    !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
    },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
        a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
    // Insert Twitter Pixel ID and Standard Event data below
    twq('init','o1jju');
    twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->

</body>
</html>
