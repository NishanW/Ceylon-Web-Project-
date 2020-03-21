<?php require_once 'site-header.php';?>
<body>
<?php
    $destination = filter_input(INPUT_GET, 'dest', FILTER_SANITIZE_URL);
    $imageArray = glob("images/".$destination."/*.{jpg,JPG,png}", GLOB_BRACE);
?>
    
    <div class="container">
    <div class="header">
        <div class="siteTitle">CeylonSights</div>
   
        <div class="menu">
        <a href="/travelsite/index.php">Home</a>
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


<?php require_once 'footer.php';?>
</div>
</body>
</html>