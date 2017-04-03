<!-- Header -->
<header>
  <div class="container">
    <div class="intro-text">
      <div class="intro-lead-in">Welcome To Shopphie!</div>
      <div class="intro-heading">Buy stuff</div>
    </div>
  </div>
</header>
<!-- Services Section -->
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Services</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
          <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
        <h4 class="service-heading">E-Commerce</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
          <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
        <h4 class="service-heading">Responsive Design</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
          <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
          </span>
        <h4 class="service-heading">Web Security</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
    </div>
  </div>
</section>

<!-- Shop Grid Section -->
<section id="portfolio" class="bg-light-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Shop</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo RESOURCES_PATH ?>/images/portfolio/roundicons.png" class="img-responsive" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Round Icons</h4>
          <p class="text-muted">Graphic Design</p>
        </div>
      </div>
    </div>
</section>

<!-- Team Section -->
<section id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Developer</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="team-member">
          <img src="<?php echo RESOURCES_PATH ?>/images/team/1.jpg" class="img-responsive img-circle" alt="">
          <h4>Bruno Drzanic</h4>
          <p class="text-muted">Web Developer</p>
          <ul class="list-inline social-buttons">
            <li><a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Contact Us</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button type="submit" class="btn btn-xl">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
