
// close button
function closeContainer(){
    var container = document.getElementById('popup');
    container.style.display='none';
}
var closeButton= document.getElementById('close');
closeButton.addEventListener('click',closeContainer);



// 5 seconds of delay : 
window.addEventListener("load",function(){
    setTimeout(
     function open (event){
         document.querySelector(".popup-container").style.display="block";
     },
     5000
    )
 });
 
 

