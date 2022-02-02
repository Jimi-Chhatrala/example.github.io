<!-- 
<form align="center" method="post" action="52.php">

<label for="lname">Enter a number:</label>
<input type="text" id="lname" name="num"><br>

<input type="radio" id="html" name="operation" value="odde">
<label for="html">Odd or even</label><br>

<input type="radio" id="css" name="operation" value="posn">
<label for="css">Positive or negative</label><br>

<input type="radio" id="javascript" name="operation" value="primen">
<label for="javascript">Prime or composite</label><br>

<input type="radio" id="javascript" name="operation" value="palin">
<label for="javascript">palindrome or not</label><br>

<label for="lname">Result:</label>
<input type="text" id="lname" name="result">
<input type="submit" id="" name="submit" value="find">

</form> -->

<?php

$msg = '';
function odde($num)
{
  if($num % 2 == 0)
      {
          return "$num is even";
      }
      else
      {
        return "$num is odd";
      }
}
function posn($num)
{
  if($num < 0)
      {
        return "$num is negative";
      }
      else
      {
        return "$num is positive";
      }
}


function primen($num)
{
  $c=0;
  for($i = 1; $i <= $num; $i++)
  {
      if($num % $i == 0)
      {
        $c = $c + 1;
      }
  }
  
  if ($c == 2)
  {
    return "$num is PRIME";
  }
  else
  {
    return "$num is COMPOSITE";
  }
  return 0;
}


function palin($num)
{  
  $number = $num;  
  $sum = 0;  
  while(floor($number))
  {  
      $rem = $number % 10;  
      $sum = $sum * 10 + $rem;  
      $number = $number/10;  
  }  
      //return $sum;  
    if($num==$sum)
    {  
        return "$num is a Palindrome number";  
    } 
    else 
    {  
        return "$num is not a Palindrome";  
    }  
  
}
$operation = '';
if(isset($_POST['submit']))
{

$num = $_POST['num'];
$operation = $_POST['operation'];
//echo $operation;

switch ($operation) {
case "odde":
//   echo "Your choice  is Odd or even!";
  
  $msg = odde($num);
  break;
case "posn":
//   echo "Your choice  is  posn!";
$msg = posn($num);
  break;
case "primen":
//   echo "Your choice  is  primen!";
$msg = primen($num);
  break;
    case "palin":
//   echo "Your choice  is  palin!";
   $msg = palin($num);
  
  break;
default:
  echo "Your choice is neither !";
}

}

?>

<html>
<body>
	<form action="5.2e.php" method="post" >
	<table border="2" align="center">
		<tr>
			<td>Enter A Number</td>
			<td><input type="text" name="num"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="radio" name="operation"  value="odde">Odd Or Even</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="radio" name="operation" value="posn">Positive Or Negative</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="radio" name="operation" value="primen">Prime Or Composite</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="radio" name="operation" value="palin">Palindrom Or Not</td>
			
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Find"></td>
		</tr>
		<tr>
			<td>Ans</td>
			<td><input type="text" name="txt2" value='<?php echo $msg; ?>'></td>
		</td>
	</table>
	</form>
</body>
</html>