<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.A.H</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/login.css">
</head>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
    <form>
        <img class="mb-4" src="<?php base_url()?>assets/img/logo.png" alt="" width="172" height="157">
        <h1 class="h3 mb-3 fw-normal">Bienvenido</h1>

        <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="176792094">
        <label for="floatingInput">Rut</label>
        </div>
        <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Contraseña</label>
        </div>

        <div class="checkbox mb-3">
        <label>
            <!-- <input type="checkbox" value="remember-me"> Remember me -->
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023<br>M.S</p>
    </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>