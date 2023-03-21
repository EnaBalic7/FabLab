const card = document.querySelector('.card');
const popup = document.querySelector('.popup-container');

const closeBtn = document.querySelector('.closeBtn');
const submitBtn = document.querySelector('.submitBtn');

const fileInput = document.querySelector('#file-upload');
const titleInput=document.querySelector('#title-input');  
const subTitleInput=document.querySelector('#subtitle-input'); 
const textInput = document.querySelector('#text-input');
const tagsInput = document.querySelector('#tags-input');
const specialBadgeInput=document.querySelector('#special-badge-input');

const addProjectDiv=document.querySelector('#addProject');

let imageDataUrl;
card.addEventListener('click', () => {
    popup.style.display = 'block';
})
closeBtn.addEventListener('click', () => {
    popup.style.display = 'none';
});

function validateInputs(){
    if(titleInput.value==="" || textInput.value==="" || tagsInput.value==="" || imageDataUrl===undefined || specialBadgeInput.value==="" || subTitleInput.value===""){
        alert("Please fill all inputs");
        return false;
    }
    return true;
}

fileInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
  
    const reader = new FileReader();
    reader.readAsDataURL(file);
  
    reader.onload = () => {
       imageDataUrl = reader.result;
    };
  });
  
  
submitBtn.addEventListener('click', () => {
    if(!validateInputs()){
        return;
    };
    let tile=document.createElement("div");
    tile.classList.add("tile");
    tile.innerHTML=' <div class="special-badge"> <div style="display: flex;"> <span> '+specialBadgeInput.value+' </span></div></div><div class="flip-card-innerP"><div class="flip-card-frontP"><div class="tile-image"> <img src="'+imageDataUrl+'" width="100%" alt=""></div><div class="tile-body"> <a href="#" target="_blank"><h1> '+titleInput.value+' </h1>  </a> <div class="tile-tagsProjects"><div class="tagProject"> '+tagsInput.value+' </div><div class="tagProject"> '+tagsInput.value+' </div> </div></div></div><!--end of flip-inner --><div class="flip-card-backP"><h3>'+subTitleInput.value+' </h3><p> '+textInput.value+'</p></div></div>';
    addProjectDiv.parentNode.insertBefore(tile,addProjectDiv);
});
