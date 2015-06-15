<?php 
function getall()
{
	$db = new PDO('sqlite:cr.db');
	return $db->query("SELECT * FROM reports;")->fetchAll();
}

function getone($id)
{
	$db = new PDO('sqlite:cr.db');
	// echo "\n\n".$id."\n\n";
	// echo "SELECT ALL FROM reports where tknum = '".$id."';";
	// return;
	return $db->query("SELECT * FROM reports where tknum = '".$id."';")->fetch();
}

function addone($newdata)
{
	$db = new PDO('sqlite:cr.db');	
	// echo "insert into reports (body) values (".$newdata['body'].");";
	echo "\n\n".$newdata['body']."\n\n";
	$db->query("insert into reports (\"body\") values (\"".$newdata['body']."\");");//->execute();
	return $db->errorinfo();
}

function updateone($tknum, $newdata)
{
	$db = new PDO('sqlite:cr.db');
	// echo 'update reports set body="'.$newdata['body'].'"" where tknum = '.$tknum;
	$db->query("update reports set body=\"".$newdata['body']."\" where tknum = ".$tknum.";");//->execute();
	return $db->errorinfo();

}
