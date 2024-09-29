<?php
// Desactivar la visualización de errores
error_reporting(0);
ini_set('display_errors', 0);
?>

<?php 
// Datos de conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "ejemplo";

// Crear la conexión
$conexion = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dragon Balline</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="ball.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Imagenes DG/LogoDG.png" alt="Logo de Dragon Ball" class="nav-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Personajes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#personajes">Personajes</a>
                            <a class="dropdown-item" href="#transformaciones">Transformaciones</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Historia">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Video">Video</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselDragonBall" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Imagenes DG/GokuTF.gif" class="d-block w-100 carousel-img" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="Imagenes DG/Vegeta.jpg" class="d-block w-100 carousel-img" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="Imagenes DG/dragon ballz.jpg" class="d-block w-100 carousel-img" alt="Slide 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselDragonBall" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselDragonBall" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
       
    </div>

    <section id="inicio" class="container my-5"><!-- Contenido de la sección Inicio --></section>
    <section id="Historia" class="container my-5">
        <br>
        <h2>Historia</h2>
        <p>Dragon Ball es el manga y anime considerado como el más visto en toda la historia el cual narra
            las aventuras de Gokú un niño alienigena que llega a la tierra y es criado como un humano, este
            niño le apacionan las artes marciales, pelear y su objetivo es volverse más fuerte, durante
            este proceso Gokú conoce amigos y enemigos que lo ayudaran a volverse más fuerte y a su vez
            buscan las esferas del dragon las cuales conceden cualquier deseo. Todo esta historia se
            cuenta através de varias series tales como:
        </p>
        <ul>
            <li>Dragon Ball</li>
            <li>Dragon Ball Z</li>
            <li>Dragon Ball GT</li>
            <li>Dragon Ball Super</li>
        </ul>
        </section>
<hr>
    <section id="personajes" class="container my-5">
<br>
<br>

        <h2>Personajes</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="Imagenes DG/Goku.gif" data-hover="Imagenes DG/GokuFase1.jpg" class="img-fluid img-thumbnail hover-img" alt="Goku">
                <h3>Goku</h3>
                <p>El protagonista principal de la serie.</p>
            </div>
            <div class="col-md-4">
                <img src="Imagenes DG/Vegeta.gif" data-hover="Imagenes DG/VegetaBase.webp" class="img-fluid img-thumbnail hover-img" alt="Vegeta">
                <h3>Vegeta</h3>
                <p>El príncipe de los Saiyajin.</p>
            </div>
            <div class="col-md-4">
                <img src="Imagenes DG/Piccolo.gif" data-hover="Imagenes DG/GohanBase.jpg" class="img-fluid img-thumbnail hover-img" alt="Piccolo">
                <h3>Piccolo</h3>
                <p>El poderoso guerrero Namekiano.</p>
            </div>
        </div>
    </section>

    <section id="transformaciones" class="container my-5">
        <h2>Transformaciones</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="imagen-cambiable">
                    <img src="Imagenes DG/GokuFase1.jpg" class="img-fluid img-thumbnail" alt="GokuSSJ.jpg">
                    <img src="Imagenes DG/GokuSSJ.jpg" class="img-fluid img-thumbnail hover" alt="GokuSSJ.jpg">
                </div>
                <h3>Goku Super Saiyajin</h3>
                <p>Goku alcanza el estado de Super Saiyajin en la batalla contra Freezer.</p>
            </div>
            <div class="col-md-4">
                <div class="imagen-cambiable">
                    <img src="Imagenes DG/GohanBase.jpg" class="img-fluid img-thumbnail" alt="GohanSSJ2.jpg">
                    <img src="Imagenes DG/GohanSSJ2.jpg" class="img-fluid img-thumbnail hover" alt="GohanSSJ2.jpg">
                </div>
                <h3>Gohan Super Saiyajin 2</h3>
                <p>Gohan se transforma en Super Saiyajin 2 durante la lucha contra Cell.</p>
            </div>
            <div class="col-md-4">
                <div class="imagen-cambiable">
                    <img src="Imagenes DG/VegetaBase.webp" class="img-fluid img-thumbnail" alt="VegetaSSJ2.png">
                    <img src="Imagenes DG/VegetaSSJ2.png" class="img-fluid img-thumbnail hover" alt="VegetaSSJ2.png">
                </div>
                <h3>Vegeta Super Saiyajin</h3>
                <p>Vegeta logra transformarse en Super Saiyajin después de un intenso entrenamiento.</p>
            </div>
        </div>
    </section>

    

        <section id="Video" class="container my-5"> 
            <br>
        <h2>Trailer</h2>

        <p>A continuación se mostrara uno de los proximos productos de Dragon Ball que saldra este año
            en Octubre y que los fans tanto esperan, el nuevo videojuego Dragon Ball Sparking zero:</p>
         

        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/AnJeGLHjuZE?si=IqrPOBl5aU0_FIl9" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </section>
    
         <!-- Formulario -->
    <form action="#" name="ejemplo" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="text" name="rut" placeholder="RUT" required>
        <textarea name="comentarios" placeholder="Comentarios" required></textarea>
        <input type="submit" name="registro" value="Registrar">
        <input type="reset" value="Limpiar">
    </form>

    <br>
    <br>

    <?php
// Comprobamos si se ha presionado el botón de registro
if (isset($_POST['registro'])) {
    // Recogemos los valores del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $rut = $_POST['rut'];
    $comentarios = $_POST['comentarios'];

    // Sentencia SQL para insertar los datos en la base de datos
    $insertarDatos = "INSERT INTO datos (nombre, correo, rut, comentarios) VALUES ('$nombre', '$correo', '$rut', '$comentarios')";

    // Ejecutar la consulta
    $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);

    // Comprobar si la consulta se ejecutó correctamente
    if ($ejecutarInsertar) {
        echo "Datos registrados correctamente.";
    } else {
        echo "Error al registrar los datos: " . mysqli_error($conexion);
    }
}

// Cerramos la conexión a la base de datos
mysqli_close($conexion);
?>

    <a href="#"  id="scrollToTopButton" title="Volver arriba">
        <i class="fas fa-arrow-up"></i>

    </a>

    <footer id="contacto" class="bg-dark text-white text-center p-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>&copy; 2024 Desarrollado por Gianfranco Moriconi. Curso 4I, Rancagua, Chile.</p>
                </div>
                <div class="col-12">
                    <a href="https://www.facebook.com/DragonBall" class="text-white mx-2" target="_blank"><i class="fab fa-facebook fa-2x">facebook</i></a>
                    <a href="https://twitter.com/dragonballsuper" class="text-white mx-2" target="_blank"><i class="fab fa-twitter fa-2x"></i>X</a>
                    <a href="https://www.instagram.com/dragonballsuper/" class="text-white mx-2" target="_blank"><i class="fab fa-instagram fa-2x"></i>Instagram</a>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                   
                </div>
                <a href="#"><img src="Imagenes DG/flecha.png" width="50" style="border-radius: 45px;"></a>
            </div>
        </div>
    </footer>

   
   
   

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

    

</body>

</html>


