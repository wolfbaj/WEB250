<form action = "" method = "POST">	
	<table>
	<tr>
		<td>First Name:</td>
		<td><input class="inputs" type = "text" size = "20" name = "fName" value="John" required></td>
		<td>Last Name:</td>
		<td><input class="inputs" type = "text" size = "20" name = "lName" value="Doe" required></td>
	</tr>
	<tr>
		<td>Starting Frequency:</td>
		<td><input name="sRange" class="inputs" type="number" value="1" min="0" required>
		<td>Ending Frequency:</td>
		<td><input name="eRange" class="inputs" type="number" value="250" min="10" required></td>
	</tr>
	<tr>
		<td>Number for Fizz:</td>
		<td><input name="echo1" class="inputs" type="number" value="3" required></td>
		<td>Word for Fizz:</td>
		<td><input name="callb1" class="inputs" type="text" value="Fizz" required></td>
	</tr>
	<tr>
		<td>Number for Buzz:</td>
		<td><input name="echo2" class="inputs" type="number" value="5" required></td>
		<td>Word for Buzz:</td>
		<td><input name="callb2" class="inputs" type="text" value="Buzz" required></td>
	</tr>
	<tr>
		<td>Number for Bang:</td>
		<td><input name="echo3" class="inputs" type="number" value="7" required></td>
		<td>Word for Bang:</td>
		<td><input name="callb3" class="inputs" type="text" value="Bang" required></td>
	</tr>
	<tr>
		<td><input class="inputs" type = "submit" value = "Generate Results"></td>
	</tr>
	</table>
</form>

<?php
	//keeps the PHP from running when page is loaded
	if(!empty($_POST['fName']))
	{
		echo "<div>";
		
		$name = $_POST['fName'] . " " . $_POST['lName'];
		echo "Hello $name, here is your results:<br>";
		
		//sets start and end ranges
		$sRange = $_POST['sRange'];
		$eRange = $_POST['eRange'];
		
		//checks if the ranges are valid
		if($sRange >= $eRange)
		{
			echo "Invalid range";
		}else
		{
			//sets array for $echoes from user form input
			$echoes = [$_POST['echo1'], $_POST['echo2'], $_POST['echo3']];
			//sets array for $callbacks from user form input
			$callbacks = [$_POST['callb1'], $_POST['callb2'], $_POST['callb3']];
			//loops from start range $sRange to end range eRange
			foreach (range($sRange, $eRange) as $i) 
			{
				//sets $isEchoX to postion in callbacks array if there is no remainder. if false sets to ''
				$isEcho1 = ($i % $echoes[0] === 0 ? $callbacks[0] : '');
				$isEcho2 = ($i % $echoes[1] === 0 ? $callbacks[1] : '');
				$isEcho3 = ($i % $echoes[2] === 0 ? $callbacks[2] : '');
				
				//if all $isEchos false ie all results had remainder add number to results array
				if(!$isEcho1 && !$isEcho2 && !$isEcho3) 
				{
					$result[] = $i;
				}else 
				{	
					//adds the results of each $isEcho to results array
					$result[] = "$isEcho1 $isEcho2 $isEcho3";
				}
			}	
		//prints the results array with a , seperating the data
        echo implode(" , ", $result);
		}
		echo "</div>";
	}
?>