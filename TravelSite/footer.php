<div class="footer">      
    <?php
         echo "<p>Copyright &copy; " . date("Y") . " | Pixel Foundry</p>";
    ?>
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
        window.addEventListener("load", function(e) {
            document.body.className = '';
        });
    </script>