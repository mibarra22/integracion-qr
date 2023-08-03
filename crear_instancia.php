<?php
//RECIBIENDO DATOS DEL INPUT
    $numberWhatsapp = $_POST["numberWhatsapp"];
    $idAccount = $_POST["idAccount"];
    $tokenChatwoot = $_POST["tokenChatwoot"];
  



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://api.buho.com.pe/instance/create',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "instanceName": "'.$numberWhatsapp.'",
    "qrcode": true,
    "chatwoot_account_id": "'.$idAccount.'",
    "chatwoot_token": "'.$tokenChatwoot.'",
    "chatwoot_url": "https://chat.buho.la",
    "chatwoot_sign_msg": true
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'apikey: Allegro.2018@'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
