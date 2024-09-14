<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis videojuegos favoritos</title>
    <link rel="stylesheet" href="Recursos/bootstrap/css/bootstrap.min.css">
</head>

<body>

<?php
$juego1 = [
    'img' => 'Recursos/img/1.jpg',
    'titulo' => 'FILOSOFIA',
    'descripcion' => 'NieR: Automata aborda la búsqueda de sentido en un mundo sin propósito claro. Cuestiona la naturaleza de la existencia, la identidad y el libre albedrío, explorando cómo humanos y máquinas luchan por encontrar significado en un universo cíclico e indiferente.',
];
$juego2 = [
    'img' => 'Recursos/img/2.jpg',
    'titulo' => 'FILOSOFIA',
    'descripcion' => 'Se centra en la lucha contra la inevitabilidad del destino y el ciclo interminable de vida y muerte. Explora temas como el sufrimiento, la decadencia y la búsqueda de significado en un mundo sombrío, donde el enfrentamiento constante con la oscuridad y la desesperanza define la existencia.',
];
$juego3 = [
    'img' => 'Recursos/img/3.jpg',
    'titulo' => 'FILOSOFIA',
    'descripcion' => 'Elden Ring explora el poder, el orden y la ruptura del equilibrio en un mundo vasto y misterioso. Se enfoca en temas de libertad, ambición y la búsqueda de propósito en un universo fracturado, donde los personajes luchan por moldear su propio destino en medio de caos y decadencia.',
];
$juego4 = [
    'img' => 'Recursos/img/4.jpg',
    'titulo' => 'FILOSOFIA',
    'descripcion' => 'Explora la lucha interna entre la violencia y la redención. Trata temas de paternidad, destino y el conflicto entre el pasado y el deseo de cambio, mientras Kratos busca liberarse de su naturaleza destructiva y guiar a su hijo hacia un futuro mejor en un mundo gobernado por dioses y monstruos.',
];
$juego5 = [
    'img' => 'Recursos/img/5.jpg',
    'titulo' => 'FILOSOFIA',
    'descripcion' => 'Se centra en la libertad y la autoelección en un mundo abierto y lleno de posibilidades. Explora la lucha por el poder, el destino y la identidad en un entorno donde las decisiones del jugador moldean la narrativa y el futuro del mundo, mientras se enfrentan a conflictos épicos y desafíos personales.',
];
$juego6 = [
    'img' => 'Recursos/img/6.jpg',
    'titulo' => 'FILOSOFIA',
    'descripcion' => 'Explora el enfrentamiento entre el horror y la supervivencia, centrado en la lucha del protagonista por proteger a su familia en un mundo perturbado por el mal. Examina temas de desesperación, resiliencia y la capacidad humana para enfrentar lo inimaginable en medio de una pesadilla implacable.',
];
$videojuegos = [$juego1, $juego2, $juego3, $juego4, $juego5, $juego6, ];
?>

    <!-- menu de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- logo -->
        <a class="navbar-brand" href="#">
            <img src="Recursos/img/logo.png" alt="" style="width: 35px;"> IESTP "Perú Japón"
        </a>    
    </nav>

    
    <center>
    <img src="Recursos/img/0.jpg" alt="img_principal" width="800" height="500">
    </center>


    <section class="border mt-1" style="height: 150px;">
        <h1 class="text-center mt-4">Mis Videojuegos Favoritos</h1>
    </section>
    <!-- card de productos -->
    <section>
        <div class="container mt-4">
            <div class="row">
                <?php foreach ($videojuegos as $videojuego) { ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <img src="<?php echo $videojuego['img'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $videojuego['titulo'] ?></h5>
                                <p class="card-text" style="text-align: justify;"><?php echo $videojuego['descripcion'] ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="https://store.steampowered.com/?l=spanish" class="btn btn-primary">Descargar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>
    <sript src="resources/bootstrap/js/bootstrap.min.js">
        </script>
</body>

</html>