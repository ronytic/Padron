<?php
class db
{
	function connectdb($host, $user, $pass, $db)
	{
		if(mysql_connect($host,$user,$pass))
			mysql_select_db($db) or die("CANNOT SELECT DB");
		else
		echo "CANNOT CONNECT DB";
	}
	function query($query)
	{
		$query=mysql_query($query) or die(mysql_error());
		return $query;
	}
	function free($q)
	{
	mysql_free_result($q) or die ("CANNOT FREE RESULT");
	}
	function close()
	{
		mysql_close() or die("CANNOT CLOSE DB");
	}
	
}
?>