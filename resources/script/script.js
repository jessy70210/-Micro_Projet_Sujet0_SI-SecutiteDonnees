const search = document.querySelector(".search");
const search_icon = document.querySelector(".nav-link-search");
const input = document.querySelector(".input");
var plus = document.getElementsByClassName("plus");
var minus= document.getElementsByClassName("minus");
var countInput=document.getElementsByClassName("count");
var count1=0;
var count2=0;
var count3=0;
plus[0].onclick = function () {

    countInput[0].value =++count1;
};
minus[0].onclick = function () {

    if(count1==0){
        countInput[0].value =0;
    }else{
        countInput[0].value =--count1;
    }
};
plus[1].onclick = function () {

    countInput[1].value =++count2;
};
minus[1].onclick = function () {

    if(count2==0){
        countInput[1].value =0;
    }else{
        countInput[1].value =--count2;
    }
};
plus[2].onclick = function () {

    countInput[2].value =++count3;
};
minus[2].onclick = function () {

    if(count3==0){
        countInput[2].value =0;
    }else{
        countInput[2].value =--count3;
    }
};
input.hidden=true;
search_icon.addEventListener("click", () => {
    input.hidden=false;
    search.classList.toggle("active");
    input.focus();
});
