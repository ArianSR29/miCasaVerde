<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Panel de Reporte</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <style>

        body {
            background: rgb(68, 67, 67);
            display: flex;
        }
        .login-form {
            width: 50%;
            margin: 0 auto;
            text-align: center;
            margin-top: 200px;
        }
        .login-form input {
            width: 70%;
            height: 25px;
            font-size: 12px;
        }
        .login-form button {
            width: 50%;
            height: 30px;
            margin: 10px;
        }
        .titulo {
            font-size: 25px;
            color: #fff;
        }
    </style>
    <body>
        <form
            class="login-form"
            id="login-form"
            action="fuction/reporte.php"
            method="POST">
            <p class="titulo">Generar reporte</p>
            <input
                type="password"
                name="tb_password"
                id=""
                placeholder="INGRESA TU CONTRASEÑA">
            <button>Generar Archivo</button>
        </form>
    </body>
</html>