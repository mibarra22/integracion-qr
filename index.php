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

<div> 
    <div id="myForm" class="form-container" enctype="multipart/form-data">
        <div style="position: absolute;top: 0;"><h1>Integración Qr</h1></div>
        <div class="upload-files-container">
        <h2>📲 Integra con WhatsApp Qr</h2>
        <small>Solo necesita el número de WhatsApp, ID de su cuenta y el Token de su usuario. Vea el siguiente tutorial para conseguirlos en 1 minuto. Más detalles en la <a href="https://chatbuho.github.io/documentacion/integraciones/Qr-Whatsapp" target="_blank">documentación</a>.</small>
            <div>
                <form action="./crear_instancia.php" method="post">
                <input name="numberWhatsapp" type="text" placeholder="número de WhatsApp">
                <input name="idAccount" type="text" placeholder="id de la cuenta">
                <input name="tokenChatwoot" type="text" placeholder="token de usuario">

                <button class="next-tab" type="submit">Enviar <span class="material-icons-outlined">arrow_forward</span></button>
                </form>
            </div>
        </div> 
    

    </div>

</div>    

    
</body>
</html>