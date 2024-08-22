function showTab(tabNumber) {
    // Oculta todas las pestañas y el contenido
    document.querySelectorAll('.tabs li').forEach((tab) => {
        tab.classList.remove('active');
    });
    document.querySelectorAll('.tab-content').forEach((content) => {
        content.classList.remove('active');
    });

    // Muestra la pestaña seleccionada y su contenido
    document.querySelectorAll('.tabs li')[tabNumber - 1].classList.add('active');
    document.querySelector('#tab-content-' + tabNumber).classList.add('active');
}