<html>
<head><h1><center>Student Registration Form</center></h1></head>
<form action = "register.php" method = "POST">
<body>
	<link rel= "stylesheet" type= "text/css" href= "style.css">
	<center><table border = "4" cellpadding = "10" cellspacing = "5">

	<tr>	
	<td>Firstname</td>
	<td>Middlename</td>
	<td colspan = "2">Lastname</td>
	</tr>
	<tr>
	<td><input type = "text" name = "f_n"></td>
	<td><input type = "text" name = "m_n"></td>
	<td colspan = "2"><input type = "text" name = "l_n"></td>
	</tr>



	<tr>
	<br><td>Gender</td>
	<td><input type = "radio" name = "Gender" value = "Male">Male</td>
	<td colspan = "2"><input type = "radio" name = "Gender" value = "Female">Female</td>
	</tr>
	
	<tr>
	<td colspan = "4">Birthday</td>
	</tr>
	<td>Month
	<select name = "month">
	<option value = "January">January </option>
	<option value = "February">February </option>
	<option value = "March">March </option>
	<option value= "April">April </option>
	<option value = "May">May </option>
	<option value = "June">June </option>
	<option value = "July">July </option>
	<option value = "August">August </option>
	<option value = "September" >September </option>
	<option value = "October" >October </option>
	<option value = "November">November </option>
	<option value = "December">December </option>
	</select>
	</td>

	<td> Day
	<select name = "day">
	<option value = "1">1 </option>
	<option value = "2"> 2</option>
	<option value = "3"> 3</option>
	<option value = "4"> 4</option>
	<option value = "5"> 5</option>
	<option value = "6"> 6</option>
	<option value = "7"> 7</option>
	<option value = "8"> 8</option>
	<option value = "9"> 9</option>
	<option value = "10"> 10</option>
	<option value = "11"> 11</option>
	<option value = "12"> 12</option>
	<option value = "13"> 13</option>
	<option value = "14"> 14</option>
	<option value = "15"> 15</option>
	<option value = "16"> 16</option>
	<option value = "17"> 17</option>
	<option value = "18" > 18</option>
	<option value = "19"> 19</option>
	<option value = "20"> 20</option>
	<option value = "21"> 21</option>
	<option value = "22"> 22</option>
	<option value = "23"> 23</option>
	<option value = "24"> 24</option>
	<option value = "25"> 25</option>
	<option value = "26"> 26</option>
	<option value = "27"> 27</option>
	<option value = "28">28 </option>
	<option value = "29">29 </option>
	<option value = "30">30 </option>
	<option value = "31">31 </option>
	</select>
	</td>

	<td colspan = "2">Year <select name = "year">
		<?php 
			for ($i=2016; $i >= 1950 ; $i--):
			?>
		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>

		<?php endfor; ?>
		</select>
	</td>
	
	<tr>
	<td>
	Program
	</td>
	<td colspan = "3">
	<select name = "course">
	<option value = "Bachelor of Science in Social Works">Bachelor of Science in Social Works</option>
	<option value = "Bachelor of Science in Information Systems">Bachelor of Science in Information Systems </option>
	<option value = "Bachelor of Science in Accounting">Bachelor of Science in Accounting Technology</option>
	<option value = "Bachelor of Arts in Broadcasting">Bachelor of Arts in Broadcasting </option>
	<option value = "Associate in Computer Technology">Associate in Computer Technology </option>
	<option value = "Mass Communication Technology">Mass Communication Technology </option>
    <option value = "Bachelor of Science in Accountancy">Bachelor of Science in Accountancy</option>
	<option value = "Nursing Assistance">Nursing Assistance </option>
	<option value = "International Cookery">International Cookery </option>
	<option value = "Office Management">Office Management </option>

	</select>
	</td>
	</tr>

	<td colspan= "4">
	Student Type
	</td>

	<tr>
	<td colspan = "4">
	<ul>
	<br><input type = "radio" name = "studentType" value = "Full Scholar" >Full Scholar<br>
	<input type = "radio" name = "studentType" value = "Partial Scholar">Partial Scholar<br>
	<input type = "radio" name = "studentType" value = "Payee">Payee
	<ul>		
	</td>
	</tr>


	<tr>
	<td colspan = "4" name = "add">
	Address
	</td>
	</tr>
	</center>

	<tr>
	<td colspan = "4">
	<textarea cols = "80" rows = "5" name = "address" value = "Address" placeholder = "Ex. ADD Street, Convention Center, Apalit, Pampanga"></textarea>
	</td>
	</tr>	
	</table>
	<center>
	<button = "submit" value = "Submit Registration">SUBMIT REGISTRATION</button>
</center>
</form>
</body>

</html>
