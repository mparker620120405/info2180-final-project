function validateLogin(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
	
	if(email != "admin@bugme.com"){
            document.getElementById('email').style.color = "green";
            alert("Invalid Admin Email");
            return false;
        }
        else if(password != "password123"){
            document.getElementById('password').style.color = "green";
            alert("Invalid Admin Password");
            return false;
            
        }
        return true;
}