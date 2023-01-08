<?php
include './include/header.php';

?>

<!----!----СТИЛИ СТРАНИЦЫ КОНТАКТОВ--->
<style>
    <?php
    include './styles/contact.css'
    ?>
</style>


<div class="main__wrapper">
    <?php
    include './include/navigation.php';
    ?>
    <div class="contact__page__wrapper">
        <!---главный блок на странице---->
        <div class="contact__page__mainblock">

            <!--Главная картинка--->
            <div class="contact__page__mainblock__image">
                <img src="./styles/imgs/contact_img.svg" alt="">
            </div>

            <!---блок с приветствием --->
            <div class="contact__page__mainblock__hello">
                <!---Блок с приветствием--->
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


            </div>
            <!----Треугольник--->
            <div class="contact__page__social__element__rectangle">
                <img src="./styles/imgs/contact_rect.svg" alt="">
            </div>
        </div>
        <!---блок с инфой и картами--->
        <div class="contact_page__map_info">
            <div class="contact__page__map__info__wrapper">
                <!---КАРТА-->
                <div class="contact__page__map">

                </div>
                <!---Контактные данные--->
                <div class="contact__page__info_wrapper">
                    <!----BAKU--->
                    <div class="contact__page__info__element">
                        <div class="contact__page__info__element_name">
                            <p>Name1</p>
                        </div>
                        <div class="contact__page__info__element__desc">
                            <div class="contact__page__info__element__desc_desc">
                                <img src="./styles/imgs/location.svg" alt="">
                                <p>R.Behbudov küç., 87A</p>
                            </div>
                            <div class="contact__page__info__element__desc_desc">
                                <img src="./styles/imgs/email.svg" alt="">
                                <p>insurance@a-group.az</p>
                            </div>
                            <div class="contact__page__info__element__desc_desc">
                                <img src="./styles/imgs/phone.svg" alt="">
                                <p>(+994 12) 377-09-09</p>
                                <p>*0909</p>
                            </div>
                        </div>
                    </div>
                    <!----GANCA--->
                    <div class="contact__page__info__element">
                        <div class="contact__page__info__element_name">
                            <p>Name1</p>
                        </div>
                        <div class="contact__page__info__element__desc">
                            <div class="contact__page__info__element__desc_desc">
                                <img src="./styles/imgs/location.svg" alt="">
                                <p> Hedər Əliyev 494 A. (Zərrabi küç. 54)</p>
                            </div>
                            <div class="contact__page__info__element__desc_desc">
                                <img src="./styles/imgs/email.svg" alt="">
                                <p>tbayramov@a-group.az</p>
                            </div>
                            <div class="contact__page__info__element__desc_desc">
                                <img src="./styles/imgs/phone.svg" alt="">
                                <p>(+994 22) 266-88-49</p>
                                <p>(+994 22) 266-03-86</p>
                                <p>*0909</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include './include/footer.php';
    ?>