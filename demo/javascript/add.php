<?php
	require 'config.php';
	
	$_birthday = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
	
	$query = "INSERT INTO blog_user (user, pass, ques, ans, birthday, email, ps) 
			    VALUES ('{$_POST['user']}', sha1('{$_POST['pass']}'), '{$_POST['ques']}', '{$_POST['ans']}', '{$_birthday}', '{$_POST['email']}', '{$_POST['ps']}')";

	mysql_query($query) or die('新增失败！'.mysql_error());
	
	sleep(3);
	echo mysql_affected_rows();
	
	mysql_close();
?>