<?php include('header.php'); ?>

<script type="text/javascript">

function myFunction() {
  alert("Flight is available. Click OK to continue booking.");
}

</script>

<section id="home" class="banner_wrapper p-0">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url(./images/slider/slider2.webp);">
        <div class="slide-caption text-center">
        <div>
          <h1>Welcome to Travello</h1>
          <p>Travello: Uniting Wanderlust, One Adventure at a Time.</p>
        </div>
      </div>
      </div>
      <div class="swiper-slide" style="background-image: url(./images/slider/slider1.webp);">
        <div class="slide-caption text-center">
        <div>
          <h1>Welcome to Travello</h1>
          <p>Travello: Where Every Journey Finds Its Story.</p>
        </div>
      </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="container booking-area">
    <form class="row">
      <div class="col-lg mb-3 mb-lg-0">
        <input type="date" class="form-control" placeholder="Date">
      </div>
      <div class="col-lg mb-3 mb-lg-0">
        <input type="date" class="form-control" placeholder="Date">
      </div>
      <div class="col-lg mb-3 mb-lg-0">
        <select class="form-select">
          <option selected>Adults</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>
      <div class="col-lg mb-3 mb-lg-0">
        <select class="form-select">
          <option selected>Children</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>
      <div class="col-lg mb-3 mb-lg-0">
        <button type="submit" class="main-btn rounded-2 px-lg-3" onclick="myFunction()" id="availroom">Check Availability</button>
      </div>
    </form>
  </div>
</section>

<div id="customAlertBox" class="custom-alert">
        <div class="custom-alert-content">
            <span class="close">&times;</span>
            <p id="alertMessage"></p>
        </div>
</div>

<section id="about" class="about_wrapper">
  <div class="container">
    <div class="row flex-lg-row flex-coloumn-reverse">
      <div class="col-lg-6 text-center text-lg-start">
        <h3>Welcome to <span>Travello <br class="d-none d-lg-block"></span>Travel, enjoy, and live a new<br>and full life</h3>
        <p>The world is a book and those who do not travel read only one page. Travel
          is more than seeing of sights;it is a change that goes on, deep and 
          permanent in the ideas of living.
        </p>
        <a href="#" class="main-btn mt-4">Explore Now</a>
        </div>
        <div class="col-lg-6 mb-4 mb-lg-0 ps-lg-4 text-center">
          <img src="images/newpic2.png" class="img-fluid" alt="about">
        </div>
    </div>
  </div>
</section>

