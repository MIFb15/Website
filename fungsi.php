<?php

function getPage($page){
	if ($page != ""){
		include($page.".php");
	}
	else{
		include("home.php");
	}
}
?>