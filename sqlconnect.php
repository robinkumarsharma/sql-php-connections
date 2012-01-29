<!--It is a php file to connect your php page to the mysql,to create database,to use database,to use create table,to insert values into the table,and to close the connection-->
<html>
<head>
<title>Mysql connection</title>
</head>
<body>
<?php 
$con = mysql_connect("localhost","root","re#RF12");/*syntax is "mysql_connect("server_name","user_name","password");"*/
if(!$con)
	{
	die('could not connect: '.mysql_error());	
    }
/*mysql_query() function is used to send query or command to the MYSQL connection*/
if(mysql_query("CREATE DATABASE IF NOT EXISTS sumit",$con)) /*syntax for creating database "CREATE DATABASE database_name"*/
	{
	echo "Database created";
	}
else
	{
	echo "Error creating database: " . mysql_error();
	}
mysql_select_db("sumit",$con); //to use database
$sql="CREATE TABLE Persons    
(
personID int NOT NULL AUTO_INCREMENT,
FirstName varchar(15),
PRIMARY KEY(personID),
LastName varchar(15),
Age int
)";/*syntax for creating table is "CREATE TABLE table_name(column_name data_type)"*/

mysql_query($sql); //execute query
mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
    VALUES ('robin','Sharma','20'),
    ('Abhishek','Kumar','19')");

mysql_close($con);  //close the mysql connection
?>
<!--if this works then on your browser screen "Database created" message will be displayed-->
