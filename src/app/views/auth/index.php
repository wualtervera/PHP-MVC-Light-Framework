<?php
    //model data
    /* $user = $data->email;
    $password = $data->contrasena; */
    $msg = [];
    $msg = $data;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PATH_CSS ?>bootstrap.css">
    <link rel="stylesheet" href="<?php echo PATH_CSS ?>login.css">
    <title>Iniciar sesión</title>
</head>

<body class="bg-light">
    <div class=" container d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="login-head d-flex flex-column justify-content-center align-items-center">
                <img class=" mb-1" src="<?php echo LOGO_LOGIN ?>" alt="" width="84" height="84">
                <p class="lead"><?php echo TITLE_LOGIN; ?></p>
            </div>
            <form method="POST" action="<?php echo BASE_PATH ?>auth/signin">
                <p class="text-danger"><?php !empty($msg) ? print_r($msg) : '';  ?></p>
                <div class="form-floating">
                    <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="bill@email.com">
                    <label for="floatingInput">Usuario</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" value="123">
                    <label for="floatingPassword">Contraseña</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="recordar-contraseña"> Recordar contraseña
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
            </form>
        </div>
    </div>

    <script src="<?php echo PATH_JS ?>bootstrap.js"></script>
    <script src="<?php echo PATH_JS ?>bootstrap.bundle.js"></script>
</body>

</html>