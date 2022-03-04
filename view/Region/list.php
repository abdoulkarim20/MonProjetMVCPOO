<?php
// require_once "./controller/RegionController.php";
$regionController = new RegionController();
$regions = $regionController->getAll();
?>
<h1 class="text-center">La liste des regions</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">nom de la ragion</th>
                <th scope="col" colspan="2" class="text-center">Actions</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($regions as $region) { ?>
                <tr>
                    <td><?= $region['idRegion']; ?></td>
                    <td><?= $region['nomRegion']; ?></td>
                    <td class="text-center"><a href="?route=Region&module=edit&idRegion=<?= $region['idRegion']; ?>">Modifier</a></td>
                    <td class="text-center"><a href=""><i class="bi bi-trash3" style="color: #ce0033; font-size:1.5rem;"></i></a></td>
                </tr>
            <?php  } ?>
        </tbody>
    </table>
</div>