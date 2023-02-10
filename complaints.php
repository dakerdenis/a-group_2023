<?php
$title_name = "Şikayətlər";
include './include/header.php';

?>





<div class="main__wrapper">
    <?php
    include './include/navigation.php';
    ?>


    <div class="complaints__main__wrappper">
        <div class="complaints__name">
            <div class="page__name_wrapper">
                <div class="page_name_block1">
                    <p>Şika</p>
                </div>
                <div class="page_name_block2">
                    <p>yətin</p>
                </div>
                <div class="page_name_block3">
                    <p>Veril</p>
                </div>
                <div class="page_name_block4">
                    <p>məsi</p>
                </div>
            </div>
            <img src="./styles/imgs/complaints_red.svg" alt="">
        </div>

        <div class="compliants__desc_text">
            <p>Hörmətli müştəri, <br>
                Sizə göstərilən xidmətlər, şirkətimiz və ya hər hansı bir əməkdaşımız barədə şikayətiniz olarsa, bizə müraciət etməyinizi xahiş edirik
                Müraciətlərə ən geci 15 iş günü, əlavə öyrənilmə və yoxlanılma tələb edən müraciətlərə isə ən geci 30 iş günü müddətində baxılır və müvafiq qərar qəbul olunur. Bu qərar bəradə sizə yazılı şəkildə cavab veriləcəkdir.


            </p>
            <br>
            <p class="compliants__desc_text_p"> Müraciətinizi yazılı və ya elektron qaydada bizə ünvanlaya bilərsiniz:</p>
        

            <!---complaints circle---->
            <div class="complaints__gold__circle">
                <img src="./styles/imgs/complain_sircle.svg" alt="">
            </div>

            <div class="complaints__semi_circle">
                <img src="./styles/imgs/complaint_semi.svg" alt="">
            </div>
        </div>

        <div class="compliants__info__container">
            <div class="complaints__info__wrapper">
                <div class="complaints__info__element">
                    <div class="complaints__info__element__img">
                        <img src="./styles/imgs/map-pin.svg" alt="">
                    </div>
                    <div class="complaints__info__element__name">
                        <p>1. Ünvan</p>
                    </div>

                    <div class="complaints__info__element__desc">
                        <p>Bakı şəhəri,
                            R. Behbudov küçəsi 87A</p>
                    </div>
                </div>
                <div class="complaints__info__element">
                    <div class="complaints__info__element__img">
                        <img src="./styles/imgs/phone-call.svg" alt="">
                    </div>
                    <div class="complaints__info__element__name">
                        <p>2. Telefon</p>
                    </div>

                    <div class="complaints__info__element__desc">
                        <p>*0909</p>
                    </div>
                </div>
                <div class="complaints__info__element">
                    <div class="complaints__info__element__img">
                        <img src="./styles/imgs/map-pin.svg" alt="">
                    </div>
                    <div class="complaints__info__element__name">
                        <p>3. E-mail</p>
                    </div>

                    <div class="complaints__info__element__desc">
                        <p class="complaints__info__element__desc_p">complaints@a-group.az</p>
                    </div>
                </div>
                <div class="complaints__info__element">
                    <div class="complaints__info__element__img">
                        <img src="./styles/imgs/user.svg" alt="">
                    </div>
                    <div class="complaints__info__element__name">
                        <p>4. Koordinator</p>
                    </div>

                    <div class="complaints__info__element__desc">
                        <p>Quliyev Fuad
                            Gülağa oğlu</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="complaints__form__container">
            <form action="" class="complaints__form__wrapper">
                <div class="complaints__form__name">
                    <p>Formanı doldurun</p>
                </div>
                <div class="complaints__form__input__container">
                    <div class="complaints__form__input__desc">
                        <p>Ad</p>
                    </div>
                    <div class="complaints__form__input">
                        <input type="text" placeholder="Ad">
                    </div>
                </div>

                <div class="complaints__form__input__container">
                    <div class="complaints__form__input__desc">
                        <p>Soyad</p>
                    </div>
                    <div class="complaints__form__input">
                        <input type="text" placeholder="Soyad">
                    </div>
                </div>
                <div class="complaints__form__input__container">
                    <div class="complaints__form__input__desc">
                        <p>Ata adı</p>
                    </div>
                    <div class="complaints__form__input">
                        <input type="text" placeholder="Ata adı">
                    </div>
                </div>
                <div class="complaints__form__input__container">
                    <div class="complaints__form__input__desc">
                        <p>FİN kod</p>
                    </div>
                    <div class="complaints__form__input">
                        <input type="text" placeholder="FİN kod">
                    </div>
                </div>
                <div class="complaints__form__input__container">
                    <div class="complaints__form__input__desc">
                        <p>E-mail</p>
                    </div>
                    <div class="complaints__form__input">
                        <input type="text" placeholder="E-mail">
                    </div>
                </div>
                <div class="complaints__form__input__container">
                    <div class="complaints__form__input__desc">
                        <p>Əlaqə nömrəsi</p>
                    </div>
                    <div class="complaints__form__input">
                        <input type="text" placeholder="Əlaqə nömrəsi">
                    </div>
                </div>
                <!----textarea-->
                <div class="complaints__form__input__container complaints__form__input__container_textarea">
                    <div class="complaints__form__input__desc">
                        <p>Sizin mesaj</p>
                    </div>
                    <div class="complaints__form__input complaints__form__textarea">
                        <textarea name="" id="" placeholder="Sizin mesaj"></textarea>
                    </div>
                </div>

                <!---SUBMIT FORM--->
                <div class="complaints__form__submit">
                    <button type="submit">Göndər</button>
                </div>
            </form>

            <div class="complaints__red__rectangle">
                <img src="./styles/imgs/complaints_rectangel.svg" alt="">
            </div>
        </div>


        <div class="compliants__desc_text">
            <p>
                Müraciətin nəticələri ilə razılaşmadığınız təqdirdə 966 “Qaynar xətt” vasitəsilə və ya rəsmi qaydada (yazılı (poçt, elektron müraciət, telegram və digər vasitələrdən istifadə edərək) olaraq) Azərbaycan Respublikasının Mərkəzi Bankına müraciət edə bilərsiniz. Mərkəzi Bank və ya şirkətimizin cavabları sizi qane etməzsə, mediator və (və ya) məhkəməyə müraciət edə bilərsiniz.
            </p>
        </div>



        <div class="complaints__grey__block">
            <div class="complaints__name complaints__name_check">
                <p>Şikayətin statusunun izlənilməsi</p>
                <img src="./styles/imgs/complaints_green.svg" alt="">
            </div>

            <div class="complaints__form__container">
                <form action="" class="complaints__check__form">
                    <div class="complaints__form__input__container">
                        <div class="complaints__form__input__desc">
                            <p>FİN kod</p>
                        </div>
                        <div class="complaints__form__input">
                            <input type="text" placeholder="FİN kod">
                        </div>
                    </div>

                    <div class="complaints__form__input__container">
                        <div class="complaints__form__input__desc">
                            <p>Şikayət nömrəsi</p>
                        </div>
                        <div class="complaints__form__input">
                            <input type="text" placeholder="Şikayət nömrəsi">
                        </div>
                    </div>

                    <!---SUBMIT FORM--->
                    <div class="complaints__form__submit">
                        <button type="submit">Göndər</button>
                    </div>

                </form>
            </div>

            <div class="complaints__check__result">
                <div class="complaints__check__result__element">
                    <p>Qəbul edildi</p>
                    <p>05.07.2022</p>
                </div>
                <div class="complaints__check__result__element">
                    <p>İcra edilir</p>
                    <p>05.07.2022</p>
                </div>
                <div class="complaints__check__result__element">
                    <p>Yekunlaşdı</p>
                    <p>13.07.2022</p>
                </div>
                <div class="complaints__check__result__final">
                    <a href="#">Şikayətin nəticəsi ( yükləyin )</a>
                </div>
            </div>

            <div class="complaints__grey_rectangle">
                <img src="./styles/imgs/complaints__circle__svg.svg" alt="">
            </div>
        </div>
    </div>





















    <script>

    </script>

    <?php
    include './include/footer.php';
    ?>