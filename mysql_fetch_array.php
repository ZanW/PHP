<?php
if (mysql_connect('localhost','root','1962313')){
	echo 'connect succeeded';} 
else { echo 'connect failed';}

if (mysql_query('use yipeng')) {
	echo 'database selection succeed';}
else {
mysql_select_db('yipeng');
echo 'use php language to select database!';}

