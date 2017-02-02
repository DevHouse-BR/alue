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
								    sending...
								</span>
								<div class="mess center">
								</div>								
                            </div>
                        </div>
                    </div>
                    <!-- Contact Form end -->
                    <!-- Contact Info -->
                    <div class="span4 contact-info-span">
                        <div class="contact-info-box">
                            <h3>Localização</h3>
                            <iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Alexandre+Schlemm,+164+-+Bucarein+-+Joinville+-+SC&amp;aq=&amp;sll=-27.610539,-48.484039&amp;sspn=0.798281,1.145325&amp;ie=UTF8&amp;hq=&amp;hnear=Rua+Alexandre+Schlemm,+164+-+Bucarein,+Santa+Catarina,+89202-430&amp;t=m&amp;ll=-26.310304,-48.848627&amp;spn=0.007694,0.010707&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Alexandre+Schlemm,+164+-+Bucarein+-+Joinville+-+SC&amp;aq=&amp;sll=-27.610539,-48.484039&amp;sspn=0.798281,1.145325&amp;ie=UTF8&amp;hq=&amp;hnear=Rua+Alexandre+Schlemm,+164+-+Bucarein,+Santa+Catarina,+89202-430&amp;t=m&amp;ll=-26.310304,-48.848627&amp;spn=0.007694,0.010707&amp;z=16&amp;iwloc=A" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>
                        </div>
                    </div>
                    <!-- Contact Info end -->
                </div>
</div>
                <!-- Contact Form and Info -->