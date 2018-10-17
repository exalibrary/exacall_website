<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

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
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="/assets/vendor/custombox/dist/custombox.min.css">
    <link rel="stylesheet" href="/assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="/assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/assets/vendor/fancybox/jquery.fancybox.css">
    <!-- CSS Space Template -->
    <link rel="stylesheet" href="/assets/css/theme.css">

    <style>
        article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
            direction: ltr !important;
        }
        input,
        button,
        select,
        optgroup,
        textarea {
            direction : ltr !important;
        }
        .u-header--bordered .navbar-expand-lg .u-header__navbar-brand{
            border-right: 1px solid #e3e6f0;
            margin-right: 1.375rem;
        }
        .navbar-expand-lg .u-header__navbar-nav{
            margin-left : auto;
            margin-right: initial;
        }
        .navbar-brand{
            margin-left: 0px;
            margin-right: 0px;
            padding-right: 4.5rem;
        }
        .display-4{
            font-size: 3.2rem !important;
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
                    <a class="navbar-brand u-header__navbar-brand" href="https://www.exacall.com" aria-label="Space">
                        <img class="u-header__navbar-brand-default logo" src="/assets/svg/logos/exacall_logo_white_2.png" alt="Logo">
                        <img class="u-header__navbar-brand-on-scroll logo" src="/assets/svg/logos/exacall_logo_2.png" alt="Logo">
                        <img class="u-header__navbar-brand-mobile" src="/assets/svg/logos/exacall_logo_2.png" alt="Logo">
                    </a>
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
                    <ul class="navbar-nav u-header__navbar-nav">

                        <!-- Navbar - Link 1 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://www.exacall.com/en/#what">About Us</a>
                        </li>
                        <!-- Navbar - Link 1 -->

                        <!-- Navbar - Link 2 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://www.exacall.com/en/services">Solutions & Services</a>
                        </li>
                        <!-- Navbar - Link 2 -->

                        <!-- Navbar - Link 3 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://www.exacall.com/en/pricing">Pricing and Plans</a>
                        </li>
                        <!-- Navbar - Link 3 -->

                        <!-- Navbar - Link 4 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://blog.exacall.com">Blog</a>
                        </li>
                        <!-- Navbar - Link 4 -->

                        <!-- Navbar - Link 5 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://www.exacall.com/contact-us">Contact Us</a>
                        </li>
                        <!-- Navbar - Link 5 -->

                        <!-- Navbar - Link 6 -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="https://wwww.exacall.com">عربي</a>
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

<!-- ========== FOOTER ========== -->
<footer class="bg-dark">
    <div class="container space-2">
        <div class="row justify-content-md-between">

            <!-- Logo and About -->
            <div class="col-12 col-md-3 col-lg-3 mb-7 mb-lg-0 text-left">
                <!-- Logo -->
                <a class="d-inline-block mb-5" href="https://www.exacall.com" aria-label="Space">
                    <img src="/assets/svg/logos/exacall_logo_white_2.png" alt="Logo" style="width: 80px; max-width: 100%;">
                </a>
                <!-- End Logo -->
                <p class="small text-white text-justify">ExaCall Company provides the best innovative and integrated solutions for calls with a flexible system to serve companies and call centers</p>
                <p class="small text-white">All rights reserved © ExaCall 2018</p>
            </div>

            <!-- About the company -->
            <div class="col-12 col-md-3 col-lg-3 mb-7 mb-lg-0 text-left">
                <h3 class="h3 text-white mb-3">About ExaCall</h3>
                <ul>
                    <li>
                        <span class="fa fa-angle-right font-size-13 mr-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com">Main Page</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-right font-size-13 mr-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/pricing">Services and Solutions</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-right font-size-13 mr-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/pricing">Pricing and Plans</a>
                    </li>
                    {{--<li>
                        <span class="fa fa-angle-right font-size-13 ml-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/team">فريق العمل</a>
                    </li>--}}
                    <li>
                        <span class="fa fa-angle-right font-size-13 mr-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/privacy-policy">Privacy and Policy</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-right font-size-13 mr-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/terms-conditions">Terms and Conditions</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-right font-size-13 mr-3 text-white"></span>
                        <a class="text-white" href="https://blog.exacall.com">Blog</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-right font-size-13 mr-3 text-white"></span>
                        <a class="text-white" href="https://www.exacall.com/contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>


            <div class="col-12 col-md-3 col-lg-3 mb-7 mb-lg-0 text-left">
                <h3 class="h3 text-white mb-3">Follow Us</h3>
                <ul class="list-inline" style="padding-right: 0px;">
                    <li class="list-inline-item mr-3">
                        <a class="text-white" href="https://twitter.com/ExaCall"><i class="fab fa-twitter mr-2"></i><b>Twitter</b></a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a class="text-white" href="https://www.linkedin.com/in/exacall-5925a6169/"><i class="fab fa-linkedin mr-2"></i><b>Linkedin</b></a>
                    </li>
                </ul>
                <br>
                <h3 class="h3 text-white mb-3">Visit Us</h3>
                <p class="small text-white text-justify"> Exa Information Technology Co. Ltd. - Othman Bin Affan Branch Rd, Al-Taawon, Riyadh , Saudi Arabia</p>
                <a href="https://goo.gl/maps/LpkL8LigqYN2" class="text-white"><b>Location on Google Map</b></a>
            </div>

        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

<!-- JS Global Compulsory -->
<script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/assets/vendor/custombox/dist/custombox.min.js"></script>
<script src="/assets/vendor/custombox/dist/custombox.legacy.min.js"></script>
<script src="/assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="/assets/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Space -->
<script src="/assets/js/hs.core.js"></script>
<script src="/assets/js/components/hs.header.js"></script>
<script src="/assets/js/components/hs.unfold.js"></script>
<script src="/assets/js/components/hs.validation.js"></script>
<script src="/assets/js/helpers/hs.focus-state.js"></script>
<script src="/assets/js/components/hs.malihu-scrollbar.js"></script>
<script src="/assets/js/components/hs.modal-window.js"></script>
<script src="/assets/js/components/hs.show-animation.js"></script>
<script src="/assets/js/components/hs.slick-carousel.js"></script>
<script src="/assets/js/components/hs.fancybox.js"></script>
<script src="/assets/js/components/hs.go-to.js"></script>

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
<script type="text/javascript">
    var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq ||
        {widgetcode:"40c318ec8f5548febcd8b0341463720e1bbde8a72871d2ba498f1435ed7426c9", values:{},ready:function(){}};
    var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
    s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>

</body>
</html>