    <?php
    include './maison.php';

$maison = new Maison('ma maison', 10, 8,2);

echo "<p>la surface de ".$maison->getNom()." est égale à : ".$maison->calcSurface()."m2</p>";
?>