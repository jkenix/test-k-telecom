<footer class="container-fluid footer__fluid footer">

    <div class="container footer__wrap">

        <div class="footer__content">

            <div class="footer__info">
                <?php get_template_part('templates/logo', null, ['class' => 'footer__logo logo']); ?>
                <span class="footer__copyright">© 2018–2022 ООО «К-Телеком»</span>
            </div>

            <div class="footer__socials">
                <div class="footer__social">
                    <a href="#" target="_blank" class="footer__socials-icon">
                        <?php echo file_get_contents(get_stylesheet_directory() . '/sources/img/icons/inst-logo.svg'); ?>
                    </a>
                </div>
                <div class="footer__social">
                    <a href="#" target="_blank" class="footer__socials-icon">
                        <?php echo file_get_contents(get_stylesheet_directory() . '/sources/img/icons/youtube-logo.svg'); ?>
                    </a>
                </div>
                <div class="footer__social">
                    <a href="#" target="_blank" class="footer__socials-icon">
                        <?php echo file_get_contents(get_stylesheet_directory() . '/sources/img/icons/vk-logo.svg'); ?>
                    </a>
                </div>
            </div>


        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>