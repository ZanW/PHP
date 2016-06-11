<?php

mysql_connect("localhost","root","1962313");

mysql_select_db("yipeng");

$query1 = mysql_query("select count(*) from phplearning");
$arr = mysql_fetch_row($query1);
echo $arr[0]."<br/>";

echo mysql_result($query1,0,0)."<br/>";

$query2 = mysql_query("select * from phplearning");
$result = mysql_result($query2,15,"ID");
echo $result;

