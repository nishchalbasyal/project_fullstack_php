<div class="contact-form">
    <h1>Contact us</h1>
    <p>Speak with our team to see how we can help your business</p>


    <form action="data/contact.php" class="form" onsubmit="return handleFormSubmit();" method="post">

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Your name" id="name">
            <p class="input_error" id="name_error">Error msg Here</p>
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Your email" id="email">
            <p class="input_error" id="email_error">Error msg Here</p>
        </div>
        <div class="input-wrapper">
            <textarea name="message" placeholder="Your message" id="message"></textarea>
            <p class="input_error" id="message_error">Error msg Here</p>
        </div>

        <button type="submit" class="button" onclick="handleFormSubmit()">
            Submit
        </button>

    </form>

</div>