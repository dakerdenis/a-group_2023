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

    bottom_image.style.backgroundImage="url('../styles/imgs/login_car.png')"; 
    top_image.style.backgroundImage="url('../styles/imgs/login_image1.svg')"; 

    
    function change_top_image() {

        top_image.style.animationName = "login_image_top1";
    };

    setTimeout(change_top_image, 3000);


    function change_top_image3() {
        top_image.style.backgroundImage="url('../styles/imgs/login_top_image2.svg')"; 
        top_image.style.animationDuration = "0.5s";
        top_image.style.animationName = "login_image_top1-2";
    };

    setTimeout(change_top_image3, 6000);
</script>

</body>

</html>