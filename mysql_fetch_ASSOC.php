<?php

$a = mysql_connect("localhost","root","1962313");

if ($abs) {
	echo "mysql connection succeed"."<br/>";
} else {
	mysql_error;
}

$b = mysql_select_db("yipeng");

if ($b) {
	echo "database connection succeed"."<br/>";
} else {
	mysql_error;
}

$c = mysql_query("select * from phplearning");

while($d = mysql_fetch_assoc($c)) {
	print_r($d);
	echo "<br/>";
	echo $d[ID].$d[Name].$d[location]."<br/>";
}