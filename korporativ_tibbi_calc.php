<?php
$title_name = "Korporativ Tibbi";
include './include/header.php';

?>

<style>
    <?php
    include './styles/korporat_tibbi_calc.css';
    ?>
</style>
s


<div class="main__wrapper">
    <?php
    include './include/navigation.php';
    ?>
    <div class="korporativ__tibbi__calc">


        <div class="korporativ__tibbi__calc__page_name">
            <div class="page__name_wrapper">
                <div class="page_name_block1 page_name_block1_korporate">
                    <p>Korporatİv &nbsp;</p>
                </div>
                <div class="page_name_block2 ">
                    <p>Tibbi &nbsp;</p>
                </div>
                <div class="page_name_block3 ">
                    <p>Sığortanı &nbsp;</p>
                </div>
                <div class="page_name_block4 ">
                    <p>hesabla</p>
                    <img src="./styles/imgs/korporate_tibbi_calc.svg" alt="">
                </div>
            </div>

        </div>





        <div class="korporativ__form__container">
            <form action="" class="korporativ__form">

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Şirkətin adı</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="Şirkətin adı">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Şirkətin fəaliyyəti</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="Şirkətin fəaliyyəti">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Tələb olunan sığorta müddəti:</p>
                    </div>
                    <div class="korporativ__input__block">
                        <p>Başlanğıc tarixi</p>
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p></p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="date" placeholder="Başlanğıc tarixi">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p></p>
                    </div>
                    <div class="korporativ__input__block">
                        <p>Bitmə tarixi</p>
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p></p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="date" placeholder="Bitmə tarixi">
                    </div>
                </div>



                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select">
                        <p>Sığorta proqramı</p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select">
                        <input type="radio" id="standart" name="program" value="Sığorta proqramı STANDART">
                        <label for="standart">Sığorta proqramı STANDART</label>

                        <input type="radio" id="fergli" name="program" value="Sığorta programı FƏRGLİ">
                        <label for="fergli">Sığorta programı FƏRGLİ</label>

                    </div>
                </div>


                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                    </div>
                    <div class="korporativ__input__block">
                        <p>
                        Tələb olunan Sığorta Əhatəsi

                        </p>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <?php
    include './include/footer.php';
    ?>