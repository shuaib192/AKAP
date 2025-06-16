<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association of Kambari People</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body lang="en">
    <header class="main-header">
        <div class="container">
            <img src="img/logo.png" href="index.php" class="logo-text">
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php" class="<?php echo ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo ($currentPage == 'about.php') ? 'active' : '' ?>">About Us</a></li>
                    <li><a href="leadership.php" class="<?php echo ($currentPage == 'leadership.php') ? 'active' : '' ?>">Leadership</a></li>
                    <li><a href="gallery.php" class="<?php echo ($currentPage == 'gallery.php') ? 'active' : '' ?>">Gallery</a></li>
                    <li><a href="contact.php" class="btn btn-primary <?php echo ($currentPage == 'contact.php') ? 'active-btn' : '' ?>">Contact Us</a></li>
                </ul>
            </nav>
            <button class="mobile-nav-toggle" aria-label="Toggle Navigation">
                <span class="hamburger-bar"></span><span class="hamburger-bar"></span><span class="hamburger-bar"></span>
            </button>
        </div>
    </header>
    <main></main>