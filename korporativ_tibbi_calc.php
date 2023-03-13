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

                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select">
                        <p>AMBULANCE</p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select2">
                        <input type="radio" id="ambulance11" name="ambulance1" value="Bəli">
                        <label for="ambulance11">Bəli</label>

                        <input type="radio" id="ambulance12" name="ambulance1" value="Xeyr">
                        <label for="ambulance12">Xeyr</label>
                    </div>
                </div>

                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select">
                        <p>AMBULANCE EX</p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select2">
                        <input type="radio" id="ambulance21" name="ambulance2" value="Bəli">
                        <label for="ambulance21">Bəli</label>

                        <input type="radio" id="ambulance22" name="ambulance2" value="Xeyr">
                        <label for="ambulance22">Xeyr</label>
                    </div>
                </div>


                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select">
                        <p>FORS-MAJOR</p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select2">
                        <input type="radio" id="ambulance31" name="ambulance3" value="Bəli">
                        <label for="ambulance31">Bəli</label>

                        <input type="radio" id="ambulance32" name="ambulance3" value="Xeyr">
                        <label for="ambulance32">Xeyr</label>
                    </div>
                </div>


                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select">
                        <p>FORS-MAJOR EX</p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select2">
                        <input type="radio" id="ambulance41" name="ambulance4" value="Bəli">
                        <label for="ambulance41">Bəli</label>

                        <input type="radio" id="ambulance42" name="ambulance4" value="Xeyr">
                        <label for="ambulance42">Xeyr</label>
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                    </div>
                    <div class="korporativ__input__block">
                        <p>
                            Stomatologiya
                        </p>
                    </div>
                </div>



                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select">
                        <p>Təcili diş müalicəsi</p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select2">
                        <input type="radio" id="stomatolog11" name="stomatolog1" value="Bəli">
                        <label for="stomatolog11">Bəli</label>

                        <input type="radio" id="stomatolog12" name="stomatolog1" value="Xeyr">
                        <label for="stomatolog12">Xeyr</label>
                    </div>
                </div>

                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select">
                        <p>Terapevtik diş baxımı</p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select2">
                        <input type="radio" id="stomatolog21" name="stomatolog2" value="Bəli">
                        <label for="stomatolog21">Bəli</label>

                        <input type="radio" id="stomatolog22" name="stomatolog2" value="Xeyr">
                        <label for="stomatolog22">Xeyr</label>
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                    </div>
                    <div class="korporativ__input__block">
                        <p>
                        Akusherlik baxımı
                        </p>
                    </div>
                </div>


                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select">
                        <p></p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select">
                        <input type="radio" id="akusher1" name="akusher" value="Sığorta proqramı STANDART">
                        <label for="akusher1">Gözləmə müddəti ilə</label>

                        <input type="radio" id="akusher2" name="akusher" value="Sığorta programı FƏRGLİ">
                        <label for="akusher2">Gözləmə müddəti olmadan</label>

                        <input type="radio" id="akusher3" name="akusher" value="Sığorta programı FƏRGLİ">
                        <label for="akusher3">Daxil deyil</label>

                    </div>
                </div>



                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                    </div>
                    <div class="korporativ__input__block">
                        <p>
                        Alt həddə tabe olan ambulator dərmanlar
                        </p>
                    </div>
                </div>


                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select">
                        <p>Akusherlik baxımı</p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select korporativ__input__block_select3">
                        <input type="radio" id="akusher21" name="akusher2" value="100 AZN">
                        <label for="akusher21">100 AZN</label>

                        <input type="radio" id="akusher22" name="akusher2" value="300 AZN">
                        <label for="akusher22">300 AZN</label>

                        <input type="radio" id="akusher23" name="akusher2" value="500 AZN">
                        <label for="akusher23">500 AZN</label>

                        <input type="radio" id="akusher24" name="akusher2" value="Digər">
                        <label for="akusher24">Digər</label>

                    </div>
                </div>

            </form>
        </div>
    </div>

    <?php
    include './include/footer.php';
    ?>