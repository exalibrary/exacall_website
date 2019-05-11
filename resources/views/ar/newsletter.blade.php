@extends('ar.master')

@section('logo')

    <a class="navbar-brand u-header__navbar-brand" href="https://www.exacall.com" aria-label="Space">
        <img class="u-header__navbar-brand-default logo" src="assets/svg/logos/exacall_logo_white_2.png" alt="Logo">
        <img class="u-header__navbar-brand-on-scroll logo" src="assets/svg/logos/exacall_logo_2.png" alt="Logo">
        <img class="u-header__navbar-brand-mobile" src="assets/svg/logos/exacall_logo_2.png" alt="Logo">
    </a>

@endsection

@section('meta')

    <!--  Essential META Tags -->
    <title>Thank You | أهلا بك صديقًا لنا</title>

@endsection

@section('content')

    <div class="img-bg" style="background-color: #920bc0;">
        <div class="d-flex align-items-center height-100vh">
            <div class="container text-center">
                <div class="w-lg-50 mx-lg-auto mt-5">
                    <!-- SVG Mockup -->
                    <img style="width:40%;" src="/assets/svg/components/friend.png">
                    <!-- End SVG Mockup -->
                    <!-- Title -->
                    <h1 class="mb-3 mt-3 text-white">أهلا بك صديقنا | Welcome friend</h1>
                    <h1 class="mb-3 mt-3 text-white"></h1>
                    <p class="lead mb-0 text-white">نعدك بأن تكون نشرتنا البريدية غنية بالمعلومات والنصائح المفيدة</p>
                    <p class="lead mb-0 text-white">شاكرين لكم اهتمامكم بخدماتنا .. <a class="text-white" href="http://localhost:8000" style="font-weight: bold;"><b>العودة للصفحة الرئيسية</b></a></p>
                </div>
            </div>
        </div>
    </div>

@endsection