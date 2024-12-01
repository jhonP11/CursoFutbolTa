<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios de Cursos de Fútbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://wallpaperaccess.com/full/1398669.jpg'); /* URL de la imagen de fondo */
            background-size: cover;
            background-position: center;
            color: #fff;
            height: 100vh;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }
        .card-body {
            color: #030303;
        }
        h2, h3 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .btn-custom {
            background-color: #007BFF;
            color: white;
            padding: 12px 20px;
            font-size: 1.1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <h2>Horarios de Cursos de Fútbol</h2>
        <p>Únete a nuestros cursos de fútbol. Mejora tus habilidades con entrenadores profesionales.</p>
        
        <!-- Horarios de los Cursos -->
        <div class="card mb-3">
            <div class="card-body">
                <h3>Horarios</h3>
                <p><strong>Lunes y Miércoles:</strong> 10:00 AM - 12:00 PM</p>
                <p><strong>Martes y Jueves:</strong> 4:00 PM - 6:00 PM</p>
                <p><strong>Viernes:</strong> 3:00 PM - 5:00 PM</p>
                <p><strong>Fecha de Inicio:</strong> 10 de diciembre de 2024</p>
            </div>
        </div>

        <!-- Botón de Inscripción -->
        <a href="inscripcion.php" class="btn-custom">Inscribirse</a>

        <!-- Carrusel de Imágenes -->
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade mt-5" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://innatia.info/images/galeria/futbol-ninos-0.jpg" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="https://www.saludalia.com/Uploads/saludalia.com/ImagenesGrandes/7-beneficios-jugar-futbol-para-salud-de-los-ninos.jpg" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="https://www.mundosilbato.es/blog/wp-content/uploads/2017/04/coordinacion-futbol-624x312.jpg" class="d-block w-100" alt="Imagen 3">
                </div>
                <div class="carousel-item">
                    <img src="https://soccerinteraction.com/wp-content/uploads/2022/02/grupo-sia.jpg" class="d-block w-100" alt="Imagen 4">
                </div>
                <div class="carousel-item">
                    <img src="https://www.aj-esmercadal.org/Documents/Imatges/22099img7.jpg" class="d-block w-100" alt="Imagen 5">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Enlazar Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
