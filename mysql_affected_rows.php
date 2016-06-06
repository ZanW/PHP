<?php

$con = mysql_connect("localhost","root","1962313");

mysql_select_db("yipeng");

if(mysql_query("update phplearning set Name = 'long' where ID =3") && 
mysql_query("update phplearning set Name = 'fang' where ID =4") && 
mysql_query("insert into phplearning(Name, location) values('Wun', 'JJJJJ')")) {
	echo "update succeed"."<br/>";
} else {
	mysql_error();
}

echo mysql_affected_rows($con);
