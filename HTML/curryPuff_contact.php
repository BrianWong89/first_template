<?php
$title="Contact Us | ";
$page="contact-us";
require("curryPuff_header.php");
?>

    <div role="main" class="main">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="curryPuff_index.php">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>

        <?php $showForm = true; ?>

        <div class="container">

            <div class="row">
                <div class="col-md-6">

                    <?php if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) { ?>
                        <?php if ($_POST["name"] == "" || $_POST["email"] == "" || $_POST["message"] == "") { ?>

                            <div class="alert alert-danger">
                                <strong>Error!</strong> Your message has not been sent. Please fill in the * field(s)
                                accordingly.
                            </div>

                        <?php } else { ?>

                            <div class="alert alert-success">
                                <strong>Success!</strong> Your message has been sent. We will get back to you ASAP!
                            </div>

                            <?php $showForm = false;
                        }
                    } ?>

                    <h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>

                    <?php if ($showForm == true) { ?>

                        <form action="curryPuff_contact.php" method="post" id="contact">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="<?php if (isset($_POST['name'])) echo $_POST["name"]; ?>"
                                               placeholder="Enter Your Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email Address *</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                               value="<?php if (isset($_POST['email'])) echo $_POST["email"]; ?>"
                                               placeholder="Enter Your Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="subject">Subject *</label>
                                        <input type="text" class="form-control" id="subject" name="subject"
                                               value="<?php if (isset($_POST['subject'])) echo $_POST["subject"]; ?>"
                                               placeholder="Enter Your Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="message">Message *</label>
                                        <textarea class="form-control" rows="10" id="message"
                                                  name="message"><?php if (isset($_POST['message'])) {
                                                echo htmlentities($_POST['message']);
                                            } ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-lg mb-xlg">Send Message</button>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </div>

                <div class="col-md-6">

                    <h4 class="heading-primary">Our <strong>Office</strong></h4>
                    <ul class="list list-icons list-icons-style-3 mt-xlg">
                        <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 228 Pasir Ris Street 21, 510228,
                            Singapore
                        </li>
                        <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (65) 9006-5328</li>
                        <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">
                                darkness3nity@yahoo.com.sg</a>
                        </li>
                    </ul>

                    <hr>

                    <h4 class="heading-primary">Business <strong>Hours</strong></h4>
                    <ul class="list list-icons list-dark mt-xlg">
                        <li><i class="fa fa-clock-o"></i> Monday - Friday - 9am to 5pm</li>
                        <li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
                        <li><i class="fa fa-clock-o"></i> Sunday and Public Holiday - Closed</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

<?php
require("curryPuff_footer.php");
?>