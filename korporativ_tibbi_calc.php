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



            </form>
        </div>
    </div>

    <?php
    include './include/footer.php';
    ?>