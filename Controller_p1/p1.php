<?php
include_once(dirname(__DIR__)."../Model/Reservation.php");
include_once(dirname(__DIR__)."../Functions/functions.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

  if($_POST['next']=="second"){

    if(!empty($_POST["destination"]) && !empty($_POST["seats"]) && $_POST["seats"]>0 && $_POST["seats"]<10){
      $reservation->setDestination(input_val($_POST["destination"]));
      $reservation->setSeats(input_val($_POST["seats"]));
      $_SESSION["reservation"] = $reservation;
      include(dirname(__DIR__)."../View/Page2.php");
    }
    else{
      include(dirname(__DIR__)."../View/Page1.php");
      if (empty($_POST["destination"])){
        echo 'Veillez entrer une destination';
      }
      else{
        echo 'Veillez entrer un nombre de places supérieur à 0 et inférieur à 10';
      }
    }
    if(!empty($_POST["insurance"])){
      $reservation->setInsurance(input_val($_POST["insurance"]));
      $_SESSION["reservation"] = $reservation;
    }
    else{
      $reservation->setInsurance("false");
      $_SESSION["reservation"] = $reservation;
    }

  }
  elseif ($_POST['back']=="Annuler la reservation") {
    cancel();
  }
}
else{
  include(dirname(__DIR__)."../View/Page1.php");
}

?>
