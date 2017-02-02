<?php global $nature_mt; ?>
<!-- Newsletter -->
    <section id="newsletter" class="newsletter">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="newsletter-box">
                        <h3>Get in touch with us to get the latest newslater to know uor latest activity about the nature care.</h3>
                        <p>dont worry! this it will be not a spam , belive and support us!</p>
                        <div class="newsletter-form">
                            <div class="newsletter-form-box" id="newsletter-form">
                                <form class="form-inline" method="post" action="<?php echo get_template_directory_uri(); ?>/mail/newsletter.php">
                                    <input type="hidden" name="to" id="to" value="<?php echo $nature_mt['email'];?>" />
                                    <input type="email" name="newsletter-email" class="newsletter-input" placeholder="Type your email..." required>
                                    <button type="submit" class="btn" id="n-submit">Send message</button>
                                </form>
                            </div>

                                <span class="sending">
                                    sending...
                                </span>
                                <div class="mess center">
                                </div>                              
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
<!-- Newsletter end -->