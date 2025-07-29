<?php
$client_id = "V6JXKEE4IOEY75VplN8D";
$client_secret = "jdr61stCAd";
$redirectURI = urlencode("https://lidot.co.kr/z/account/naver_login_callback.php");

$code = $_GET["code"];
$state = $_GET["state"];

$url = "https://nid.naver.com/oauth2.0/token?grant_type=authorization_code"
    . "&client_id=$client_id"
    . "&client_secret=$client_secret"
    . "&redirect_uri=$redirectURI"
    . "&code=$code"
    . "&state=$state";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$status_code = 200; // 단순화
$tokenData = json_decode($response, true);
$access_token = $tokenData['access_token'];

if ($access_token) {
    // 사용자 정보 요청
    $header = "Authorization: Bearer " . $access_token;
    $url = "https://openapi.naver.com/v1/nid/me";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($header));
    $res = curl_exec($ch);
    curl_close($ch);

    $user = json_decode($res, true);
    $naver_user = $user['response'];

    // 정보 추출
    $id = $naver_user['id'];
    $nickname = isset($naver_user['nickname']) ? $naver_user['nickname'] : '';
    $email = isset($naver_user['email']) ? $naver_user['email'] : '';
    $mobile = isset($naver_user['mobile']) ? $naver_user['mobile'] : ''; // 휴대폰 번호 (010-xxxx-xxxx)

    // 자바스크립트로 부모창 함수 호출
    echo "<script>
        const user = {
            id: '{$id}',
            nickname: '{$nickname}',
            email: '{$email}',
            mobile: '{$mobile}'
        };
        if (window.opener) {
            window.opener.checkUser('N', user);
            window.close();
        } else {
            console.error('팝업이 아니거나 window.opener 없음');
        }
    </script>";
} else {
    echo "Error: Access token not received.";
}
?>
