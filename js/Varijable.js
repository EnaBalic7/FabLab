//auth
const form = document.getElementById("form-login");
const email = document.querySelector("#email-input");
const password = document.querySelector("#password-input");
const loginBtn = document.querySelector(".submitLogin");
const signOutBtn = document.querySelector("#signOut");
const userInfo=document.getElementById("UserInfo");

//add project
let tiles = document.querySelectorAll('.tile');
const popup = document.querySelector('.popup-container');

const closeBtn = document.querySelector('.closeBtn');
const submitBtn = document.querySelector('.submitBtn');

//forma
const fileInput = document.querySelector('#file-upload');
const titleInput = document.querySelector('#title-input');
const subTitleInput = document.querySelector('#subtitle-input');
const textInput = document.querySelector('#text-input');
const tagsInput = document.querySelector('#tags-input');
const specialBadgeInput = document.querySelector('#special-badge-input');
const hyperLinkInput = document.querySelector('#hyperlink-input');

const imagePreview = document.querySelector('.imagePreview');


const addProjectDiv = document.querySelector('#addProject');


const categorySelect = document.getElementById("category-select");
let selectedCategory ="Local";
categorySelect.addEventListener("change", function() {
     selectedCategory = categorySelect.value; 
  });

let imageDataUrl;
fileInput.addEventListener('change', (event) => {
    const file = event.target.files[0];

    const reader = new FileReader();
    reader.readAsDataURL(file);
    
    reader.onload = () => {
        imageDataUrl = reader.result;
        imagePreview.style.display = 'block';
        imagePreview.style.backgroundImage = `url(${imageDataUrl})`;
    }; 
});
