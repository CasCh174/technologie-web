<?php
include_once(dirname(__DIR__)."../Model/Reservation.php");
include_once(dirname(__DIR__)."../Functions/functions.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
  if ($_POST['next']=="third"){
    $error = "false";
    foreach ($_POST["names"] as $name) {
      if($name == ''){
        include(dirname(__DIR__)."../View/Page2.php");
        echo 'Veillez entrer un nombre pour chaque personne';
        $error="true";
        break;
      }
    }
    foreach ($_POST["ages"] as $age){
      if ($age<0){
        include(dirname(__DIR__)."../View/Page2.php");
        echo 'Veillez entrer un age superieur a 0';
        $error="true";
        break;
      }
    }
    if ($error == "false"){
      $reservation->addName(input_val($_POST["names"]));
      $reservation->addAge(input_val($_POST["ages"]));
      $_SESSION["reservation"] = $reservation;
      include(dirname(__DIR__)."../View/Page3.php");
    }
  }
  elseif($_POST['back']=="Annuler la reservation"){
    cancel();
  }
  elseif ($_POST['return']=="retour"){
    include(dirname(__DIR__)."../View/Page1.php");
  }
}
else{
  include(dirname(__DIR__)."../View/Page2.php");
}

?>
