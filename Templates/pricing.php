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
                <h1>Pricing</h1>
                <ul class="list-group">
                    <a href="https://www.rocmondriaan.nl/" class="list-group-item list-group-item-action disabled">Setup : €400,00</a>
                    <a href="https://www.rocmondriaan.nl/" class="list-group-item list-group-item-action disabled">Per uur : € 49,99 </a>
                    <a href="https://www.rocmondriaan.nl/" class="list-group-item list-group-item-action disabled">Maandelijkse Onderhoud : € 87,99 </a>
                    <a href="https://www.rocmondriaan.nl/" class="list-group-item list-group-item-action">Geschatte totale prijs HTML Website met PHP + Database : €1.500,00 ~ €5.000,00</a>
                    <a href="https://www.rocmondriaan.nl/" class="list-group-item list-group-item-action">Geschatte totale prijs HTML Website met JS : €400,00 ~ €15.000,00</a>
                </ul>
                <br>
                <?php for ($x = 0; 3 > $x; $x++) {
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