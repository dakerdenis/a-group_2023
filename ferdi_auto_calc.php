<?php
$title_name = "Ferdi avto calc";
include './include/header.php';

?>

<style>
    <?php
    include './styles/tibbi_calc.css';
    include  './styles/ferdi_auto_calc.css';
    ?>
</style>



<div class="main__wrapper">
    <?php
    include './include/navigation.php';
    ?>
    <div class="polis__count__container">
        <div class="polis__count__wrapper">
            <div class="polis__count__name ">
                <div class="page__name_wrapper">

                    <div class="page_name_block1 page_name_block_tibbi_calc ">
                        <p>FƏRDİ </p>
                    </div>
                    <div class="page_name_block2 page_name_block_tibbi_calc">
                        <p>Avtomobil </p>
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
                    

                    </div>


                    <!---- добавление анкеты следующего члена семьи---->
                    <div class="add_new__person_tibbi">
                        <div class="button__add__new_person">
                            <button id="add__new_person"><span>2</span>ci ailə üzvü</button>
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