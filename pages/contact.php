<!-- Add page meta here -->

<title>Home page</title>
</head>

<body>
  <?php include CHUNKS . '/header.php'?>

  <main class="contact_page">
    <section class="presentation_wrapper">
      <div class="presentation pr_ltr container">
        <div class="text">
          <div>
            <h2>Connect with Avior Financials Today</h2>
            <p>We're here to answer your questions, provide more information about our services, and discuss how we can
              tailor our solutions to meet the unique needs of your business. Feel free to reach out to us through the
              following contact options:
            </p>
            <p class="mail">mail@mail.com</p>
            <a href="#form" class="btn btn_gradient">Contact Us</a>
          </div>
        </div>
        <div class="image">
          <img src="/assets/img/contact.svg" alt="">
        </div>
      </div>
    </section>
    <section class="presentation_wrapper">
      <div class="presentation pr_bg pr_noimg container">
        <div class="text">
          <div>
            <h2>About Avior Financials: Empowering Your Financial Success
            </h2>
            <h3>Our Mission</h3>
            <p>At the heart of Avior Financials is a mission to empower businesses by providing comprehensive financial
              back office solutions. We understand the challenges you face in managing your financial operations, and
              our goal is to simplify these complexities, allowing you to focus on what matters most – the growth and
              success of your business.
            </p>
            <h3>Who We Are</h3>
            <p>Avior Financials is more than a financial services provider; we are your dedicated partner in navigating
              the intricate world of finance. Our team comprises seasoned professionals with a wealth of experience in
              financial management. We are committed to delivering accuracy, compliance, and strategic insights tailored
              to the unique needs of your business.
            </p>
          </div>
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