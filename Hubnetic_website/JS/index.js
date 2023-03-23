const lis = document.querySelectorAll("li");
const lbs = document.querySelectorAll(".lb");
const ul = document.querySelectorAll("ul");
const lineDash = document.querySelectorAll(".line-dash");
var TweenLite;

var dashOrigin = -35;
var selectedLi = -35;
var speed = 500;
var distance = 0;
var time = 0;

// initial animation and class for HOME
TweenLite.to(lbs[0], 0.6, {
                y: -43,
                ease: Bounce.easeOut,
                delay: 1
            });

lis[0].classList.add("active");

//push all the bottom lines down.
function pushDownLb() {
for(let k = 0; k < lbs.length; ++k)
    TweenLite.to(lbs[k], 0.5, {
                y: 0,
                ease:  Power3.easeOut
            });
}

ul.addEventListener(
"mouseleave",
function(e) {
    // to avoid a bug in chrome that sometimes triggers mouseleave on click
    // and the relatedTarget comes up null
    if (e.relatedTarget) {
        distance = Math.abs(dashOrigin - selectedLi);
        time = distance / speed;
        dashOrigin = selectedLi;
        if (time) {
            // overlaping tweens would give a zero time
            TweenLite.to(lineDash, time, {
                strokeDashoffset: selectedLi,
                ease: Bounce.easeOut
            });
        } //if
    } //if
},
false
);

for (let i = 0; i < 4; ++i) {
lis[i].addEventListener("mouseover", function() {
    distance = Math.abs(-250 * i - 35 - dashOrigin);
    time = distance / speed;
    dashOrigin = -250 * i - 35;
    if (time) {
        TweenLite.to(lineDash, time, {
            strokeDashoffset: -250 * i - 35,
            ease: Bounce.easeOut
        });
    } //if
});

lis[i].addEventListener("click", function() {
    selectedLi = -250 * i - 35;
    pushDownLb();
    let current = document.getElementsByClassName("active");
    current[0].classList.remove("active");
    lis[i].classList.add("active");
    TweenLite.to(lbs[i], 0.5, {
                y: -43,
                ease: Bounce.easeOut
            });
});
}


/* tabs pillls */

let filter_btn = document.querySelectorAll('.filter-btn');
let tab_items = document.querySelectorAll('.tab-item');

for (let i = 0; i < filter_btn.length; i++) {
  filter_btn[i].addEventListener('click', function () {
    for (let j = 0; j < filter_btn.length; j++) {
      filter_btn[j].classList.remove('active');
    }
    let select_tab = filter_btn[i].getAttribute('data-tab');
    filter_btn[i].classList.add('active');
    for (let t = 0; t < tab_items.length; t++) {
      document.querySelector('.tab-filter-item-container').style.height =
        tab_items[t].scrollHeight + 'px';
      if (tab_items[t].classList.contains(select_tab)) {
        tab_items[t].classList.add('select_tab');
      } else {
        tab_items[t].classList.remove('select_tab');
      }
    }
  });
}

for (let th = 0; th < tab_items.length; th++) {
  document.querySelector('.tab-filter-item-container').style.height =
    tab_items[th].scrollHeight + 'px';
}
