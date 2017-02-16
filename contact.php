<?include "header.php";?>

    <div class="container">
        <br><br><br>
        <h1>Our homepage</h1>
        <p class="lead">Some text here</p>


        <form id="contact_form" action="process_contact.php" method="post">
            <h2>Send me a message</h2>
            <div>
                <label>Name:</label>
                <input type="text" placeholder="type your name" required name="your_name">
            </div>
            <div>
                <label>Email:</label>
                <input type="email" placeholder="type your email" required name="your_email">
            </div>
            <div>
                <label>Message:</label>
                <textarea placeholder="your messsage" name="your_message" required></textarea>
            </div>
            <div>
                <label>Contact you?</label>
                <span>
                    <input type="checkbox" value="email" id="email_check" name="contact_options">
                    <label for="email_check">Email</label>
                </span>
                <span>
                    <input type="checkbox" value="phone" id="phone_check" name="contact_options">
                    <label for="phone_check">Phone</label>
                </span>
            </div>

            <input type="submit" value="Send the form!">
        </form>

    </div>
    <!-- /.container -->


<?include "footer.php";?>
