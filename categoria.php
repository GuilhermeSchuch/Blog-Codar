<?php
    include_once("templates/header.php");
?>

<main class="categoria-container">
    <ul class="lista">
        <?php foreach($categories as $categoria): ?>
            <li><a href="#"><?= $categoria ?></a></li>
        <?php endforeach; ?>
    </ul>

    <ul class="lista 1">
        <?php foreach($categories as $categoria): ?>
            <li><a href="#"><?= $categoria ?></a></li>
        <?php endforeach; ?>
    </ul>

    <ul class="lista">
        <?php foreach($categories as $categoria): ?>
            <li><a href="#"><?= $categoria ?></a></li>
        <?php endforeach; ?>
    </ul>
</main>

<?php
    include_once("templates/footer.php");
?>