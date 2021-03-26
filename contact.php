<?php include('includes/header.php'); ?>

                <?php
                    /*
                    * Below are 2 different forms to be re-used       
                    * 
                    * Only use one at a time, comment out the other!       
                    *
                    */

                    include 'includes/contact_include.php'; #site keys & code here
                
                    $toAddress = "malik.waller91@gmail.com";  //place your/your client's email address here
                    $toName = "Malik"; //place your client's name here
                    $website = "Contact Form Test";  //place NAME of your client's website

                    //echo loadContact('simple.php');#demonstrates a simple contact form
                    echo loadContact('multiple.php');#demonstrates multiple form elements

	            ?>
            </section>
            <!-- END LEFT COLUMN -->

            <!-- START RIGHT COLUMN -->
            <aside>
                <h3>Side Column</h3>
                <p>Your feedback is important! If you have questions or comments, please provide your contact information and tell me how you really feel.</p>
            </aside>
            <!-- END RIGHT COLUMN -->

<?php include('includes/footer.php'); ?>