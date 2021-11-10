<h1>
    <center>CONTOH TAMPILAN AJA</center>
</h1> <br>
<hr>
<h2>
    <center><?php echo $title ?> Brandnya si : <?= $brand ?></center>

    <!-- metode 1 -->
    <?php 
        foreach ($product as $nama) {
            
            echo $nama.'<br>';
        }
    ?>

    <hr>

    <!-- metode ke 2 -->

    <?php foreach ($product as $nama) : ?>
                
        <p><?= $nama ?></p><br>
    <?php endforeach; ?>

    <hr>

    <!-- metode 3 -->

    <?php  foreach ($product as $key => $value) { ?>
            
        <label for=""><?= $value ?></label> <br>
    <?php } ?>


</h2>