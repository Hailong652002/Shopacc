<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#ID: <?php echo $_GET['id'] ?> - Shopacc.net</title>
    <link rel="SHORTCUT ICON"  href="../public/img/logo/logo.png">
    <link rel="stylesheet" href="../public/base.css">
    <link rel="stylesheet" href="../info-account/info-acc.css">
    <link rel="stylesheet" href="../public/iconFont/themify-icons/themify-icons.css">
</head>
<body>
    <div class="main">
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
                    <li>
                        
                        <a href="http://localhost/shopacc.net/">TRANG CHỦ</a>
                    </li>
                    <li>NẠP TIỀN</li>
                    <li>TIỆN ÍCH</li>
                    <li>ĐĂNG NHẬP</li>
                    <li>ĐĂNG KÝ</li>
                </ul>
            </div>
        </div>
        <!-- end header responsive-->
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

        <?php include('../main/header-scroll.php') ?>
        
    
        <div id="main-content">
            <div class="top-content">
                <h2>#ID: <?php echo $_GET['id'] ?></h2>
                <div class="buy-btn">
                    <h2><ion-icon name="pricetag-outline" style="color: #fff;"></ion-icon> 900,000 đ</h2>
                    <button>MUA NGAY </button>
                </div>
            </div>
            <div class="content-tabs">
                <!-- tab 1 -->
                <input type="radio" id="tab-1" name="content-tabs" checked="checked">
                <label for="tab-1" class="label-1">TÀI KHOẢN</label>
                <div class="content-tab">
                    <img src="../public/img/account-info/acc1/acc1.png">
                </div>
    
                <!-- tab 2 -->
                <input type="radio" id="tab-2" name="content-tabs">
                <label for="tab-2">TƯỚNG [141]</label>
                <div  class="content-tab">
                    <img src="../public/img/account-info/acc1/acc1-agent1.png">
                    <img src="../public/img/account-info/acc1/acc1-agent2.png">
                </div>
    
                <!-- tab 3 -->
                <input type="radio" id="tab-3" name="content-tabs">
                <label for="tab-3">TRANG PHỤC [144]</label>
                <div class="content-tab">
                    <img src="../public/img/account-info/acc1/acc1-skin1.png">
                    <img src="../public/img/account-info/acc1/acc1-skin2.png">
                    <img src="../public/img/account-info/acc1/acc1-skin3.png">
                    <img src="../public/img/account-info/acc1/acc1-skin4.png">
                    <img src="../public/img/account-info/acc1/acc1-skin5.png">
                    <img src="../public/img/account-info/acc1/acc1-skin7.png">
                </div>
    
                <!-- tab 4 -->
                <input type="radio" id="tab-4" name="content-tabs">
                <label for="tab-4">THÔNG TIN KHÁC</label>
                <div class="content-tab">
                    <img src="../public/img/account-info/acc1/acc1-about1.png">
                    <img src="../public/img/account-info/acc1/acc1-about2.png">
                    <img src="../public/img/account-info/acc1/acc1-about3.png">
                    <img src="../public/img/account-info/acc1/acc1-about4.png">
                    <img src="../public/img/account-info/acc1/acc1-about5.png">
                    <img src="../public/img/account-info/acc1/acc1-about6.png">
                    <img src="../public/img/account-info/acc1/acc1-about7.png">
                    <img src="../public/img/account-info/acc1/acc1-about8.png">
                    <img src="../public/img/account-info/acc1/acc1-about9.png">
                    <img src="../public/img/account-info/acc1/acc1-about10.png">
                </div>
    
            </div>
        </div>
    
        <?php include('../main/footer.php') ?>
    </div>


    <div class="logout-nofi">
        <div class="logout-container">
            <div class="logout-nofi-box">
                <div class="box-top">
                    <i class="ti-bell icon-nofi"></i>
                    <p>ĐĂNG XUẤT ?</p>
                    <i class="ti-close icon-close"></i>
                </div>
                <div class="box-content">
                    <p>Bạn có chắc chắn muốn đăng xuất?</p>
                    <a href="../index/logout.php"><ion-icon name="log-out-outline"></ion-icon>  Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>


    <!-- scrpit buy-btn box -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
        function scrollHeader() {
            var innerWindowHeight = window.innerHeight; //Windows height
            var buyBtnBoxHeight = $(".buy-btn").height(); //header height
            var windowOffSet = window.pageYOffset; //window offset scroll Y
            // visible/ invisible
            if (windowOffSet > buyBtnBoxHeight) {
                if (innerWindowHeight > buyBtnBoxHeight) {
                    $(".buy-btn").show();
                    $(".buy-btn").css({"position":"fixed", "top": "56px", "left":"5%", "right":"5%"});
                }
                else {
                    $(".buy-btn").css({"position":"static"})
                }
            }
            else {
                $(".buy-btn").css({"position":"static"})
            }
        }

        //make header visible on scroll
        window.onscroll = scrollHeader;
    </script>


    <!-- scrpit logout nofication -->
    <script>
        const logOutBtn = document.querySelectorAll('.logout-btn')
        const logOutBox = document.querySelector('.logout-nofi')
        const logOutBoxClose = document.querySelector('.icon-close')

        function showBuyTickets() {
            logOutBox.classList.add('open')
        }

        function hideBuyTickets() {
            logOutBox.classList.remove('open')
        }

        for (const logOut of logOutBtn) {
            logOut.addEventListener('click', showBuyTickets)
        }
        
        logOutBoxClose.addEventListener('click', hideBuyTickets)

    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>