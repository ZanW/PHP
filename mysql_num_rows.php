<?php

mysql_connect("localhost","root","1962313");

mysql_select_db("yipeng");

$query = mysql_query("select * from phplearning");

if($query && mysql_num_rows($query)) {
	
	$num = mysql_num_rows($query);
	echo ($num)."<br/>";
	
	while($assoc = mysql_fetch_assoc($query)) {
		echo $assoc[Name]."<br/>";
	}
}