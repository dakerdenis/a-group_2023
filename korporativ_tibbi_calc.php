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

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                    </div>
                    <div class="korporativ__input__block">
                        <p>
                        Hər bir sığortalı üçün məsuliyyət limiti
                        </p>
                    </div>
                </div>


                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select">
                        <p>Akusherlik baxımı</p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select korporativ__input__block_select3">
                        <input type="radio" id="akusher31" name="akusher3" value="10 000 AZN">
                        <label for="akusher31">10 000 AZN</label>

                        <input type="radio" id="akusher32" name="akusher3" value="15 000 AZN">
                        <label for="akusher32">15 000 AZN</label>

                        <input type="radio" id="akusher33" name="akusher3" value="20 000 AZN">
                        <label for="akusher33">20 000 AZN</label>

                        <input type="radio" id="akusher34" name="akusher3" value="25 000 AZN">
                        <label for="akusher34">25 000 AZN</label>

                        <input type="radio" id="akusher35" name="akusher3" value="50 000 AZN">
                        <label for="akusher35">25 000 AZN</label>

                        <input type="radio" id="akusher36" name="akusher3" value="Digər">
                        <label for="akusher36">25 000 AZN</label>
                    </div>
                </div>



                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select">
                        <p>Sığorta tələb olunur</p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select2 korporativ__input__block_select4">
                        <input type="radio" id="sigorta11" name="sigorta1" value="Bəli">
                        <label for="sigorta11">Yalnız işçilər</label>

                        <input type="radio" id="sigorta12" name="sigorta1" value="Xeyr">
                        <label for="sigorta12">İşçilər və ailə üzvləri</label>
                    </div>
                </div>



                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Ərizəçinin ümumi işçilərinin sayı</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>


                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Sığortalanacaq işçilərin ümumi sayı</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>
                
                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Kişilər</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>


                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Qadınlar</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                    </div>
                    <div class="korporativ__input__block">
                        <p>
                        Peşə qrupu üzrə işçilərin sayı
                        </p>
                    </div>
                </div>


                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Menecment</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>


                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Ofis heyəti</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>İşçilər</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Sürücülər</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Mühəfizəçilər</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>
                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Fəhlələr</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Digər</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                    </div>
                    <div class="korporativ__input__block">
                        <p>
                        Sığorta olunacaq işçilərin yaş hüdudu
                        </p>
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>25-dən aşağı</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>


                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>25 - 35 arasında</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>35 - 45 arasında</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>45 - 60 arasında</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>60 yaşdan yuxarı</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                    </div>
                    <div class="korporativ__input__block">
                        <p>
                        Ailə üzvləri
                        </p>
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Böyüklərin sayı</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>Uşaqların sayı</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                    </div>
                    <div class="korporativ__input__block">
                        <p>
                        Yaşa görə uşaqların sayı
                        </p>
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>1-dən az</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>1 - 3 arasında</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>3 - 7 arasında</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc">
                        <p>7 - 14 arasında</p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="0">
                    </div>
                </div>



                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select korporativ__input__desc_select5">
                        <p>
                        Şirkətiniz yeni qəbul olunacaq işçilər üçün işə qəbul olunma tibbi müayinəsini təmin edirmi?
                        </p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select2">
                        <input type="radio" id="sigorta41" name="sigorta4" value="Bəli">
                        <label for="sigorta41">Bəli</label>

                        <input type="radio" id="sigorta42" name="sigorta4" value="Xeyr">
                        <label for="sigorta42">Xeyr</label>
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc korporativ__input__desc_select5">
                        <p>
                        Əgər sığortalanmışdırsa, müddəti və sığorta şirkətinin adını qeyd edəsiniz
                        </p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="|">
                    </div>
                </div>

                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select korporativ__input__desc_select5">
                        <p>
                        Əvvəl işçiləriniz sığortalanıbmı?
                        </p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select2">
                        <input type="radio" id="sigorta51" name="sigorta5" value="Bəli">
                        <label for="sigorta51">Bəli</label>

                        <input type="radio" id="sigorta52" name="sigorta5" value="Xeyr">
                        <label for="sigorta52">Xeyr</label>
                    </div>
                </div>

                <div class="korporativ__input__container">
                    <div class="korporativ__input__desc korporativ__input__desc_select5">
                        <p>
                        Əgər sığortalanmışdırsa, müddəti və sığorta şirkətini göstərin
                        </p>
                    </div>
                    <div class="korporativ__input__block">
                        <input type="text" placeholder="|">
                    </div>
                </div>

                <div class="korporativ__input__container korporativ__input__container_select">
                    <div class="korporativ__input__desc korporativ__input__desc_select korporativ__input__desc_select5">
                        <p>
                        Ərizəçiyə əvvəllər bu növ sığorta üzrə keçmişdə sığortalamadan imtina edilmişdirmi?
                        </p>
                    </div>
                    <div class="korporativ__input__block korporativ__input__block_select2">
                        <input type="radio" id="sigorta61" name="sigorta6" value="Bəli">
                        <label for="sigorta61">Bəli</label>

                        <input type="radio" id="sigorta62" name="sigorta6" value="Xeyr">
                        <label for="sigorta62">Xeyr</label>
                    </div>
                </div>




            </form>
        </div>
    </div>

    <?php
    include './include/footer.php';
    ?>