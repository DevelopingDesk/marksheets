<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>welcome to portal</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="school system"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.css')}}">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <div class="video-w3l" data-vide-bg="{{asset('front/video/1')}}">
        <!--header-->
        <div class="header-w3l">
            <h1>
                <span>S</span>chool
                <span>S</span>ystem
                <span>S</span>oftware
                
            </h1>
        </div>
        <!--//header-->
        <div class="main-content-agile">
            <div class="sub-main-w3">
                <h2>Login Here
                    <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                </h2>
                <form action="{{ route('login') }}" method="post">
                       {{csrf_field()}}
                    <div class="pom-agile">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input placeholder="email  " name="email" class="user" type="text" required="">
                    </div>
                    <div class="pom-agile">
                        <span class="fa fa-key" aria-hidden="true"></span>
                        <input placeholder="Password" name="password" class="pass" type="password" required="">
                    </div>
                    <div class="sub-w3l">
                        <div class="sub-agile">
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1">
                                <span></span>Remember me</label>
                        </div>
                        
                        <div class="clear"></div>
                    </div>
                    <div class="right-w3l">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
        <!--//main-->
        <!--footer-->
        <div class="footer">
            <p>2020 | Design by
                <a href="">Developing Desk 03466030340</a>
            </p>
        </div>
        <!--//footer-->
    </div>

    <!-- js -->
    <script src="{{asset('front/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.vide.min.js')}}"></script>
    <!-- //js -->

</body>

</html>