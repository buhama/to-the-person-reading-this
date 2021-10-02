<?php 
include_once 'header.php';
?>
<body>
    <div class = "front-page">
        <h2 class="title"><i>To The Person Reading This...</i></h2>
        <div class="form-1">
            <form action="includes/random-theme.inc.php" method="get">
                <button class = "btn-1" type="submit">Random</button>
            </form>
            <form action="themes.php" method="get">
                <button class = "btn-2" type="submit">Theme</button>
            </form>
            <button id="your-response" class = "btn-3" type="submit">Your Response</button>
        </div>
    </div>
    <div id = "myModal-2" class="modal-2">
        <div class="modal-content-2">
            <span class="close-2">
                &times;
            </span>
            <div class="response-form">
                <p>Pick a theme and enter your response here.</p>
                <form action="includes/your-response.inc.php" method="post">
                    <select id="themes-select" name = "theme" class="themes-select">
                        <option value="Words of Encouragement"> Words of Encouragement </option>;
                        <option value="Lift a Friend"> Lift a Friend </option>;
                        <option value="Be Kinder to Yourself"> Be Kinder to Yourself </option>;
                        <option value="Something to be Grateful For"> Something to be Grateful For </option>;
                    </select>
                    <input type="text" name="quote" placeholder="Enter your response....." maxlength="200">
                    <input type="text" name="author" placeholder="Your name or quote author's name (optional)...">
                    <input type="text" name="email" placeholder="Your email (optional)...">
                    <input type="submit" name="send" value="Send">
                </form>
            </div>
        </div>
    </div>

    <?php 
    include_once 'footer.php';
    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="resources/animations/header.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="resources/animations/index.js"></script>
<script>
    // Get the modal 
    var modal2 = document.getElementById("myModal-2");

    // Get the button that opens the modal 
    var btn2 = document.getElementById("your-response");

    // Get the span element that closes the modal 
    var span2 = document.getElementsByClassName("close-2")[0];

    // When the user clicks the button, open the modal 
    btn2.onclick = function (){
        modal2.style.display = "block"; 
    } 

    // When the user clicks on span (x), close the  modal
    span2.onclick = function (){
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal
    window.onclick = function (event){
        if (event.target == modal) {
            modal2.style.display = "none";
        }
    }
</script>   
</body>

