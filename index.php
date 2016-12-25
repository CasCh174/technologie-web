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
    include_once(dirname(__FILE__)."/Controller_p$g/p$g.php");
}
else{
  switch($g){
    case 0: include(dirname(__FILE__)."/view/Page0.php");
    break;
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
