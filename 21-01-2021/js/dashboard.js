if(localStorage.getItem("Admin_Registration_array"))
{
   var array = JSON.parse(localStorage.getItem("Admin_Registration_array"));
}
document.getElementById("DashboardName").innerHTML = array[0].Admin_name;