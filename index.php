<?php
session_start();

$noticeType = $_SESSION['noticeType'] ?? '';
$noticeMessage = $_SESSION['noticeMessage'] ?? '';
unset($_SESSION['noticeType'], $_SESSION['noticeMessage']);

$services = [
  ['icon' => 'bi-fire', 'number' => '01 / ROAST', 'title' => 'Small-batch roasting',
   'description' => 'We roast in thoughtful batches to bring out the character of every origin, then pack each bag at its freshest.', 'link' => '#products', 'linkText' => 'Meet the beans', 'class' => ''],
  ['icon' => 'bi-cup-straw', 'number' => '02 / BREW', 'title' => 'Coffee cart &amp; catering',
   'description' => 'A little neighborhood café feeling, wherever your gathering happens. We bring the bar, the beans, and the good energy.', 'link' => '#contact', 'linkText' => 'Plan an event', 'class' => ' service-card-featured'],
  ['icon' => 'bi-gift', 'number' => '03 / SHARE', 'title' => 'Thoughtful coffee gifts',
   'description' => 'Curated coffee bundles for the people who make your days brighter—finished with a note from you.', 'link' => '#contact', 'linkText' => 'Ask about gifting', 'class' => ''],
];

$products = [
  ['image' => 'images/keopi-house.png', 'name' => 'Keopi House', 'tag' => 'BESTSELLER',
   'origin' => 'BENGUET · MEDIUM ROAST', 'price' => '₱420', 'description' => 'Chocolate, toasted nuts, and a soft citrus finish. The everyday kind of lovely.'],
  ['image' => 'images/mountain-light.jpg', 'name' => 'Mountain Light', 'tag' => 'SLOW MORNING',
   'origin' => 'SAGADA · LIGHT ROAST', 'price' => '₱460', 'description' => 'Floral and bright with a honey sweetness. Made for pour-over and unhurried mornings.'],
  ['image' => 'images/sunday-slow.jpg', 'name' => 'Sunday Slow', 'tag' => 'DEEP &amp; COZY',
   'origin' => 'DAVAO · DARK ROAST', 'price' => '₱440', 'description' => 'Dark cocoa, ripe fruit, and a round finish. A comforting cup for late afternoons.'],
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/keopi-logo.png?v=4">
    <title>Keopi</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="style.css?v=14" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top site-nav" aria-label="Main navigation">
    <div class="container">
    <a class="navbar-brand brand-mark" href="#home" aria-label="Keopi home">
    <img src="images/keopi-logo.png?v=4" class="brand-logo" alt="">
keopi
</a>
    <div class="navbar-collapse">
    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
    <li class="nav-item ms-lg-2"><a class="btn btn-nav" href="#contact">
                Contact Us
    <i class="bi bi-arrow-up-right ms-1"></i>
</a>
</li>
</ul>
</div>
</div>
</nav>

<main>
    <section class="hero" id="home">
    <div class="hero-shade"></div>
    <div class="container hero-content">
    <div class="row align-items-center min-vh-100">
    <div class="col-lg-7 col-xl-6">
    <span class="eyebrow eyebrow-light"><span class="eyebrow-line"></span> GOOD COFFEE, GROWN CLOSER</span>
    <h1>A little more<br><em>local.</em> A lot more soul.</h1>
    <p class="hero-copy">Slow mornings start with coffee that knows where it comes from. Meet small-batch Filipino beans, thoughtfully roasted for the everyday.</p>
    <div class="d-flex flex-wrap gap-3 mt-4">
    <a href="#products" class="btn btn-cream">Explore our coffee <i class="bi bi-arrow-down-right ms-2"></i></a>
    <a href="#about" class="btn btn-outline-light rounded-pill px-4 py-3">Our story</a>
</div>
</div>
</div>
</div>
</section>

    <section class="intro-strip" aria-label="Our promise">
    <div class="container">
    <div class="row g-4 align-items-center">
    <div class="col-md-4"><span class="strip-number">01</span><span>Locally sourced<br><strong>Filipino-grown beans</strong></span></div>
    <div class="col-md-4"><span class="strip-number">02</span><span>Roasted in small batches<br><strong>Never rushed, always fresh</strong></span></div>
    <div class="col-md-4"><span class="strip-number">03</span><span>Made for slow moments<br><strong>Your cup, your kind of day</strong></span></div>
</div>
</div>
</section>

<section class="section-padding services-section" id="services">
    <div class="container">
    <div class="section-heading row align-items-end mb-5">
    <div class="col-12">
    <span class="eyebrow"><span class="eyebrow-line"></span> A GOOD CUP, YOUR WAY</span>
    <h2>More than coffee.<br><em>A daily ritual.</em></h2>
</div>
</div>
    <div class="row g-4">
    <?php foreach ($services as $service): ?>
    <div class="col-md-6 col-lg-4">
    <article class="service-card<?= $service['class'] ?>">
    <span class="service-icon"><i class="bi <?= $service['icon'] ?>"></i></span>
    <span class="service-index"><?= $service['number'] ?></span>
    <h3><?= $service['title'] ?></h3>
    <p><?= $service['description'] ?></p>
    <a class="text-link" href="<?= $service['link'] ?>"><?= $service['linkText'] ?> <i class="bi bi-arrow-up-right"></i></a>
</article>
</div>
    <?php endforeach; ?>
</div>
</div>
</section>

    <section class="products-section section-padding" id="products">
    <div class="container">
    <div class="section-heading row align-items-end mb-5">
    <div class="col-12">
    <span class="eyebrow eyebrow-light"><span class="eyebrow-line"></span> THE HOUSE FAVORITES</span>
    <h2>Find your<br><em>feel-good cup.</em></h2>
</div>
</div>
    <div class="row g-4">
    <?php foreach ($products as $product): ?>
    <div class="col-md-6 col-lg-4">
    <article class="product-card">
    <div class="product-image">
    <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?> coffee beans" class="product-photo">
    <span class="product-tag"><?= $product['tag'] ?></span>
</div>
    <div class="product-info">
    <div class="d-flex justify-content-between align-items-start">
<div>
    <span class="origin-label"><?= $product['origin'] ?></span>
    <h3><?= $product['name'] ?></h3>
</div>
    <span class="price"><?= $product['price'] ?></span>
</div>
    <p><?= $product['description'] ?></p>
    <a href="#contact" class="product-link">Ask about this coffee <i class="bi bi-arrow-up-right"></i></a>
</div>
</article>
</div>
    <?php endforeach; ?>
</div>
</div>
</section>

    <section class="about-section section-padding" id="about">
    <div class="container">
    <div class="row align-items-center g-5">
    <div class="col-lg-6">
    <div class="about-image-wrap">
    <img src="images/keopi-logo.png?v=4" alt="Keopi coffee illustration" class="about-image">
</div>
</div>
    <div class="col-lg-5 offset-lg-1">
    <span class="eyebrow"><span class="eyebrow-line"></span> ABOUT THE DEVELOPER</span>
    <h2 class="about-title">A little about<br><em>the owner.</em></h2>
    <div class="about-bio">
    <p class="about-copy">I’m Milwaukee James Apoya, student developer behind the Keopi website. I created it as a school project to practice building a responsive website and connecting a contact form to a database.</p>
    <p class="about-copy">Keopi is my Filipino coffee brand concept, inspired by local growers and neighborhood cafés. This site introduces its sample services and products and shares the story behind the concept.</p>
</div>
</div>
</div>
</div>
</section>

<section class="contact-section section-padding" id="contact">
    <div class="container">
    <div class="row g-5">
    <div class="col-lg-5">
    <span class="eyebrow eyebrow-light"><span class="eyebrow-line"></span> LET'S START A CONVERSATION</span>
    <h2>Have a little<br><em>something in mind?</em></h2>
</div>
    <div class="col-lg-6 offset-lg-1">
    <div class="contact-form-card">
    <?php if ($noticeMessage !== ''): ?>
    <div class="alert alert-<?= htmlspecialchars($noticeType, ENT_QUOTES, 'UTF-8') ?>" role="status"><?= htmlspecialchars($noticeMessage, ENT_QUOTES, 'UTF-8') ?></div>
    <?php endif; ?>
    <form action="contact.php" method="post">
    <div class="row g-3">
    <div class="col-sm-6"><label for="name" class="form-label">Your name</label><input type="text" class="form-control" id="name" name="name" maxlength="100" autocomplete="name" placeholder="Full Name" required></div>
    <div class="col-sm-6"><label for="email" class="form-label">Email address</label><input type="email" class="form-control" id="email" name="email" maxlength="254" autocomplete="email" placeholder="Email" required></div>
    <div class="col-12"><label for="subject" class="form-label">What can we help with?</label><input type="text" class="form-control" id="subject" name="subject" maxlength="150" placeholder="Coffee, an event, a gift..." required></div>
    <div class="col-12"><label for="message" class="form-label">Your message</label><textarea class="form-control" id="message" name="message" rows="4" maxlength="2000" placeholder="Tell us a little more..." required></textarea></div>
    <div class="col-12 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 pt-2">
    <small class="form-note"><i class="bi bi-lock me-1"></i> Your details are only used to reply.</small>
    <button type="submit" class="btn btn-submit">Send your note <i class="bi bi-arrow-up-right ms-2"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</main>

    <footer class="site-footer"><div class="container">
    <a class="navbar-brand brand-mark footer-brand" href="#home"><img src="images/keopi-logo.png?v=4" class="brand-logo" alt=""> keopi</a>
    <div class="footer-bottom">© <?= date('Y') ?> Keopi.</div>
</div></footer>
</body>
</html>
