<?php
$title_name = "Şirkət haqqında";
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
                <p>MALİYYƏ GÖSTƏRİCİLƏRİ</p>
                <img src="./styles/imgs/maliye_blue.svg" alt="">
            </div>

            <!-------------------->
            <div class="maliye__page__content">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
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