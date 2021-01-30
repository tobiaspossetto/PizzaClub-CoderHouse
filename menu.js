$(document).ready(main);

var contador = 1;

function cambiarImagenjQ() {
    if (contador == 1) {

        $("#icono").attr("src", "assets/img/menu-activo.png");
        $("#icono").attr("width", "25px");
    } else {
        $("#icono").attr("src", "assets/img/menu.png");
    }
}

function main() {
    $('.menu-responsive__bt-menu').click(function() {
        //$('nav').toggle();
        if (contador == 1) {
            //$(".menu-responsive__contenedor-boton").css("background-color", "#FFB40D");
            $('nav').animate({
                left: '0'
            });
            cambiarImagenjQ();

            contador = 0;
        } else {
            $('nav').animate({
                left: '-100%'
            });
            cambiarImagenjQ();
            contador = 1;
            //$(".menu-responsive__contenedor-boton").css("background-color", "#000000a6");
        }
    });
};