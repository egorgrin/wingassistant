<section id="form" class="form_wrapper">
  <div class="form container">
    <div class="title">
    <?php
      if (!empty($heading) && !empty($paragraph)):
      echo "<h2>" . $heading . "</h2>";
      echo "<p>" . $paragraph . "</p>";
      endif;
    ?>

    </div>
    <form action="POST">
      <div class="fields">
        <div class="left">
          <input required type="text" name="name" placeholder="Name">
          <input required type="text" name="lastname" placeholder="Last Name">
          <input required type="text" name="company" placeholder="Company">
          <input required type="tel" name="phone" placeholder="Phone number">
          <input required type="email" name="email" placeholder="Email">
        </div>
        <div class="right">
          <textarea required name="message" placeholder="Message"></textarea>
        </div>
      </div>
      <div class="form_btn">
        <button type="submit" class="btn btn_gradient">Send</button>
      </div>
    </form>
  </div>
</section>