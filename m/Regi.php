<!DOCTYPE html>    
<html>    
<head>    
    <title>Personal Information Form</title>    
    <style type="text/css">    
        body{    
            font-family: Calibri;    
        }    
        input[type="text"] {    
            width: 250px;    
        }    
        input[type="submit"], input[type="reset"] {    
            width: 77px;    
            height: 27px;    
            position: relative;left: 180px;    
        }    
        form{    
            text-align: center;    
            font-family: Calibri;    
            font-size: 20px;    
            border: 3px solid black;    
            width: 600px;    
            margin: 20px auto;    
        }    
        td {    
            padding: 10px;    
        }    
        td:first-child {    
            text-align: right;    
            font-weight: bold;    
        }    
        td:last-child {    
            text-align: left;    
        }
        
        .button {
            background-color:blue;
            color:white;
        }
    </style>    
    <script>  
        var fname;
        var dob;
        var email;
        var gender;
        var hobby;
        function validate() {    
              fname = document.reg_form.fname;    
             dob = document.reg_form.dob;    
   
            gender = document.reg_form.gender; 
		    hobby = document.reg_form.h;    			
            email = document.reg_form.email;    
           var pass= document.reg_form.pass;   
            var repass = document.reg_form.repass; 	
    
            if (fname.value.length <= 0) {    
                alert("Name is required");    
                fname.focus();    
                return false;    
            }    
            
           
            if (gender.value.length <= 0) {    
                alert("Gender is required");    
                gender.focus();    
                return false;    
            }    
			  
			
            if (email.value.length <= 0) 
			{    
                alert("Email Id is required");    
                email.focus();    
                return false;    
            }    
			else
			{
				email=email.value;
				var atpos=email.indexOf("@");
				var dotpos=email.lastIndexOf(".");
				if(atpos<4 || dotpos<atpos+3)
				{
				//flag=0;
				alert("invalid email");
				 return false;    
				}
			 
			}
			 if (pass.value.length <= 0) {    
                alert("password is  required");    
                pass.focus();    
                return false;    
            } 
			else
			{
				if(pass.value.length <8)
				{
					alert("must insert minimum 8 character");
					return false;
				}
			}
			 if (repass.value.length <= 0) {    
                alert("re-type password is  required");    
                repass.focus();    
                return false;    
            } 
			else
			{
				
				pass=pass.value;
				repass=repass.value;
				if(pass.localeCompare(repass)!=0)
				{
				alert("repassword must be same");
				 return false;    
				}
			}
            return true;    
        }    
		function formvalidate()
		{
			if(validate())
			{
				alert("form submit success");
				document.getElementById("data").innerHTML=fname.value+'<br>'+dob.value+'<br>'+gender.value+'<br>'+hobby.value+'<br>';
				return false;
			}
			else
			{
				alert("form not submited");
				return false;
			}
		}
    </script>    
</head>    
<body>    
    <form method="" action="" name="reg_form" onsubmit="return formvalidate()">    
        <h2>Personal Information Form</h2>    
        <table>    
            <tr>    
                <td><label>First Name: </label></td>    
                <td>    
                    <input type="text" name="fname" placeholder="First Name">    
                </td>    
            </tr>    
            <tr>    
                <td><label>Birth Date</label></td>    
                <td>    
                    <input type="date" name="dob" placeholder="Last Name">    
                </td>    
            </tr>    
           
            <tr>    
                <td><label>Gender: </label></td>    
                <td>    
                    <input type="radio" name="gender" value="male">Male    
                    <input type="radio" name="gender" value="femele">Female    
                </td>    
            </tr>    
			<tr>    
            <td><label>Hobby: </label></td>    
                <td>    
                    <input type="checkbox" id="h" />singing

					<input type="checkbox" id="h" />Dancing

					<input type="checkbox" id="h" />Reading

					<input type="checkbox" id="h" />Writing
                </td>    
            </tr>    
            <tr>    
                <td><label>Email Id: </label></td>    
                <td>    
                    <input type="text" name="email"  placeholder="example@gmail.com">    
                </td>    
            </tr>    
            <tr>    
                <td><label>Password: </label></td>    
                <td>    
                    <input type="password" name="pass">    
                </td>    
            </tr>    
            <tr>    
                <td><label>Re-type Password: </label></td>    
                <td>    
                    <input type="password" name="repass">    
                </td>    
            </tr>  
            <tr>    
                <td>    
                    <input class="button" type="reset" name="reset" value="Clear">    
                    <input class="button" type="submit" name="submit" value="Submit">    
                </td>    
            </tr>             
        </table>   
		<div id="data">

</div>
    </form>    
</body>    
</html>     