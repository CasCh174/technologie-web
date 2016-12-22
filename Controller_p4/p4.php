<?php
include_once(dirname(__DIR__)."../Model/Reservation.php");
include_once(dirname(__DIR__)."../Functions/functions.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
  if ($_POST['home']=="Retour a la page d acceuil"){
    ******************************
    include(dirname(__DIR__)."../view/Page1.php");
  }
}
else{
  include(dirname(__DIR__)."../View/Page4.php");
}
?>
