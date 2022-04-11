<?php
session_start();
include 'config.php';
if(isset($_POST['remember']) or !isset($_POST["remember"])) {
   $email_connect = htmlspecialchars($_POST['admin_email']);
   $password_connect =htmlspecialchars($_POST['admin_password']);
   if(!empty($email_connect) AND !empty($password_connect)) {
    $sql="SELECT * FROM admin_infos WHERE admin_email='$email_connect' AND admin_password = '$password_connect'";
    $result=mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION["admin_id"]=$row["admin_id"];
        $_SESSION["admin_name"]=$row["admin_name"];
        $_SESSION["admin_email"]=$row["admin_email"];
        $_SESSION["admin_password"]=$row["admin_password"];
        header("location:admin-list.php?admin_id=".$_SESSION["admin_id"]);
    }else{
        $erreur = "Mauvais mail ou mot de passe !";
        header("location:index.php?erreur=".$erreur);
    }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
      header("location:index.php?erreur=".$erreur);
   }
}
?>