<?php
$title_name = "Əlaqə";
include './include/header.php';

?>





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
                        <p>
                            <span id="words" class="words">Salam</span> 
                        </p>
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
                        <a href="#popup" class="popup-link">Email</a>
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
                    <div class="contact__page__map__container">


                        <!---навигация---->
                        <div class="contact__page__map__navigation">
                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'Baku')" id="defaultOpen">Bakı</button>
                                <button class="tablinks" onclick="openCity(event, 'Ganca')">Gəncə</button>
                            </div>
                        </div>


                        <!---карта--->
                        <div class="contact__page__map__map">
                            <div id="Baku" class="tabcontent">
                                
                            <iframe

                             scrolling="no"
                              marginheight="0"
                              marginwidth="0" 
                              src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=40.38436563160357,%2049.84188935267776+(A-Group)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                              
                            </iframe>
                            </div>
                            <div id="Ganca" class="tabcontent">
                            <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.944383130408!2d46.35611691540381!3d40.67519437933591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQwJzMwLjciTiA0NsKwMjEnMjkuOSJF!5e0!3m2!1sen!2s!4v1583846767311!5m2!1sen!2s" 

                             scrolling="no"
                              marginheight="0"
                              marginwidth="0" 
                              allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <!---circle map--->
                        <div class="contact__page__map__rectangle">
                            <img src="./styles/imgs/circle.png" alt="">
                        </div>
                    </div>
                </div>




                <!---Контактные данные--->
                <div class="contact__page__info_wrapper">
                    <!----BAKU--->
                    <div class="contact__page__info__element">
                        <div class="contact__page__info__element_name">
                            <p>Bakı</p>
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
                                <p>(+994 12) 377-09-09
                                    <br>
                                    *0909
                                </p>
                            </div>
                        </div>
                    </div>
                    <!----GANCA--->
                    <div class="contact__page__info__element">
                        <div class="contact__page__info__element_name contact__page__info__element_name_2">
                            <p>Gəncə</p>
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
                                <p>(+994 22) 266-88-49 <br>
                                    (+994 22) 266-03-86 <br>
                                    *0909
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!------popup тело---->
    <div id="popup" class="popup">
        <a  class="popup__area"> </a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="" class="popup__close close-popup">&#10006;</a>
                <form class="popup__content__container">
                    <div class="popup__content__name">
                        <p>Email</p>
                    </div>
                    <div class="popup__content__desc">
                        <p>
                            Sizin mesajları mümkün qədər tez
                            cavablandırmağa çalışırıq
                        </p>
                    </div>

                    <div class="popup__content__input">
                        <input name="name" type="text" placeholder="Ad">
                    </div>
                    <div class="popup__content__input">
                        <input name="surname" type="text" placeholder="Soyad">
                    </div>
                    <div class="popup__content__input">
                        <input name="father_name" type="text" placeholder="Ata adı">
                    </div>
                    <div class="popup__content__input">
                        <input name="email" type="email" placeholder="Email">
                    </div>
                    <div class="popup__content__input">
                        <input name="number" type="number" placeholder="Əlaqə nömrəsi">
                    </div>
                    <div class="popup__content__textarea">
                        <textarea name="" id="" placeholder="Mesaj"></textarea>
                    </div>
                    <div class="popup__content__submit">
                        <button type="submit">Göndər</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

















    <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



(function(){
    var words = [
    "Hello",
    "Guten Tag",
    "Здравствуйте",
    "Hi",
],
    i = 0;
    setInterval(function(){
        $('#words').fadeOut(function(){
            $(this).html(words[(i = (i + 1) % words.length)]).fadeIn(); 
        });
    }, 1500)
})();


</script>

    <?php
    include './include/footer.php';
    ?>