const todayDate = new Date().getFullYear();
var UserArray=[];

if(localStorage.getItem("Admin_Registration_array"))
{
   var array = JSON.parse(localStorage.getItem("Admin_Registration_array"));
}
document.getElementById("DashboardName").innerHTML = array[0].Admin_name;

const deleteUser = (data) => {
    data.splice(data,1);
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
    
    UserArray.push(user);

    document.forms[0].reset();

    console.log(UserArray);

    

    localStorage.setItem('UserArray',JSON.stringify(UserArray));
    
       
    display();
}

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
    for(var i in UserArray) {
        html+=`<tr>
        <td>${UserArray[i].UserName}</td>
        <td>${UserArray[i].UserEmail}</td>
        <td>${UserArray[i].UserPassword}</td>
        <td>${UserArray[i].UserBdate}</td>
        <td>${UserArray[i].age}</td>
        <td ><button type="button" onclick="updateUser('${UserLocalArray[i]}');">Update</button></td>
        <td ><button type="button" onclick="deleteUser('${UserLocalArray[i].UserEmail}');">Delete</button></td>
      </tr>`;
    }
    
    html+="</table>";
document.getElementById("box").innerHTML = html;

};

display();