
var LoginEmail = document.getElementById("AdminEmail").value;
var LoginPassword = document.getElementById("AdminPassword").value;

if(localStorage.getItem("Admin_Registration_array"))
{
   var array = JSON.parse(localStorage.getItem("Admin_Registration_array"));
}

console.log(array);

const VarifyUser=()=>{
    if(document.getElementById("AdminEmail")=="admin" && document.getElementById("AdminPassword")=="admin")
    {
        window.location.href = "dashboard.html";
    }
    else{
        alert("Invalid credentials");
    }
    
}

const moveToRegistration=()=>{
    if(localStorage.getItem("Admin_Registration_array")){
        alert("Admin Already registered!!");
    }
    else{
        window.location.href = "Registration.html";

    }
}

