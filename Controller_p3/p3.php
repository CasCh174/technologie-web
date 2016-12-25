<?php
include_once(dirname(__DIR__)."../Model/Reservation.php");
include_once(dirname(__DIR__)."../Functions/functions.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  //Confirm order
  if ($_POST["next_page"]=="Confirmer"){

    //connection to database "booking"
    $mysqli = new mysqli("localhost", "root", "","booking") or die("Could not select database");

    //get new reservation number
    $rows = array();
    $query= "SELECT t_res_num FROM t_reservation ";
    $result= $mysqli->query($query) or die("Queryfailed");
    if ($result->num_rows== 0)
    {$resNum = 0;}
    else{
      while ($row = $result -> fetch_assoc()) {
                $rows[] = $row;
              }
      $resNum = $rows[count($rows)-1]['t_res_num']+1;
    }

    //variables for database insertion
    $ins = $_SESSION['reservation']->getInsurance();
    $destination = $_SESSION['reservation']->getDestination();
    $insertError = FALSE;

    //database update
    for ($i = 0; $i < $_SESSION['reservation']->getSeats(); $i++){
      $name = $_SESSION['reservation']->getNames()[$i];
      $age = $_SESSION['reservation']->getAges()[$i];
      $sql= "INSERT INTO t_reservation (`t_res_num`,`t_name`,`t_age`,`t_destination`,`t_insurance`)
              VALUES ($resNum,'$name' ,$age ,'$destination', $ins)";
      if ($mysqli->query($sql) !== TRUE) {
        $insertError = TRUE;
        }
    }
    if ($insertError == FALSE){
      include(dirname(__DIR__)."../view/Page4.php");
    }
    else{
      cancel();
      echo "We are sorry, fatal error occured";
    }
  }
  //go to last page
  elseif ($_POST["back"]=="Retour a la page precedente") {
    include(dirname(__DIR__)."../view/Page2.php");
  }
  //cancel order
  elseif ($_POST["cancel"]=="Annuler la reservation") {
    cancel();
  }
}
else{
  include(dirname(__DIR__)."../View/Page3.php");
}

 ?>