<section id="rooms" class="rooms_wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h6>Top Selling</h6>
        <h3>Top Destinations</h3>
      </div>
    </div>
    <div class="row m-0">
      <div class="col-md-4 mb-4 mb-lg-0">
        <div class="room-items">
          <img src="./images/room/goa.jpeg" class="img-fluid">
          <div class="room-item-wrap">
            <div class="room-content">
              <h5 class="text-white mb-lg-5 text-decoration-underline">Travel to Goa</h5> <p class="text-white">Goa: Where Every Moment Shines.</p>
                <p class="text-white fw-bold mt-lg-4">Total package: ₹15,000<br>7 days trip</p>
                <a class="main-btn border-white text-white mt-lg-5" href="#">Book now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-lg-0">
        <div class="room-items">
          <img src="./images/room/rajasthan.jpg" class="img-fluid">
          <div class="room-item-wrap">
            <div class="room-content">
              <h5 class="text-white mb-lg-5 text-decoration-underline">Travel to Rajasthan</h5> <p class="text-white">Rajasthan: Where Legends Reside.</p>
                <p class="text-white fw-bold mt-lg-4">Total package: ₹9,500<br>10 days trip</p>
                <a class="main-btn border-white text-white mt-lg-5" href="#">Book now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-lg-0">
        <div class="room-items">
          <img src="./images/room/punjab.jpg" class="img-fluid">
          <div class="room-item-wrap">
            <div class="room-content">
              <h5 class="text-white mb-lg-5 text-decoration-underline">Travel to Punjab</h5> <p class="text-white">Punjab: Heartbeat of Heritage.</p>
                <p class="text-white fw-bold mt-lg-4">Total package: ₹10,000<br>7 days trip</p>
                <a class="main-btn border-white text-white mt-lg-5" href="#">Book now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="services" class="services_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h6>We are here for you</h6>
        <h3>Our awesome services</h3>
      </div>
    </div>
    <div class="row align-items-center service-item-wrap">
      <div class="col-lg-7 p-lg-0">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="spa" role="tabpanel">
              <img src="./images/services/happycustomer.png" width="90%">
          </div>
          <div class="tab-pane fade" id="restaurent" role="tabpanel" aria-labelledby="nav-profile-tab">
              <img src="./images/services/bestflight.png" width="90%">
          </div>
          <div class="tab-pane fade" id="swimming" role="tabpanel" aria-labelledby="nav-contact-tab">
              <img src="./images/services/localconcert.png" width="90%">
          </div>
          <div class="tab-pane fade" id="conference" role="tabpanel" aria-labelledby="nav-contact-tab">
              <img src="./images/services/gear.png" width="90%">
          </div>
        </div>
      </div>
      <div class="col-lg-5 position-relative">
        <div class="service-menu-area">
          <ul class="nav">
            <li>
              <a data-bs-toggle="tab" href="#spa" class="active"> <span class="service-icon">
                <img src="./images/services/tick.png" alt="">
                </span>
                <h5>Best Experience</h5>
                <p><span>We provide </span>best experience to our customers</p>
                </a>
            </li>
            <li>
              <a data-bs-toggle="tab" href="#restaurent"> <span class="service-icon">
                <img src="./images/services/tick.png" alt="">
                </span>
                <h5>Best Flights</h5>
                <p><span>We ensure </span>best flights to our customers and value their security</p>
                </a>
            </li>
            <li>
              <a data-bs-toggle="tab" href="#swimming"> <span class="service-icon">
                <img src="./images/services/tick.png" alt="">
                </span>
                <h5>Local Events</h5>
                <p><span>We organize </span>best local events and foods to our customers</p>
                </a>
            </li>
            <li>
              <a data-bs-toggle="tab" href="#conference"> <span class="service-icon">
                <img src="./images/services/tick.png" alt="">
                </span>
                <h5>Customization</h5>
                <p><span>We have </span>simple and user friendly interface and customizations</p>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="counter mt-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-3 mb-lg-0mb-md-0 mb-5">
          <h1>
            <span id="count1"></span>+
          </h1>
          <p>Happy CLients</p>
        </div>
        <div class="col-md-3 mb-lg-0mb-md-0 mb-5">
          <h1>
            <span id="count2"></span>+
          </h1>
          <p>New Friendships</p>
        </div>
        <div class="col-md-3 mb-lg-0mb-md-0 mb-5">
          <h1>
            <span id="count3"></span>+
          </h1>
          <p>Five Start Ratings</p>
        </div>
        <div class="col-md-3 mb-lg-0mb-md-0 mb-5">
          <h1>
            <span id="count4"></span>+
          </h1>
          <p>Served Bookings</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="team" class="team_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h6>What I can do for you</h6>
        <h3>Our Special Staff</h3>
      </div>
    </div>
  
    <div class="row">
      
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="images/team/team1.webp" class="img-fluid rounded-3">
          <div class="team-info">
              <h5>Mr. Shirley Gibson</h5>
              <p>Chief Executive Officer</p>
              <ul class="social-network">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
              </ul>
         </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="images/team/team2.webp" class="img-fluid rounded-3">
          <div class="team-info">
              <h5>Mr. Kevin Johnson</h5>
              <p>Director</p>
              <ul class="social-network">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
              </ul>
         </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="images/team/team3.webp" class="img-fluid rounded-3">
          <div class="team-info">
              <h5>Mr. Eric Ripert</h5>
              <p>Supervisor</p>
              <ul class="social-network">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
              </ul>
         </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="images/team/team4.webp" class="img-fluid rounded-3">
          <div class="team-info">
              <h5>Miss Angela Hartnett</h5>
              <p>Assistant</p>
              <ul class="social-network">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
              </ul>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="gallery" class="gallery_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h6>Best Pictures of our destination</h6>
        <h3>Our Gallery</h3>
      </div>
    </div>
    <div class="row g-0">
      <div class="col-lg-3 col-md-6 gallery-item">
        <img src="./images/gallery/1.webp" class="img-fluid w-100">
        <div class="gallery-item-content"></div>
      </div>
      <div class="col-lg-3 col-md-6 gallery-item">
        <img src="./images/gallery/2.webp" class="img-fluid w-100">
        <div class="gallery-item-content"></div>
      </div>
      <div class="col-lg-3 col-md-6 gallery-item">
        <img src="./images/gallery/3.webp" class="img-fluid w-100">
        <div class="gallery-item-content"></div>
      </div>
      <div class="col-lg-3 col-md-6 gallery-item">
        <img src="./images/gallery/4.webp" class="img-fluid w-100">
        <div class="gallery-item-content"></div>
      </div>
      <div class="col-md-6 gallery-item">
        <img src="./images/gallery/5.webp" class="img-fluid w-100">
        <div class="gallery-item-content"></div>
      </div>
      <div class="col-md-6 gallery-item">
        <img src="./images/gallery/6.webp" class="img-fluid w-100">
        <div class="gallery-item-content"></div>
      </div>
    </div>
  </div>
