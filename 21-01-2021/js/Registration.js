var Admin_Registration_array = [];

var check = function() {
    if (document.getElementById('AdminRegisterPassword').value !== document.getElementById('AdminConfirmPassword').value) {
     alert("Password doesn't matched.");
    } 
  }


const addToArray=()=>{
        
    if(document.getElementById('AdminName').value !=="" &&
    document.getElementById('AdminRegisterEmail').value !=="" &&
    document.getElementById('AdminRegisterPassword').value !=="" &&
    document.getElementById('AdminCity').value !=="Select city" &&
    document.getElementById('AdminState').value !=="Select city" &&
    document.getElementById('AdminTermsAndConditions').check==true)
    {
        let admin={
            Admin_name: document.getElementById('AdminName').value,
            Admin_email : document.getElementById('AdminRegisterEmail').value,
            Admin_password : document.getElementById('AdminRegisterPassword').value,
            Admin_city : document.getElementById('AdminCity').value,
            Admin_State : document.getElementById('AdminState').value
        }

        Admin_Registration_array.push(admin);

        document.forms[0].reset();

        console.log(Admin_Registration_array);

        alert("Record inserted Successfully");
        localStorage.setItem('Admin_Registration_array',JSON.stringify(array));
    }
    else{

        alert("Fill the empty values");
    }
}
