<html>
<head>
<title>Student REgistration Form</title>
</head>
<body>
<center>
<h2>Student Registration</h2>
<form action="seven.php" method="POST">
<label for ="uname">Username:</label><br>
<input type="text" name="uname" placeholder="Username" required><br>
<label for="email">Email:</label><br>
<input type="email" name="email" placeholder="Email" required><br>
<label for="password">Password:</label><br>
<input type="password" name="password" placeholder="Password" required><br>
<label for="mobile">Mobile Number:</label><br>
<input type="tel" name="mobile" placeholder="Mobile Number" pattern="[0-9]{10}" required><br>
<label>Gender:</label><br>
<input type="radio" name="gender" value="Female">
<label for="male">Male</label>
<input type="radio" name="gender" value="Female">
<label for="female">Female</label><br><br>
<label for="dob">Date of Birth:</label><br>
<input type="date"name="dob" required><br><br>
<label for="students_id">Student ID:</label><br>
<input type="text" name="student_id" placeholder="Student ID" required><br>
<label for="year">Select College</label><br>
<select name="year" required>
<option value="" disabled selected>---Select College</option>
<option value="1">ADITYA DEGREE COLLEGE</option>
<option value="2">ADITYA DEGREE COLLEGE FOR WOMEN</option>
<option value="3">SRI ADITYA DEGREE COLLEGE</option>
</select><br><br>
<label for="course">Interested Courses:</label><br>
<p>Which you are interested to join</p>
<input type="checkbox"name="course[]" value="Advanced Excel">Advanced Excel<br>
<input type="checkbox"name="course[]" value="Python Fullstack">Python Fullstack<br>
<input type="checkbox"name="course[]" value="Java Fullstack">Java FullStack<br>
<input type="checkbox"name="course[]" value="AWS">AWS<br>
<input type="submit" value="Register">
</form>
</center>
</body>
</html>
<?php if(isset($_GET['name']))
{
$username=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$student_id=$_POST['student_id'];
$college=$_POST['year'];
$courses=$_POST['course'];
echo 'Username:'.$username."<br>";
echo 'Email:'.$email."<br>";
echo 'Password:[hidden]<br>';
echo 'Mobile Number:'.$mobile."<br>";
echo'Gender:'.$gender."<br>";
echo'Date of Birth:'.$dob."<br>";
echo'Student ID:'.$student_id."<br>";
echo'College'.$college."<br>";
echo 'Courses:';
foreach($courses as $course)
{
echo $course.'';
}
echo"<br>";
}
?>
