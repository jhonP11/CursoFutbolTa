<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    echo '
        <script>
            alert("Por favor, debes iniciar sesión");
            window.location = "loginyregistro.php"
        </script>  
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu curso hacia el éxito</title>
    <style>
        /* General Reset */
        body, h1, h2, h3, p, a {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: ##050505;
            color: #050505;
            line-height: 1.6;
        }

        /* Header */
        .header {
            background: url('https://www.soccerbible.com/media/44332/champions-league-final-ball-2017-by-adidas_0001_462689.jpg') no-repeat center center/cover;
            color: black;
            padding: 20px 0;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .menu a:hover {
            color: ##050505;
        }

        .banner {
            text-align: center;
            padding: 30px;
            background: rgba(0, 0, 0, 0.6);
            margin-top: 30px;
            border-radius: 10px;
        }

        .banner-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
        }

        .banner-description {
            font-size: 1.2rem;
            margin-top: 10px;
            color: #fff;
        }

        .btn-primary-large {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-primary-large:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.2);
        }

        /* Multimedia Section */
        #multimedia .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 40px 0;
        }

        #multimedia iframe, #multimedia img {
            width: 100%;
            max-width: 1000px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Navbar Scroll Effect */
        window.addEventListener("scroll", function () {
            const navbar = document.getElementById("navbar");
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = "#2c3e50";
                navbar.style.transition = "0.3s";
            } else {
                navbar.style.backgroundColor = "transparent";
            }
        });

        /* Link Button */
        .nav-link {
            display: inline-block;
            background-color: transparent;
            color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border: 2px solid #007bff;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: #007bff;
            color: #ffffff;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="container">
        <nav class="navbar" id="navbar">
            <div class="logo">Futbol Mania</div>
            <div class="menu">
                <!-- Solo mostrar el botón de Cursos si el usuario ha iniciado sesión -->
                <?php if (isset($_SESSION["usuario"])): ?>
                    <a href="curso.php" class="nav-link">Cursos</a>
                <?php endif; ?>
                <a href="loginyregistro.php" class="nav-link">Inicia Sesión</a>
                <a href="php/cerrar_sesion.php" class="nav-link">Cerrar Sesión</a>
            </div>
        </nav>

        <div class="banner">
            <h1 class="banner-title">Tu curso hacia el éxito</h1>
            <p class="banner-description">¡Cursos de fútbol personalizados para niños, adolescentes y adultos!</p>
            <a href="loginyregistro.php" class="btn-primary-large">Regístrate</a>
        </div>
    </div>
</header>

<section id="multimedia" class="text-center">
    <div class="container">
        <img src="https://thumbs.dreamstime.com/b/un-entrenador-joven-ense%C3%B1a-los-ni%C3%B1os-la-estrategia-de-jugar-en-el-campo-f%C3%BAtbol-con-portapapeles-193610676.jpg" alt="Jugando fútbol" class="img-fluid rounded mb-3">
        <iframe width="800" height="530" src="https://www.youtube.com/embed/rbUAP3ceimA?si=23pwp1tHzbw-ANge" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</section>

<script>
    // Cambiar color del menú al hacer scroll
    window.addEventListener("scroll", function () {
        const navbar = document.getElementById("navbar");
        if (window.scrollY > 50) {
            navbar.style.backgroundColor = "#2c3e50";
            navbar.style.transition = "0.3s";
        } else {
            navbar.style.backgroundColor = "transparent";
        }
    });

    // Agregar animación al botón
    const joinButton = document.getElementById("joinButton");
    joinButton.addEventListener("mouseover", function () {
        joinButton.style.transform = "scale(1.1)";
        joinButton.style.transition = "0.2s";
    });

    joinButton.addEventListener("mouseout", function () {
        joinButton.style.transform = "scale(1)";
    });

    // Mostrar un mensaje de bienvenida
    window.onload = function () {
        const userName = "<?php echo $_SESSION['usuario']; ?>";
        alert(`¡Bienvenido, ${userName}!`);
    };
</script>

</body>
</html>

