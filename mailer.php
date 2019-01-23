    <?php 
        // Check if form was submitted:
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Build POST request:
            $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
            $recaptcha_secret = '6Ld93YkUAAAAAIDjIERajcMse8EvnnWPlBTEO-no';
            $recaptcha_response = $_POST['recaptcha_response'];

            // Make and decode POST request:
            $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
            $recaptcha = json_decode($recaptcha);

            // Take action based on the score returned:                
            if ($recaptcha->score >= 0.5) { 

                // Verified - send email
                if(isset($_POST['submit'])) {
                    $fullname   =   $_POST['fullname'];
                    $mailFrom   =   $_POST['email'];
                    $subject    =   'Message from portfolio';
                    $message    =   $_POST['message'];
                    $mailTo     =   'portfolio@jhonsontrazona.x10.mx, wenchblitz@gmail.com';
                    $headers    =   'From: ' . $mailFrom;
                    $txt        =   "You have received an e-mail from " . $fullname . ".\n\n" . $message;
                
                    mail($mailTo, $subject, $txt, $headers);
                } ?>            
                <div class="hero__heading">
                    <h1 class="animated rubberBand">Message Sent!</h1>
                    <a href="<?php bloginfo('url');?>" class="hero__home animated fadeInDown delay-1s">Home</a>
                </div>            
            <!-- Not verified - show form error -->
            <?php } else { ?>
                <div class="hero__heading">
                    <h1 class="animated rubberBand">Bots! :( </h1>
                    <a href="<?php bloginfo('url');?>" class="hero__home animated fadeInDown delay-1s">Home</a>
                </div>
            <?php } ?>
    <?php } else { ?>
        <div class="hero__heading">
            <h1 class="animated fadeInDown">Hello!</h1>
            <span class="animated fadeInDown delay-1s">I'm Jhonson V. Trazona, I do</span>
            <div class="skills">
                <div class="skill__box animated fadeInLeft delay-2s">
                    <svg class="skills__icon">
                        <use xlink:href="<?php bloginfo('template_directory'); ?>/img/sprite.svg#icon-pen"></use>
                    </svg>
                    <span>Web Design</span>
                </div>

                <div class="skill__box animated fadeInUp delay-2s">
                    <svg class="skills__icon">
                        <use xlink:href="<?php bloginfo('template_directory'); ?>/img/sprite.svg#icon-lab"></use>
                    </svg>
                    <span>Front-End Development</span>
                </div>

                <div class="skill__box animated fadeInRight delay-2s">
                    <svg class="skills__icon">
                        <use xlink:href="<?php bloginfo('template_directory'); ?>/img/sprite.svg#icon-wordpress1"></use>
                    </svg>
                    <span>WordPress Development</span>
                </div>
            </div>
        </div>
    <?php } ?>