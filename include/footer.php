<div class="footer">
    <div class="footer__container">
        <div class="foter__block">
            <div class="footer__block_1_name">
                MİSSİYAMIZ
            </div>
            <div class="footer__block_1_desc">

                A-QROUP Azərbaycan sığorta sistemini inkişaf etdirən və sığorta bazarında müştərilərin artan tələbatını qarşılaya bilən stabil bir şirkət kimi fəaliyyət göstərməyi hədəf seçmişdir

            </div>
            <div class="footer__block_1_contact">
                <div class="footer__block_1_contact_desc">
                    Sualınız varsa, zəng edin
                </div>
                <div class="footer__block_1_contact_info">
                    *0909
                </div>
            </div>
            <div class="footer__block_1_contact">
                <div class="footer__block_1_contact_desc">
                    Bizə yazın
                </div>
                <div class="footer__block_1_contact_info">
                    support@a-group.az
                </div>
            </div>
        </div>
        <div class="footer__block">
            <div class="footer__block__info_block_wrapper">
                <div class="footer__block__info_block_">
                    <div class="footer__block__info__name">
                        <p>Əsas Bölmə</p>
                        <div class="footer__name__undeline"></div>
                    </div>
                    <div class="footer__block__info_block_elements">
                        <a href="#"> ŞİRKƏT HAQQINDA </a>
                        <a href="#"> MALİYYƏ GÖSTƏRİCİLƏRİ</a>
                        <a href="#"> MÜŞTƏRİ RƏYLƏRİ</a>
                        <a href="#"> RƏHBƏRLİK</a>
                        <a href="#"> FAQ</a>
                        <a href="#"> SIĞORTA QAYDALARI</a>
                    </div>
                </div>
                <div class="footer__block__info_block_">
                    <div class="footer__block__info__name">
                        <p>Məlumat Mərkəzi</p>
                        <div class="footer__name__undeline"></div>
                    </div>
                    <div class="footer__block__info_block_elements">
                        <a href="#"> KLİNİKALARIN, APTEKLƏRİN VƏ OPTİKLƏRİN SİYAHISI</a>
                        <a href="#"> DƏRMANLARIN AXTARIŞI</a>
                        <a href="#"> XƏBƏRLƏR</a>
                        <a href="#"> ƏLAQƏ</a>
                        <a href="#"> ŞIKAYƏTLƏR</a>
                    </div>
                </div>
            </div>
            <div class="footer__block__additional_info">
                <div class="footer__block__additional_info_logo">
                    <img src="./styles/imgs/footer__logo.png" alt="">
                </div>
                <div class="footer__block__additional_info__line">
                    <img src="./styles/imgs/footer__line.png" alt="">
                </div>
                <div class="footer__block__additional_info_symbols">
                    <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>

                    <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>

                    <a href="#">
                        <i class="fa fa-youtube"></i>
                    </a>

                    <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>

                    <a href="#">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="footer__block__rights_infobank">
                <p>
                    © “A-Qroup Sığorta Şirkəti” ASC 1995-2020
                </p>

                <a href="https://infobank.az/">
                    <img src="./styles/imgs/infobank.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

</div>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
  document.getElementById("myDropdown2").classList.remove("show");
}

function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show");
  document.getElementById("myDropdown").classList.remove("show");
}
function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show");
  document.getElementById("myDropdown").classList.remove("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>
</body>

</html>