<?php
 function checkauth($value='')
{
	
	return isset($_SESSION["id"]);
}

