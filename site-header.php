    <div class="header">
        <div class="inner-header">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Search</button>
                <div id="src-dropdown" class="dropdown-content">
                    <form action = "/attraction.php" method = "get">
                        <input type="text" name = "dest" class="search" placeholder="Search Travelerpic">
                    </form>
                </div>
            </div> 
            <div class="bigTitle">Colombo</div>
            <div class="smallTitle">---</div>
            <a href="/index.php">Home</a>
        </div>
    </div>

    <script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById('src-dropdown').classList.toggle("dropdown-show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(e) {
        if (e.target.matches('.dropbtn')) {}
        else
        if (e.target.matches('.dropdown-content')) {}
        else
        if (e.target.matches('form')) {}
        else
        if (e.target.matches('.search')) {}
        else
            {var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('dropdown-show')) {
                    openDropdown.classList.remove('dropdown-show');
                }
            }
        }
    }
    </script>
