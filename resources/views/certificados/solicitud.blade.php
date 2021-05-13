<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/log.css') }}" rel="stylesheet">
    <title>solicitud</title>
</head>
<body>
    <center>
        <div class="login">
            <h1>Solicitud de certificado</h1>
            <form >
                <input type="text" name="u" placeholder="Nombre"="required" />
                <input type="password" name="p" placeholder="Número de cedula" required="required" />
                <a type="button" class="btn btn-primary" href="inicio" onclick="alert('Seguro!...enviaras datos de solicitud de certificado'); return true;">enviar solicitud</a>
            </form>
        </div>
    </center>

</body>
</html>
