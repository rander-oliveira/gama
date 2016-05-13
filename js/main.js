$(document).ready(function(){
	//BOTÃO CTA CLIENTES (P/ HABILITAR DESCOMENTAR LINHA ABAIXO)
	// $("button.btn-cta-usr").first().trigger("click");

	//BOTÃO CTA EMPRESA (P/ HABILITAR DESCOMENTAR LINHA ABAIXO)
	//$("button.btn-cta-company").first().trigger("click");
	
	$(window).scroll(function() {
		if ($(document).scrollTop() > 50) {
			$('nav').addClass('shrink');
		} else {
			$('nav').removeClass('shrink');
		}
	});
	
	
	//DELAY PARA MOSTRAR O FORM (P/ HABILITAR DESCOMENTAR AS LINHAS ABAIXO)
	setTimeout(function() {
        $("button.btn-cta-company").first().trigger('click');
    },10000);
});