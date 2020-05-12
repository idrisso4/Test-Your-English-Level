<?php  
function connex($base,$param)
{
	include_once($param.".php");
	$idcon=mysql_connect(myhost,myuser,mypass);
	$sql = "CREATE DATABASE IF NOT EXISTS projet";
	$req="CREATE TABLE IF NOT EXISTS users (
			cin varchar(8) COLLATE utf8_unicode_ci NOT NULL default '0',
			name varchar(255) COLLATE utf8_unicode_ci NOT NULL default '',
			sex varchar(255) COLLATE utf8_unicode_ci NOT NULL default '',
			pass varchar(255) COLLATE utf8_unicode_ci NOT NULL default '',
			mail varchar(255) COLLATE utf8_unicode_ci NOT NULL default '',
			birthdate varchar(255) COLLATE utf8_unicode_ci NOT NULL default '',
			level varchar(2) COLLATE utf8_unicode_ci NOT NULL default 'a0',
			comprehension int(2) NOT NULL default 0,
			grammer int(2) NOT NULL default 0,
			listening int(2) NOT NULL default 0,
			dictation int(2) NOT NULL default 0,
			PRIMARY KEY  (cin) )";
	if($idcon)
	{
		(mysql_query($sql, $idcon));
		$idbase=mysql_select_db($base);
		if(!$idbase)
		{
			die("impossible de se conncter à la base");
		}
		else mysql_query($req, $idcon);
	}
	else
	{
		die("impossible de se connecter au serveur de base de donner");
	}
	return($idcon);
}
?>