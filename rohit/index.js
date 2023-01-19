
window.addEventListener('scroll', reveal);
function reveal(){
 var reveals=document.querySelectorAll('.reveal');
 for(var i=0; i<reveals.length; i++){
var windowheight=window.innerHeight;
var revealtop=reveals[i].getBoundingClientRect().top;
var revealpoint =150;
if(revealtop< windowheight-revealpoint){
 reveals[i].classList.add('active');
}
//To stop reveal elements after scroll once, make below else comment
else{
 reveals[i].classList.remove('active');
}
 }
}


