<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabs Ejemplo</title>
    <link rel="stylesheet" href="/FrontEnd/CSS/empresa.css">
    <script src="../JS/RegistroE.js"></script>
</head>
<body>

    <header>
        <img src="/FrontEnd/Assets/LogoNV.jpg" alt="" width="80px" style="margin:2px 2px;">
        <h1 class="Titulo">New Vision</h1>
    </header>

    <div class="botones">
        <a href="/FrontEnd/HTML/Postulante.php"><button class="uno" type="button">Postulante</button></a>
        <a href="/FrontEnd/HTML/Empresa.php"><button class="dos" type="button">Empresa</button></a>
    </div> <br> <br>

    <ul class="tabs">
        <li class="active" onclick="showTab('tab1')">Usuario</li>
        <li onclick="showTab('tab2')">Datos Empresa</li>
    </ul>

    <div id="tab1" class="tab-content active">
        <h2>Usuario</h2>
        <div class="container">
            <form id="form-tab-1">
                <div class="form-group">
                    <label>Usuario:</label>
                    <input type="text" id="Usuario" name="Usuario" required>
                </div>
                <div class="form-group">
                    <label>Correo Electrónico:</label>
                    <input type="email" id="Correo" name="Correo" required>
                </div>
                <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" id="Contrasena" name="Contrasena" required>
                </div>
                <div class="form-group">
                    <label>Repetir Contraseña:</label>
                    <input type="password" id="RContrasenna" name="RContrasenna" required>
                </div>
                <button type="button" onclick="validateAndSendForm(1)" class="finishform">Siguiente</button>
            </form>
        </div>
    </div>

    <div id="tab2" class="tab-content">
        <h2>Datos de la empresa</h2>
        <div class="container">
            <form id="form-tab-2" action="InicioSesion.php" method="POST">
                <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" id="Nombre" name="Nombre" required>
                </div>
                <div class="form-group">
                    <label>Tipo de empresa:</label>
                    <select id="TipoDeEmpresa" name="TipoDeEmpresa">
                        <option value="Privada">Privada</option>
                        <option value="Publica">Pública</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Teléfono:</label>
                    <input type="tel" id="Telefono" name="Telefono" required>
                </div>
                <div class="form-group">
                    <label>Calle:</label>
                    <input type="text" id="Calle" name="Calle" required>
                </div>
                <div class="form-group">
                    <label>Número:</label>
                    <input type="text" id="NumeroCalle" name="NumeroCalle" required>
                </div>
                <div class="form-group">
                    <label>Ciudad:</label>
                    <input type="text" id="Ciudad" name="Ciudad" required>
                </div>
                <div class="form-group">
                    <label>Estado:</label>
                    <input type="text" id="Estado" name="Estado" required>
                </div>
                <div class="form-group">
                    <label>País:</label>
                    <input type="text" id="Pais" name="Pais" required>
                </div>
                <div class="form-group">
                    <label>Código postal:</label>
                    <input type="text" id="CodigoPostal" name="CodigoPostal" required>
                </div>
                <div class="form-group">
                    <label>Discapacidades admitidas:</label>
                    <input type="text" id="DiscapacidadesAdmitidas" name="DiscapacidadesAdmitidas" required>
                </div>
                <button type="button" onclick="submitForm()" class="finishform">Enviar</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="Referencias">
            <h4><b>Institucional</b></h4>
            <a href="">¿Quiénes somos?</a><br>
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
