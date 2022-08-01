
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
          <strong class="ml-1 text-white">&nbsp;+91- 9354494685</strong>&nbsp;
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
        <li><a class="nav-link scrollto active" href="index.php"></i> Home</a></li>
        <li><a class="nav-link scrollto" href="about.php">About</a></li>
        <li><a class="nav-link scrollto" href="service.php">Services</a></li>
        <li><a class="nav-link scrollto " href="contact.php">Contact</a></li>
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
    <li ><a href="about.php">About </a></li>
    <hr>
    <li><a href="service.php">Services</a></li>
    <hr>
    <li><a href="contact.php">Contact</a></li>
    <hr>
    <li><a href="index.php">Exit   <img src="./assests/Image/logout.png" alt="" width="10%"></a></li>
  </ul>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Enquiry Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="row contact-form-wrap" id="contactform1" method="POST">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="name" class="form-control" type="text" placeholder="Name*" onfocus="this.placeholder=''" onblur="this.placeholder='Name*'" required />
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="email" class="form-control" type="email" placeholder="E-mail*" required />
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="phone" class="form-control" type="text" placeholder="Phone Number*" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" minlength="10" maxlength="10" required />
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="subject" class="form-control" type="text" placeholder="Subject*" />
                      </div>

                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" rows="8" placeholder="Message" onblur="this.placeholder='Message*'"></textarea>
                      </div>

                    </div>
                    <button type="button" class="btn-style btn btn-primary rounded-0 m-auto" onclick="submitForm('contactform1')">Send Message</button>
                    <div id="msg" class="message"></div>
                  </form>
      </div>
    </div>
  </div>
</div>

