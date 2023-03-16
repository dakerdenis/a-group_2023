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



            <img class="clinics__svg" src="./styles/imgs/maliye.svg" alt="">
            <img class="clinics_red" src="./styles/imgs/maliye_red.svg" alt="">
            <img class="clinics_circle" src="./styles/imgs/maliye_circle.svg" alt="">
        </div>
    </div>


    <?php
    include './include/footer.php';
    ?>