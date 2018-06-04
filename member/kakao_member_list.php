<?php

class mykey{
    private $admin_key = "c2a3ea12e284c42c3a53c173a9d752fc";

    function getAdminkey(){
        return $this->admin_key;
    }
}

$TOKEN_API_URL = "https://kapi.kakao.com/v1/user/ids";

$key = new mykey();

$header = array('Authorization: KakaoAK ' . $key->getAdminkey());
$opts = array(
    CURLOPT_URL => $TOKEN_API_URL,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSLVERSION => 1,
    CURLOPT_HEADER => false,
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_HTTPGET => true,
    CURLOPT_DATA
);

$curl_session = curl_init();
curl_setopt_array($curl_session, $opts);
$return_data = curl_exec($curl_session);
curl_close($curl_session);

//$return_data = json_decode($return_data, true);

echo $return_data;
?>