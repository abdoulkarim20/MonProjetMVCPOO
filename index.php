<?php
require_once "controller/DataBaseHelper.php";
require_once "controller/RegionController.php";
$regionController = new RegionController();


?>

<!DOCTYPE html>
<html lang="en">
<?php
require_once "pages/header.php";
?>

<body>
    <?php
    require_once "pages/navbar.php";
    ?>
    <?php
    if (!empty($_GET['route'])) {
        require_once "view/Region/index.php";
    } else {
        require_once "view/Accueil.php";
    }

    ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>