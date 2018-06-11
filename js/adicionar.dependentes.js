/*
* Este scrpit tem a finalidade de adicionar outros dependentes caso o botão
* 'adicionar outros dependentes' seja prescionado
*/
$(document).ready(function(){

	var max_element = 10;
	var element_inicial = 1;
	var elm_html = $('.clone_form').html();

	$(document).on('click', '#adicionar_dependentes', function(e){
		e.preventDefault();
		if (element_inicial < max_element) {
			element_inicial ++;
			var i = $('.dados_dos_denpendetes').length;
			var elementos = elm_html.replace(/\[[0\]]\]/g, '['+i+++']');
			$('.clone_form').append(elementos);
		}else{
			alert ("O limite máximo de vinculado para cadastro são de 10 (dez) dependentes.");
		}
	});

});