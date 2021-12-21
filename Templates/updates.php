<!DOCTYPE html>

<html lang="nl">
<?php
include_once('defaults/head.php');
?>

<body>
    <div class="container rounded " style="background:Gainsboro">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <?php
                    include_once('defaults/sidebar.php');
                ?>
            </div>
            <div class="p-2">
                <br>
                <h1>Updates</h1>
                <div class="card-deck" style = "position:relative; top:5%;">
                    <?php foreach ($updates as $update) : ?>
                        <div class="card text-stretch">
                            <div class="card-body">
                                <h5 class="card-title"><?= $update->title; ?></h5>
                                <p class="card-text"><?= $update->message; ?></p>
                                <a href="<?= $update->link; ?>" class="btn btn-primary">Bekijken</a>
                            </div>
                            <div class="card-footer text-muted">
                                <?= $update->date; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php 
            include_once('defaults/footer.php');
        ?>

    </div>
</body>



</html>