<?php
$TOKEN_API_URL = "https://kapi.kakao.com/v1/user/unlink";

$header = array('Authorization: Bearer ' . $_SESSION['access_token']);
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

unset($_SESSION['userid']);
unset($_SESSION['access_token']);

echo("<script>location.href = 'http://".$_SESSION['test_url']."/Capstone-PHP'</script>");
?>