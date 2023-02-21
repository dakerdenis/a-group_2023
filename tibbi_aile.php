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
                    </div>
                </div>
                <img src="./styles/imgs/tibbi_blue.svg" alt="">
            </div>


            <div class="polis__count__desc">
                <div class="polis__count__desc_block">
                    <p>
                        <img src="./styles/imgs/alert-circle.svg" alt="">
                        Diqqət!
                    </p>
                    <p> Özəl proqram yalnız 1 şəxs üçün nəzərdə tutulub</p>
                </div>
            </div>


            <div class="polis__count-form">
                <form action="">
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
                    </div>


                    <p>Cins</p>


                    <!---------Çəki-------------->
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
                    
                    <!---radio block- Ritmin, keçiriciliyin pozulması və ürək xəstəlikləri varmı?
-->
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






                </form>
            </div>
        </div>
    </div>


    <script>
        $('#other-field').focus(function() {
            $('#other').prop("checked", true);
        });
    </script>

    <?php
    include './include/footer.php';
    ?>