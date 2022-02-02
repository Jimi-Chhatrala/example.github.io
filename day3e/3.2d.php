<?php
error_reporting(0);
$monthly_payment = '';
$total_payable = '';
$total_interest = '';
if(isset($_POST['compute']))
{

    $annualRateInterest = $_POST['interest'];
    $numberOfYears = $_POST['noy'];
    $loanAmount = $_POST['lamount'];
    
    $monthly_payment = $loanAmount * $annualRateInterest / (1-(pow((1+$annualRateInterest),- ($numberOfYears*12))));
    $total_payable = $monthly_payment * ($numberOfYears*12);
$total_interest = ($total_payable - $loanAmount);
}

?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>Calculate Loan Amount</title>    
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
    <form method="post" action="3.2d.php" name="reg_form" onsubmit="return formvalidate()">    
        <h2>Calculate Loan Amount</h2>    
        <table>    
            <tr>    
                <td><label>Annual Interest Rate: </label></td>    
                <td>    
                    <input type="text" name="interest" placeholder="3.8">    
                </td>    
            </tr>    
            <tr>    
                <td><label>Number of years</label></td>    
                <td>    
                    <input type="text" name="noy" placeholder="30">    
                </td>    
            </tr>    
              
            <tr>    
                <td><label>Loan Amount: </label></td>    
                <td>    
                    <input type="text" name="lamount"  placeholder="450000">    
                </td>    
            </tr>    
            
              
            <tr>    
                <td><label>Monthly Payment: </label></td>    
                <td>    
                    <input type="text" name="mp"  placeholder="2096.81" value="<?php echo $monthly_payment; ?>">    
                </td>    
            </tr>    
            <tr>    
                <td><label>Total Payment: </label></td>    
                <td>    
                    <input type="text" name="tp"  placeholder="754851.60">    
                </td>    
            </tr>    
            
            <tr>    
                <td>    
                      <button  type="submit" name="compute" >Compute Payment</button>
                </td>    
            </tr>             
            <tr>    
                <td><label>Monthly Payment: </label></td>    
                <td>    
                    <input type="text" name="mp"  placeholder="2400">    
                </td>    
            </tr> 
            
            <tr>    
                <td><label>Loan Amount: </label></td>    
                <td>    
                    <input type="text" name="lamount"  placeholder="515068.60">    
                </td>    
            </tr> 

            <tr>    
                <td>    
                    <button  type="submit" name="compute" >Compute Loan Amount</button>
                      
                </td>    
            </tr>             

        </table>   
		<div id="data">

</div>
    </form>    
</body>    
</html>     