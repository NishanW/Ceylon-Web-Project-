<?php require_once 'site-header.php';?>
<body>
<?php
    $imageArray = glob("images/home/*.{JPG,jpg,png}", GLOB_BRACE);
    sort($imageArray);
?>

    <div class="container">
    <div class="header">
        <div class="siteTitle">CeylonSights</div>
   
        <div class="menu">
        <a href="/index.php">Home</a>
        <a href="/index.php">Hotels</a>
        <a href="/index.php">Attraction</a>
        <a href="/index.php">Book</a>
        </div>
    </div>

            <?php
                foreach ($imageArray as $value) {
                    echo "<div class='mainView fade'>";
                    echo "<img src=$value alt=$value>";
                    echo "</div>";
                }
            ?>
    
            <div class="flex">
                <?php 
                for ($x = 0; $x < count($imageArray); $x++) {
                    $fileName = pathinfo($imageArray[$x], PATHINFO_FILENAME);
                    $fileName = preg_replace('~\d~','',$fileName);
                        echo "<div class='dest'>";
                        echo "<a href='/travelsite/attraction.php?dest=$fileName'>";
                        echo "<div class='dest_img'>";
                        echo "<img src=$imageArray[$x]>";
                        echo "</div>";
                        echo "<div>";
                        echo "<h2>";
                        echo "$fileName";
                        echo "</h2>";
                        echo "</div>";
                        echo "</a>";
                        echo "<p>This direct scaling is clearly too dramatic for daily use. We need something more subtle, with minimums and maximums, and more control of the growth rate. That's where calc() becomes useful. We can combine a base size in more steady units (say 16px) with a smaller viewport-relative adjustment (0.5vw), and let the browser do the math: calc(16px + 0.5vw)</p>";
                        echo "</div>";
                    }      
                ?>
            </div>
            <?php require_once 'footer.php';?>
    </div>
</body>
</html>