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
                <h1>Home</h1>
                <p>
                    Welkom op mijn portfolio! Hier kun je zien aan welke projecten ik mee heb gedaan en wat mijn vaardigheden zijn.
                    Hij is volledig in PHP gemaakt! :)
                </p>
                
                <?php for ($x = 0; 7 > $x; $x++) {
                    echo '<img src="../public\img\vei-sway.gif">';
                    echo '<img src="../public\img\vei-nodders.gif">';
                }
                ?>
            </div>
        </div>
        <?php 
            include_once('defaults/footer.php');
        ?>

    </div>
</body>



</html>