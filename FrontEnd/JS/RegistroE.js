function validateForm(tabNumber) {
    let form = document.getElementById(`form-tab-${tabNumber}`);
    let isValid = true;

    if (tabNumber === 1) {
        let usuario = document.getElementById('Usuario').value.trim();
        let correo = document.getElementById('Correo').value.trim();
        let contrasenna = document.getElementById('Contrasena').value.trim();
        let rContrasenna = document.getElementById('RContrasenna').value.trim();

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
        let nombre = document.getElementById('Nombre').value.trim();
        let telefono = document.getElementById('Telefono').value.trim();
        let calle = document.getElementById('Calle').value.trim();
        let numeroCalle = document.getElementById('NumeroCalle').value.trim();
        let ciudad = document.getElementById('Ciudad').value.trim();
        let estado = document.getElementById('Estado').value.trim();
        let pais = document.getElementById('Pais').value.trim();
        let codigoPostal = document.getElementById('CodigoPostal').value.trim();
        let discapacidadesAdmitidas = document.getElementById('DiscapacidadesAdmitidas').value.trim();

        if (nombre === "") {
            isValid = false;
            alert("El campo de Nombre es obligatorio.");
        }

        if (telefono === "") {
            isValid = false;
            alert("El campo de Teléfono es obligatorio.");
        }

        if (calle === "") {
            isValid = false;
            alert("El campo de Calle es obligatorio.");
        }

        if (numeroCalle === "") {
            isValid = false;
            alert("El campo de Número de Calle es obligatorio.");
        }

        if (ciudad === "") {
            isValid = false;
            alert("El campo de Ciudad es obligatorio.");
        }

        if (estado === "") {
            isValid = false;
            alert("El campo de Estado es obligatorio.");
        }

        if (pais === "") {
            isValid = false;
            alert("El campo de País es obligatorio.");
        }

        if (codigoPostal === "") {
            isValid = false;
            alert("El campo de Código Postal es obligatorio.");
        }

        if (discapacidadesAdmitidas === "") {
            isValid = false;
            alert("El campo de Discapacidades Admitidas es obligatorio.");
        }
    }

    return isValid;
}

function validateAndSendForm(tabNumber) {
    if (validateForm(tabNumber)) {
        let form = document.querySelector(`#tab${tabNumber} form`);
        let formData = new FormData(form);
        
        let endpoint = '';
        switch(tabNumber) {
            case 1:
                endpoint = '../php/UsuarioE.php';
                break;
            case 2:
                endpoint = '../php/DatosEmpresa.php';
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
                
                if (tabNumber < 2) {
                    showTab(`tab${tabNumber + 1}`);
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

function showTab(tabId) {
    const tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => tab.style.display = 'none');

    document.getElementById(tabId).style.display = 'block';
}

document.addEventListener("DOMContentLoaded", function () {
    showTab('tab1'); 
});

function validateEmail(email) {
    let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function submitForm() {
    validateAndSendForm(2);
}
