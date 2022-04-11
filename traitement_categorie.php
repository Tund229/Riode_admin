<?php 
    include 'config.php';
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";
?>
<?php 
    if(isset($_POST["nom_categorie"])){
        $nom= htmlspecialchars($_POST["nom_categorie"]);
        $picture_tmp = $_FILES["image_categorie"]["tmp_name"];
        $picture_name = $_FILES["image_categorie"]["name"];
        $picture_type = $_FILES["image_categorie"]["type"];
        $allowed_type = array('image/png', 'image/jpg', 'image/jpeg');
        if(in_array($picture_type, $allowed_type)){
            $path = './images/'.$picture_name;
            move_uploaded_file($picture_name, $path);
            echo "bien";
        }else{
            echo "non";
        }
    }

?>