<?php
$title_name = "Klinikalar, apteklər və optikalar";
include './include/header.php';

?>
<style>
    <?php
    include './styles/clinics.css';
    ?>
</style>


<div class="main__wrapper">
    <?php
    include './include/navigation.php';
    ?>
    <div class="clinics__page__container">
        <div class="clinics__page__wrapper">
            <!-------->




            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'aptek')">Apteklərin siyahısı</button>
                <button class="tablinks" onclick="openCity(event, 'klinika')" id="defaultOpen">Klinikaların siyahısı</button>
                <button class="tablinks" onclick="openCity(event, 'optika')">Optiklərin siyahısı</button>
            </div>


            <div class="clinics__page__content">
                <!----SEARH FORM------>
                <div class="clinics__search__block">

                </div>
            </div>



            <img class="clinics__svg" src="./styles/imgs/maliye.svg" alt="">
            <img class="clinics_red" src="./styles/imgs/maliye_red.svg" alt="">
            <img class="clinics_circle" src="./styles/imgs/maliye_circle.svg" alt="">
        </div>
    </div>
    
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>


    <?php
    include './include/footer.php';
    ?>