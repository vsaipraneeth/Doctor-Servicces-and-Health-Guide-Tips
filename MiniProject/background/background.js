$(document).ready(function(){

imageleft();
imageleft2();
imageleft3();

});

function imageleft(){
$(".bgimage").animate({marginRight: "+=10%"}, 4000);
$(".bgimage").animate({marginRight: "-=10%"}, 4000,imageleft);
}
function imageleft2(){
$(".bgimage1").animate({marginLeft: "+=10%"}, 4000);
$(".bgimage1").animate({marginLeft: "-=10%"}, 4000,imageleft2);
}
function imageleft3(){
$(".bgimage2").animate({marginLeft: "+=10%"}, 4000);
$(".bgimage2").animate({marginLeft: "-=10%"}, 4000,imageleft3);
}