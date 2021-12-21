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
                <h1>Contact</h1>
                <ul class="list-group">
                    <a href="https://www.rocmondriaan.nl/" class="list-group-item list-group-item-action">Per E-Mail: 302682872@student.rocmondriaan.nl </a>
                    <a href="https://www.rocmondriaan.nl/" class="list-group-item list-group-item-action">Per telefoon: (070) 318 81 88 </a>
                    <a href="https://www.rocmondriaan.nl/" class="list-group-item list-group-item-action disabled">Per post: </a>
                    <a href="https://www.rocmondriaan.nl/" class="list-group-item list-group-item-action disabled">Per telepathie: </a>
                </ul>
                
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