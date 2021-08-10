<?php
$hostname="localhost";
$dbname="project_git";
$username="root";
$password="rootroot";

$conn=mysqli_connect("$hostname","$username","$password","$dbname");

if(mysqli_connect_errno())
{
    echo"Connection faild".mysqli_connect_error();
}
$result=mysqli_query($conn,"SELECT * FROM project_git.hospitals");
echo"<center>";

echo"<h1>Test</h1>";
echo"<hr/>";

echo"<select>";
echo"<option>vaccination centers</option>";

while($row=mysqli_fetch_array($result))
{
    echo"<option>$row[hos_name]  |  $row[city]</option>";
}

echo"</select>";

echo"</center>";

mysqli_close($conn);



?>