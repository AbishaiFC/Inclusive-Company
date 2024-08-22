<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/FrontEnd/CSS/InicioSesion.css">
    <title>InicioSesion-NewVision</title>
</head>
<body>
    <header>
        <img src="/FrontEnd/Assets/LogoNV.jpg" alt="" width="80px" style="margin:2px 2px;">
        <h1 class="Titulo">New Vision</h1>
    </header>

    
    <div class="img-portada">
    <img src="/FrontEnd/Assets/IniciSesion.png" alt="" width="100%">
    </div>
    <div class="login">
        <h1 style="color: #7f7e9b; margin-bottom: 25px; margin-top: 60px;">Tu próxima oportunidad se encuentra aqui</h1> <br>
        <p>Ingresa y postulate a empleos que se adaptan a ti</p>


  <form action="../php/OpenSesion.php" method="post">


<?php
if(isset($_GET['error'])){
    ?>
    <p class="error">
    <?php 
    echo $_GET['error'];
    ?>
    </p>
    <?php
}
?>


    
                <label for="Correo">Continua con tu correo:</label> <br>
                <div class="inputform"></div>
                <input type="email" name="Correo" id="correo">
                <br><br><br>

                <label for="Contrasenna">Introduce tu contraseña:</label> <br>
                <div class="inputform"></div>
                <input type="password" name="Contrasenna" id="contraseña">
                <br>
                  <a href="/FrontEnd/HTML/RContraseña" style="color: #7f7e9b;">¿No recuerdas tu contraseña?</a>
                <br><br><br><br>

            <button type="submit" class="btnContinuar">Continuar</button></a> 
        </form>
    </div>

    <footer>
        <div class="Referencias">
            <h4><b>Institucional</b></h4>
            <a href="">¿Quienes somos?</a><br>
            <a href="">Aviso legal y Privacidad</a><br>
        </div>
        <div class="Referencias">
            <h4><b>Candidatos</b></h4>
            <a href="">Preguntas frecuentes</a><br>
            <a href="/FrontEnd/HTML/Trabajos.html">Empleos</a><br>
        </div>
        <div class="Referencias">
            <h4><b>Empresas</b></h4>
            <a href="">Preguntas frecuentes</a><br>
            <a href="/FrontEnd/HTML/Postulantes.html">Buscar candidatos</a><br>
        </div>
    </footer>

    
</body>
</html>

