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
                <h1>Vaardigheden</h1>
                <div class="row">
                    <?php foreach ($skills as $skill) : ?>
                        <div class="col-md-auto">
                            <div class="card " style="width: 18rem; ">
                                <img src="<?= $skill->image; ?>" class="card-img-top" alt="language icon">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $skill->name; ?></h5>
                                    <p class="card-text"><?= $skill->description; ?></p>
                                    <hr>
                                    <p class="card-text"><?= $skill->experience; ?></p>
                                    <hr>
                                    <a><?php for ($x = 0; $skill->rating > $x; $x++) {
                                        echo "⭐";
                                    }
                                    ?></a>
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