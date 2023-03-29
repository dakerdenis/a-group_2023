<?php
$title_name = "Dərmanların axtarışı";
include './include/header.php';

?>
<style>
    <?php
    include './styles/clinics.css';
    include './styles/medicaments.css';
    ?>
</style>


<div class="main__wrapper">
    <?php
    include './include/navigation.php';
    ?>
    <div class="clinics__page__container">
        <div class="clinics__page_name">
            <!------>
            <div class="page__name_wrapper">
                <div class="page_name_block1">
                    <p>Dərmanların, &nbsp;</p>

                </div>
                <div class="page_name_block3">
                    <p>axtarışı</p>
                    <img class="medicaments_img" src="./styles/imgs/medicaments.svg" alt="">
                </div>
            </div>
            <!------->

        </div>

        <div class="clinics__page__wrapper">
            <!-------->




            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'qeydiyyet_movcudlugu')">Qeydiyyatın mövcudluğu</button>
                <button class="tablinks" onclick="openCity(event, 'derman_tesvir')" id="defaultOpen">Dərman təsviri </button>
            </div>


            <div class="clinics__page__content">
                <!---------------------------------->
                <div id="derman_tesvir" class="tabcontent">
                    <!----SEARH FORM------>
                    <div class="clinics__search__block">
                        <form class="search_form__container">
                            <div class="search_form__block">
                                <img src="./styles/imgs/search.svg" alt="">
                                <input type="text" placeholder="Axtar">
                            </div>

                            <div class="search_form_button">
                                <button>
                                    <img src="./styles/imgs/search_arrow.svg" alt="">
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="clinics__search__result__wrapper">
                            Medicaments

                    </div>
                    <div class="clinics__search__result__button">
                        <button>
                            DAHA ÇOX
                        </button>
                    </div>
                </div>
                <!---------------------------------->
                <!---------------------------------->
                <div id="qeydiyyet_movcudlugu" class="tabcontent">
                    <!----SEARH FORM------>
                    <div class="clinics__search__block">
                        <form class="search_form__container">
                            <div class="search_form__block">
                                <img src="./styles/imgs/search.svg" alt="">
                                <input type="text" placeholder="Axtar">
                            </div>

                            <div class="search_form_button">
                                <button>
                                    <img src="./styles/imgs/search_arrow.svg" alt="">
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="clinics__search__result__wrapper">

                    Medicaments 2

                    </div>
                    <div class="clinics__search__result__button">
                        <button>
                            DAHA ÇOX
                        </button>
                    </div>
                </div>
                <!---------------------------------->
                <!---------------------------------->
                <!---------------------------------->




            </div>



            <img class="medicaments_svg" src="./styles/imgs/medicine_1.svg" alt="">
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