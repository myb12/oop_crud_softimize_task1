<?php

function dump($data,$die=false)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
	if ($die) {
		die("Dumped Here");
	}
}


function is_logged_in()
{
	if($_SESSION['username']==NULL && $_SESSION['logged_in']==false)
	{
		return false;
	}
	return true;
}
?>