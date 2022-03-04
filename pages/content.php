<?php
if (!empty($_GET['route'])) {
    switch ($_GET['route']) {
        case 'Region':
            require_once "view/Region/index.php";
            break;
    }
}
