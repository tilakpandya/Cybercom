
var LoginEmail = document.getElementById("AdminEmail").value;
var LoginPassword = document.getElementById("AdminPassword").value;

if(localStorage.getItem("array"))
{
   var array = JSON.parse(localStorage.getItem("array"));
}



const VarifyUser=()=>{

    
}

const moveToRegistration=()=>{
    window.location.href = "Registration.html";
}

