    </main>
    <footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <h3>Association of Kambari People</h3>
                    <p>United in heritage, dedicated to progress. The voice and strength of the Kambari community, preserving our culture for generations to come.</p>
                </div>
                <div class="footer-contact">
                    <h3>Get In Touch</h3>
                    <p>Email: contact@kambariassociation.org</p>
                    <p>Phone: +234 123 456 7890</p>
                     <p>Address: Main Secretariat, Kontagora, Niger State, Nigeria.</p>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="leadership.php">Leadership</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                         <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© <?php echo date("Y"); ?> Association of Kambari People. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script>
        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        const mainNav = document.querySelector('.main-nav');
        mobileNavToggle.addEventListener('click', () => { document.body.classList.toggle('nav-open'); });
    </script>
</body>
</html>