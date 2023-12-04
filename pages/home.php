<!-- Add page meta here -->

<title>Home page</title>
</head>

<body>
<?php include CHUNKS . '/header.php' ?>

<main class="home_page">
  <section class="hero_wrapper">
    <div class="hero presentation container">
      <div class="text">
        <h1>Elevating your Social Media Presence</h1>

        <p>Unlock the full potential of your social media. We build and maintain your social media, creating posts,
          reels, and videos that expand your reach, attract customers, and establish brand awareness.</p>

        <a href="/services" class="btn">Get Started</a>

        <p class="rating">
          Rated
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          on
        </p>

        <p class="logos">He will be logos (or will not)</p>

      </div>
      <div class="image">
        <img src="/assets/img/hero.webp" alt="">
      </div>
    </div>
  </section>
  <section class="adv_wrapper">
    <div class="adv container">
      <div class="title">
        <h2>Experience the Avior Financials advantage
        </h2>
      </div>
      <div class="items">
        <div class="item">
          <div class="img_container">
            <img src="/assets/img/advant1.svg" alt="">
          </div>
          <h3>Expertise</h3>
          <p>Our team of seasoned professionals brings extensive experience in financial management to ensure accuracy
            and compliance.</p>
        </div>
        <div class="item">
          <div class="img_container">
            <img src="/assets/img/advant2.svg" alt="">
          </div>
          <h3>Customized Solutions</h3>
          <p>We understand that every business is unique. Our solutions are tailored to meet your specific needs,
            providing a personalized approach to financial management.</p>
        </div>
        <div class="item">
          <div class="img_container">
            <img src="/assets/img/advant3.svg" alt="">
          </div>
          <h3>Reliability</h3>
          <p>Trust is at the core of our relationships. We pride ourselves on delivering reliable and timely services,
            allowing you to focus on your business with peace of mind.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="presentation_wrapper">
    <div class="presentation pr_rtl container">
      <div class="image">
        <img src="/assets/img/about.svg" alt="">
      </div>
      <div class="text">
        <h2>Tailored for Growth
        </h2>
        <p>Our services are not just about managing your finances; they are crafted to be a catalyst for your business
          growth. We work with you to develop strategies that align with your goals, ensuring that our financial
          solutions contribute directly to your success.</p>
        <a href="/services" class="btn btn_gradient">How we can help</a>
      </div>
    </div>
  </section>
    <?php
    $heading = "Ready to Transform Your Financial Back Office?";
    $paragraph = "Contact Avior Financials today to discuss how our expert financial services can benefit your business.
      Whether you're a small startup or a growing enterprise, we have the solutions to take your financial
      management to the next level.";
    include CHUNKS . '/form.php'
    ?>
</main>