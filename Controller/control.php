<?php
include_once("../Model/class_Reservation.php");
session_start();

if (!isset($_SESSION["reservation"])){
    $reservation = new Reservation; //créer un objet qui vient de la classe Reservation
    $_SESSION["reservation"] = $reservation;
}

else {
    $reservation = $_SESSION["reservation"];
}

$p = isset($_POST['p']) ? $_POST['p'] : NULL; // if isset($_POST['p']) return $_POST['p'] else return NULL

if ($p && $_SERVER["REQUEST_METHOD"]=="POST"){
  switch($_POST['p']){

		case 1:
		if ($_POST['next']=="second"){
      if(!empty($_POST["destination"]) && !empty($_POST["seats"]) && $_POST["seats"]>0 && $_POST["seats"]<10){
        $reservation->setDestination(input_val($_POST["destination"]));
        $reservation->setSeats(input_val($_POST["seats"]));
        $_SESSION["reservation"] = $reservation;
        include("../view/page2.php");
      }
      else{
        include("../view/page1.php");
        if (empty($_POST["destination"])){
          echo 'Veillez entrer une destination';
        }
        else{
          echo 'Veillez entrer un nombre de places supérieur à 0 et inférieur à 10';
        }
      }
      if(!empty($_POST["insurance"])){
        $reservation->setInsurance(input_val($_POST["insurance"]));
      }
      else{
        $reservation->setInsurance("off");
      }

		}
    elseif ($_POST['back']=="Annuler la reservation") {
      cancel();
    }
    break;

    case 2:
		if ($_POST['next']=="third"){
      $error = "false";
      foreach ($_POST["names"] as $name) {
        if($name == ''){
          include("../view/page2.php");
          echo 'Veillez entrer un nombre pour chaque personne';
          $error="true";
          break;
        }
      }
      foreach ($_POST["ages"] as $age){
        if ($age<0){
          include("../view/page2.php");
          echo 'Veillez entrer un age superieur a 0';
          $error="true";
          break;
        }
      }
      if ($error == "false"){
        $reservation->addName(input_val($_POST["names"]));
        $reservation->addAge(input_val($_POST["ages"]));
        $_SESSION["reservation"] = $reservation;
        include("../view/page3.php");
      }
    }
    elseif($_POST['back']=="Annuler la reservation"){
      cancel();
    }
    elseif ($_POST['return']=="retour"){
      include("../view/page1.php");
    }
    break;

    case 3:
    if ($_POST["next_page"]=="Confirmer"){
      include("../view/page4.php");
    }
    elseif ($_POST["back"]=="Retour a la page precedente") {
      include("../view/page2.php");
    }
    elseif ($_POST["cancel"]=="Annuler la reservation") {
      cancel();
    }
    break;

    case 4:
    if ($_POST['home']=="Retour a la page d acceuil"){
      include("../view/page1.php");
    }
    break;
	}
}

else{
  switch($p){
    case 1: include("../view/page1.php");
    break;
    case 2: include("../view/page2.php");
    break;
    case 3: include("../view/page3.php");
    break;
    default: include("../view/page1.php");
    break;
  }
}


function cancel(){
  $reservation = new Reservation;
  $_SESSION["reservation"] = $reservation;
  include("../view/page1.php");
}

function input_val($data){
  if (is_array($data)){
    foreach($data as $elem){
      $elem = trim ($elem); //trim() retourne la chaîne str, après avoir supprimé les caractères invisibles en début et fin de chaîne (pas pour array)
      $elem = stripslashes ($elem); //Supprime les antislashs d'une chaîne
      $elem = strip_tags ($elem); //Supprime les balises html que le visiteur essaye d envoyer --> Eviter les failles XSS
      $elem = htmlspecialchars ($elem); //Convertit les caractères spéciaux en entités HTML --> Eviter les failles XSS (strip_tags suffit)
    }
    return $data;
  }
  else{
    $data = trim ($data); //trim() retourne la chaîne str, après avoir supprimé les caractères invisibles en début et fin de chaîne (pas pour array)
    $data = stripslashes ($data); //Supprime les antislashs d'une chaîne
    $data = strip_tags ($data); //Supprime les balises html que le visiteur essaye d envoyer --> Eviter les failles XSS
    $data = htmlspecialchars ($data); //Convertit les caractères spéciaux en entités HTML --> Eviter les failles XSS (strip_tags suffit)
  }
  return $data;
}
?>
