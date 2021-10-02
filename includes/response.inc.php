<div class="response">
    <a id="responsePop"> Login </a>
</div>

<div id = "myModal" class="modal">
    <div class="modal-content">
        <span class="close">
            &times;
        </span>
        <div class="theme-forms">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <input type="submit" name="login" value="Login">
            </form>
        </div>
    </div>
</div>



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
