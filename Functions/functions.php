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

function get_data(){
  $mysqli = new mysqli("localhost", "root", "","booking") or die("Could not select database");
  //get data from database
  $rows = array();
  $query= "SELECT * FROM t_reservation ";
  $result= $mysqli->query($query) or die("Queryfailed");
  if ($result->num_rows== 0)
  {$resNum = 0;}
  else{
    while ($row = $result -> fetch_assoc()) {
              $rows[] = $row;
            }
  }
  return $rows;
}

function get_specifcData($id){
  $mysqli = new mysqli("localhost", "root", "","booking") or die("Could not select database");
  //get data from database
  $rows = array();
  $query= "SELECT * FROM t_reservation WHERE t_id=$id";
  $result= $mysqli->query($query) or die("Queryfailed");
  if ($result->num_rows== 0)
  {$resNum = 0;}
  else{
    while ($row = $result -> fetch_assoc()) {
              $rows[] = $row;
            }
  }
  return $rows;
}
?>
