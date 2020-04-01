<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/desvinculacionFlyPass.css">
   

    <title>Desvinculate</title>
</head>

<body class="home-body">
    <header>
        <div>
        <div class="imagen-container-gopass">
            <a href=""><img src="assets/img//desviculacionFlyPassImg/Logo-gopass-desvinculate.png" alt=""></a>
        </div>
        <div class="imagen-container">
            <img src="assets/img/desviculacionFlyPassImg/imagen-desvinculacion-flypass.png" alt="">
        </div>
        <div class="container-form-desvinculacion-flypass">
            <form action="desvinculacionFlyPass.php" method="post" required>
                <input type="text" name="cedula" placeholder="Cedula" required>
                <br>
                <input type="password" name="pass"  placeholder="Contraseña" required>
                <p>
                    Placa del vehículo que deseas desvincular
                </p>
                <input type="text" name="placa"  placeholder="Placa" required>
                <br>
                <input class="button-desvicular-flypass" type="submit" value="Desvincular" >
            </form>
        </div>
        </div>
    </header>
</body>

</html>
