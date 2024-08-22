 // perfil.js
 document.addEventListener('DOMContentLoaded', function() {
    var notificacionesModal = document.getElementById('notificacionesModal');
    var usuarioModal = document.getElementById('usuarioModal');
    var notificacionesBtn = document.getElementById('notificacionesBtn');
    var usuarioBtn = document.getElementById('usuarioBtn');
    var notificacionesClose = document.getElementById('notificacionesClose');
    var usuarioClose = document.getElementById('usuarioClose');

    // Mostrar el modal de notificaciones
    notificacionesBtn.onclick = function() {
        notificacionesModal.style.display = 'block';
    }

    // Mostrar el modal de usuario
    usuarioBtn.onclick = function() {
        usuarioModal.style.display = 'block';
    }

    // Ocultar el modal de notificaciones
    notificacionesClose.onclick = function() {
        notificacionesModal.style.display = 'none';
    }

    // Ocultar el modal de usuario
    usuarioClose.onclick = function() {
        usuarioModal.style.display = 'none';
    }

    // Ocultar el modal si se hace clic fuera del contenido del modal
    window.onclick = function(event) {
        if (event.target === notificacionesModal) {
            notificacionesModal.style.display = 'none';
        }
        if (event.target === usuarioModal) {
            usuarioModal.style.display = 'none';
        }
    }
});