<link rel= "stylesheet" type= "text/css" href= "style.css">
<?php
$firstName = $_POST['f_n'];
$middleName = $_POST['m_n'];
$lastName = $_POST['l_n'];
$gender = $_POST['Gender'];
// Birthday
$month = $_POST['month'];
$day= $_POST['day'];
$year= $_POST['year'];
// Program and student type
$program = $_POST['course'];
$studentType= $_POST['studentType'];
$address = $_POST['address'];
?>
First Name: <strong><?php echo $firstName; ?></strong><br />
Middle Name: <strong><?php echo $middleName; ?></strong><br />
Last Name: <strong><?php echo $lastName; ?></strong><br />
Gender: <strong><?php echo $gender; ?></strong><br />
Birthday: <strong><?php echo $month, " ", $day,",", " " ,$year; ?></strong><br />
Program: <strong><?php echo $program; ?></strong><br />
Student Type: <strong><?php echo $studentType; ?></strong><br />
Address: <pre><?php echo $address; ?></pre><br />
