$(document).ready(main);

var contador = 1;

function main() {
    $('.bt-menu').click(function() {
        //$('nav').toggle();
        if (contador == 1) {
            $(".contenedor-boton").css("background-color", "#FFB40D");
            $('nav').animate({
                left: '0'
            });

            contador = 0;
        } else {
            $('nav').animate({
                left: '-100%'
            });
            contador = 1;
            $(".contenedor-boton").css("background-color", "#000000a6");
        }
    });
};