<?php
$title_name = "Daxil olun";
include './header.php';

?>
<style>
    <?php
    include '../styles/style.css';
    include '../styles/login.css';
    ?>
</style>



<div class="main__wrapper">

    <div class="login__page__container">


        <!---->
        <div class="login__page__login_form">
            <div class="login__page__login__wrapper">
                <form action="#" class="login__page__form">
                    <div class="login__form__name">
                        <p>Daxil ol</p>
                    </div>

                    <div class="login__form__name__desc">
                        <p>
                            Məlumatlarınızı daxil edin
                        </p>
                    </div>

                    <div class="login__form__desc">
                        <p>
                            Sığorta FİN və Mobil nömrəsi dazil etməklə
                            davam edin.
                        </p>
                    </div>

                    <div class="login__form__input__wrapper">
                        <div class="login__form__input__block">
                            <input placeholder="Sığorta nömrəsi" type="text">
                        </div>

                        <div class="login__form__input__block">
                            <input placeholder="FİN kod" type="text">
                        </div>

                        <div class="login__form__input__block">
                            <input placeholder="Mobil nömrə" type="text">
                        </div>
                    </div>

                    <div class="login__form__login__button">
                        <button>Göndər</button>
                    </div>
                </form>
            </div>
        </div>
        <!----->




        <!--фотки сверху---->
        <img src="../styles/imgs/login_image1.svg" alt="" class="top__image1">

        <!---фотки снизу-->
        <img src="../styles/imgs/login_eblan.png" alt="" class="bottom__image1">
    </div>


</div>
<script src="./js/script.js"></script>
<!------->

</body>

</html>