<!-- Add page meta here -->

<title>Home page</title>
</head>

<body>
  <?php include CHUNKS . '/header.php'?>

  <main class="services_page">
    <section class="presentation_wrapper">
      <div class="presentation pr_ltr container">
        <div class="text">
          <div>
            <h2>Streamlining your Financial Administration</h2>
            <p>Welcome to Avior Financials' Services Page, where we take pride in delivering comprehensive and tailored
              financial solutions to optimize and streamline your business operations. Our expertise spans a range of
              essential services, all designed to ensure the financial health and success of your enterprise.
            </p>
          </div>
          <div>
            <h3>Our Services</h3>
            <p>From sending out invoices, processing and archiving purchase invoices to recording payments and
              maintaining the entire administration, we gladly take on these tasks for you, ensuring that your financial
              administration is well-organized.</p>
            <ul>
              <li>Streamline your invoicing process</li>
              <li>Ensure accurate, professional, and timely invoice delivery</li>
              <li>Handle the complexities of processing and archiving purchase invoices</li>
              <li>Meticulous approach for accuracy and compliance</li>
              <li>Record payments to stay on top of cash flow</li>
              <li>Provide real-time insights into your financial position</li>
              <li>Take care of your entire financial administration</li>
              <li>Cover a wide range of administrative tasks to keep your operations running smoothly</li>
              <li>Ensure timely submission of invoices and receipts to the accountant</li>
              <li>Simplify and enhance your quotation processes</li>
              <li>From creation to tracking, ensure a seamless experience for both you and your clients</li>
            </ul>

            <a href="/contact" class="btn btn_gradient">Get in Touch</a>
          </div>

        </div>
        <div class="image">
          <img src="/assets/img/services.svg" alt="">
        </div>
      </div>
    </section>
    <section class="adv_wrapper">
      <div class="adv container">
        <div class="title">
          <h2>Experience the Avior Financials Advantage</h2>
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
          <img src="/assets/img/service1.svg" alt="">
        </div>
        <div class="text">
          <div>
            <h2>More time for Important matters</h2>
            <p>With our back office support, we take care of all the burdens, allowing you to focus on what you truly enjoy. This minimizes your risk significantly, and in addition, we assist you in growing and earning more money.
            </p>
          </div>
        </div>

      </div>
      <div class="presentation pr_ltr container">
        <div class="text">
          <div>
            <h2>100% Transparency in everything we do
            </h2>
            <p>We are dedicated to helping you grow and increase your income. We achieve this through collaboration, knowledge sharing, time savings, and convenience. Our competitive pricing and cutting-edge software also contribute to our support.
            </p>
          </div>
        </div>
        <div class="image">
          <img src="/assets/img/service2.webp" alt="">
        </div>
      </div>
      <div class="presentation pr_rtl container">
        <div class="image">
          <img src="/assets/img/service3.svg" alt="">
        </div>
        <div class="text">
          <div>
            <h2>Get the best service and quality</h2>
            <p>Consider us an extension of your business. A dedicated team is always ready to assist you and ensure the satisfaction of both employees and temporary staff. This is only possible through effective teamwork. We are available for you 24/7. This is what we define as personal commitment.
            </p>
          </div>
        </div>

      </div>
    </section>
    <?php
      $heading = "Ready to get started?";
      $paragraph = "Contact Avior Financials today to discuss how our expert financial services can benefit your business. Whether you're a small startup or a growing enterprise, we have the solutions to take your financial management to the next level.";
      include CHUNKS . '/form.php'
      ?>
  </main>