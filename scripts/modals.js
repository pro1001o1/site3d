function fun3() {
   var houses3=document.getElementById('houses3');
   var squaremeters3=document.getElementById('squaremeters3');
   var vyvod_house3=document.getElementById('vyvod_house3');
   var vyvod_sqmeters3=document.getElementById('vyvod_sqmeters3');
   var srok3=document.getElementById('srok3');
   var price3=document.getElementById('price3');
  vyvod_house3.innerHTML=houses3.value;
  vyvod_sqmeters3.innerHTML=squaremeters3.value;
  srok3.innerHTML=houses3.value * 3;
  price3.innerHTML=squaremeters3.value * 2300;
}
function fun2() {
  var houses2=document.getElementById('houses2');
  var squaremeters2=document.getElementById('squaremeters2');
  var vyvod_house2=document.getElementById('vyvod_house2');
  var vyvod_sqmeters2=document.getElementById('vyvod_sqmeters2');
  var srok2=document.getElementById('srok2');
  var price2=document.getElementById('price2');
 vyvod_house2.innerHTML=houses2.value;
 vyvod_sqmeters2.innerHTML=squaremeters2.value;
 srok2.innerHTML=houses2.value * 3;
  price2.innerHTML=squaremeters2.value * 1650;
}
function fun1() {
  var houses1=document.getElementById('houses1');
  var squaremeters1=document.getElementById('squaremeters1');
  var vyvod_house1=document.getElementById('vyvod_house1');
  var vyvod_sqmeters1=document.getElementById('vyvod_sqmeters1');
  var srok1=document.getElementById('srok1');
  var price1=document.getElementById('price1');
 vyvod_house1.innerHTML=houses1.value;
 vyvod_sqmeters1.innerHTML=squaremeters1.value;
 srok1.innerHTML=houses1.value * 3;
  price1.innerHTML=squaremeters1.value * 1000;
}