<?php
//include_once(dirname(__DIR__)."../Model/Reservation.php");
include_once(dirname(__DIR__)."../Functions/functions.php");
print_r ($_POST);
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(isset($_POST['modif'])){
    echo "Tres bien";
  }
  else if($_POST['retour']=='acceuil'){
    include(dirname(__DIR__)."../View/Page1.php");
  }
  else{
    cancel();
  }
}

?>
