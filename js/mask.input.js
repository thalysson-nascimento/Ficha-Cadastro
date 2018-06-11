/*	
* Este script tem a responsabilidade de manter a mascara nos inputs 
*/
$(document).ready(function () { 
	var $campoCpf = $(".cpf-vinculado");
	var $campoCpfDependente = $(".cpf-dependente");
	var $campoIdentidadeVinculado = $(".identidade-vinculado");
	var $campoOrgaoExpedidorMdEb = $(".orgao-expedidor-md-eb");

	$campoCpf.mask('000.000.000-00', {reverse: true});
	$campoCpfDependente.mask('000.000.000-00', {reverse: true});
	$campoIdentidadeVinculado.mask('000000000-0', {reverse: true});
	$campoOrgaoExpedidorMdEb.mask('AA/AA', {reverse: true});
});