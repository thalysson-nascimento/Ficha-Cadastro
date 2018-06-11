/*
* Este script tem a finalidade de limitar os caracteres dos inputs
*/
$(document).ready(function() {
	$(".info-nome-vinculado").html("Limite máximo de 80 caracteres.");
	$(".info-av-rua").html("Limite máximo de 80 caracteres.");
	$(".info-bairro").html("Limite máximo de 20 caracteres.");

	$(".nome-vinculado").on('keydown', function(e) {
		if ($(this).val().length >= 80 && e.keyCode != 8 && e.keyCode != 9) {
			$(".info-nome-vinculado").html("Limite máximo de <b>80 caracteres</b>.");
			return false;
		}else{
			$(".info-nome-vinculado").html("Limite máximo de 80 caracteres.");
		}
	});

	$(".logradouro").on('keydown', function(e) {
		if ($(this).val().length >= 80 && e.keyCode != 8 && e.keyCode != 9) {
			$(".info-av-rua").html("Limite máximo de <b>80 caracteres</b>.");
			return false;
		}else{
			$(".info-av-rua").html("Limite máximo de 80 caracteres.");
		}
	});

	$(".numero-residencia").on('keydown', function(e) {
		if ($(this).val().length >= 4 && e.keyCode != 8 && e.keyCode != 9) {
			return false;
		}
	});

	$(".bairro").on('keydown', function(e) {
		if ($(this).val().length >= 20 && e.keyCode != 8 && e.keyCode != 9) {
			$(".info-bairro").html("Limite máximo de <b>20 caracteres</b>.");
			return false;
		}else{
			$(".info-bairro").html("Limite máximo de 20 caracteres.");
		}
	});

	$(".cidade").on('keydown', function(e) {
		if ($(this).val().length >= 20 && e.keyCode != 8 && e.keyCode != 9) {
			return false;
		}
	});
});