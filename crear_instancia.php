<?php
//RECIBIENDO DATOS DEL INPUT
    $numberWhatsapp = $_POST["numberWhatsapp"];
    $idAccount = $_POST["idAccount"];
    $tokenChatwoot = $_POST["tokenChatwoot"];
  



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://116.203.241.141:8080/instance/create',
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
    "chatwoot_sign_msg": true,
    "chatwoot_reopen_conversation": true,
    "chatwoot_conversation_pending": false
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'apikey: Allegro.2018@'
  ),
));

$response = curl_exec($curl);

curl_close($curl);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link class="favicon" rel="icon" type="image/png" sizes="32x32" href="https://chat.buho.la/favicon-32x32-buho.png">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <link href="./css/estilos.css" rel="stylesheet" type="text/css">
    <title>Integración Qr</title>
</head>
<body>

<div class="contenedor-general">
        <div class="upload-files-container-3">
          <div class="first-area">
            <span class="material-icons-outlined upload-icon">check_circle</span>
            <h2 class="dynamic-message">
              <span id="contadorEnvios"></span> Conexion Qr satisfactoria!
            </h2>
          </div>
          <a class="return-tab" onclick="returnHome();">Crear otro canal Qr
            <span class="material-icons-outlined upload-icon">exit_to_app</span>
          </a>
</div>
</div>   

<script>
  function returnHome(){
    window.location.href="index.php"
  }
</script>
</body>
</html>


