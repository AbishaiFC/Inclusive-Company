 // script.js
 document.addEventListener('DOMContentLoaded', function() {
    var recoveryForm = document.getElementById('recoveryForm');
    var message = document.getElementById('message');

    recoveryForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe de la manera tradicional

        var email = document.getElementById('email').value;

        // Validar el correo electrónico
        if (email) {
            // Aquí puedes agregar la lógica para enviar el correo electrónico de recuperación
            // Por ejemplo, hacer una solicitud a un servidor

            // Simulación de un mensaje de éxito
            message.textContent = 'Hemos enviado un enlace de recuperación a ' + email + '.';
            message.style.color = 'green';
        } else {
            message.textContent = 'Por favor, introduce un correo electrónico válido.';
            message.style.color = 'red';
        }
    });
});
