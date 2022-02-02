<html>
<body>

<form action="" method="post">
Enter Your Name: <input type="text" name="fname"><br>
Select your gender<input type="radio" value="1" name="gen">male
<input type="radio" name="gen" value="1">female<br>
Enter Your age: <input type="text" name="age"><br>
Enter Your Salary: <input type="text" name="sal"><br>
Your Hobby
<input type="checkbox" id="s" name="h[]" value="singing"/>singing

<input type="checkbox" id="s" name="h[]" value="dancing" />Dancing

<input type="checkbox"id="s" name="h[]" value="reading"/>Reading

<input type="checkbox" id="s" name="h[]" value="writing"/>Writing<br>
<input type="submit" name="submit">
</form>
<?php
$fname=$_POST['fname'];
$gen=$_POST['gen'];
echo $age=$_POST['age'];
$sal=$_POST['sal'];
$h=$_POST['h'];
if(isset($_POST['submit']))
	{
	echo "First Name: ".gettype($fname)."<br>";
	echo "Gender: ".gettype($gen)."<br>";
	echo "age: ".gettype($age)."<br>";
	echo "salary: ".gettype($sal)."<br>";
	echo "Hobbies: ".gettype($h)."<br>";
	}

?>

</body>
</html>
