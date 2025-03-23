import { initializeApp } from "https://www.gstatic.com/firebasejs/11.5.0/firebase-app.js";
import { getAuth, signInWithEmailAndPassword, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/11.5.0/firebase-auth.js";

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyBXVPjlFDkINP22f4aSPPJa8IglQTg-GsA",
  authDomain: "odsdb-48682.firebaseapp.com",
  projectId: "odsdb-48682",
  storageBucket: "odsdb-48682.firebasestorage.app",
  messagingSenderId: "916898800921",
  appId: "1:916898800921:web:9c80282c2efc68b91c5188"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

onAuthStateChanged(auth, (user) => {
    // Don't redirect if we're already on login or signup pages
    if (user && 
        window.location.href.indexOf("main.php") === -1 && 
        window.location.href.indexOf("login.php") === -1 && 
        window.location.href.indexOf("signup.php") === -1) {
        console.log("Redirecting to main...");
        window.location.href = "/ODS/main.php";
    }
});
//submit button
const submit = document.getElementById('submit');
submit.addEventListener("click", function(event){
event.preventDefault()

//inputs 
const email = document.getElementById('email').value;
const password = document.getElementById('password').value;

signInWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed up 
    const user = userCredential.user;
    alert("logging in")
	window.location.href = "../main.php"; 
    // ...
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    alert("Error")
    // ..
  });
})