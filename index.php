<?php 
    session_start();
    if (isset($_SESSION['username'])) {
        header('location: http://localhost/shopacc.net/user/welcome.php?locate=welcome');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopacc.net</title>
    <link rel="SHORTCUT ICON"  href="/shopacc.net/user/pages/public/img/logo/logo-title.jpg">
    <link rel="stylesheet" href="/shopacc.net/user/pages/index/index.css">
    <link rel="stylesheet" href="/shopacc.net/user/pages/public/base.css">
    <link rel="stylesheet" href="/shopacc.net/user/pages/public/iconFont/themify-icons/themify-icons.css">

</head>
<body">

    <div id="main">
        <!-- header -->
        <!-- begin header responsive-->
    <div class="header-mobi">
            <a href="#" class="header-content-mobi">
                <p class="text-content">SHOPACC.NET</p>
            </a>
            <div class="header-menu-mobi">
                <i class="ti-menu js-icon-list-menu"></i>  
            </div>
            <div class="open-list-menu js-open-list-menu">
                <ul class="list-menu">
                
                    <li><a href="http://localhost/shopacc.net/">TRANG CHỦ</a></li>
                    <li><a href="">NẠP TIỀN</a></li>
                    <li><a href="">TIỆN ÍCH</a></li>
                    <li><a href="">ĐĂNG NHẬP</a></li>
                    <li><a href="">ĐĂNG KÝ</a></li>       
                </ul>
            </div>
        </div>
        <!-- end header responsive-->
        <div id="main-header">
            <div class="header-container">
                <div class="header-item">
                    <!-- begin header logo -->
                    <div class="header-logo">
                        <div class="header-logo-box">
                            <div class="logo">
                                <a href="">
                                    <img src="/shopacc.net/user/pages/public/img/logo/logo.png" class="logo-img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end header logo -->

                    <!-- begin header content -->
                    <div class="header-content">
                        <!-- header top -->
                        <div class="header-top">
                            <!-- header top left -->
                            <div class="header-top-left">
                                Chào mừng các bạn đến với
                                <strong class="text-warning">SHOPACC.NET</strong>
                            </div>
                            <!-- header top right -->
                            <div class="header-top-right">
                                <ul class="contact-info">
                                    <li><a href="">0987-654-321</a></li>
                                    <li><a href="">shopacc.net@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- header upper -->
                        
                
                            <div class="header-upper">
                                <!-- header upper nav -->
                                <div class="header-upper-nav">
                                    <ul class="nav">
                                        <li><a href="#"><ion-icon name="home-outline"></ion-icon> Trang chủ</a></li>
                                        <li>
                                            <a href="#"><ion-icon name="cash-outline"></ion-icon> Nạp tiền</a>
                                            <!-- subnav -->
                                            <ul class="subnav">
                                                <li><a href="#"><ion-icon name="wallet-outline"></ion-icon> Nạp tiền qua thẻ cào</a></li>
                                                <li><a href="#"><ion-icon name="card-outline"></ion-icon> Nạp tiền qua ATM</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><ion-icon name="paper-plane-outline"></ion-icon> Tiện ích</a>
                                            <!-- subnav -->
                                            <ul class="subnav">
                                                <li><a href="#"><ion-icon name="newspaper-outline"></ion-icon> Tin tức</a></li>
                                                <li><a href="#"><ion-icon name="barcode-outline"></ion-icon> Độ uy tín của Shop</a></li>
                                                <li><a href="#"><ion-icon name="swap-horizontal-outline"></ion-icon> Hướng dẫn giao dịch</a></li>
                                                <li><a href="#"><ion-icon name="call-outline"></ion-icon> Liên hệ admin</a></li>
                                            </ul>
                                        </li>
                                       

                                        <li>
                                            <a href="http://localhost/shopacc.net/user/pages/login/login.php?locate=login "><ion-icon name="log-in-outline"></ion-icon> Đăng nhập  </a>
                                        </li>
                                        
                                        <li>
                                            <a href="http://localhost/shopacc.net/user/pages/register/register.php?locate=register "><ion-icon name="person-add-outline"></ion-icon> Đăng ký  </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                    
                    </div>
                    <!-- end header content -->
                </div>
            </div> 
        </div>
        <?php include('./user/pages/main/header-scroll.php') ?>

        <?php include('./user/pages/main/slide.php') ?>

        <?php include('./user/pages/main/content.php') ?>

        <?php include('./user/pages/main/footer.php') ?>
    </div>


    <!-- script header slide -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
        function scrollHeader() {
            var innerWindowHeight = window.innerHeight; //Windows height
            var headerMotherHeight = $(".header-container").height(); //header height
            var windowOffSet = window.pageYOffset; //window offset
            // visible/ invisible
            if (windowOffSet > headerMotherHeight) {
                if (innerWindowHeight > headerMotherHeight) {
                    $(".header-scroll").show();
                    $(".header-scroll").css({"position":"fixed", "top": "0"});
                }
                else {
                    $(".header-scroll").hide()
                    $(".header-scroll").css({"position":"static"})
                }
            }
            else {
                $(".header-scroll").hide()
                $(".header-scroll").css({"position":"static"})
            }
        }

        //make header visible on scroll
        window.onscroll = scrollHeader;
    </script>

    <!-- script auto slide -->
    <script type="text/javascript">
    var t = 1;
    setInterval(function() {
        document.getElementById('radio' + t).checked = true;
        t++;
        if (t > 2) {
            t = 1;
        }
    }, 5000);
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    
        <!-- script Header mobi-->
    <script>
        const listmenu = document.querySelector('.js-open-list-menu')
        const iconlistmenu = document.querySelector('.js-icon-list-menu')
        i=0;
        function Openlist(){
            i=i+1;
            if (i%2==1)
                listmenu.classList.add('open-menu')
            else 
                listmenu.classList.remove('open-menu')
        }
        iconlistmenu.addEventListener('click',Openlist)  
    </script>

</body>
</html>