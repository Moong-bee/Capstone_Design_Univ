<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login Demo - Kakao JavaScript SDK</title>

    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/trip_go.css">
</head>
<body>



<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar" class="active">
        <div class="sidebar-header">
            <h3>Trip Go</h3>
            <strong>TG</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="../">
                    <i class="glyphicon glyphicon-home"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-briefcase"></i>
                    About
                </a>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-duplicate"></i>
                    Pages
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-link"></i>
                    Portfolio
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-paperclip"></i>
                    FAQ
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-send"></i>
                    Contact
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-log-in"></i>
                    Login
                </a>
            </li>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">
        <div class="container-fluid">

            <a id="kakao-login-btn"></a>
            <a href="http://developers.kakao.com/logout"></a>
            <script type='text/javascript'>
                //<![CDATA[
                // 사용할 앱의 JavaScript 키를 설정해 주세요.
                Kakao.init('f4a9ba7d938d53e00486ce62adf80cff');
                // 카카오 로그인 버튼을 생성합니다.
                Kakao.Auth.createLoginButton({
                    container: '#kakao-login-btn',
                    success: function(authObj) {
                        alert(JSON.stringify(authObj));
                    },
                    fail: function(err) {
                        alert(JSON.stringify(err));
                    }
                });
                //]]>
            </script>

        </div>
    </div>
</div>





<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>
</html>
