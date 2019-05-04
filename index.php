<?php require_once 'html-header.php';?>

<?php
    $imageArray = glob("images/home/*.{jpg,png}", GLOB_BRACE);
?>

    <div class="container">
            <?php
                foreach ($imageArray as $value) {
                    echo "<div class='mainView fade'>";
                    echo "<img src=$value alt=$value>";
                    echo "</div>";
                }
            ?>
    
            <div class="flex">
                <?php 
                for ($x = 0; $x <= 6; $x++) {
                        echo "<div class='dest'>";
                        echo "<div class='dest_img'>";
                        echo "<img src=$imageArray[$x]>";
                        echo "</div>";
                        echo "<div>";
                        echo "<h2>";
                        $fileName = basename($imageArray[$x],".jpg");
                        echo preg_replace('~\d~','',$fileName);
                        echo "</h2>";
                        echo "</div>";
                        echo "</div>";
                    }      
                ?>
            </div>
            <?php require_once 'footer.php';?>
    </div>

    <?php require_once 'site-header.php';?>
</body>
</html>