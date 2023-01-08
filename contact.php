<?php
include './include/header.php';

?>


<div class="main__wrapper">
    <?php
    include './include/navigation.php';
    ?>
    <div class="contact__page__wrapper">
        <!---главный блок на странице---->
        <div class="contact__page__mainblock">
            <!---блок с приветствием и картинкой--->
            <div class="contact__page__mainblock__hello">
                <div class="contact__page__mainblock__hellotext">
                    <div class="contact__page__hello">
                        <p>Salam</p>
                    </div>
                    <div class="contact__page__hellotext">
                        <p>
                            Bazar ertəsindən cümə gününə qədər səhər saat 9:00-dan axşam
                            18:00-ə qədər biz sizin üçün işləyirik
                        </p>
                    </div>
                </div>
                <!----->
                <div class="contact__page__mainblock__image">
                    <img src="./styles/imgs/contact_img.svg" alt="">
                </div>
            </div>
            <!--связь с нами и текст и соц сети------->
            <div class="contact__page__social__wrapper">
                <div class="contact__page__social__element">
                    <div class="contact__page__social__element_name">
                        <p>
                            Bizimlə əlaqə saxlayın
                        </p>
                    </div>
                    <!---описание элемента--->
                    <div class="contact__page__social__element__desc">
                        <p>
                            <span>Qəhrəman işçi</span>lərimizdən birindən real vaxta
                            dəstəyi əldə edin! (iş saatları ərzində)
                            İstənilən səhifənin aşağı sağ küncündəki
                            <span>söhbət düyməsini klikləyin</span>
                        </p>
                    </div>
                </div>
                <div class="contact__page__social__element">
                    <div class="contact__page__social__element_name">
                        <p>
                            Bizə yazın
                        </p>
                    </div>
                    <!---описание элемента--->
                    <div class="contact__page__social__element__desc">
                        <p>
                            Sizin mesajları mümkün qədər <span>tez</span>
                            cavablandırmağa çalışırıq
                        </p>
                    </div>
                    <!----связаться с нами popup---->
                    <div class="contact__page__social__element__popup">
                        <button>Email</button>
                    </div>
                </div>
                <div class="contact__page__social__element">
                    <div class="contact__page__social__element_name">
                        <p>
                            Bizi tapın
                        </p>
                    </div>
                    <!---описание элемента--->
                    <div class="contact__page__social__element__desc">
                        <p>
                            Daimə yanınızdayıq
                        </p>
                    </div>
                    <!----социальные сети---->
                    <div class="contact__page__social__element__social">
                        <div class="contact__page__social__element__social_link">
                            <a href="#">
                                <img src="./styles/imgs/facebook_cntct.svg" alt="" srcset="">
                            </a>
                        </div>
                        <div class="contact__page__social__element__social_link">
                            <a href="#">
                                <img src="./styles/imgs/instagram_cntct.svg" alt="" srcset="">
                            </a>
                        </div>
                        <div class="contact__page__social__element__social_link">
                            <a href="#">
                                <img src="./styles/imgs/linkedin_cntct.svg" alt="" srcset="">
                            </a>
                        </div>
                        <div class="contact__page__social__element__social_link">
                            <a href="#">
                                <img src="./styles/imgs/youtube_cntct.svg" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact__page__social__element__rectangle">
                    <img src="./styles/imgs/contact_rect.svg" alt="">
                </div>
            </div>
        </div>
        <!---блок с инфой и картами--->
        <div class="contact_page__map_info">

        </div>
    </div>
    <?php
    include './include/footer.php';
    ?>