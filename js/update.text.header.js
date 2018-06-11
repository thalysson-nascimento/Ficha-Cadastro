/*
* Este script tem a finalidade de realizar a substituição dos valores dos textos
* no cabeçalho e no rodapé após inserção dos valores nos inputs
*/
$(document).ready(function() {
	$('.nome-vinculado').on('change', function() {
		var value = $(this).val();
		$('.trc-nome-vinculado').text(value);
	});
	$('.identidade-vinculado').on('change', function() {
		var value = $(this).val();
		$('.trc-identidade-vinculado').text(value);
	});
	$('.orgao-expedidor').on('change', function() {
		var value = $(this).val();
		$('.trc-orgao-expedidor').text(value);
	});
	$('.cpf-vinculado').on('change', function() {
		var value = $(this).val();
		$('.trc-cpf-vinculado').text(value);
	});
	$('.logradouro').on('change', function() {
		var value = $(this).val();
		$('.trc-logradouro').text(value);
	});
	$('.numero-residencia').on('change', function() {
		var value = $(this).val();
		$('.trc-numero-residencia').text(value);
	});
	$('.bairro').on('change', function() {
		var value = $(this).val();
		$('.trc-bairro').text(value);
	});
	$('.cidade').on('change', function() {
		var value = $(this).val();
		$('.trc-cidade').text(value);
	});
	$('.uf').on('change', function() {
		var value = $(this).val();
		$('.trc-uf').text(value);
	});
	$('.posto-grad').on('change', function() {
		var value = $(this).val();
		$('.trc-posto-grad').text(value);
	});
	$('.situacao').on('change', function() {
		var value = $(this).val();
		$('.trc-situacao').text(value);
	});
});