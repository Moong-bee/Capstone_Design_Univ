<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>

    <title>Collapsible sidebar using Bootstrap 3</title>
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/trip_go.css">
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
                <a href="">
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
                <a href="member/login.php">
                    <i class="glyphicon glyphicon-log-in"></i>
                    Login
                </a>
            </li>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div class="row" id="content">

        <? include "header.php"; ?>
        <div class="col-md-12">
            <div class="col-md-6 navbar">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum impedit nemo nulla reprehenderit! Commodi cupiditate eos expedita maxime, modi natus nemo nostrum quia quo sequi sint temporibus tenetur, totam voluptatibus!
                </p>
            </div>
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
