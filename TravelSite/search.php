<?php
    $imageArray = glob("images/home/*.{JPG,jpg,png}", GLOB_BRACE);
    sort($imageArray);
?>
?>

<?php require_once 'html-header.php';?>

<div class="srcContainer">
        <div class="divMargin">
        </div>

    <!--<div class="flex">
        <?php 
            for ($x = 0; $x < count($imageArray); $x++) {
                $fileName = pathinfo($imageArray[$x], PATHINFO_FILENAME);
                $fileName = preg_replace('~\d~','',$fileName);

                echo "<div class='srcThumb'>";
                echo "<a href='/attraction.php?dest=$fileName'>";

                echo "<div class='srcThumb_img'>";
               /*echo "<img src=$imageArray[$x]>";*/
               echo "<h2>";
               echo "</h2>";
                echo "</div>";

                echo "<div class='srcName'>";
                echo "<h2>";
                /*echo "$fileName";*/
                echo "</h2>";
                echo "</div>";
                
                echo "</a>";
                echo "</div>";
            }      
        ?>
    </div>-->
</div>
<?php require_once 'site-header.php';?>
<?php require_once 'footer.php';?>