</section>

<section id="price" class="price_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h6>Best and affordable price for you</h6>
        <h3>Our pricing</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-4 text-center rounded-3">
          <h5 class="text-decoration-underline mb-4">First Class</h5> <ul class="list-unstyled">
          <li>
          <p>Flight Ticket (No)</p>
          </li>
          <li>
          <p>Music Concert (15% Off)</p>
          </li>
          <li>
          <p>Restaurant (No)</p>
          </li>
          <li>
          <p>Hotel (No)</p>
          </li>
          </ul>
          <hr />
          <h3>₹2,500<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
          <a href="#" class="main-btn">Book Now</a>
          </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-4 text-center rounded-3">
          <h5 class="text-decoration-underline mb-4">Business Class</h5> <ul class="list-unstyled">
          <li>
          <p>Flight Ticket (2)</p>
          </li>
          <li>
          <p>Music Concert (30% Off)</p>
          </li>
          <li>
          <p>Restaurant (25% Off)</p>
          </li>
          <li>
          <p>Hotel (Free)</p>
          </li>
          </ul>
          <hr />
          <h3>₹3,500<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
          <a href="#" class="main-btn">Book Now</a>
          </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-4 text-center rounded-3">
          <h5 class="text-decoration-underline mb-4">Economy Class</h5> <ul class="list-unstyled">
          <li>
          <p>Flight Ticket (4)</p>
          </li>
          <li>
          <p>Music Concert (45% Off)</p>
          </li>
          <li>
          <p>Restaurant (75% Off)</p>
          </li>
          <li>
          <p>Hotel (Free)</p>
          </li>
          </ul>
          <hr />
          <h3>₹5,000<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
          <a href="#" class="main-btn">Book Now</a>
          </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-4 text-center rounded-3">
          <h5 class="text-decoration-underline mb-4">Premium Economy Class</h5> <ul class="list-unstyled">
          <li>
          <p>Flight Ticket (6)</p>
          </li>
          <li>
          <p>Music Concert (50% Off)</p>
          </li>
          <li>
          <p>Restaurant (Free)</p>
          </li>
          <li>
          <p>Hotel (Free)</p>
          </li>
          </ul>
          <hr />
          <h3>₹6,000<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
          <a href="#" class="main-btn">Book Now</a>
          </div>
      </div>
    </div>
  </div>
</section>


<section id="blog" class="blog_wrapper pb-0">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h6>Say Hello to our recent visitors</h6>
        <h3>Our Blog</h3>   
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card p-0 border-0 rounded-0">
          <img src="images/blog/blog1.webp" alt="">
          <div class="blog-content bg-white p-4"> <h5 class="text-decoration-underline mb-4">5/5</h5> <h6>By Nikhil February 18, 2024</h6> <p class="mt-2">
            Very good website where we can book our trips in a very easier way.
          </p>
          <a href="#" class="main-btn mt-2">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card p-0 border-0 rounded-0">
          <img src="images/blog/blog2.webp" alt="">
          <div class="blog-content bg-white p-4"> <h5 class="text-decoration-underline mb-4">4/5</h5> <h6>By Somit Krishna March 21, 2024</h6> <p class="mt-2">
            Good and user friendly website, where can book our destination packages.
          </p>
          <a href="#" class="main-btn mt-2">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="our-partner-slider mt-5">
  <div class="container swiper our-partner">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="./images/partners/brand1.webp"></div>
      <div class="swiper-slide"><img src="./images/partners/brand2.webp"></div>
      <div class="swiper-slide"><img src="./images/partners/brand3.webp"></div>
      <div class="swiper-slide"><img src="./images/partners/brand4.webp"></div>
      <div class="swiper-slide"><img src="./images/partners/brand5.webp"></div>
      <div class="swiper-slide"><img src="./images/partners/brand6.webp"></div>
    </div>
  </div>
</div>

</section>
<?php include('footer.php'); ?>

