<?php
include(dirname(__FILE__)."/Model/Reservation.php");

session_start();
if (!isset($_SESSION["reservation"])){
    $reservation = new Reservation;
    $_SESSION["reservation"] = $reservation;
}
else {
    $reservation = $_SESSION["reservation"];
}

$g = isset($_GET['page']) ? $_GET['page'] : NULL;
if ($g && $_SERVER["REQUEST_METHOD"]=="POST"){
  switch($g){
    case 1:
    include_once(dirname(__FILE__)."/Controller_p1/p1.php");
    break;
    case 2:
    include_once(dirname(__FILE__)."/Controller_p2/p2.php");
    break;
    case 3:
    include_once(dirname(__FILE__)."/Controller_p3/p3.php");
    break;
    case 4:
    include_once(dirname(__FILE__)."/Controller_p4/p4.php");
    break;
  }
}
else{
  switch($g){
    case 1: include(dirname(__FILE__)."/view/Page1.php");
    break;
    case 2: include(dirname(__FILE__)."/view/Page2.php");
    break;
    case 3: include(dirname(__FILE__)."/view/Page3.php");
    break;
    case 4: include(dirname(__FILE__)."/view/Page4.php");
    break;
    default: include(dirname(__FILE__)."/view/Page1.php");
    break;
  }
}
?>
