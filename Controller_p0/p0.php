<?php
//include_once(dirname(__DIR__)."../Model/Reservation.php");
include_once(dirname(__DIR__)."../Functions/functions.php");
print_r ($_POST);
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(isset($_POST['modif'])){
    $info = get_specifcData($_POST['modif']);
    $_SESSION["info"] = $info;
    include(dirname(__DIR__)."../View/Page0.php");
    print_r ($info);
  }
  else if($_POST['retour']=='acceuil'){
    include(dirname(__DIR__)."../View/Page1.php");
  }
  else if($_POST['maj']=='maj'){
    $info=$_SESSION["info"];
    echo "info";
    var_dump($info);
    echo "maj";
    var_dump($_POST);
    print_r($_POST['maj']);
    echo"**";
    $name = $info[0]['t_name'];
    $dest = $info[0]['t_destination'];
    $res = $info[0]['t_res_num'];
    $id = $info[0]['t_id'];
    $age = $info[0]['t_age'];
    $ins = $info[0]['t_insurance'];
    $mysqli = new mysqli("localhost", "root", "","booking") or die("Could not select database"); //on se connecte à la base de donnée booking
    $sql= "UPDATE t_reservation SET t_name='$_POST[$name]', t_destination='$_POST[$dest]',t_res_num='$_POST[$res]',t_age='$_POST[$age]',t_insurance='$_POST[$ins]'  WHERE t_id=$id ";
    $mysqli->query($sql);
  }
  else{
    cancel();
  }
}

?>
