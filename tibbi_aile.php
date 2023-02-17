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
                            <input type="text">
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>





    <?php
    include './include/footer.php';
    ?>