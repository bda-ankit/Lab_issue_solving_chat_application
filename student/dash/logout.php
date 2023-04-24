<?php

	session_start();
	if(session_destroy())
	{
		header("Location:../../login/signin.php");
	}

?>