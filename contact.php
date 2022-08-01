<?php
include 'include/css-url.php';
?>
<div class="container-fluid logosec">
<div class="header-background">
  <div class="container logosec py-1 px-5">
    <div class="row">
      <div class="col justify-content-start d-flex align-items-center">
        <div class="d-flex py-2 flex-direction-row">
          <i class="fa fa-envelope mr-2 text-white" style="transform: scale(0.9);
                margin-bottom: -63px;"></i>&nbsp;
          <strong class="head-bar text-white">support@windfinance.in</strong>
        </div>
      </div>
      <div class="col d-flex justify-content-end">
        <form class="form-inline py-2">
          <i class="fa fa-phone text-white" aria-hidden="true"></i>
          <strong class="ml-1 text-white">&nbsp;+91- 9625418615</strong>&nbsp;
          <span class="ml-2">
          <a href="https://www.facebook.com/windfinances"><img src="./assests/Image/facebook.png" alt="fb" style="width: 25px;"></a>
            <a href="https://www.instagram.com/wind_finance/"><img src="./assests/Image/insta.png" alt="instagram" style="width: 25px;"></a>
            <a href="https://www.youtube.com/channel/UCi6NGjy37JMb1PV5tqulSxw"><img src="./assests/Image/new youtube.png" alt="youtube" style="width: 20px;"></a>
            <a href="https://www.linkedin.com/company/wind-finance/"><img src="./assests/Image/linkedin.png" alt="linkedin" style="width: 25px;"></a>
            <a href="https://twitter.com/wind_finance"><img src="./assests/Image/twittter.png" alt="twitter" style="width: 25px;"></a>
          </span>
        </form>
      </div>
    </div>
  </div>
</div>
    <header id="header" class="d-flex align-items-center">
        <div class="container px-5 d-flex align-items-center justify-content-between">
            <div class="logo-ued">
            <a href="index.php"><img src="./assests/Image/NWE WIND LOGO 10.png" alt="logo" width="14%"></a>
            </div>
            <div id="hamburger-btn" onclick class="hamburger border rounded">
                <i class="fa-solid fa-bars" style="font-size: 25px;"></i>

            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto " href="about.php">About</a></li>
                    <li><a class="nav-link scrollto " href="service.php">Services</a></li>
                    <li><a class="nav-link scrollto active " href="contact.php">Contact</a></li>
                    <li><a class="nav-link scrollto " href="blog.php">Blog</a></li>
                    <!-- <li><a class="nav-link scrollto" href="help">Help</a></li> -->
                </ul>
            </nav>
        </div>
    </header>
    <div class="menu">
        <ul class="menu-show mx-auto list-unstyled">
            <li class="mt-3"><a href="index.php" class="text-dark">Home</a></li>
            <hr>
            <li><a href="about.php">About </a></li>
            <hr>
            <li><a href="service.php">Services</a></li>
            <hr>
            <li><a href="contact.php">Contact</a></li>
            <hr>
            <li><a href="index.php">Exit <img src="./assests/Image/logout.png" alt="" width="10%"></a></li>
        </ul>
    </div>

    <div class="contactbanner d-flex align-items-center">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Contact</h2>
            <ol>
                <li><a href="index.php">Home</a></li>
                <li class="text-white">Contact</li>
            </ol>
        </div>
    </div>
    <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-8">
          <div class="form h-100">
            <h3>GET IN TOUCH</h3>
            <form class="row contact-form-wrap" id="contact_form" method="POST">
            <div class="col-md-6">
              <div class="form-group">
                <input name="name"  class="form-control" type="text" placeholder="Name*" required />
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="email"  class="form-control" type="email" placeholder="E-mail*" required />
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="phone"  class="form-control" type="text" placeholder="Phone Number*"  onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" minlength="10" maxlength="10" required />
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="subject"  class="form-control" type="text" placeholder="Subject*" />
              </div>

            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="message"  class="form-control" rows="8" placeholder="Message"></textarea>
              </div>

            </div>
            <button type="submit" class="btn-style btn btn-primary rounded-0 m-auto" onclick="submitForm('contact_form')">Send Message</button>
            <div id="msg" class="message"></div>
          </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info h-100">
            <h3>Contact Information</h3>
            <ul class="list-unstyled">
              <li class="d-flex">
                <span class="wrap-icon fa fa-map-marker mr-3"></span>
                <span class="text"><b>H. No 70, Comrade Colony, Near Kheri Markanda, Kurukshetra, Haryana – 136118</b></span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon fa fa-phone mr-3"></span>
                <span class="text"><b>+91- 9625418615</b></span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon fa fa-envelope mr-3"></span>
                <span class="text"><b>support@windfinance.in</b></span>
              </li>
            </ul>
            <div class="wind">
            <img src="./assests/Image/NWE WIND LOGO.png" alt="logo" width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  
    <!-- <div class="full-fill">
        <div class="touch">
            <div class="container-fluid">
                <div class="title-border">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="title-content">
                                <h1><b> Get In touch</b></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-warning">
                                <div class="icon mt-3">
                                    <img src="./assests/Image/home2-unscreen.gif" alt="" width="50%">
                                </div>
                                <div class="card-body text-success">
                                    <h5 class="card-title">OFFICE ADDRESS</h5>
                                    <p class="card-text">C-94 street no.2 <br> somewhere in world</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-warning mb-3">
                                <div class="icon mt-3">
                                    <img src="./assests/Image/phone-change-unscreen (1).gif" alt="" width="38%">
                                </div>
                                <div class="card-body text-success">
                                    <h5 class="card-title">CONTACT NUMBER</h5>
                                    <p class="card-text">+1234567890 <br>+8989882199</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-warning mb-3">
                                <div class="icon mt-3">
                                    <img src="./assests/Image/email-unscreen.gif" alt="" width="50%">
                                </div>
                                <div class="card-body text-success">
                                    <h5 class="card-title">E-MAIL</h5>
                                    <p class="card-text">info@gmail.com <br>virus@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cont-card mb-5">
                <div class="container">
                    <div class="contant-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2482284127814!2d77.36390041492312!3d28.622321582421684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce580c2c725bf%3A0xb9c8c7b4a2d8372!2sAvenir%20Innovative%20Solutions%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1654144434579!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form shad"><br>
                                    <div class="form-group" style="margin: 12px;">
                                        <input id="form_name" type="name" name="name" class="form-control pt-2" placeholder="Name *" required="required" data-error="Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group" style="margin: 12px;">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group" style="margin: 12px;">
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone*" pattern="[0-9]{10}" required data-error="Valid phone is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group" style="margin: 12px;">
                                        <input id="form_subject" type="name" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="form-group" style="margin: 12px;">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for us*" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 text-center mt-4">
                                        <a><input type="submit" name="submit" class="button-change mb-4" value="Send message"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 -->







 <script src="//code.tidio.co/xlnzklafmsgeufhjx8h2o4ktgn4jjjkm.js" async></script>
<?php
include 'include/footer.php';
// include 'include/js-url.php';
?>