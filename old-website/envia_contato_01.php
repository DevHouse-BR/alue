<?php

	$nome_01 = $_POST['nome_00'];
	$email_01 = empty($_POST['email_00']) ? "Nao Consta."  : $_POST['email_00'];
	$telefone_01 = $_POST['telefone_00'];
	$assunto_01 = $_POST['assunto_00'];
	$mensagem_01 = $_POST['mensagem_00'];
	
	if (!empty($nome_01) && !empty($telefone_01) && !empty($assunto_01)) {
		
		
			// Configurando o phpmailer
		include("lib/phpmailer/class.phpmailer.php");
			
		$msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
					<body>
						
						<h1 style="float: left; display: block; margin: 0pt; padding: 0pt; height: 30px; line-height: 30px; color: rgb(0, 102, 153); font-weight: bold; font-size: 17px;">
							Ol&aacute;, este &eacute; um e-mail de contato via site.
						</h1>
						<h2 style="display: block; clear: both; margin: 0pt; padding: 0pt; height: 30px; line-height: 30px; color: rgb(102, 102, 102); font-weight: normal; font-size: 13px; text-align: left;">
							<b>Nome:</b> '.$nome_01.'
						</h2>
						<h2 style="display: block; clear: both; margin: 0pt; padding: 0pt; height: 30px; line-height: 30px; color: rgb(102, 102, 102); font-weight: normal; font-size: 13px; text-align: left;">
							<b>E-mail:</b> '.$email_01.'
						</h2>
						<h2 style="display: block; clear: both; margin: 0pt; padding: 0pt; height: 30px; line-height: 30px; color: rgb(102, 102, 102); font-weight: normal; font-size: 13px; text-align: left;">
							<b>Telefone:</b> '.$telefone_01.'
						</h2>
						<h2 style="display: block; clear: both; margin: 0pt; padding: 0pt; height: 30px; line-height: 30px; color: rgb(102, 102, 102); font-weight: normal; font-size: 13px; text-align: left;">
							<b>Assunto:</b> '.$assunto_01.'
						</h2>
						<br>
						<h2 style="display: block; clear: both; margin: 0pt; padding: 0pt; line-height: 16px; color: rgb(102, 102, 102); font-weight: normal; font-size: 13px; text-align: left;">
							<b>Mensagem:</b> '.$mensagem_01.'
						</h2>																					

					</body>
				</html>';

			// instancia o objeto
			$mail = new PHPMailer();
			
			// enviar via SMTP
			$mail->SetLanguage("br", "lib/phpmailer/language/"); 
			$mail->IsSMTP();
			
			// seu servidor smtp / dominio no meu caso mas pode mudar verifique o seu!
			$mail->Host = "smtp.alueesquadrias.com.br";
	
			// habilita smtp autenticado
			$mail->SMTPAuth = true;
	
			// usuario deste servidor smtp. Aqui esta a solucao
			$mail->Username = "noreply@alueesquadrias.com.br";
			$mail->Password = "q1w2e3r4"; // senha
			
			// email utilizado para o envio, pode ser o mesmo de username
			$mail->From = "atendimento@infinnity.com.br";
			$mail->FromName = "Alue Esquadrias - Contato Via Site";
	
			// ENVIA FROMATO HTML
			$mail->IsHTML(true); //enviar em HTML
	
			// NOME HOSTNAME
			$mail->Hostname = "alueesquadrias.com.br/";

			// Enderecos que devem receber a mensagem
			$mail->AddAddress("cleo@alueesquadrias.com.br");
			$mail->AddAddress("josecarlos@alueesquadrias.com.br");
			//$mail->AddAddress("luiz@infinnity.com.br");
			$mail->Subject = $nome_01 . " lhe enviou uma mensagem.";
			// adicionando o html no corpo do email
			$mail->Body = $msg;
			// enviando e retornando o status de envio
			
			if($mail->Send()){
				$message = "E-mail enviado com sucesso.";
			} else {
				$message = "Um erro inesperado ocorreu. Por favor tente novamente mais tarde. Erro: " . $mail->ErrorInfo;
			}
		
	} else {
		$message = "Um dos campos obrigatórios não foi preenchido.";
	}


//===========================================================================================================================

	$data['message'] = $message;
	
	echo json_encode($data);
	
?>