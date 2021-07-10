<?php
header('Content-type: application/json');?>

<?php
$code = ($_REQUEST['code']);
$url = 'https://presets.videostarapp.com/scripts/shareCodesNew.php';
$val = '{
  "code" : "'.$code.'",
  "cmd" : "info",
  "did" : "AE9A45B6-2D94-41D4-8226-824BF1750B41",
  "bac" : "bb296f7be6490f56b122a332240be75f"
}';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://presets.videostarapp.com/scripts/shareCodesNew.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$val);  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
    'Accept: application/json',
    'Accept-Encoding: gzip, deflate, br',
    'Accept-Language: en-us',
    'Cache-Control: no-cache',
    'Connection: keep-alive',
    'Content-Type: application/json',
    'Host: presets.videostarapp.com',
    'User-Agent: Video Star/1204 CFNetwork/1240.0.4 Darwin/20.5.0'
];
curl_setopt($curl, CURLOPT_USERAGENT, 'User-Agent: Video Star/1204 CFNetwork/1240.0.4 Darwin/20.5.0');
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$server_output = curl_exec ($ch);

curl_close ($ch);

echo  $server_output ;

?>