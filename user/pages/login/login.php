<?php include('../login/process.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - Shopacc.net</title>
    <link rel="SHORTCUT ICON"  href="../public/img/logo/logo.png">
    <link rel="stylesheet" href="../public/base.css">
    <link rel="stylesheet" href="../login/login.css">

</head>
<body>
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
        

    <?php include('../main/header-scroll.php') ?>

    <div class="slider">
        <form method="post" id="login-form" class="login">
            <h1><ion-icon name="log-in-outline"></ion-icon> ĐĂNG NHẬP</h1>
            <div class="form_error">
                <?php if (isset($info_error)): ?>
                            <span><?php echo $info_error; ?></span>
                <?php endif ?>
            </div>

            <div <?php if (isset ($log_error)): ?>  class="form_error" <?php endif ?> >
                <p class="ingame_text"><ion-icon name="person-circle-outline"></ion-icon> Tài khoản</p>
                <input type="text" name="username" placeholder="Nhập tài khoản" value="<?php echo $username; ?>">
            </div>
    
            <div <?php if (isset ($log_error)): ?>  class="form_error" <?php endif ?>>
                <p class="ingame_text"><ion-icon name="key-outline"></ion-icon> Mật khẩu</p>
                <input type="password"  placeholder="Nhập mật khẩu" name="password">
                <?php if (isset($log_error)): ?>
                        <span><?php echo $log_error; ?></span>
                <?php endif ?>
              </div>
    
            <div class="log_box">
                <button type="submit" name="login" id="log_btn" class="log_btn">Đăng nhập</button>
            </div>
            <div class="regis">
                <a href="http://localhost/shopacc.net/user/pages/register/register.php?locate=register" >Đăng ký</a>
            </div>
            
            

              
        </form>
        
    </div>




   
    <?php include('../main/footer.php') ?>
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