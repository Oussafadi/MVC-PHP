<?php if (!empty($_SESSION['delete'])) {
    echo "<div  class='alert alert-success'>" . $_SESSION['delete'] . "</div>";
    unset($_SESSION['delete']);
}
?>
<a href="index.php?url=Admin/Eleves"> Retourner a la page d'acceuil </a>