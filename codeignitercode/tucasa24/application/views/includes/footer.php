        <footer class="main-footer">
            <div class="container">
                <div class="main-footer__top">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="main-footer__top-section">
                                <a href="/"><img src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/logo-white.a6373cea.png" alt="Logo white.a6373cea"></a>
                                <div class="call-us">
                                    <div class="call-us__hours">
                                        <p id="contact-info-aliada">
                                            ¿Necesitas ayuda? Escríbenos a:
                                        </p>
                                        <a href="#"><span class="icon-mail-envelope"></span>
                                            info@tucasa24.com
                                        </a><p>
                                            <a target="_blank" href="#"><img alt="" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/facebook-messenger.1a68d49b.svg">
                                                Deja tu Mensaje en Facebook
                                            </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="main-footer__top-section">
                                <div class="main-footer__recruitment-cta">
                                    <h2>¿Eres profesional de la limpieza?</h2>
                                    <p>Envia tu solicitud para unirte a Aliada.</p>
                                    <a title="¡Únete a Aliada!" class="btn track-work-as-aliada" data-area="Footer" href="/seraliada">¡Únete a Aliada!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="main-footer__bottom">
                        <div class="col-sm-6">
                            >                    <div class="main-footer__legal">
                                <div class="main-footer__legal__links">
                                    <a title="Términos y Condiciones" href="/terminos">Términos y Condiciones</a>
                                    <a title="Política de Privacidad" href="/privacidad">Política de Privacidad</a>
                                </div>
                                <span>2016 Aliada. Todos los derechos reservados.</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="main-footer__social">
                                <a title="Mixpanel" href="https://mixpanel.com/f/partner"><img alt="Mobile Analytics" src="//cdn.mxpnl.com/site_media/images/partner/badge_light.png">
                                </a><a target="_blank" href="https://facebook.com/aliadamx"><img class="image facebook-icon" alt="Facebook" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/facebook-icon.adace7c2.svg">
                                </a><a target="_blank" href="https://twitter.com/aliadamx"><img class="image twitter-icon" alt="Twitter" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/twitter-icon.93f17e4a.svg">
                                </a><a target="_blank" href="https://instagram.com/aliadamx"><img class="image instagram-icon" alt="instagram" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/instagram-icon.83abcd5f.svg">
                                </a><a target="_blank" href="https://www.youtube.com/channel/UCY2hTNLZoVT2eE_tfYuCJ1A"><img class="image youtube-icon" alt="YouTube" src="https://d1fnn4c7qqjz6e.cloudfront.net/assets/youtube-icon.13ec8c20.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery Files Loading -->
        <script src="<?php echo theme_js('jquery.min.js'); ?>"></script>
        <script src="<?php echo theme_js('bootstrap.min.js'); ?>"></script>
        <script src="<?php echo theme_js('scripts.js'); ?>"></script>
        <script src="<?php echo theme_js('jquery.sidr.js'); ?>"></script>
        <script>
            $(document).ready(function () {
                $('#simple-menu').sidr({
                    side: 'right'
                });
            });
        </script>
        <script>
            $(document).on('scroll',function(){
                if($(this).scrollTop() > 150){
                    $('.innerpage_menu_section').addClass('sticky');
                }else{
                    $('.innerpage_menu_section').removeClass('sticky');
                }
            })
        </script>

    </body>
</html>
