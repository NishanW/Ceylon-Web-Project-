<?php
    $destination = filter_input(INPUT_GET, 'dest', FILTER_SANITIZE_URL);
    $imageArray = glob("images/".$destination."/*.{jpg,png}", GLOB_BRACE);
    if (!$imageArray) {
        // Redirect browser 
        header("Location: /search.php"); 
        exit; 
    }
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
    </div>
    <div class="flex">
        <?php 
            for ($x = 0; $x < count($imageArray); $x++) {
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

<?php require_once 'site-header.php';?>
<?php require_once 'footer.php';?>