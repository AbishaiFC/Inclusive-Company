function validateForm(tabNumber) {
    let form = document.getElementById(`form-tab-${tabNumber}`);
    let isValid = true;

    if (tabNumber === 1) {
        let usuario = form.Usuario ? form.Usuario.value.trim() : "";
        let correo = form.Correo ? form.Correo.value.trim() : "";
        let contrasenna = form.Contrasenna ? form.Contrasenna.value : "";
        let rContrasenna = form.RContrasenna ? form.RContrasenna.value : "";

        if (usuario === "") {
            isValid = false;
            alert("El campo de Usuario es obligatorio.");
        }

        if (!validateEmail(correo)) {
            isValid = false;
            alert("El correo electrónico no es válido.");
        }

        if (contrasenna.length < 6) {
            isValid = false;
            alert("La contraseña debe tener al menos 6 caracteres.");
        }

        if (contrasenna !== rContrasenna) {
            isValid = false;
            alert("Las contraseñas no coinciden.");
        }

    } else if (tabNumber === 2) {
        let tipoDiscapacidad = form.TipoDeDiscapacidad.value.trim();
        let dependencias = form.Dependencias.value.trim();

        if (tipoDiscapacidad === "") {
            isValid = false;
            alert("El campo de Tipo de Discapacidad es obligatorio.");
        }

        if (dependencias === "") {
            isValid = false;
            alert("El campo de Dependencias es obligatorio.");
        }

    } else if (tabNumber === 3) {
        let perfilProfesional = form.perfilProfesional.value.trim();
        let descripcion = form.DescripcionPerfilProfesional.value.trim();

        if (perfilProfesional === "") {
            isValid = false;
            alert("El campo de Perfil Profesional es obligatorio.");
        }

        if (descripcion === "") {
            isValid = false;
            alert("El campo de Descripción es obligatorio.");
        }

    } else if (tabNumber === 4) {
        let nombre = form.Nombre.value.trim();
        let apellidoPaterno = form.ApellidoPaterno.value.trim();
        let fechaNacimiento = form.FechaDeNacimiento.value;

        if (nombre === "") {
            isValid = false;
            alert("El campo de Nombre es obligatorio.");
        }

        if (apellidoPaterno === "") {
            isValid = false;
            alert("El campo de Apellido Paterno es obligatorio.");
        }

        if (fechaNacimiento === "") {
            isValid = false;
            alert("El campo de Fecha de Nacimiento es obligatorio.");
        }
    } 

    return isValid;
}

function validateAndSendForm(tabNumber) {
    if (validateForm(tabNumber)) {
        let form = document.getElementById(`form-tab-${tabNumber}`);
        let formData = new FormData(form);
        
        let endpoint = '';
        switch(tabNumber) {
            case 1:
                endpoint = '../php/UsuarioP.php';
                break;
            case 2:
                endpoint = '../php/DiscapacidadesP.php';
                break;
            case 3:
                endpoint = '../php/PerfilProfesionalP.php';
                break;
            case 4:
                endpoint = '../php/DatosPersonales.php';
                break;
            default:
                console.error('Número de tab fuera de rango');
                return;
        }

        fetch(endpoint, {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
            
            if (data.includes("Datos insertados correctamente")) {
                alert("Datos enviados correctamente");
                
                if (tabNumber < 4) {
                    showTab(tabNumber + 1);
                } else {
                    setTimeout(() => {
                        window.location.href = '../HTML/InicioSesion.php';
                    }, 1000); 
                }
            } else {
                alert("Error al enviar los datos: " + data);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Ocurrió un error al enviar los datos");
        });
    }
}

function showTab(tabIndex) {
    let tabs = document.querySelectorAll('.tab-content');
    let tabButtons = document.querySelectorAll('.tabs li');

    tabs.forEach((tab, index) => {
        if (index + 1 === tabIndex) {
            tab.classList.add('active');
            tabButtons[index].classList.add('active');
        } else {
            tab.classList.remove('active');
            tabButtons[index].classList.remove('active');
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
    showTab(1); 
});

function validateEmail(email) {
    let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function submitForm() {
    validateAndSendForm(4);
}
