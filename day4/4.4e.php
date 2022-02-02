<html>
<form method="get">
    <h1 align="center">
        Select your country and state.
    </h1>    
<table border='2' align='center'>
<tr align="center">
</tr>  
<tr>
    <td>Country</td>
	<td>
    <select name='country' class="country" onChange="this.form.submit()">
	<option>Select</option>
	<option value='india'>India</option>
	<option value='usa'>USA</option>
	</select>
	</td>
  </tr>
  <?php

if(isset($_GET['country']))
{
	$country = $_GET["country"];

	$countryArr = array(
	"india" => array("Gujarat","Maharstra","Rajasthan","Tamil Nadu"),
	"usa" => array("New York","Los Angles","Alabama","Alaska","Colorado")
	);

	if($country != 'Select')
	{
		echo "<tr><td><label>City</label></td>";
		echo "<td><select>";
		
		foreach($countryArr[$country] as $value)
		{
			echo "<option>" . $value . "</option>"; 
		}
		echo "</select></td></tr>";
    
	}
}
?>
<tr>
<td colspan='2'>
<input type="button" name="display" value="submit" style="background-color:red">
</table>
</form>

</body>
</html>