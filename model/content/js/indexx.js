// SLIDER
var img = [];
for(var i = 1; i <6; i++){
    img[i] = new Image();
    img[i].src = "./model/content/image/slider/img_"+i+".jpg";
}
var index = 0;
function before(){
    index--
    if(index < 0){
        index = img.length-1;
    }
    image.src = img[index].src
}
function after(){
    index++
    if(index >= 5){
        index = 0;
    }
    image.src = img[index].src
}
setInterval("after()",1500);