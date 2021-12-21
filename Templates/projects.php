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
                <h1>Projecten</h1>
                <div class="row">
                    <?php foreach ($projects as $project) : ?>
                        <div class="col-md-auto">
                            <div class="card " style="width: 18rem; ">
                                <img src="<?= $project->image; ?>" class="card-img-top" alt="code gif">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $project->title; ?></h5>
                                    <p class="card-text"><?= $project->description; ?></p>
                                    <hr>
                                    <p class="card-text"><?= $project->contributors; ?></p>
                                    <a href="<?= $project->projectlink; ?>" class="btn btn-primary">Bekijken</a>
                                </div>
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