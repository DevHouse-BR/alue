	
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
			
			
			$("#nome_00").inputValue($("#nome_00").attr("placeholder"));
			$("#email_00").inputValue($("#email_00").attr("placeholder"));
			$("#telefone_00").inputValue($("#telefone_00").attr("placeholder"));
			$("#assunto_00").inputValue($("#assunto_00").attr("placeholder"));
			$("#mensagem_00").inputValue($("#mensagem_00").attr("placeholder"));

									
			// Validações
			$("#envia_contato").validate({
				
				rules: {
					unidade_00: {requiredCustomized: true},
					nome_00: {requiredCustomized: true},
					email_00: {requiredCustomized: true, email: true},
					telefone_00: {requiredCustomized: true},
					assunto_00: {requiredCustomized: true},
					mensagem_00: {requiredCustomized: true}
				},
				messages: {
					unidade_00: {
						requiredCustomized: "Campo obrigatório"
					},
					nome_00: {
						requiredCustomized: "Campo obrigatório"
					},
					email_00: {
						requiredCustomized: "Campo obrigatório",
						email: "E-mail inválido"
					},
					telefone_00: {
						requiredCustomized: "Campo obrigatório"
					},
					assunto_00: {
						requiredCustomized: "Campo obrigatório"
					},
					mensagem_00: {
						requiredCustomized: "Campo obrigatório"
					},
				}
			});
			
			$("#send").click(function() {
								
				// verificando se o formulário contém informações válidas
				if ($("#envia_contato").valid()) {
									
					$("#envia_contato").hide();
					$("#please-wait").show();
					
					lang = $("input[name=lang_00]").val();
					
					unidade_00 = $("select[name=unidade_00]").val();					
					nome_00 = $("input[name=nome_00]").val();
					email_00 = $("input[name=email_00]").val();
					telefone_00 = $("input[name=telefone_00]").val();
					assunto_00 = $("input[name=assunto_00]").val();
					mensagem_00 = $("textarea[name=mensagem_00]").val();
					
					$.post("http://www.escritoriosbc.com.br/envia_contato_01", {"unidade_00":unidade_00, "nome_00":nome_00, "email_00":email_00, "telefone_00":telefone_00, "assunto_00":assunto_00, "mensagem_00":mensagem_00, "lang":lang},
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