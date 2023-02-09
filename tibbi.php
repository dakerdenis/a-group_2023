<?php
$title_name = "Tibbi";
include './include/header.php';

?>

<style>
    <?php
    include './styles/tibbi.css';
    ?>
</style>



<div class="main__wrapper">
    <?php
    include './include/navigation.php';
    ?>
    <div class="medical_tibbi__page">
        <div class="medical_tibbi__page_name">
            <div class="page__name_wrapper">
                <div class="page_name_block1 page_name_block_tibbi">
                    Tib
                </div>
                <div class="page_name_block2 page_name_block_tibbi">
                bi 
                </div>
                <div class="page_name_block3 ">
                Sığor
                </div>
                <div class="page_name_block4 page_name_block_tibbi">
                ta
                </div>
            </div>
            <img src="./styles/imgs/complaints_red.svg" alt="">
        </div>

        <div class="medical__blocks__wrapper">
            <!---medical element--->
            <div class="medical__block__element">
                <div class="medical__element__wrapper">
                    <!--medical element image--->
                    <div class="medical__element__image">
                        <img src="./styles/imgs/speed.png" alt="">
                    </div>
                    <!---medical element content--->
                    <div class="medical__element__content" id="medical__element__content">
                        <article class="article" id="article">
                            <!------>
                            <span id="dots"></span>
                            <!------>
                            <p>Hər bir ailəyə əlçatan sığorta!</p>
                            <p>Tibbi sığorta artıq əlçatan oldu. Hər AILƏ üzvünə görə 333 AZN-dən başlayan sığorta haqqı ödəməklə
                                Siz öz doğmalarınızı əhəmiyyətli maliyyə xərclərindən qorumuş və xəstəliyin aşkar olunduğu halda sağalmanın
                                şansını artırmış olursunuz. Bu proqram AILƏ üzvləri 3 nəfər və daha çox olan ailələr üçün nəzərdə tutulub.
                                Hər sığortalı AILƏ üzvü üçün 10,000 AZN (illik) sığorta təminatı.</p>
                            <p>✓ Təcili tibbi yardım</p>
                            <p>✓ Ambulator müalicə</p>
                            <p>✓ Stasionar müalicə + Cərrahi əməliyyat</p>
                            <p>✓ Təcili və planlı stomatologiya</p>
                            <p>✓ Medikamentoz təchizat</p>
                            <p>✓ Təcili vaksinasiya və qrip əleyhinə vaksinasiya</p>
                            <p>✓ Fizioterapiya və tibbi massaj prosedurları</p>
                            <p>✓ “A-Qroup Mobile Concierge” mobil tətbiqində bircə SOS düyməsini basmaqla
                                sığorta şirkəti ilə təcili əlaqə ilə təmin olunursunuz.
                                Bir düyməni basmağınız kifayət edir ki, A-Qroup-un çağrı mərkəzinin operatorları
                                Sizin köməyə ehtiyyacınızın olduğunu, Sizin geolokasiyanızı görsün və MediClub-ın həkim briqadasını dərhal yanınıza göndərsin</p>
                            <p>✓ Sualların operativ həlli üçün müasir çağrı mərkəzi (24/7)</p>
                            <p>✓ Fərdi sığorta ilə müqayisədə 25%-ə qədər qənaət</p>
                            <p>✓ AILƏ proqramının alışı zamanı hissəli ödəniş imkanı</p>
                            <p>✓ Xəstəlikləri ilkin mərhələdə aşkar edən Check-Up:</p>
                            <p>• Terapevtin müayinəsi</p>
                            <p>• Qan və sidiyin ümumi analizi</p>
                            <p>• EKQ • Qarın boşluğu USM</p>
                            <p>• Döş qəfəsinin rentqen müayinəsi</p>
                            <p>• Şəkər və xolesterinin analizi (şəkər diabeti və ürək-damar xəstəliklərini ilkin mərhələdə təyin etmək məqsədi ilə)</p>
                            <p>• Hepatit B və C müayinəsi</p>
                            <p>• Ən çox yayılan xərçəng xəstəliklərini aşkar edən laborator analizlər (Prostat, yumurtalıqların və uşaqlığın xərçəngi)</p>
                            <p>İSTİSNALAR </p>

                            <p>Qeydlər: Son sığorta haqqı sığortalının yaşı və sağlamlıq vəziyyətinə uyğun doldurulmuş ANKET əsasında müəyyənləşdirilir “Ailə” proqramı sağlamlığa proqressiv yanaşmadır.</p>
                            <div class="medical__element__link">
                                <a href="./tibbi_calculate/tibbi.php">
                                    <p>POLİS QİYMƏTİNİ </p>
                                    <p>HESABLAMAQ VƏ ALMAQ</p>
                                </a>
                            </div>

                        </article>
                        <div class="medical__element__button_show_more">
                            <button onclick="myFunction()" id="myBtn">DAHA ÇOX</button>
                        </div>
                    </div>

                </div>
            </div>

            <!---medical element--->
            <div class="medical__block__element medical__block__element2">
                <div class="medical__element__wrapper">
                    <!--medical element image--->
                    <div class="medical__element__image">
                        <img src="./styles/imgs/speed.png" alt="">
                    </div>
                    <!---medical element content--->
                    <div class="medical__element__content" id="medical__element__content">
                        <article class="article2" id="article2">
                            <!------>
                            <span id="dots2"></span>
                            <!------>
                            <p>Hər bir ailəyə əlçatan sığorta!</p>
                            <p>Tibbi sığorta artıq əlçatan oldu. Hər AILƏ üzvünə görə 333 AZN-dən başlayan sığorta haqqı ödəməklə
                                Siz öz doğmalarınızı əhəmiyyətli maliyyə xərclərindən qorumuş və xəstəliyin aşkar olunduğu halda sağalmanın
                                şansını artırmış olursunuz. Bu proqram AILƏ üzvləri 3 nəfər və daha çox olan ailələr üçün nəzərdə tutulub.
                                Hər sığortalı AILƏ üzvü üçün 10,000 AZN (illik) sığorta təminatı.</p>
                            <p>✓ Təcili tibbi yardım</p>
                            <p>✓ Ambulator müalicə</p>
                            <p>✓ Stasionar müalicə + Cərrahi əməliyyat</p>
                            <p>✓ Təcili və planlı stomatologiya</p>
                            <p>✓ Medikamentoz təchizat</p>
                            <p>✓ Təcili vaksinasiya və qrip əleyhinə vaksinasiya</p>
                            <p>✓ Fizioterapiya və tibbi massaj prosedurları</p>
                            <p>✓ “A-Qroup Mobile Concierge” mobil tətbiqində bircə SOS düyməsini basmaqla
                                sığorta şirkəti ilə təcili əlaqə ilə təmin olunursunuz.
                                Bir düyməni basmağınız kifayət edir ki, A-Qroup-un çağrı mərkəzinin operatorları
                                Sizin köməyə ehtiyyacınızın olduğunu, Sizin geolokasiyanızı görsün və MediClub-ın həkim briqadasını dərhal yanınıza göndərsin</p>
                            <p>✓ Sualların operativ həlli üçün müasir çağrı mərkəzi (24/7)</p>
                            <p>✓ Fərdi sığorta ilə müqayisədə 25%-ə qədər qənaət</p>
                            <p>✓ AILƏ proqramının alışı zamanı hissəli ödəniş imkanı</p>
                            <p>✓ Xəstəlikləri ilkin mərhələdə aşkar edən Check-Up:</p>
                            <p>• Terapevtin müayinəsi</p>
                            <p>• Qan və sidiyin ümumi analizi</p>
                            <p>• EKQ • Qarın boşluğu USM</p>
                            <p>• Döş qəfəsinin rentqen müayinəsi</p>
                            <p>• Şəkər və xolesterinin analizi (şəkər diabeti və ürək-damar xəstəliklərini ilkin mərhələdə təyin etmək məqsədi ilə)</p>
                            <p>• Hepatit B və C müayinəsi</p>
                            <p>• Ən çox yayılan xərçəng xəstəliklərini aşkar edən laborator analizlər (Prostat, yumurtalıqların və uşaqlığın xərçəngi)</p>
                            <p>İSTİSNALAR </p>

                            <p>Qeydlər: Son sığorta haqqı sığortalının yaşı və sağlamlıq vəziyyətinə uyğun doldurulmuş ANKET əsasında müəyyənləşdirilir “Ailə” proqramı sağlamlığa proqressiv yanaşmadır.</p>
                            <div class="medical__element__link">
                                <a href="./tibbi_calculate/tibbi.php">
                                    <p>POLİS QİYMƏTİNİ </p>
                                    <p>HESABLAMAQ VƏ ALMAQ</p>
                                </a>
                            </div>

                        </article>
                        <div class="medical__element__button_show_more">
                            <button onclick="myFunction2()" id="myBtn2">DAHA ÇOX</button>
                        </div>
                    </div>

                </div>
            </div>

            <!---medical element--->
            <div class="medical__block__element medical__block__element3">
                <div class="medical__element__wrapper">
                    <!--medical element image--->
                    <div class="medical__element__image">
                        <img src="./styles/imgs/speed.png" alt="">
                    </div>
                    <!---medical element content--->
                    <div class="medical__element__content" id="medical__element__content">
                        <article class="article3" id="article3">
                            <!------>
                            <span id="dots3"></span>
                            <!------>
                            <p>Hər bir ailəyə əlçatan sığorta!</p>
                            <p>Tibbi sığorta artıq əlçatan oldu. Hər AILƏ üzvünə görə 333 AZN-dən başlayan sığorta haqqı ödəməklə
                                Siz öz doğmalarınızı əhəmiyyətli maliyyə xərclərindən qorumuş və xəstəliyin aşkar olunduğu halda sağalmanın
                                şansını artırmış olursunuz. Bu proqram AILƏ üzvləri 3 nəfər və daha çox olan ailələr üçün nəzərdə tutulub.
                                Hər sığortalı AILƏ üzvü üçün 10,000 AZN (illik) sığorta təminatı.</p>
                            <p>✓ Təcili tibbi yardım</p>
                            <p>✓ Ambulator müalicə</p>
                            <p>✓ Stasionar müalicə + Cərrahi əməliyyat</p>
                            <p>✓ Təcili və planlı stomatologiya</p>
                            <p>✓ Medikamentoz təchizat</p>
                            <p>✓ Təcili vaksinasiya və qrip əleyhinə vaksinasiya</p>
                            <p>✓ Fizioterapiya və tibbi massaj prosedurları</p>
                            <p>✓ “A-Qroup Mobile Concierge” mobil tətbiqində bircə SOS düyməsini basmaqla
                                sığorta şirkəti ilə təcili əlaqə ilə təmin olunursunuz.
                                Bir düyməni basmağınız kifayət edir ki, A-Qroup-un çağrı mərkəzinin operatorları
                                Sizin köməyə ehtiyyacınızın olduğunu, Sizin geolokasiyanızı görsün və MediClub-ın həkim briqadasını dərhal yanınıza göndərsin</p>
                            <p>✓ Sualların operativ həlli üçün müasir çağrı mərkəzi (24/7)</p>
                            <p>✓ Fərdi sığorta ilə müqayisədə 25%-ə qədər qənaət</p>
                            <p>✓ AILƏ proqramının alışı zamanı hissəli ödəniş imkanı</p>
                            <p>✓ Xəstəlikləri ilkin mərhələdə aşkar edən Check-Up:</p>
                            <p>• Terapevtin müayinəsi</p>
                            <p>• Qan və sidiyin ümumi analizi</p>
                            <p>• EKQ • Qarın boşluğu USM</p>
                            <p>• Döş qəfəsinin rentqen müayinəsi</p>
                            <p>• Şəkər və xolesterinin analizi (şəkər diabeti və ürək-damar xəstəliklərini ilkin mərhələdə təyin etmək məqsədi ilə)</p>
                            <p>• Hepatit B və C müayinəsi</p>
                            <p>• Ən çox yayılan xərçəng xəstəliklərini aşkar edən laborator analizlər (Prostat, yumurtalıqların və uşaqlığın xərçəngi)</p>
                            <p>İSTİSNALAR </p>

                            <p>Qeydlər: Son sığorta haqqı sığortalının yaşı və sağlamlıq vəziyyətinə uyğun doldurulmuş ANKET əsasında müəyyənləşdirilir “Ailə” proqramı sağlamlığa proqressiv yanaşmadır.</p>


                        </article>
                        <div class="medical__element__button_show_more">
                            <button onclick="myFunction3()" id="myBtn3">DAHA ÇOX</button>
                        </div>
                    </div>

                </div>
            </div>

            <!---medical element--->
            <div class="medical__block__element medical__block__element4">
                <div class="medical__element__wrapper">
                    <!--medical element image--->
                    <div class="medical__element__image">
                        <img src="./styles/imgs/speed.png" alt="">
                    </div>
                    <!---medical element content--->
                    <div class="medical__element__content">
                        <article class="article3" id="article3">
                            <p>Hər bir ailəyə əlçatan sığorta!</p>
                            <p>Tibbi sığorta artıq əlçatan oldu. Hər AILƏ üzvünə görə 333 AZN-dən başlayan sığorta haqqı ödəməklə
                                Siz öz doğmalarınızı əhəmiyyətli maliyyə xərclərindən qorumuş və xəstəliyin aşkar olunduğu halda sağalmanın
                                şansını artırmış olursunuz. Bu proqram AILƏ üzvləri 3 nəfər və daha çox olan ailələr üçün nəzərdə tutulub.
                                Hər sığortalı AILƏ üzvü üçün 10,000 AZN (illik) sığorta təminatı.</p>
                            <p>✓ Təcili tibbi yardım</p>
                            <p>✓ Ambulator müalicə</p>
                            <p>✓ Stasionar müalicə + Cərrahi əməliyyat</p>
                            <p>✓ Təcili və planlı stomatologiya</p>
                            <p>✓ Medikamentoz təchizat</p>
                            <p>✓ Təcili vaksinasiya və qrip əleyhinə vaksinasiya</p>
                            <p>✓ Fizioterapiya və tibbi massaj prosedurları</p>
                            <p>✓ “A-Qroup Mobile Concierge” mobil tətbiqində bircə SOS düyməsini basmaqla
                                sığorta şirkəti ilə təcili əlaqə ilə təmin olunursunuz.
                                Bir düyməni basmağınız kifayət edir ki, A-Qroup-un çağrı mərkəzinin operatorları
                                Sizin köməyə ehtiyyacınızın olduğunu, Sizin geolokasiyanızı görsün və MediClub-ın həkim briqadasını dərhal yanınıza göndərsin</p>
                            <p>✓ Sualların operativ həlli üçün müasir çağrı mərkəzi (24/7)</p>
                            <p>✓ Fərdi sığorta ilə müqayisədə 25%-ə qədər qənaət</p>
                            <p>✓ AILƏ proqramının alışı zamanı hissəli ödəniş imkanı</p>
                            <p>✓ Xəstəlikləri ilkin mərhələdə aşkar edən Check-Up:</p>
                            <p>• Terapevtin müayinəsi</p>
                            <p>• Qan və sidiyin ümumi analizi</p>
                            <p>• EKQ • Qarın boşluğu USM</p>
                            <p>• Döş qəfəsinin rentqen müayinəsi</p>
                            <p>• Şəkər və xolesterinin analizi (şəkər diabeti və ürək-damar xəstəliklərini ilkin mərhələdə təyin etmək məqsədi ilə)</p>
                            <p>• Hepatit B və C müayinəsi</p>
                            <p>• Ən çox yayılan xərçəng xəstəliklərini aşkar edən laborator analizlər (Prostat, yumurtalıqların və uşaqlığın xərçəngi)</p>
                            <p>İSTİSNALAR </p>

                            <p>Qeydlər: Son sığorta haqqı sığortalının yaşı və sağlamlıq vəziyyətinə uyğun doldurulmuş ANKET əsasında müəyyənləşdirilir “Ailə” proqramı sağlamlığa proqressiv yanaşmadır.</p>
                        </article>
                    </div>

                </div>
            </div>


        </div>
    </div>


    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("article");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "DAHA ÇOX";

                moreText.style.overflow = "hidden";
                moreText.style.height = "240px";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "DAHA AZ";

                moreText.style.overflow = "initial";
                moreText.style.height = "100%";
            }
        }


        function myFunction2() {
            var dots = document.getElementById("dots2");
            var moreText = document.getElementById("article2");
            var btnText = document.getElementById("myBtn2");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "DAHA ÇOX";

                moreText.style.overflow = "hidden";
                moreText.style.height = "240px";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "DAHA AZ";

                moreText.style.overflow = "initial";
                moreText.style.height = "100%";
            }
        }


        function myFunction3() {
            var dots = document.getElementById("dots3");
            var moreText = document.getElementById("article3");
            var btnText = document.getElementById("myBtn3");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "DAHA ÇOX";

                moreText.style.overflow = "hidden";
                moreText.style.height = "240px";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "DAHA AZ";

                moreText.style.overflow = "initial";
                moreText.style.height = "100%";
            }
        }
    </script>



    <?php
    include './include/footer.php';
    ?>