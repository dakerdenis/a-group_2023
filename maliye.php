<?php
$title_name = "MALİYYƏ GÖSTƏRİCİLƏRİ";
include './include/header.php';

?>



<div class="main__wrapper">
    <?php
    include './include/navigation.php';
    ?>
    <div class="maliye__page__container">
        <div class="maliye__page__wrapper">
            <!-------->
            <div class="maliye__page_name">
                <!------>
                <div class="page__name_wrapper">
                    <div class="page_name_block1">
                        <p>MALİYYƏ </p>
                    </div>
                    <div class="page_name_block2">
                        <p>GÖSTƏRİCİLƏRİ</p>
                    </div>
                </div>
                <!------->
                <img src="./styles/imgs/maliye_blue.svg" alt="">
            </div>

            <!-------------------->
            <div class="maliye__page__content">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, '2021')" id="defaultOpen">2021</button>
                    <button class="tablinks" onclick="openCity(event, '2020')">2020</button>
                    <button class="tablinks" onclick="openCity(event, '2019')">2019</button>
                    <button class="tablinks" onclick="openCity(event, '2018')">2018</button>
                    <button class="tablinks" onclick="openCity(event, '2017')">2017</button>
                    <button class="tablinks" onclick="openCity(event, '2016')">2016</button>
                    <button class="tablinks" onclick="openCity(event, '2015')">2015</button>
                    <button class="tablinks" onclick="openCity(event, '2014')">2014</button>
                    <button class="tablinks" onclick="openCity(event, '2013')">2013</button>
                    <button class="tablinks" onclick="openCity(event, '2012')">2012</button>
                    <button class="tablinks" onclick="openCity(event, '2011')">2011</button>
                </div>


                <div id="London" class="tabcontent">
                    <h3>London</h3>
                    <p>London is the capital city of England.</p>
                </div>

                <div id="Paris" class="tabcontent">
                    <h3>Paris</h3>
                    <p>Paris is the capital of France.</p>
                </div>

                <div id="Tokyo" class="tabcontent">
                    <h3>Tokyo</h3>
                    <p>Tokyo is the capital of Japan.</p>
                </div>


            </div>
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










