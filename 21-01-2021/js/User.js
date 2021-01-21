const todayDate = new Date().getFullYear();
var UserArray=[];
let data = JSON.parse(localStorage.getItem("UserArray"))



const updateUser = (updateIndex) => {
    document.getElementById('UserName').value = data[updateIndex].UserName;
    document.getElementById('UserEmail').value= data[updateIndex].UserEmail ;
    document.getElementById('UserPassword').value = data[updateIndex].UserPassword;
    document.getElementById('UserBdate').value = data[updateIndex].UserBdate;
    data[updateIndex].age = todayDate - new Date(date.value).getFullYear();
    updateIndex = null;
    localStorage.setItem("users", JSON.stringify(data));
    display();
  };

const display=()=>{

    var html = "<br><br><br><table border='1|1' align='center'>";
                html+="<tr>";
                html+="<th>Name</th>";
                html+="<th>Email</th>";
                html+="<th>Password</th>";
                html+="<th>Birthdate</th>";
                html+="<th>Age</th>";
                html+="<th colspan='2'>Actions</th>";
                html+="</tr>";
    for(var i in data) {
        html+=`<tr>
        <td>${data[i].UserName}</td>
        <td>${data[i].UserEmail}</td>
        <td>${data[i].UserPassword}</td>
        <td>${data[i].UserBdate}</td>
        <td>${data[i].age}</td>
        <td ><button type="button" onclick="updateUser('${i}');">Update</button></td>
        <td ><button type="button" onclick="deleteUser('${i}');">Delete</button></td>
      </tr>`;
    }
    
    html+="</table>";
document.getElementById("box").innerHTML = html;

};
display()
if(localStorage.getItem("Admin_Registration_array"))
{
   var array = JSON.parse(localStorage.getItem("Admin_Registration_array"));
}
document.getElementById("DashboardName").innerHTML = array[0].Admin_name;

const deleteUser = (index) => {
    // alert(data)
    data.splice(index,1);
    localStorage.setItem('UserArray',JSON.stringify(data)); 
    display();
};

const addToArray=()=>{

    let user={
        UserName: document.getElementById('UserName').value,
        UserEmail : document.getElementById('UserEmail').value,
        UserPassword : document.getElementById('UserPassword').value,
        UserBdate : document.getElementById('UserBdate').value,
        age: todayDate - new Date(document.getElementById('UserBdate').value).getFullYear()
    }
    
    data.push(user);

    console.log(UserArray);
    localStorage.setItem('UserArray',JSON.stringify(UserArray));
    document.forms[0].reset();  
    display();
}

const logout=()=>{
    window.location.href = "login.html";
    localStorage.removeItem('UserArray');
}

display();