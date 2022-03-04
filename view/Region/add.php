<?php
$form = new Formulaire();
?>

<div class="mt-5 container">
    <div class="col-7">

    </div>
    <div class="col-5">
        <h1 class="text-center">Ajouter une ragion</h1>
        <form method="POST" action="../?route=Accueil.php">
            <?php
            $form->divForm("Nom de la region", "text", "", "nomRegion");
            $form->divForm("Superficie de la region", "text", "", "nomRegion");
            ?>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>

</div>