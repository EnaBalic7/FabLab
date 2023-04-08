
const firebaseConfig = {

    apiKey: "AIzaSyDRDkp2P-e3e5Nxa8FXxX7ASEBWrD4k2ck",

    authDomain: "fablab-38a7b.firebaseapp.com",

    projectId: "fablab-38a7b",

    storageBucket: "fablab-38a7b.appspot.com",

    messagingSenderId: "673394550913",

    appId: "1:673394550913:web:b90a10c251966271218580",

    measurementId: "G-3W5RX1XVYG"
};

firebase.initializeApp(firebaseConfig);


function OpenLoginForm() {
    form.style.display = "block";
}
function CloseLoginForm() {
    form.style.display = "none";
}
loginBtn.onclick = () => {
    
    firebase.auth().signInWithEmailAndPassword(email.value, password.value)
        .then((userCredential) => {
            // User signed in successfully
            addProjectDiv.style.display = 'block';   
            CloseLoginForm();
        })
        .catch((error) => {
            // Handle sign-in errors     
            alert(error.message);
        });
}
signOutBtn.onclick = () => {
    firebase.auth().signOut().then(() => {
        // Sign-out successful.
        
    }).catch((error) => {
        // An error happened.
        alert(error.message);
    });
}
