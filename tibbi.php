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
                <div class="page_name_block1 page_name_block_tibbi1">
                    <p>FƏRDİ &nbsp;</p>
                </div>
                <div class="page_name_block2 page_name_block_tibbi">
                    <p>Tibbi &nbsp;</p>
                    <img src="./styles/imgs/complaints_red.svg" alt="">
                </div>
                <div class="page_name_block3 ">
                    <p>Sığorta</p>
                </div>

            </div>

        </div>

        <div class="medical__blocks__wrapper">
            <!---medical element--->
            <div class="medical__block__element">
                <div class="medical__element__wrapper">
                    <!--medical element image--->
                    <div class="medical__element__image">
                        <img src="./styles/imgs/speed.png" alt="">
                        <p>Ailə</p>
                    </div>
                    <!---medical element content--->
                    <div class="medical__element__content medical__element__content_aile" id="medical__element__content">
                        <article class="article article_aile" id="article">
                            <!------>
                            <span id="dots"></span>


                            <!------>
                            <p class="article_aile_name">AILƏ - Hər bir ailəyə əlçatan sığorta.</p>
                            <br>
                            <p>
                                Tibbi sığorta artıq əlçatan oldu. Hər AILƏ üzvünə görə 333 AZN-dən başlayan sığorta haqqı ödəməklə Siz öz doğmalarınızı əhəmiyyətli maliyyə xərclərindən qorumuş və xəstəliyin aşkar olunduğu halda sağalmanın şansını artırmış olursunuz. Bu proqram AILƏ üzvləri 3 nəfər və daha çox olan ailələr üçün nəzərdə tutulub. Hər sığortalı AILƏ üzvü üçün 10,000 AZN (illik) sığorta təminatı.
                            </p>
                            <br>
                            <p>"AILƏ" PROQRAMI:</p>
                            <p>• Təcili tibbi yardım</p>
                            <p>• Ambulator müalicə</p>
                            <p>• Stasionar müalicə + Cərrahi əməliyyat</p>

                            <!----------------------------------------->



                            <p>• Təcili və planlı stomatologiya</p>
                            <p>• Medikamentoz təchizat</p>
                            <p>• Təcili vaksinasiya və qrip əleyhinə vaksinasiya</p>
                            <p>• Fizioterapiya və tibbi massaj prosedurları</p>
                            <p>• “A-Qroup Mobile Concierge” mobil tətbiqində bircə SOS düyməsini basmaqla
                                sığorta şirkəti ilə təcili əlaqə ilə təmin olunursunuz.
                                Bir düyməni basmağınız kifayət edir ki, A-Qroup-un çağrı mərkəzinin operatorları
                                Sizin köməyə ehtiyyacınızın olduğunu, Sizin geolokasiyanızı görsün və MediClub-ın həkim briqadasını dərhal yanınıza göndərsin</p>
                            <p>• Sualların operativ həlli üçün müasir çağrı mərkəzi (24/7)</p>
                            <p>• Fərdi sığorta ilə müqayisədə 25%-ə qədər qənaət</p>
                            <p>• Hissə-hissə ödəniş imkanı</p>
                            <br>
                            <!----------------------------->
                            <p>Və xəstəlikləri ilkin mərhələdə aşkar edən PULSUZ Check-Up:</p>
                            <p>• Terapevtin müayinəsi</p>
                            <p>• Qan və sidiyin ümumi analizi</p>
                            <p>• EKQ</p>
                            <p>• Qarın boşluğu USM</p>
                            <p>• Döş qəfəsinin rentqen müayinəsi</p>
                            <p>• Şəkər və xolesterinin analizi (şəkər diabeti və ürək-damar xəstəliklərini ilkin mərhələdə təyin etmək məqsədi ilə)</p>
                            <p>• Hepatit B və C müayinəsi</p>
                            <p>• Ən çox yayılan xərçəng xəstəliklərini aşkar edən laborator analizlər (Prostat, yumurtalıqların və uşaqlığın xərçəngi)</p>

                            <br>
                            <!------------------------->
                            <p>AILƏ SIĞORTA PROQRAMININ ÜSTÜNLÜKLƏRİ:</p>
                            <p>• Sualların operativ həlli üçün nəzərdə tutulmuş 24 saat məsləhətçi-dispetçer xidməti</p>
                            <p>• Fərdi sığorta ilə müqayisədə 25%-ə qədər qənaət</p>
                            <p>• “Ailə” proqramının alışı zamanı hissəli ödəniş imkanı verilir.</p>

                            <!------------------------->
                            <br>
                            <p>İSTİSNALAR</p>
                            <p>Son sığorta haqqı sığortalının yaşı və sağlamlıq vəziyyətinə uyğun doldurulmuş ANKET əsasında müəyyənləşdirilir
                                “Ailə” proqramı sağlamlığa proqressiv yanaşmadır.</p>
                            <div class="medical__element__link">
                                <a href="./tibbi_aile.php">
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
                        <p>ÖZƏL</p>
                    </div>
                    <!---medical element content--->
                    <div class="medical__element__content" id="medical__element__content">
                        <article class="article2" id="article2">
                            <!------>
                            <span id="dots2"></span>
                            <!------>
                            <p>Bu Sığortalıların istəklərini nəzərə alınmaqla sığorta proqramı yaratmaq üçün bir fürsətdir.
                                «ÖZƏL» sığorta haqqı 15 000 manata çatan polis hər ikisi korporativ və fərdi müştərilər üçün nəzərdə tutulmuşdur.
                                «ÖZƏL» proqramında tibbi xidmətlərin göstərilməsi və ödənişlərin həyata keçirilməsi qaydaları mümkün qədər
                                sadələşdirilmişdir.</p>

                            <br>
                            <p>"ÖZƏL" PROQRAMI:</p>
                            <p>• 15,000 AZN (illik) sığorta təminatı</p>
                            <p>• Təcili tibbi yardım</p>
                            <p>• Ambulator müalicə</p>
                            <p>• Stasionar müalicə</p>
                            <p>• Təcili və planlı stomatologiya</p>
                            <p>• Medikamentoz təchizat</p>
                            <p>• Təcili vaksinasiya və qrip əleyhinə vaksinasiya</p>
                            <p>• Fizioterapiya və tibbi massaj prosedurları</p>
                            <br>

                            <p>Və xəstəlikləri ilkin mərhələdə aşkar edən PULSUZ Check-Up:</p>

                            <p>• Terapevtin müayinəsi</p>
                            <p> • Qan və sidiyin ümumi analizi </p>
                            <p> • EKQ </p>
                            <p> • Döş qəfəsinin rentqen müayinəsi </p>
                            <p> • Qarın boşluğu USM </p>
                            <p> • Şəkər və xolesterinin analizi
                                (şəkər diabeti və ürək-damar xəstəliklərini ilkin mərhələdə təyin
                                etmək məqsədi ilə)</p>
                            <p> • Hepatit B və C müayinəsi</p>
                            <p> • Ən çox yayılan xərçəng xəstəliklərini aşkar edən
                                laborator analizlər (Prostat, yumurtalıqların və uşaqlığın xərçəngi)</p>


                            <div class="medical__element__link">
                                <a href="./tibbi_ozel.php">
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
                        <p>FƏRQLİ</p>
                    </div>
                    <!---medical element content--->
                    <div class="medical__element__content" id="medical__element__content">
                        <article class="article3" id="article3">
                            <!------>
                            <span id="dots3"></span>
                            <!------>
                            <p>«FƏRQLI» dəbdəbəli tibbi sığorta proqramı - eksklüziv bir tibb sistemidir.</p>
                            <p>Onun mahiyyəti Sığortalının sağlamlığını qorumaq və gücləndirmək üçün fərdi yanaşmasıdır. O müəyyən xəstəliklərin
                                müalicəsi və müəyyən xidmətlər göstərməklə məhdudlaşmır, Sığortalıların sağlamlığına hərtərəfli qayğı göstərir.
                                Sığorta haqqı 3000 manata çatan polis hər ikisi korporativ və fərdi müştərilər üçün nəzərdə tutulmuşdur.
                                “Fərqli” sığorta proqramı 100 000 ABŞ dollar məsuliyyətində tibbi xidmətlərin təminatını əhatə edir.</p>
                            <!-------------------------------------------->
                            <br>
                            <p>"«FƏRQLI»" PROQRAMI:</p>
                            <p>• 100,000 USD sığorta təminatı</p>
                            <p>• Təcili tibbi yardım </p>
                            <p>• Tibbi evakuasiya </p>
                            <p>• Ambulator müalicə </p>
                            <p>• Stasionar müalicə </p>
                            <p>• Təcili və planlı stomatologiya </p>
                            <p>• Medikamentoz təchizat </p>
                            <p>• Təcili və planlı vaksinasiya (qrip əleyhinə vaksinasiya) </p>
                            <p>• Xaricdə planlaşdırılan müayinə </p>
                            <p>• Xaricdə ortaya çıxan gözlənilməz xəstəliklərin müalicəsi </p>
                            <p>• Bədbəxt hadisələrdən sığortalanma (ölüm və yaxud əlillik hallarında kompensasiya) </p>

                            <!------------------------>
                            <br>
                            <p>«FƏRQLI» SIĞORTA PROQRAMININ ÜSTÜNLÜKLƏRİ:</p>
                            <p>• Yalnız ən yaxşı klinikalarda müalicə</p>
                            <p>• Yüksək komfortlu palatalar</p>
                            <p>• Plomb sayı məhdudiyyəti olmadan terapevtik stomatologiya</p>
                            <p>• İldə 2 dəfə dişlərin planlı təmizlənməsi</p>
                            <p>• B və C hepatitlərinin müalicəsi</p>
                            <p>• Bədxassəli və qan xəstəliklərinin müalicəsi</p>
                            <p>• Diabetin, damarların varikoz genəlməsinin müalicəsi</p>
                            <p>• Qanın efferent metodlarla təmizlənməsinin tətbiqi</p>
                            <p>• Dərmanların evə çatdırılması</p>
                            <p>• Həkimlərin ev şəraitində müayinəsi</p>
                            <p>• Müalicəvi masaj</p>
                            <p>• Fizioterapiyaya limitin olmaması</p>
                            <p>• Refraksiya pozğunluqlarının cərrahi müalicəsi</p>
                            <p>• Tibbi göstərişlə eynək çərçivələri</p>
                            <p>• Xarici ölkələrdə tibbi müayinə</p>
                            <p>• Yalnız 5 milyon $ məbləğində professional sığortası olan həkimlər tərəfindən müalicə</p>
                            <p>• Bədbəxt hadisələrdən sığortalanma</p>
                            <p>• Xarici ölkələrə səfər edənlərin illik sığortası</p>
                            <p>• Qısaldılmış istisnalar siyahısı</p>
                            <p>• İndividual elektron sağlamlıq kartı</p>

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
                        <p>FORS-MAJOR</p>
                    </div>
                    <!---medical element content--->
                    <div class="medical__element__content">
                        <article class="article3" id="article3">
                            <p>
                            A-Qroup öz müştərilərinə əlavə seçimlər daxil olan müxtəlif
                             sığorta paketləri təklif edir vəfərqli fors-major vəziyyətlərdən 
                             sığortalanma imkanı yaradır. «Fors-major» sığorta proqramı ən faydalı 
                             polisdır. Bu paketin müsbət cəhəti onun qiymətidir – cəmi 80
                              ABŞ dolları hansı ki 6.000 AZN məbləğində 
                              tibbi təminat nəzərdə tutur.
                            
                            </p>
                            <p>• Münasib qiymət- 80 ABŞ dolları</p>
                           <p>• 24/7 Təcili Tibbi yardım</p>
                           <p>• Təcili Cərrahi Müdaxilə</p>
                           <p>• Təxirəsalınmaz Hospitalizasiya</p>
                           <p>• Təcili stomatoloji yardım</p>
                           <p>• Təcili Peyvənd</p>
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