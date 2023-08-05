

function closeContainer(){
    var container = document.getElementById('popup');
    container.style.display='none';
}
var closeButton= document.getElementById('close');
closeButton.addEventListener('click',closeContainer);



// 10 seconds of delay : 
window.addEventListener("load",function(){
    setTimeout(
     function open (event){
         document.querySelector(".popup-container").style.display="block";
     },
     5000
    )
 });
 
 

// document.addEventListener("DOMContentLoaded", function() {
//     const popup = document.getElementById("popup");
//     const positionSelect = document.getElementById("positionSelect");

//     // Dodajte event listener za scroll događaj (kad se scrolla ka dnu stranice)
//     window.addEventListener("scroll", function() {
//         // Ovdje možete dodati logiku koja će prikazati popup kad se dođe do određenog dijela stranice
//         // Na primjer, ako želite prikazati popup kad se dođe do 80% visine stranice:
//         if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight * 0.8) {
//             showPopup();
//         }
//     });

//     // Dodajte event listener za odabir pozicije iz select polja
//     positionSelect.addEventListener("change", function() {
//         // Prikazujemo popup kad se odabere nova pozicija
//         showPopup();
//     });

//     // Funkcija za prikazivanje popup-a
//     function showPopup() {
//         const selectedPosition = positionSelect.value;

//         // Postavite stilove prema odabranoj poziciji
//         if (selectedPosition === "left") {
//             popup.style.left = "20px";
//             popup.style.right = "auto";
//             popup.style.transform = "none";
//         } else if (selectedPosition === "right") {
//             popup.style.left = "auto";
//             popup.style.right = "20px";
//             popup.style.transform = "none";
//         } else if (selectedPosition === "center") {
//             popup.style.left = "50%";
//             popup.style.right = "auto";
//             popup.style.transform = "translateX(-50%)";
//         }

//         // Prikazivanje popup-a
//         popup.style.display = "block";
//     }
// });

// // Dodajte event listener za odabir pozicije iz select polja
// positionSelect.addEventListener("change", function() {
//     // Prikazujemo popup kad se odabere nova pozicija
//     showPopup();
// });


