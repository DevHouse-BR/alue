 <?php global $nature_mt; ?>
                <!-- Contact Form and Info -->
<div class="container">				
                <div class="row contact-row">	
                    <!-- Contact Form -->
                    <div class="span8 send-message-form-span">
                        <div class="send-message-form-box">
                            <h3>Envie-nos Uma Mensagem</h3>
                                <?php if(isset($nature_mt['contact_text']) && $nature_mt['contact_text'] != '') { ?>
                                    <p><?php echo $nature_mt['contact_text'];?></p>
                                <?php } ?>                             
                            <div class="send-message-form">
                           	 <form class="form-inline" id="form" method="post" action="<?php echo get_template_directory_uri(); ?>/mail/contact.php">
                                    <input type="text" name="name" placeholder="Nome..." required />
                                    <input type="text" name="last_name" placeholder="Sobrenome..." required />
                                    <input type="email" name="email" placeholder="E-mail..." required />
                                    <div class="message-textarea">
                                        <textarea name="message" placeholder="Mensagem..." data-minlength="20" required></textarea>
                                        <div class="submit-btn"><button type="submit" class="btn" id="submit"></button></div>
                                    </div>
                                </form>
								<span class="sending">
								    Enviando...
								</span>
								<div class="mess center">
								</div>								
                            </div>
                        </div>
                    </div>
                    <!-- Contact Form end -->
                    <!-- Contact Info -->
                    <!--script type="text/javascript">
						$(function() {
							$('a[href^="mailto:"]').each(function() {
								this.href = this.href.replace('(at)', '@').replace(/\(dot\)/g, '.');
								// Remove this line if you don't want to set the email address as link text:
								this.innerHTML = this.href.replace('mailto:', '');
							});
						});
                    </script-->
                    <div class="span4 contact-info-span">
                        <div class="contact-info-box">
                            <h3>Localização</h3>
                            <div id="enderecos">
	                            <h4>Escritório / ShowRoom</h4>
	                            <p>Rua Concórdia, 42 - Anita Garibaldi <br/> Joinville - Santa Catarina | CEP: 89203-600</p>
	                            <p>Email: <a style="color:white" href="mailto:comercial@alue.com.br">comercial@alue.com.br</a></p>
	                            <p>&nbsp;</p>
	                            <h4><i class="marcador-mapa"></i> <a target="_blank" style="color:white;" href="https://maps.google.com.br/maps?q=Rua+Conc%C3%B3rdia,+42+-+Anita+Garibaldi,+SC&hl=en&ie=UTF8&ll=-26.312459,-48.853476&spn=0.011983,0.021136&sll=-26.312593,-48.85339&sspn=0.00603,0.010568&oq=rua+concordia&hnear=Rua+Conc%C3%B3rdia,+42+-+Anita+Garibaldi,+Santa+Catarina,+89203-600&t=m&z=16">Como chegar</a></h4>
	                            <p>&nbsp;</p>
	                            <h3>Telefone: (47) 3028-5125</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info end -->
                </div>
</div>
                <!-- Contact Form and Info -->