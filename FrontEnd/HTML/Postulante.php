<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="/FrontEnd/CSS/Postulante.css">
    <script src="../JS/RegistroP.js"></script>
</head>
<body>

<header>
    <img src="/FrontEnd/Assets/LogoNV.jpg" alt="" width="80px" style="margin:2px 2px;">
    <h1 class="Titulo">New Vision</h1>
</header>

<div class="botones">
    <a href="/FrontEnd/HTML/Postulante.php"><button type="button" class="uno">Postulante</button></a>
    <a href="/FrontEnd/HTML/Empresa.php"><button type="button" class="dos">Empresa</button></a>
</div> <br> <br>

<ul class="tabs">
    <li class="active" onclick="showTab(1)">Usuario</li>
    <li onclick="showTab(2)">Discapacidad</li>
    <li onclick="showTab(3)">Perfil profesional</li>
    <li onclick="showTab(4)">Datos personales</li>
</ul>

<div id="tab-content-1" class="tab-content active">
    <h2>Usuario</h2>
    <div class="container">
        <form id="form-tab-1">
            <div class="form-group">
                <label>Usuario:</label>
                <input type="text" id="Usuario"" name="Usuario" required>
            </div>
            <div class="form-group">
                <label>Correo Electrónico:</label>
                <input type="email" id="Correo" name="Correo" required>
            </div>
            <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" id="Contrasenna" name="Contrasenna" required>
            </div>
            <div class="form-group">
                <label>Repetir Contraseña:</label>
                <input type="password" id="RContrasenna" name="RContrasenna" required>
            </div>
            <button type="button" onclick="validateAndSendForm(1)" class="finishform">Siguiente</button>
        </form>
    </div>
</div>

<div id="tab-content-2" class="tab-content">
    <h2>Discapacidad</h2>
    <div class="container">
        <form id="form-tab-2">
            <div class="form-group">
                <label>Tipo de discapacidad:</label>
                <input type="text" id="TipoDeDiscapacidad" name="TipoDeDiscapacidad" required>
            </div>
            <div class="form-group">
                <label>Dependencias:</label>
                <input type="text" id="Dependencias" name="Dependencias" required>
            </div>
            <div class="form-group">
                <label>Nivel de afectación:</label>
                <input type="text" id="NivelDeAfectacion" name="NivelDeAfectacion" required>
            </div>
            <div class="form-group">
                <label>Descripción adicional:</label>
                <input type="text" id="DescripciónAdicional" name="DescripciónAdicional" required>
            </div>
            <button type="button" onclick="validateAndSendForm(2)" class="finishform">Siguiente</button>
        </form>
    </div>
</div>

<div id="tab-content-3" class="tab-content">
    <h2>Perfil profesional</h2>
    <div class="container">
        <form id="form-tab-3">
            <div class="form-group">
                <label>Perfil profesional:</label>
                <input type="text" id="perfilProfesional" name="perfilProfesional" required>
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <input type="text" id="DescripcionPerfilProfesional" name="DescripcionPerfilProfesional" required>
            </div>
            <div class="form-group">
                <label>Curriculum:</label>
                <input type="file" id="Curriculum" name="Curriculum" required>
            </div>
            <div class="form-group">
                <label>IMSS:</label>
                <input type="text" id="IMSS" name="IMSS" required>
            </div>
            <div class="form-group">
                <label>Nivel de estudios:</label>
                <select id="NivelDeEstudios" name="NivelDeEstudios">
                    <option value="opcion1">Primaria</option>
                    <option value="opcion2">Secundaria</option>
                    <option value="opcion3">Preparatoria</option>
                    <option value="opcion4">Titulado</option>
                </select>
            </div>
            <button type="button" onclick="validateAndSendForm(3)" class="finishform">Siguiente</button>
        </form>
    </div>
</div>

<div id="tab-content-4" class="tab-content">
    <h2>Datos personales</h2>
    <div class="container">
        <form id="form-tab-4"  method="POST" action="InicioSesion.php">
            <div class="form-group">
                <label>Nombre Completo:</label>
                <input type="text" id="Nombre" name="Nombre" required>
            </div>
            <div class="form-group">
                <label>Apellido paterno:</label>
                <input type="text" id="ApellidoPaterno" name="ApellidoPaterno" required>
            </div>
            <div class="form-group">
                <label>Apellido materno:</label>
                <input type="text" id="ApellidoMaterno" name="ApellidoMaterno" required>
            </div>
            <div class="form-group">
                <label>Calle:</label>
                <input type="text" id="Calle" name="Calle" required>
            </div>
            <div class="form-group">
                <label>Ciudad:</label>
                <input type="text" id="Ciudad" name="Ciudad" required>
            </div>
            <div class="form-group">
                <label>EstadoPaís:</label>
                <input type="text" id="EstadoPaís" name="EstadoPaís" required>
            </div>
            <div class="form-group">
                <label>Código postal:</label>
                <input type="text" id="CodigoPostal" name="CodigoPostal" required>
            </div>
            <div class="form-group">
                <label>Número de Teléfono Celular:</label>
                <input type="tel" id="TelefonoCelular" name="TelefonoCelular" style="width: 95%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;" placeholder="" required >
            </div>
            <div class="form-group">
                <label>Número de Teléfono Fijo:</label>
                <input type="tel" id="Telefonofijo" name="Telefonofijo" style="width: 95%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;" placeholder="">
            </div>
            <div class="form-group">
                <label>Fecha de Nacimiento:</label>
                <input type="date" id="FechaDeNacimiento" name="FechaDeNacimiento" style="width: 95%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;" required>
            </div>
            <label>Género:</label>
            <div class="form-group">
                <select id="Genero" name="Genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
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
