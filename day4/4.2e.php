<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 

  
      <?php
		  
echo "<table border='2' align='center'>";
			for($i=1; $i <= 10; $i++)
			{
				echo "<tr>";
				echo "<br>";
					for($j=1; $j <= 10; $j++)
					{
						if($j == 1)
						{
							echo "<td>" . ($i*$j) . " " . "</td>";
						}
						else
						{
							echo "<td>" . ($i*$j) . " " . "</td>";
						}
					}
				echo "</tr>";
			}
			echo "</table>";
          ?>
  </table>
  </body>
  </html>
