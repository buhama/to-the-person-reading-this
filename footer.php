<section class="footer">
    <p class ="footer-text">2020 <i>To The Person Reading This</i><br> All Rights Reserved</p>
    <a id="loginPop"> Login </a>
</section>

<div id = "myModal" class="modal">
    <div class="modal-content">
        <span class="close">
            &times;
        </span>
        
        <div class="login-form">
        <p>Login</p>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <input type="submit" name="login" value="Login">
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="resources/animations/header.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="resources/animations/header.js"></script>



<script>
    // Get the modal 
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal 
    var btn = document.getElementById("loginPop");

    // Get the span element that closes the modal 
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function (){
        modal.style.display = "block"; 
    } 

    // When the user clicks on span (x), close the  modal
    span.onclick = function (){
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal
    window.onclick = function (event){
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>    
