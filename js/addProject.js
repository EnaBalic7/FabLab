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

const addProjectDiv = document.querySelector('#addProject');

let imageDataUrl;



function validateInputs() {
    if (titleInput.value === "" || textInput.value === "" || tagsInput.value === "" || imageDataUrl === undefined || specialBadgeInput.value === "" || subTitleInput.value === "") {

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
const CreateElement = (tag, className) => {
    const element = document.createElement(tag);
    element.classList.add(className);
    return element;
};

const CreateTag = (tags) => {
    const tileTags = CreateElement('div', 'tile-tagsProjects');
    const tagsArray = tags.split(',');
    tagsArray.forEach(tag => {
        const tileTagsDiv = CreateElement('div', 'tagProject');
        tileTagsDiv.innerText = tag;
        tileTags.appendChild(tileTagsDiv);
    });
    return tileTags;
};
let addProject = () => {
    const tag = CreateTag(tagsInput.value);
    const tile = CreateElement('div', 'tile');
    
    if (!validateInputs()) {
        return;
    };
    //innerHTML privremena pohrana
    tile.innerHTML = ' <div class="special-badge"> <div style="display: flex;"> <span> ' + specialBadgeInput.value + ' </span></div></div><div class="flip-card-innerP"><div class="flip-card-frontP"><div class="tile-image"> <img src="' + imageDataUrl + '" width="100%" alt=""></div><div class="tile-body"> <a href="#" target="_blank"><h1> ' + titleInput.value + ' </h1>  </a> ' + tag.outerHTML + ' </div></div><!--end of flip-inner --><div class="flip-card-backP"><h3>' + subTitleInput.value + ' </h3><p> ' + textInput.value + '</p></div></div>';
    addProjectDiv.parentNode.insertBefore(tile, addProjectDiv);
    popup.style.display = 'none';
}

let editProject = (tile) => {
    const tag = CreateTag(tagsInput.value);
    if (!validateInputs()) {
        return;
    };
    //innerHTML privremena pohrana
    tile.innerHTML = ' <div class="special-badge"> <div style="display: flex;"> <span> ' + specialBadgeInput.value + ' </span></div></div><div class="flip-card-innerP"><div class="flip-card-frontP"><div class="tile-image"> <img src="' + imageDataUrl + '" width="100%" alt=""></div><div class="tile-body"> <a href="#" target="_blank"><h1> ' + titleInput.value + ' </h1>  </a> ' + tag.outerHTML + ' </div></div><!--end of flip-inner --><div class="flip-card-backP"><h3>' + subTitleInput.value + ' </h3><p> ' + textInput.value + '</p></div></div>'; 
    popup.style.display = 'none';
}
//kontrola popupa 
addProjectDiv.onclick = () => {
    popup.style.display = 'block';
    submitBtn.innerText = 'Add project';
    document.querySelector(".popup-content").children[0].innerText = "Add New Project";
    submitBtn.onclick = () => {
        addProject();
    }
}
closeBtn.addEventListener('click', () => {
    popup.style.display = 'none';
});
//kontrola popupa

//editovanje projekta
for (const tile in tiles) {
    if (Object.hasOwnProperty.call(tiles, tile)) {
        let element = tiles[tile];    
        element.onclick = () => {
            popup.style.display = 'block';
            document.querySelector(".popup-content").children[0].innerText = "Edit project";
            submitBtn.innerText = 'Edit project';
            submitBtn.onclick = () => {
                editProject(element);
            }
        }
    }
}










