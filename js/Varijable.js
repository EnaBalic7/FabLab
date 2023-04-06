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


const fileInput = document.querySelector('#file-upload');
const titleInput = document.querySelector('#title-input');
const subTitleInput = document.querySelector('#subtitle-input');
const textInput = document.querySelector('#text-input');
const tagsInput = document.querySelector('#tags-input');
const specialBadgeInput = document.querySelector('#special-badge-input');
const imagePreview = document.querySelector('.imagePreview');

const addProjectDiv = document.querySelector('#addProject');
let imageDataUrl;