document.addEventListener('DOMContentLoaded', function () {
    // Obtener referencias a elementos del DOM
    var modal = document.getElementById('myModal');
    var openModalBtn = document.getElementById('openModalBtn');
    var closeModalBtn = document.querySelector('.close');
    var cancelBtn = document.querySelector('.closeModalBtn');

    // Abrir el modal al hacer clic en el botón
    openModalBtn.addEventListener('click', function () {
        modal.style.display = 'block';
    });

    // Cerrar el modal al hacer clic en la 'x' o fuera del contenido
    closeModalBtn.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function (event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });

    // Cerrar el modal al hacer clic en el botón de cancelar
    cancelBtn.addEventListener('click', function () {
        modal.style.display = 'none';
    });
});
