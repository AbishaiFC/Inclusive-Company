function showTab(tabId) {
    // Ocultar todas las pestañas
    const tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => tab.style.display = 'none');

    // Mostrar la pestaña seleccionada
    document.getElementById(tabId).style.display = 'block';
}
