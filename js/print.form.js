/*
* Este script tem a responsabilidade de imprimir o formulário após os inputs estarem devidamente preenchidos
*/
$(function () {
	$("#form-linked-record").submit(function () {
		var vazios = $("input[type=text], select").filter(function() {
			return !this.value;
		}).get();

		if (vazios.length) {
			$(vazios).addClass('vazio');
			$('#modal-error').modal('show');
			return false;
		} else {
			function printArea(){
				// $("#add-dependent").remove();
				$("#content-info").remove();
				$(this).closest('.#add-dependent').remove();
				$('body').css('visibility', 'hidden');
				$('.printableArea').css('visibility', 'visible');
				window.print();
			}
			printArea();
		}
	});
});