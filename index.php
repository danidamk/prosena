<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet"  href="http://localhost/prosena/css/style.css">
    <title>Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form  action="" method="POST" id="form" >
                <h1>crear cuenta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <!--campo de registro-->
               
                <input type="text" name="" id="Nombre"  placeholder="Nombre" >
               
                <input type="email" name=""   id="Email" placeholder="Email" >
                
                <input type="password" name=""  id="Contraseña"  placeholder="Contraseña" >
              
                <input type="password" name=""  id="Validar Contraseña" placeholder="Validar Contraseña" >
                <button class="submit">Registrarse</button>
               <p class="warnings" id="warnings" ></p>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Iniciar Sesión</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>o utiliza tu contraseña y correo electronico</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Contraseña">
                <a href="#">¿Olvidaste tu contraseña?</a>
              <a class="reg" class="button" href="/registro admin/registro.html">Iniciar Sesion</a>
               
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <img src="http://localhost/prosena/img/sena.png" alt="">
                    <p>Ingrese sus datos personales para utilizar todas las funciones del sitio </p>
                    <button class="hidden" id="login">Iniciar sesion</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <img src="http://localhost/prosena/img/sena.png " alt="">
                    <p>Regístrese con sus datos personales para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="register">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script src="http://localhost/prosena/script/js.js"></script>
    
</body>

</html>