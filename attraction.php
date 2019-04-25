<?php
    $destination = filter_input(INPUT_GET, 'dest', FILTER_SANITIZE_URL);
    $imageArray = glob("images/".$destination."/*.{jpg,png}", GLOB_BRACE);
?>

<?php require_once 'html-header.php';?>

    <div class="container">
        <?php
            foreach ($imageArray as $value) {
                echo "<div class='mainView fade'>";
                echo "<img src=$value alt=$value>";
                echo "</div>";
            }
        ?>
        
        <div class="strip">
            <?php 
                for ($x = 0; $x <= 2; $x++) {
                    echo "<div class='dest_$x'>";
                    echo "<div class='dest_img'>";
                    echo "<img src=$imageArray[$x]>";
                    echo "</div>";
                    echo "</div>";
                } 
            ?>
        </div>
        <div class="flex">
            <?php 
               for ($x = 0; $x <= 2; $x++) {
                    echo "<div class='dest_$x'>";
                    echo "<div class='dest_img'>";
                    echo "<img src=$imageArray[$x]>";
                    echo "</div>";
                    echo "</div>";
                }      
            ?>
        </div>
    </div>
    
<?php require_once 'site-header.php';?>
<?php require_once 'footer.php';?>