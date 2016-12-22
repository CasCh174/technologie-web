<?php
include_once(dirname(__DIR__)."../Model/Reservation.php");
include_once(dirname(__DIR__)."../Functions/functions.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if ($_POST["next_page"]=="Confirmer"){
    include(dirname(__DIR__)."../view/Page4.php");
  }
  elseif ($_POST["back"]=="Retour a la page precedente") {
    include(dirname(__DIR__)."../view/Page2.php");
  }
  elseif ($_POST["cancel"]=="Annuler la reservation") {
    cancel();
  }
}
else{
  include(dirname(__DIR__)."../View/Page3.php");
}

 ?>
