<?php
function cancel(){
  session_destroy();
  $reservation = new Reservation;
  $_SESSION["reservation"] = $reservation;
  include(dirname(__DIR__)."../View/Page1.php");
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
