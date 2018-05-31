<?php

if (!isset($_SESSION)) {
    session_start();
}

$CLIENT_ID = "e446f350fd40cd40dd67806ea7fc02a5";
$REDIRECT_URI = "http://localhost/Capstone-PHP/member/kakao_login.php";
$TOKEN_API_URL = "https://kauth.kakao.com/oauth/token";

$code = $_GET["code"];
$params = sprintf('grant_type=authorization_code&client_id=%s&redirect_uri=%s&code=%s', $CLIENT_ID, $REDIRECT_URI, $code);

$opts = array(
    CURLOPT_URL => $TOKEN_API_URL,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSLVERSION => 1, // TLS
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => false
);

$curlSession = curl_init();
curl_setopt_array($curlSession, $opts);
$server_output = curl_exec($curlSession);
curl_close($curlSession);

$server_output = json_decode($server_output, true);
$access_token = $server_output['access_token'];

$TOKEN_API_URL = "https://kapi.kakao.com/v1/user/me";

$header = array('Authorization: Bearer ' . $access_token);
$opts = array(
    CURLOPT_URL => $TOKEN_API_URL,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSLVERSION => 1,
    CURLOPT_HEADER => false,
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_POST => true
);

$curl_session = curl_init();
curl_setopt_array($curl_session, $opts);
$return_data = curl_exec($curl_session);
curl_close($curl_session);

$return_data = json_decode($return_data, true);

$kakao_id = $return_data['id'];
$kakao_nickname = $return_data['properties']['nickname'];
$kakao_profile_image = $return_data['properties']['profile_image'];
$kakao_thumbnail_image = $return_data['properties']['thumbnail_image'];

$_SESSION['userid'] = $kakao_id . $kakao_nickname;
$_SESSION['access_token'] = $access_token;

echo("<script>location.href = 'http://localhost/Capstone-PHP'</script>");

?>


