<?php
$title = "";
$page = "index";
require("quiz_header.php");
?>

<div class="container">
    <div class="row">
        <div class="jumbotron">
            <h2>Who will you party with this Halloween?</h2>
            <img src="images/halloween.png" alt="Halloween"><br><br>
            <p>Please login with Facebook to see your result.</p>
            <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with"
                 data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
        </div>
    </div>
</div>

<?php
require("quiz_footer.php");
?>
