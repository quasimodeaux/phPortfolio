<?php require './header.php';?>


<div class="wrap">
    <div class="container">
        <section class="row">
            <div class="col-md-8">
                <form class="contact-form">
                    <h1 class="contact-form-header">Contact</h1>
                    <hr class="contact-hr"/>
                    <div class="form-group">
                        <label class="label-name" for="name">Name</label>
                        <input type="text" id="name_input" name="user_name" />
                    </div>
                    <div class="form-group">
                        <label class="label-mail" for="mail">E-mail</label>
                        <input type="email" id="mail_input" name="user_mail" />
                    </div>
                    <div class="form-group">
                        <label class="label-msg" for="msg">Message</label><br />
                        <textarea id="msg" name="user_message_input" cols=600></textarea>
                    </div>
                    <button class="submit-btn">Submit</button>
                </form>
            </div>
            <div class="col-md-4">


                <section id="connect-with-me-area">
                    <div class="connect-with-me-content">
                        <h1 class="connect-with-me-header">Connect With Me</h1>
                        <hr />
                        <div id="images">
                            <img src="assets/imgs/github.png" alt="" class="connect-with-me-photo">
                            <img src="assets/imgs/linkedin.png" alt="" class="connect-with-me-photo">
                            <img src="assets/imgs/stackover2.png" alt="" class="connect-with-me-photo">
                        </div>
                    </div>
                </section>


            </div>
        </section>
    </div>
</div>




<?php require './sidebar.php';?>


<?php require './footer.php';?>