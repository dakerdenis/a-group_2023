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
                    <div class="page_name_block">
                        MALİYYƏ 
                    </div>
                    <div class="page_name_block">
                        GÖSTƏRİCİLƏRİ
                    </div>
                </div>
                <!------->
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












<!DOCTYPE html>
<html>
<head>
<style> 
.wrapper{
	background-color: #e3e3e3;
    width: 100%;
    height: 150px;
    display: flex;
    align-items: center;
    overflow: hidden;
    position: relative;

}
.wrapper .div1 {
  width: 100px;
  height: 100px;
  background: red;
  position: relative;
	transform: translateY(200px);
   -webkit-animation: mymove 2s alternate;
   -moz-animation: mymove 2s alternate;
  animation: mymove 2s alternate;
  margin-left: 10px;
  animation-delay: 0.5s;
  animation-fill-mode: forwards; 

}

.wrapper .div2 {
  width: 100px;
  height: 100px;
  background: red;
  position: relative;
transform: translateY(200px);
-webkit-animation: mymove 2s alternate;
   -moz-animation: mymove 2s alternate;
  margin-left: 10px;
  animation-delay: 1s;
  animation-fill-mode: forwards; 

    
}
.wrapper .div3 {
  width: 100px;
  height: 100px;
  background: red;
  position: relative;
transform: translateY(200px);
  -webkit-animation: mymove 2s alternate;
     -moz-animation: mymove 2s alternate;
  margin-left: 10px;
  animation-delay: 1.5s;
  animation-fill-mode: forwards; 

}


@keyframes mymove {
  to{transform: translateY(0px);
}
}

</style>
</head>
<body>

<h1>The @keyframes Rule</h1>

<div class="wrapper">
	<div class="div1">We</div>
    <div class="div2">are the </div>
    <div class="div3">champions</div>
</div>


</body>
</html>