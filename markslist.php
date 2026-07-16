<html>
<body>
<?php
$students=[
["name"=>"Anitha","Statistics"=>90,"Maths"=>80,"ComputerScience"=>90],
["name"=>"Mani","Statistics"=>92,"Maths"=>88,"ComputerScience"=>85],
["name"=>"Sandhya","Statistics"=>95,"Maths"=>72,"ComputerScience"=>80],
["name"=>"Kalyani","Statistics"=>75,"Maths"=>82,"ComputerScience"=>90],
["name"=>"Rani","Statistics"=>75,"Maths"=>92,"ComputerScience"=>80],
["name"=>"Varma","Statistics"=>88,"Maths"=>92,"ComputerScience"=>92],
["name"=>"Ravi","Statistics"=>75,"Maths"=>95,"ComputerScience"=>78],
["name"=>"Pavan","Statistics"=>90,"Maths"=>93,"ComputerScience"=>97],
];
echo"<h2>Student Marks List</h2>";
echo"<table border='1' cellpadding='5'cellspacing='0'>";
echo "<tr><th>Name</th>
<th>Statistics</th>
<th>Maths</th>
<th>ComputerScience</th>
<th>Total</th>
<th>Average</th></tr>";foreach ($students as$student){
$total=$student["Statistics"]+$student["Maths"]+$student[
"ComputerScience"];
$average=$total/3;echo"<tr>";
echo "<td>{$student['name']}</td>";
echo "<td>{$student['Statistics']}</td>";
echo "<td>{$student['Maths']}</td>";
echo "<td>{$student['ComputerScience']}</td>";
echo "<td>$total</td>";
echo "<td>$average</td>";
}
echo "</table>";
?>
</body>
</html>
