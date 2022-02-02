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
        var pcode;
        var pname;
        var desc;
        var category;
        var sp;
        var discount;

        function validate() {    
              pcode = document.reg_form.pcode;    
              pname = document.reg_form.pname;    
              desc = document.reg_form.desc;    
              category = document.reg_form.category;    
              sp = document.reg_form.sp;    
              discount = document.reg_form.discount;    
            

		function formvalidate()
		{
			if(validate())
			{
				alert("form submit success");
				document.getElementById("data").innerHTML=
                pcode.value + '<br>'
                 +pname.value + '<br>'
                 +desc.value + '<br>'
                 +desc.value+'<br>';
                 +category.value+'<br>'
                 +sp.value+'<br>';
                 +discount.value+'<br>';
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
        <h2>Product Information Form</h2>    
        <table>    
            <tr>    
                <td><label>Product Code : </label></td>    
                <td>    
                    <input type="text" name="pcode" placeholder="Product Code">    
                </td>    
            </tr>    
            <tr>    
                <td><label>Product Name : </label></td>    
                <td>    
                    <input type="text" name="pname" placeholder="Product Name">    
                </td>    
            </tr>    
			<tr>    
            <td><label>Category: </label></td>    
                <td>
                <select name='category' class="country">
                <option>Select</option>
                <option value='eatable'>Eatable</option>
                <option value='drinkable'>Drinkable</option>
                </select>
                </td> 
            </tr>    
            <tr>    
                <td><label>Description: </label></td>    
                <td>    
                    <input type="text" name="desc"  placeholder="It is eatable thing">    
                </td>    
            </tr>    
            <tr>    
                <td><label>Sale Price (Rs): </label></td>    
                <td>    
                    <input type="text" name="sp"  placeholder="1200.00">    
                </td>    
            </tr>    
            <tr>    
                <td><label>Discount (%): </label></td>    
                <td>    
                    <input type="text" name="discount"  placeholder="10%">    
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