<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperación de contraseña</title>
</head>
<!--ESTE ES LA VISTA PLANTILLA (recontraEmail.blade.php) DE RECUPERACION DE CONTRASEÑA 
ESTA PLANTILLA SIRVE PARA QUE SEA ENVIADA POR EL MAILER recontraEmail.php AQUI SE CARGAN
LOS DATOS NOMBRE EMAIL Y EL TOKEN CODERAND SE ANEXA UN VINCULO DIRECTO AL BACKEND PARA
PROPORCIONARLE EL TOKEN GENERADO SIN EL CUAL NO ADMITIRÁ MODIFICACIONES-->
<body>
<h1>Estamos recuperando tu contraseña</h1>
    Estimado: <h1>{{$datos['nombre']}}</h1>
    <b>Ha solicitado el restablecimiento de su contraseña:</b>
    Asociada al correo: <b>{{$datos['email']}}</b><br>
    <p>Para generar una nueva contraseña copia el codigo:</p>
    <input type="text " value="{{$datos['code']}}" style="font-size: 34px;" readonly>
    <p>Y pegalo en el enlace que aparece a continuacion:</p>
    <p><a href="http://127.0.0.1:8000/emailrecovery?email={{$datos['email']}}" 
    style="font-size:16px; display: inline-block; background-color:blue; color:#fff;
    padding:12px; border-radius:4px; text-decoration: none;">
    Restablecer mi contraseña</a></p>
    <a href="http://127.0.0.1:8000/emailrecovery?email={{$datos['email']}} ">
    http://127.0.0.1:8000/emailRecovery?email={{$datos['email']}}</a><br>
    <a href="uxproyect.000webhostapp.com">
    <img src="http://uxproyect.000webhostapp.com/img/demo.jpg" alt="Pc Life Systems logo"
    style="width:300px">
    </a>
</body>

<script>
    function copiar(element) {
    var _tempo = document.createElement('input');
    document.getElementsByTagName("body")[0].appendChild(tempo);
    tempo.value=element.innerHTML;
    tempo.select();
    document.execCommand('copy');
    }
</script>
</html>

