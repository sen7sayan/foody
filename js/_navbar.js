
const signInBtn = document.getElementById("signIn-btn");
const signUpBtn = document.getElementById("signUp-btn");

// console.log(signUpBtn);

signUpBtn.addEventListener("click",()=>{

    document.getElementById("signUp-form").classList.remove("d-none");
    document.getElementById("signIn-form").classList.add("d-none");

  
    
})


signInBtn.addEventListener("click",()=>{

    
    document.getElementById("signIn-form").classList.remove("d-none");
    document.getElementById("signUp-form").classList.add("d-none");
    
    
})