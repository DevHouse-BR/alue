	
		/*
		 * Adicionando validadores de formulários necessários
		 */
		 
		// Validador de campos obrigatórios
		$.validator.addMethod("requiredCustomized", function(value, element) {
			var defaultValue = $(element).attr('title');
			
			if ($(element).val() == defaultValue || $(element).val() == "") {
				return false;
			}
			return true;
		}, "Campo obrigatório");  // Mensagem padrão
	
	
		/*
		 * Quando a estrutura DOM estiver pronta...
		 */
    	$(document).ready(function() {
			
			$("#telefone_00").mask("(99) 9999-9999");
			$("#nome_00").inputValue($("#nome_00").attr("title"));
			$("#email_00").inputValue($("#email_00").attr("title"));
			$("#telefone_00").inputValue($("#telefone_00").attr("title"));
			$("#assunto_00").inputValue($("#assunto_00").attr("title"));
			$("#mensagem_00").inputValue($("#mensagem_00").attr("title"));

									
			// Validações
			$("#envia_contato").validate({
				
				rules: {
					nome_00: {requiredCustomized: true},
					telefone_00: {requiredCustomized: true},
					assunto_00: {requiredCustomized: true},
					mensagem_00: {requiredCustomized: true}
				},
				messages: {
					nome_00: {
						requiredCustomized: "Campo obrigat&oacute;rio"
					},
					telefone_00: {
						requiredCustomized: "Campo obrigat&oacuterio"
					},
					assunto_00: {
						requiredCustomized: "Campo obrigat&oacuterio"
					},
					mensagem_00: {
						requiredCustomized: "Campo obrigat&oacuterio"
					},
				}
			});
			
			$("#send").click(function() {
								
				// verificando se o formulário contém informações válidas
				if ($("#envia_contato").valid()) {
									
					$("#envia_contato").hide();
					$("#please-wait").show();
						
					nome_00 = $("input[name=nome_00]").val();
					email_00 = $("input[name=email_00]").val();
					if (email_00 == $("input[name=email_00]").attr('title')){
						email_00 = "Nao Consta";						
					}
					telefone_00 = $("input[name=telefone_00]").val();
					assunto_00 = $("input[name=assunto_00]").val();
					mensagem_00 = $("textarea[name=mensagem_00]").val();
					
					$.post("http://www.alueesquadrias.com.br/envia_contato_01.php", { "nome_00":nome_00, "email_00":email_00, "telefone_00":telefone_00, "assunto_00":assunto_00, "mensagem_00":mensagem_00},
						function(data) {
							$("#please-wait").hide();
							$("#message-box > h1").html(data.message);
							$("#message-box").show();
						},"json"
					);
				}
				
				return false;
			});
			
		});