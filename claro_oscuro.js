document.addEventListener("DOMContentLoaded", function() {
    let button = document.getElementById('cambiar');
    button.addEventListener("click", function() {
        document.body.classList.toggle("fondo");
    });
});

