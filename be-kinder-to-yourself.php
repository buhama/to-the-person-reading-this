<?php 
    include_once 'header.php';
    include_once 'includes/functions.inc.php';
    include_once 'includes/dbh.inc.php';
?>

<body>
    <div class="themes">
        <p class="theme-title">To the person reading this...</p>
        <?php
            echo '<h1 class = "quote" id = "quote">';
            $sql = "SELECT * FROM quotes WHERE quoteApproved = 0 AND quoteTheme = 'Be Kinder to Yourself' order by RAND() LIMIT 1";
            $result = mysqli_query($conn,$sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0){
                $row  = mysqli_fetch_assoc($result);
                echo $row['quoteQuotes'];
               
                echo '<p class = "author" id = "quote">';
                if ($row['quoteAuthor'] == ""){
                    echo '- Anonymous'; 
                }
                else {
                    echo '-'.$row['quoteAuthor'];
                }
                echo '</p>';
                echo '</h1>';
            }
        ?>
        <div class="button1">
            <p>See more kind words.</p>
        </div>

        <div class="theme-forms">
            <form action="includes/be-kinder-to-yourself.inc.php" method="post">
                <input type="text" name="quote" placeholder="Enter some kind words..." maxlength="200">
                <input type="text" name="author" placeholder="Your name or quote author's name (optional)...">
                <input type="text" name="email" placeholder="Your email (optional)...">
                <input type="submit" name="send" value="Send">
            </form>
        </div>
    </div>
    <?php 
    include_once 'footer.php';
    ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="resources/animations/header.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="resources/animations/theme-pages.js"></script>

<script>
    var i = 0;
    var speed = 50; 
    console.log("hello");
    $(document).ready(function() {  
        $('.button1').click(function() {
            $.post('includes/random/random-be-kinder-to-yourself.inc.php',function(data){
                $('#quote').html(data);
                console.log("hello");
            });
        });
    }); 
</script>