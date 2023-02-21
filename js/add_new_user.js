var add_new = document.getElementById("add__new_person");
var div_add = document.getElementById("form__data__container");

var number_people = 1;


add_new.addEventListener("click", function (event) {
  event.preventDefault();
  var div = document.createElement("div");
  div.setAttribute("class", "add_new_person_block");
  div.innerHTML = `
  <!---anket ikinci ve basqa---->
  <div class="add__new__user__number">
      <p>Anket No ${number_people}</p>
  </div>
    <div class="parent">
        <div class="child">asdasd</div>
        <div class="child">+</div>
        <div class="child">asdasd</div>
        <div class="child">=</div>
        <div class="child">asdasdasdasd</div>
    </div>
`;
  div_add.appendChild(div);
  number_people +=1;
});
