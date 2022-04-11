<?php 
  include 'config.php';
?>
<?php 
 $sql="SELECT admin_id, admin_name, admin_email FROM admin_infos";
 $result=mysqli_query($conn, $sql);
 foreach($result as $val){
   echo "<pre>";
  var_dump($val);
  echo "</pre>";
 }
?>