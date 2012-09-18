/*
Slider vertical
autor: coyr
Sitio: www.xoyaz.com
 
 FUENTE: http://www.jose-aguilar.com/blog/slider-jquery-vertical-noticias/

 */
 

velocidad = 1500;
tiempoEspera = 7000;
verificar = 1;
dif = 0;
timer = 0

function moverSlider() {
	sliderAltura = $(".bloque-slider").height();
	moduloAltura = $(".modulo-slider").height()
			+ parseFloat($(".modulo-slider").css("padding-top"))
			+ parseFloat($(".modulo-slider").css("padding-bottom"));
	sliderTop = parseFloat($(".bloque-slider").css("top"));
	dif = sliderAltura + sliderTop;
	if (verificar == 1) {
		if (dif > moduloAltura) {
			$(".bloque-slider").animate({
				top : "-=" + moduloAltura
			}, velocidad);
			timer = setTimeout('moverSlider()', tiempoEspera);
		} else {
			clearTimeout(timer);
			$(".bloque-slider").css({
				top : 0
			});
			timer = setTimeout('moverSlider()', 0);
		}
	} else {
		timer = setTimeout('moverSlider()', 1000);
	}
}

function bajarSlider() {
	if (dif >= moduloAltura * 2) {
		$(".bloque-slider").animate({
			top : "-=" + moduloAltura
		}, velocidad);
	} else {
		$(".bloque-slider").css({
			top : 0
		});
		$(".bloque-slider").animate({
			top : "-=" + moduloAltura
		}, velocidad);
	}
}

function subirSlider() {
	if (sliderTop <= -moduloAltura) {
		$(".bloque-slider").animate({
			top : "+=" + moduloAltura
		}, velocidad);
	} else {
		$(".bloque-slider").css({
			top : -sliderAltura + moduloAltura
		});
		$(".bloque-slider").animate({
			top : "+=" + moduloAltura
		}, velocidad);
	}
}

// EL SLIDER EN ACCIÓN. CARGA DOCUMENTO Y COMIENZA A MOVER LAS OFERTAS

$(document).ready(function() {
    moverSlider();
    $(".bajar-slider").click(function(){
        bajarSlider();
    });

    $(".subir-slider").click(function(){
        subirSlider();
    });

    $(".slider-vertical").mouseover(function(){
        verificar = 0;
    });

    $(".slider-vertical").mouseout(function(){
        verificar = 1;
    });
});