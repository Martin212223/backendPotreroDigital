<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Tienda de ropa</h1>
    <button type="submit"><a href="listarconcard.php">Todas las marcas</a></button>
    <button type="submit"><a href="adidas.php">Adidas</a></button>
    <button type="submit"><a href="nike.php">Nike</a></button>
    <button type="submit"><a href="suprememenora500.php">Prendas por debajo de $500</a></button>
    <br>
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>

    <section>
        <div class="container">
            <div class="row">

        <?php
            $conexion = mysqli_connect("127.0.0.1", "root", "");
          $consulta= "SELECT * FROM `ropa` WHERE `marca` = 'supreme'";
            mysqli_select_db($conexion, "tienda");
            $datos= mysqli_query($conexion, $consulta);
            while ($reg = mysqli_fetch_array($datos)) {?>
            <div class="card col-sm-12 col-md-6 col-lg-3">
                <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="">

                <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
                <span>
                <?php echo $reg['tipo_prenda'];?>
                </span>
                <span>$<?php echo $reg['precio']; ?></span>

            </div>

        <?php } ?>

        </div>
    </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>