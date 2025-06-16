<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Get In Touch</h1>
        <p>We would love to hear from you. Connect with us.</p>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="grid-2-col">
            <div class="grid-item">
                <h3>Send us a Message</h3>
                <form action="#" method="POST" class="contact-form">
                    <div class="form-group"><label for="name">Your Name</label><input type="text" id="name" name="name" required></div>
                    <div class="form-group"><label for="email">Your Email</label><input type="email" id="email" name="email" required></div>
                    <div class="form-group"><label for="message">Message</label><textarea id="message" name="message" rows="5" required></textarea></div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="grid-item">
                <h3>Contact Information</h3>
                <ul class="contact-details-list">
                    <li><strong>Address:</strong><br>Main Secretariat, KM 5, Minna Road, Kontagora, Niger State, Nigeria.</li>
                    <li><strong>Email:</strong><br>contact@kambariassociation.org</li>
                    <li><strong>Phone:</strong><br>+234 123 456 7890</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
