
<!-- CONTACT PAGE
================================================== -->
<hr class="thick">
<div class="w3-row w3-brown" id="contact">
    <h3>
        <span class="w3-tag w3-red">C</span>
        <span class="w3-tag ">O</span>
        <span class="w3-tag w3-yellow">N</span>
        <span class="w3-tag ">T</span>
        <span class="w3-tag w3-red">A</span>
        <span class="w3-tag ">C</span>
        <span class="w3-tag w3-yellow">T</span>&nbsp; &nbsp;
        <span class="w3-tag ">U</span>
        <span class="w3-tag ">S</span>
    </h3>

    <?php
    require ('signup.php');
    ?>


    <div class="w3-container w3-third ">
        <address>
            <h2><i class="fa fa-phone-square" aria-hidden="true"></i> &nbsp; call us on:</h2>
            <p> <b>+254 720 615 062</b></p><br>
            <p<b>+254 731 273 560</b></p>

            <h6><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; e-mail:</h6>
            <p style="text-transform: none"> <b>zoghorifoundation@gmail.com</b></p>
        </address>
    </div>


    <div class="w3-container w3-third">
        <h2><i class="fa fa-envelope" aria-hidden="true"></i>
            send us an e-mail: </h2>
        <div class="dark" id="contact">
            <form action="#" method="POST">
                <label>Full Name(s)</label>
                <input type="text" name="Username" placeholder="Enter full name(s):" class="form-control mb-2">
                <label>Phone Number</label><input type="tel" name="Phone" placeholder="Enter phone number with country code" class="form-control mb-2">
                <label>E-mail</label> <input type="email" name="mail" placeholder="Enter E-mail:" class="form-control
                 mb-2">
                <label>Subject</label><input type="text" name="subject" placeholder="Enter SubjectMatter:" class="form-control mb-2">
                <label>Enter the message here:</label> <textarea name="msg" class="form-control" placeholder="Write The Message Here:"></textarea><br>
                <!--<button class="btn btn-success" name="btn-send"><span>SEND</span></button>-->
                <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Send</button>
            </form>
        </div>
    </div>
</div>