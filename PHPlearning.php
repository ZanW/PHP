<?php
if (mysql_connect('localhost','root','1962313')){
	echo 'connect succeeded';} 
else { echo 'connect failed';}

if (mysql_query('use yipeng')) {
	echo 'database selection succeed';}
else {
mysql_select_db('yipeng');
echo 'use php language to select database!';}

/*
if (mysql_query('create table phplearning(ID int, Name varchar(11), location varchar(30))')) {
echo 'table created';} else 
	{mysql_error();}

if (mysql_query('alter table phplearning engine = innodb')) {
echo 'engine set';} else 
	{mysql_error();}

if (mysql_query("insert into phplearning values(1, 'zhuo','FFF'),
(2, 'hu','XXXX')")) {
echo 'data inserted';} else 
	{mysql_error();}

mysql_query("set names utf8");
if (mysql_query("insert into phplearning values(3, 'Àý','FFF'),
(4, 'ºþ','XXXX')")) {
echo 'data inserted';} else 
	{mysql_error();}

*/
$Q = mysql_query("select * from phplearning");
while($r = mysql_fetch_row($Q)) {
	echo $r[0].$r[1].'<br/>';}
mysql_error();