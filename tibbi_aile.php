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


                </form>
            </div>
        </div>
    </div>





    <?php
    include './include/footer.php';
    ?>