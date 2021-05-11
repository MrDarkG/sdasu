<?php

require_once("conf/db.php");
require_once("auth/checkauth.php");

if (checkauth()) {
	echo "hi admin";
}
else{
	require_once("login.html");
}
