<html>
<form method="get">
<h1 align="center">
        Select color and display appropriate fruit.
    </h1>
<table border='2' align='center'>
  <tr>
    <td>Color:</td>
	<td>
    <select name='fruits' class="fruits" onChange="this.form.submit()">
	<option>Select</option>
	<option value='yellow'>Yellow</option>
	<option value='green'>Green</option>
	</select>
	</td>
  </tr>
  <?php

if(isset($_GET['fruits']))
{
	$fruits = $_GET["fruits"];

	$fruitsArr = array(
      "yellow" => array("Banana","Melon","Lemon","Pineapple"),
      "green" => array("asparagus","peas","green apples","avocado")  
    );

	if($fruits != 'Select')
	{
		echo "<tr><td><label>Fruits: </label></td>";
		echo "<td><ul>";
		
		foreach($fruitsArr[$fruits] as $value)
		{
			echo "<li>" . $value . "</li>"; 
		}
		echo "</ul></td></tr>";
    
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