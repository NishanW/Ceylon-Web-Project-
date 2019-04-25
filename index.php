<?php require_once 'html-header.php';?>

    <div class="container">
        <div class="mainView fade">
            <img src="images/Trincobay.jpg" alt="Trinco Bay">
        </div>
        <div class="mainView fade">
            <img src="images/AnpTemples.jpg" alt="Trinco Bay">
        </div>
        <div class="mainView fade">
            <img src="images/Wadduwa.jpg" alt="Trinco Bay">
        </div>    

        <div class="strip">
            <div class="dest_0">
                <div class="dest_img">
                   <img src="images/Trincobay.jpg" alt="Trinco Bay">
                </div>
                <div>
                    <h2>Trincomalee</h2>
                </div>
            </div>
            <div class="dest_1">
                <a href="/attraction.php?dest=ANP">
                <div class="dest_img">
                    <img src="images/AnpTemples.jpg" alt="Trinco Bay">
                </div>
                <div>
                    <h2>Anuradhapura</h2>
                </div>
                </a>
                </div>
            <div class="dest_2">
                <div class="dest_img">
                    <img src="images/Wadduwa.jpg" alt="Trinco Bay">
                </div>
                <div>
                    <h2 id="#1">West Coast</h2>
                </div>
            </div>    
        </div>
    </div>

    <?php require_once 'site-header.php';?>
    <?php require_once 'footer.php';?>
          
    <script>
        document.addEventListener("DOMContentLoaded", function(e) {
            document.body.className = '';
        });
    </script>
</body>
</html>