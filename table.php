<?php

$con=mysqli_connect("meetinginfo.cgj7os1xcd9b.us-east-1.rds.amazonaws.com","bpeightal","unoproject","bpeightal1");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM signup");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Date</th>
<th>Time</th>
<th>Email</th>
<th>Teacher</th>
<th>Notes</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['teacher'] . "</td>";
echo "<td>" . $row['notes'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
