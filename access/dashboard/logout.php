<?php

session_start();

	# code...
session_unset();
if(session_destroy()){
	header("Location: login-dashboard.html");
} else {
	echo "ll";
}






?>