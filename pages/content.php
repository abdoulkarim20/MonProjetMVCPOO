<?php
if (!empty($_GET['route'])) {
    switch ($_GET['route']) {
        case 'Employer':
            require_once "view/Employer/index.php";
            break;
    }
}
