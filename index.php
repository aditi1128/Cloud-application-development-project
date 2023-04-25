<!DOCTYPE html>
<html>
<head>
	<title>CAD Project Search Engine</title>

<style>
	#search
	{
		height: 35px;
		width: 700px;
		border-radius: 5px;
		border: 1px solid blue;
	}
	#submit
	{
		height: 40px;
		width: 130px;
		border-radius: 5px;
		border: 1px solid blue;
		background-color: white;
		color: blue;
		font-size: 18px;
	}
	#submit:hover
	{
		background-color: blue;
		color: white;
	}
</style>

</head>
<body>

<form action="result1.php" method="GET">
<br><br><br>
<center><img src="searchlogo.jpg" width="20%"></center>
<br>

<center><input type="text" name="search" id="search"></center><br><br>
<center><input type="submit" name="searchbtn" value="Search" id="submit"></center>

</body>
</html>