<html>
<head>
    <title>Travelerpic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <script>document.body.className += ' fade-out';</script>

    <div class="header">
        <div class="inner-header">
            <div class="bigTitle">Travelerpic</div>
            <div class="smallTitle">Sri Lanka</div>
        </div>
    </div>

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
            <div class="dest_a">
                <div class="dest_img">
                   <img src="images/Trincobay.jpg" alt="Trinco Bay">
                </div>
                <div>
                    <h2>Trincomalee</h2>
                </div>
            </div>
            <div class="dest_b">
                <a href="/anuradhapura.html">
                <div class="dest_img">
                    <img src="images/AnpTemples.jpg" alt="Trinco Bay">
                </div>
                <div>
                    <h2>Anuradhapura</h2>
                </div>
                </a>
                </div>
            <div class="dest_c">
                <div class="dest_img">
                    <img src="images/Wadduwa.jpg" alt="Trinco Bay">
                </div>
                <div>
                    <h2 id="#1">West Coast</h2>
                </div>
            </div>    
        </div>

        <div class="footer">
            <?php
                echo "<p>Copyright &copy; " . date("Y") . " | Pixel Foundry</p>";
            ?>
        </div>
    </div>
    
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mainView");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none"; 
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1} 
            slides[slideIndex-1].style.display = "block"; 
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
    </script>
          
    <script>
        document.addEventListener("DOMContentLoaded", function(e) {
            document.body.className = '';
        });
    </script>
 </body>
</html>