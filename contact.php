    <section id="contact" class="contact">
        <div class="container">

            <h1>Contact Me</h1>

            <div class="contact__info">
                <div class="contact__info-items">
                    <svg class="contact__info-icon">
                        <use xlink:href="<?php bloginfo('template_directory'); ?>/img/sprite.svg#icon-map"></use>
                    </svg>
                    <p>Padlegoers Village, <br>Soong Center, Mactan,<br>Lapu-Lapu City, 6015</p>
                </div>
                <div class="contact__info-items">
                    <svg class="contact__info-icon">
                        <use xlink:href="<?php bloginfo('template_directory'); ?>/img/sprite.svg#icon-mobile"></use>
                    </svg>
                    <p>+63 923-488-8244</p>
                </div>
                <div class="contact__info-items">
                    <svg class="contact__info-icon">
                        <use xlink:href="<?php bloginfo('template_directory'); ?>/img/sprite.svg#icon-envelope"></use>
                    </svg>
                    <p>wenchblitz@gmail.com</p>
                </div>
            </div>

            <div class="getintouch">
                <div class="getintouch__map">
                    <div id="map"></div>
                </div>

                <div class="getintouch__form">
                    <form class="form" id="dropMessage" method="POST" action="/">
                        <h4>
                            <svg class="contact__info-icon -drop">
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/img/sprite.svg#icon-rocket1"></use>
                            </svg>
                            Instant Messaging
                        </h4>

                        <div class="form__group">
                            <input type="text" class="form__input form__input-user" name="fullname" id="fullname" placeholder="Full Name">
                            <label for="fullname" class="form__label">Full Name</label>                            
                        </div>

                        <div class="form__group">
                            <input type="email" class="form__input form__input-email" name="email" id="email" placeholder="Email">
                            <label for="email" class="form__label">Email</label>                            
                        </div>

                        <div class="form__group">
                            <textarea class="form__message" name="message" id="message" placeholder="Message"></textarea>   
                            <label for="message" class="form__label">Message</label>                         
                        </div>

                        <div class="form__group">
                            <button type="submit" class="form__submit" name="submit" value="Send Message">
                                <svg class="contact__info-icon -send">
                                    <use xlink:href="<?php bloginfo('template_directory'); ?>/img/sprite.svg#icon-paper-plane"></use>
                                </svg>
                                Send Message
                            </button>
						</div>
						<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                    </form>
                </div>
            </div>

        </div>   
    </section>