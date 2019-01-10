<!DOCTYPE html>
<html>
<head>
	<title>my site</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

    <style type="text/css">
     .main{
     	color: grey;
     }
     input[type=text] {
  width: 100%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  padding: 12px 20px 12px 40px;
}
input[type=submit] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=button] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
h1{
    margin: 100px;
}
textarea{
  width: 100%;
  margin: 6px;
  border-radius: 4px;

}

   </style>
</head>
<body>
	<div class="main">
		<h1 align="center">Add Record</h1>
		<form>
			<table align="center" style="margin-top:50px">
			<tr>
				<th>Name:</th>
				<td><input type="text" name="name" placeholder="Name"></td>
			</tr>
			<tr>
				<th>Address:</th>
				<td><textarea  name="address" placeholder="Write address.." style="height:100px"></textarea>
				</td>
			</tr>
			<tr>
				<th>Salary:</th>
				<td><input type="text" name="salary" placeholder="Salary"> </td>
			</tr>
			<tr>
				<td><input type="submit" name="btn">
                    <span><a href="list.php"><input type="button" value="View Record"></a> </span>
				</td>
			</tr>
        </table>
		</form>
</div>

<?php
if(isset($_REQUEST["btn"])){
	$name    = $_REQUEST["name"];
	$address = $_REQUEST["address"];
	$salary  = $_REQUEST["salary"];

require 'connection.php';

$query="INSERT INTO employees(name,address,salary)VALUES('$name','$address','$salary')";

$result = mysqli_query($conn,$query);

if($result>0)
{
	echo "record inserted";
}
else
{
	echo "record not inserted";
	echo "<br>".mysqli_error($conn);
}



mysqli_close($conn);
}

?>


</body>
</html>