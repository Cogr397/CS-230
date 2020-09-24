<?php 
require 'includes/header.php'
?>

<main>

<?php
if(isset($_SESSION['uid'])){
    include 'html/profil.html';

}
else{
    header("Location: login.php");
    exit();
}

?>
         
</main>