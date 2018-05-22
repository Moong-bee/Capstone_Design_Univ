<?
if (!isset($_SESSION)) {
    session_start();
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Trip Go</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./css/trip_go2.css">
</head>
<body>
<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">

    <div class="w3-display-topleft w3-padding-large w3-xlarge">
        <img src="./img/trip_go_icon.jpg" alt="LOGO" style="width: 50px; height: 50px;">
    </div>

    <nav class="w3-sidebar w3-bar-block w3-light-gray w3-card w3-animate-right w3-xxlarge"
         style="width:70px;display:none;z-index:5;right:0;" id="rightMenu">
        <a onclick="closeRightMenu()" href="#" class="w3-bar-item w3-button"><i class="fa fa-arrow-right"></i></a>
        <a href="" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
        <a href="./maptest.php" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a>

        <? if ($_SESSION['userid']) {
            echo("<a id='custom-login-btn' class=\"w3-bar-item w3-button\" href='javascript:logoutWithKakao()'>
            <i class=\"glyphicon glyphicon-log-in\"></i>
            </a>
            <script type='text/javascript'>
            //<![CDATA[
            // 사용할 앱의 JavaScript 키를 설정해 주세요.
            Kakao.init('f4a9ba7d938d53e00486ce62adf80cff');

            function loginWithKakao() {
                // 로그인 창을 띄웁니다.
                Kakao.Auth.login({
                    success: function (authObj) {
                        Kakao.API.request({
                            url: '/v1/user/me',
                            success: function (res) {
                                alert(\"로그인은 브라우저 종료 또는 6시간 이후에 해제됩니다.\");
                                var nickname = JSON.stringify(res.properties.nickname);
                                location.href = './member/login.php?nickname=' + nickname;
                            },
                            fail: function (error) {
                                alert(\"로그인을 하셔야 이용 가능합니다.\");
                            }
                        });
                    },
                    fail: function (err) {
                        alert(JSON.stringify(err));
                    }
                });
            };
            //]]>
        </script>");
        } else {
            echo("<a id='custom-login-btn' class=\"w3-bar-item w3-button\" href='javascript:loginWithKakao()'>
            <i class=\"glyphicon glyphicon-log-in\"></i>
        </a>
        <script type='text/javascript'>
            //<![CDATA[
            // 사용할 앱의 JavaScript 키를 설정해 주세요.
            Kakao.init('f4a9ba7d938d53e00486ce62adf80cff');

            function loginWithKakao() {
                // 로그인 창을 띄웁니다.
                Kakao.Auth.login({
                    success: function (authObj) {
                        Kakao.API.request({
                            url: '/v1/user/me',
                            success: function (res) {
                                alert(\"로그인은 브라우저 종료 또는 6시간 이후에 해제됩니다.\");
                                var nickname = JSON.stringify(res.properties.nickname);
                                location.href = './member/login.php?nickname=' + nickname;
                            },
                            fail: function (error) {
                                alert(\"로그인을 하셔야 이용 가능합니다.\");
                            }
                        });
                    },
                    fail: function (err) {
                        alert(JSON.stringify(err));
                    }
                });
            };
            //]]>
        </script>");
        }
        ?>
    </nav>

    <div class="w3-overlay w3-animate-opacity" onclick="closeRightMenu()" id="myOverlay"></div>

    <div class="w3-teal">
        <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>
    </div>


    <div class="w3-display-middle">
        <h1 class="w3-jumbo w3-animate-top">
            <?
            if ($_SESSION['userid']) {
                echo $_SESSION['userid'];
            } else {
                echo "PLEASE WAIT";
            }
            ?>
        </h1>
        <hr class="w3-border-grey" style="margin:auto;width:40%">
        <p class="w3-large w3-center">제발 기다려주세요..</p>
    </div>
</div>
<script>

    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>

</body>
</html>
