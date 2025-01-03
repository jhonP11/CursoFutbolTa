<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribirse</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>Inscribete</h3>
                        <p>Nuestros cursos son personalizados</p>
                        <button id="btn__iniciar-sesion">Inscribirse</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>Inscribete</h3>
                        <p>Tenemos los mejores cursos para ti</p>
                        <button id="btn__registrarse">Inscribirse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_inscripcion_be.php" method="POST" class="formulario__login">
                        <h2>Inscribirse</h2>
                        <input type="text" placeholder="nombre" name="nombre">
                        <input type="text" placeholder="apellido" name="apellido">
                        <input type="text" placeholder="cedula" name="cedula">
                        <input type="text" placeholder="telefono" name="telefono">
                        <input type="text" placeholder="direccion" name="direccion">
                        <input type="text" placeholder="edad" name="edad">
                        <button>Entrar</button>
</form>


                    <!--Register-->
                    <form action="php/registro_inscripcion_be.php" method="POST" class="formulario__register">
                        <h2>Inscribirse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre">
                        <input type="text" placeholder="apellido" name="apellido">
                        <input type="text" placeholder="cedula" name="cedula">
                        <input type="text" placeholder="telefono" name="telefono">
                        <input type="text" placeholder="direccion" name="direccion">
                        <input type="text" placeholder="edad" name="edad">
                        <button>Inscribirse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>