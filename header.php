<div class="row">
    <nav class="col-md-12 navbar navbar-default" style="margin-bottom: 10px; margin-left: 15px;">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                    <i class="glyphicon glyphicon-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?
                    if ($userID) {
                        echo("<li><a href='#'>logout</a></li>");
                    } else {
                        echo("
                    <li>
                        <a id='custom-login-btn' href='javascript:loginWithKakao()'>
                            <img src='./img/kakao_login_btn_small.png'/>
                        </a>
                        <script type='text/javascript'>
                          //<![CDATA[
                            // 사용할 앱의 JavaScript 키를 설정해 주세요.
                            Kakao.init('f4a9ba7d938d53e00486ce62adf80cff');
                            function loginWithKakao() {
                              // 로그인 창을 띄웁니다.
                              Kakao.Auth.login({
                                success: function(authObj) {
                                  Kakao.API.request({
                                      url: '/v1/user/me',
                                      success: function(res) {
                                        alert(JSON.stringify(res.properties.nickname));
                                      },
                                      fail: function(error) {
                                        alert(JSON.stringify(error));
                                      }
                                    });
                                },
                                fail: function(err) {
                                  alert(JSON.stringify(err));
                                }
                              });
                            };
                          //]]>
                        </script>
                    </li>
                   ");
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

</div>