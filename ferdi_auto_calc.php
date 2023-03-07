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
    <div class="polis__count__container polis__count__container_avto">
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
                        <img src="./styles/imgs/tibbi_blue.svg" alt="">
                    </div>
                </div>

            </div>


            <div class="polis__count__desc">
                <div class="polis__count__desc_block">
                    <p>
                        <img src="./styles/imgs/alert-circle.svg" alt="">
                    </p>
                    <p>Qeyd edilən sığorta tarifləri dəyəri 100 000 AZN-dək olan avtomobillər üçün nəzərdə tutulub.Dəyəri 100 000 AZN-dən yüksək
                        olan avtomobillərin sığorta haqqının hesablanması üçün zəhmət olmasa *0909 nömrəsi ilə əlaqə saxlayaraq məlumat alın.</p>
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
                        <!---------Email ünvanı-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Email ünvanı</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Email ünvanı ">
                                </div>
                            </div>
                        </div>
                        <!---------Avtomobilin markası və modeli-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Avtomobilin markası və modeli</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Avtomobilin markası və modeli">
                                </div>
                            </div>
                        </div>
                        <!---------İstehsal ili-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>İstehsal ili</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="İstehsal ili">
                                </div>
                            </div>
                        </div>
                        <!---------Təmir servisi-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Təmir servisi</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Təmir servisi">
                                </div>
                            </div>
                        </div>
                        <!---------Franşıza-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Franşıza</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Franşıza">
                                </div>
                            </div>
                        </div>
                        <!---------Sürücü-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Sürücü</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Yalnız siğortalı">
                                </div>
                            </div>
                        </div>
                        <!---------Bonuslar-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Bonuslar</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Yeni Müştəri">
                                </div>
                            </div>
                        </div>

                        <!---------Maşının bazar dəyəri-------------->
                        <div class="polis__count-form__input_element">
                            <!--input desc-->
                            <div class="polis_input_element_desc">
                                <p>Maşının bazar dəyəri</p>
                            </div>
                            <!---input data--->
                            <div class="polis_input_element_input">
                                <div class="polis_input_element_input_container">
                                    <input type="text" placeholder="Maşının bazar dəyəri">
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

    <?php
    include './include/footer.php';
    ?>