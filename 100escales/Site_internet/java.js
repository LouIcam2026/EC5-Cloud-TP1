document.addEventListener("DOMContentLoaded", function () {

    const hamburger = document.querySelector('.menu-hamburger');
    const navSlide = document.querySelector('.nav-slide');

    // Lorsque le hamburger est cliqu�
    hamburger.addEventListener('click', function () {
        navSlide.classList.toggle('open');
    });

    // Si on clique en dehors du menu et du bouton hamburger
    document.addEventListener("click", function (event) {
        if (!navSlide.contains(event.target) && !hamburger.contains(event.target) && navSlide.classList.contains('open')) {
            navSlide.classList.remove('open');
        }
    });

    // Pr�vient le comportement par d�faut du premier �couteur d'�v�nement lors du clic sur le hamburger
    hamburger.addEventListener("click", function (event) {
        event.stopPropagation();
    });
});