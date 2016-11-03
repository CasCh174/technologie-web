<?php

include_once("../Model/class_Reservation.php");
session_start();

$i=0;

//si le l instruction n est pas un post
if ($REQUEST_METHOD !== _POST){
		switch($i){
		case 1: include("../View/Page1");
		break;
		case 2: include("../View/Page2");
		break;
		default: include("../View/Page1");
		break;
		}
	}

else{
	switch($i){
		case 1:
		if ($_POST['button']=="next_page"){
			$i=2;
		}

	}
}


?>