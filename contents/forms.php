<h3 class="alignCenter">Enter your order information below:</h3>
<figure>
<form action = "" method = "POST">	
	<table>
	<tr>
		<td>First Name:</td>
		<td><input class="inputs" type = "text" size = "20" name = "fName"></td>
	</tr>
	<tr>
		<td>Last Name:</td>
		<td><input class="inputs" type = "text" size = "20" name = "lName"></td>
	</tr>
	<tr>
		<td>Purpose for build:</td>
		<td><select name="useCase" class="inputs">
			<option>General Purpose</option>
			<option>Gaming</option>
			<option>Video Editing</option>
			<option>Streaming</option>
	</tr>
	<tr>
		<td><input class="inputs" type = "submit" value = "Place Order"></td>
		<td><input class="inputs" type = "reset" value = "Clear"></td>
	</tr>
	</table>
</form>
</figure>
<?php
	$fName = '';
	$lName = '';
	
	if(!empty($_POST['fName'])) {
		$fName = $_POST['fName'];
		$lName = $_POST['lName'];
		$useCase = $_POST['useCase'];
		if(!empty($fName) OR !empty($lName))
		{
			print("<p class=\"alignCenter\">Order for $fName $lName has been submited for a $useCase pc.</p>");
		}
	}
?>

</br>
<hr/>
</br>
<h3 class="alignCenter">Search for your order information below:</h3>
<figure>
<form action = "" method = "get">	
	<table>
	<tr>
		<td>First Name:</td>
		<td><input class="inputs" type = "text" size = "20" name = "fName" required=""></td>
	</tr>
	<tr>
		<td>Last Name:</td>
		<td><input class="inputs" type = "text" size = "20" name = "lName" required=""></td>
	</tr>
	<tr>
		<td>Purpose for build:</td>
		<td><select name="useCase" class="inputs">
			<option>General Purpose</option>
			<option>Gaming</option>
			<option>Video Editing</option>
			<option>Streaming</option>
	</tr>
	<tr>
		<td><input class="inputs" type = "submit" value = "Search Order"></td>
		<td><input class="inputs" type = "reset" value = "Clear"></td>
	</tr>
	</table>
	<input type="hidden" name="page" value="forms">
</form>
</figure>
<?php
	$fName = '';
	$lName = '';
	
	if(!empty($_GET['fName'])) {
		$fName = $_GET['fName'];
		$lName = $_GET['lName'];
		$useCase = $_GET['useCase'];
		if(!empty($fName) OR !empty($lName))
		{
			print("<p class=\"alignCenter\">Order was found for $fName $lName for a $useCase pc.</p>");
		}
	}
?>