<?php
$title = "";
$page = "index";
require("quiz_header.php");
?>

    <br>
    <div id="app" class="container">
        <div id="warningDiv" class="alert alert-danger" v-show="showWarningMessage"></div>
        <div id="successDiv" class="alert alert-success" v-show="showSuccessMessage">
            <strong>Success!</strong> Your message has been sent. We will get back to you ASAP!
        </div>
        <div class="row">
            <form class="form-horizontal" role="form" method="post" action="post.php" id="contact">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="example@domain.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message" id="message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="button" class="btn btn-primary btn-lg" v-on:click="pressSubmitBtn()">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
require("quiz_footer.php");
?>