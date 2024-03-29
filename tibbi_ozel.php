<?php
$title_name = "Tibbi aile paketi";
include './include/header.php';

?>

<style>
    <?php
    include './styles/tibbi_calc.css';
    ?>
</style>



<div class="main__wrapper">
    <?php
    include './include/navigation.php';
    ?>
    <div class="polis__count__container">
        <div class="polis__count__wrapper">
            <div class="polis__count__name">
                <div class="page__name_wrapper">
                    <div class="page_name_block1 page_name_block_tibbi_calc ">
                        <p>FƏRDİ </p>
                    </div>
                    <div class="page_name_block2 page_name_block_tibbi_calc">
                        <p>Tibbi </p>
                    </div>
                    <div class="page_name_block3 page_name_block_tibbi_calc">
                        <p>sığortanı </p>
                    </div>
                    <div class="page_name_block4 page_name_block_tibbi_calc">
                        <p>Hesabla</p>
                        <img src="./styles/imgs/tibbi_blue.svg" alt="">
                    </div>
                </div>
                
            </div>


            <div class="polis__count__desc">
                <div class="polis__count__desc_block">
                    <p>
                        <img src="./styles/imgs/alert-circle.svg" alt="">
                        Diqqət!
                    </p>
                    <p>Ailə proqramı yalnız 3 və ya daha artıq şəxs üçün nəzərdə tutulub</p>
                </div>
            </div>


            <div class="polis__count-form">
                <form action="">
                    <!---form data container for additional users---->
                    <div id="form__data__container" class="form__data__container">
                        <!---------Ad-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Ad</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Ad">
                                </div>
                            </div>
                        </div>
                        <!---------Soyad-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Soyad</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Soyad">
                                </div>
                            </div>
                        </div>
                        <!---------Doğum tarixi-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Doğum tarixi</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Doğum tarixi">
                                </div>
                            </div>
                        </div>                        <!---------Çəki-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Çəki</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Çəki (kg)">
                                </div>
                            </div>
                        </div>
                        <!---------Boyu-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Boyu</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Boyu (kg)">
                                </div>
                            </div>
                        </div>
                        <!---------Əlaqə nömrəsi-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Əlaqə nömrəsi</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Əlaqə nömrəsi">
                                </div>
                            </div>
                        </div>
                        <!---------İş yeri-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>İş yeri</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="İş yeri">
                                </div>
                            </div>
                        </div>
                        <!---------Ünvan-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Ünvan</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Ünvan">
                                </div>
                            </div>
                        </div>
                        <!---------Email ünvanı-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Email ünvanı</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Email ünvanı">
                                </div>
                            </div>
                        </div>
                        <!---radio block- Son 2 ildə müayinədən keçmisiniz?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Son 2 ildə müayinədən keçmisiniz?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Siz hospitalizasiya olunmusunuz?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Siz hospitalizasiya olunmusunuz?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat2" name="animal2" value="" />
                                    <label for="cat2">Bəli</label>

                                    <input type="radio" id="dog2" name="animal2" value="" />
                                    <label for="dog2">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Hal-hazırda hər hansı bir müalicə və ya dərman qəbul edirsiniz?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Hal-hazırda hər hansı bir müalicə və ya dərman qəbul edirsiniz?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat3" name="animal3" value="" />
                                    <label for="cat3">Bəli</label>

                                    <input type="radio" id="dog3" name="animal3" value="" />
                                    <label for="dog3">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Qida borusunun, mədə-bağırsaq sisteminin xəstəlikləri varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Qida borusunun, mədə-bağırsaq sisteminin xəstəlikləri varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Astma, allergiya, ağciyər xəstəlikləri müəyyən olunubmu?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Astma, allergiya, ağciyər xəstəlikləri müəyyən olunubmu?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Böyrəklərin, sidik sisteminin xəstəlikləri varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Böyrəklərin, sidik sisteminin xəstəlikləri varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Anadangəlmə və irsi xəstəliklər varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Anadangəlmə və irsi xəstəliklər varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Anadangəlmə və irsi xəstəliklər varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Anadangəlmə və irsi xəstəliklər varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Baş ağrıları, başgicəllənmə və miqren olurmu?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Baş ağrıları, başgicəllənmə və miqren olurmu?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Arterial təzyiqin artımı (140/90 yuxarı)?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Arterial təzyiqin artımı (140/90 yuxarı)?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Revmatizm (əzələlərin, sümüklərin və oynaqların xəstəlikləri) varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Revmatizm (əzələlərin, sümüklərin və oynaqların xəstəlikləri) varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Venaların varikozu və başqa damar xəstəlikləri varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Venaların varikozu və başqa damar xəstəlikləri varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Ritmin, keçiriciliyin pozulması və ürək xəstəlikləri varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Ritmin, keçiriciliyin pozulması və ürək xəstəlikləri varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Psixi xəstəlik, əsəb pozğunluğu, epilepsiya varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Psixi xəstəlik, əsəb pozğunluğu, epilepsiya varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Travmalar, zədələnmələr, defektlər (onların nəticələri) varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Travmalar, zədələnmələr, defektlər (onların nəticələri) varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Bel nahiyəsində və onurğa sütununda problemlər varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Bel nahiyəsində və onurğa sütununda problemlər varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Qaraciyər, dalaq, mədəaltı vəzi xəstəlikləri varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Qaraciyər, dalaq, mədəaltı vəzi xəstəlikləri varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Qan xəstəlikləri varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Qan xəstəlikləri varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Şəkərli diabet varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Şəkərli diabet varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block-Digər endokrinoloji xəstəliklər varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Digər endokrinoloji xəstəliklər varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Xoş və ya bəd xassəli şişlər varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Xoş və ya bəd xassəli şişlər varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block-Səhhətinizlə bağlı başqa probleminiz varmı?-->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Səhhətinizlə bağlı başqa probleminiz varmı?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                        <!---radio block- Siz hal-hazırda və ya əvvəl sığortalı olmusunuzmu?--->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Siz hal-hazırda və ya əvvəl sığortalı olmusunuzmu?</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_radio">
                                    <input type="radio" id="cat" name="animal" value="" />
                                    <label for="cat">Bəli</label>

                                    <input type="radio" id="dog" name="animal" value="" />
                                    <label for="dog">Xeyr</label>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!---HESABLA---->
                    <div class="tibbi__calculation">
                        <div class="tibbi_calculation__block">
                            <div class="tibbi_calc_price">
                                <p>
                                    <span>567</span>
                                    <span>₼</span>
                                </p>
                            </div>
                            <div class="tibbi_calc_button">
                                <button>Həsabla</button>
                            </div>
                        </div>
                    </div>


                    <!---sifaris et---->
                    <div class="tibbi__order">
                        <div class="tibbi__order__block">
                            <a href="">Sifariş et</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <script>
        $('#other-field').focus(function() {
            $('#other').prop("checked", true);
        });


        /*******************/


    </script>
    <script src="./js/add_new_user.js"></script>

    <?php
    include './include/footer.php';
    ?>