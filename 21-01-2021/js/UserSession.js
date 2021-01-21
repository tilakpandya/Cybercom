if(localStorage.getItem("Admin_Registration_array"))
{
   var array = JSON.parse(localStorage.getItem("Admin_Registration_array"));
}
document.getElementById("DashboardName").innerHTML = array[0].Admin_name;

const logout=()=>{
   window.location.href = "login.html";
   localStorage.removeItem('UserArray');
}

let UserData = JSON.parse(localStorage.getItem("UserArray"));

console.log(UserData);