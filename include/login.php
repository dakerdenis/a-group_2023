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
                            <input id="insurance_number" placeholder="Sığorta nömrəsi" type="text">
                        </div>

                        <div class="login__form__input__block">
                            <input id="fin_code" placeholder="FİN kod" type="text">
                        </div>

                        <div class="login__form__input__block">
                            <input id="mobile_number" placeholder="Mobil nömrə" type="text">
                        </div>
                    </div>

                    <div class="login__form__login__button">
                        <button type="submit">Göndər</button>
                    </div>
                    
                </form>
            </div>
        </div>
        <!----->




        <!--фотки сверху---->
        <div class="top__image1">

        </div>






        <!---фотки снизу-->
        <div class="bottom_image1">

        </div>
    </div>


</div>
<script src="./js/script.js"></script>
<!------->

<script>
    var top_image = document.querySelector(".top__image1");
    var bottom_image = document.querySelector(".bottom_image1");
    var background = document.querySelector(".login__page__container");


    bottom_image.style.backgroundImage = "url('../styles/imgs/login_car.png')";
    top_image.style.backgroundImage = "url('../styles/imgs/login_image1.svg')";
    background.style.backgroundColor = "#E8D0A4"

    function animation1() {
        bottom_image.style.animationName = "animation_botom";
        top_image.style.animationName = "login_image_top1";
        background.style.animationName = "background_animation"
    };

    setTimeout(animation1, 7000);


    function animation2() {
        top_image.style.backgroundImage = "url('../styles/imgs/login_top_image2.svg')";
        top_image.style.animationDuration = "0.5s";
        top_image.style.animationName = "login_image_top1-2";

        background.style.animationName = "background_animation2"
        background.style.backgroundColor = "#90C3CB"

        bottom_image.style.animationName = "animation_botom2"
        bottom_image.style.animationName = "2s";

    };

    setTimeout(animation2, 14000);


    function animation3() {
        bottom_image.style.animationName = "animation_botom3"
        bottom_image.style.animationName = "2s";

        background.style.animationName = "background_animation2";
        background.style.backgroundColor = "rgba(215, 125, 99, 1)";




        top_image.style.top = "0";
        top_image.style.left = "0";
        top_image.style.right = "initial";

        top_image.style.width = "297px";
        top_image.style.height = "244px";
        top_image.style.backgroundPosition = "center";
        top_image.style.backgroundSize = "contain";
        top_image.style.backgroundRepeat = "no-repeat";


        top_image.style.animationDuration = "1s";
        top_image.style.animationName = "top_animation3";

    }
    setTimeout(animation3, 21000);
</script>

</body>

</html>