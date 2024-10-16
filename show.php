<?php
include_once("templates/header.php");
?>
<div class="container" id="view-contact-container">
    <h1 id="main-title"><?= $contactx['name'] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?= $contactx['phone'] ?></p>
    <p class="bold">Obersavações:</p>
    <p><?= $contactx['observations'] ?></p>
</div>
<?php
include_once("templates/footer.php")
    ?>