<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It Hub Center page</title>
    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assest/css/main.css">
<link rel="stylesheet" type="text/css" href="new_style.css">
</head>
<body>
<?php include 'navigation.php'; ?>            
<?php include 'includes\headline.php'; ?>
<section class="bio-section">
  <div class="bio-container">
    <img src="assest\download\team\2 (10).jpg" alt="Profile Picture" class="profile-img">
    <div class="bio-text">
      <h1 class="tagline">Hi, I'm Alex – Crafting Code, Building Dreams</h1>
      <p class="short-bio">Full-stack developer | Focused on elegant UI, powerful APIs, and scalable solutions.</p>
    </div>
  </div>
</section>


         <h2 class="section-title">Featured Work</h2>

  <div class="featured-grid">
    <div class="featured-item">
      <img src="assest\download\website\WebandDevelopment.jpg" alt="Project 1" />
      <div class="featured-content">
        <h3>Website Redesign</h3>
        <p>Modern and mobile-first layout with enhanced user experience.</p>
      </div>
    </div>

    <div class="featured-item">
      <img src="assest\download\CCTV camera\elements-of-a-security-system.webp" alt="Project 2" />
      <div class="featured-content">
        <h3>Security System</h3>
        <p>Clean and intuitive design for productivity tracking app.</p>
      </div>
    </div>

<div class="featured-item">
      <img src="assest\download\commputer\65-653452_laptop-and-desktop-repair-hd-png-download.png" alt="Project 2" />
      <div class="featured-content">
        <h3>Computer Repairing and sales</h3>
        <p>Clean and intuitive design for productivity tracking app.</p>
      </div>
    </div>

    <div class="featured-item">
      <img src="assest\download\house wiring\house_wiring2.jpg" alt="Project 3" />
      <div class="featured-content">
        <h3>Electrical wiring</h3>
        <p>Fully responsive and SEO-friendly online shopping experience.</p>
      </div>
    </div>
  </div>

<section class="portfolio-section">
  <div class="portfolio-header">
    <h2>My Work</h2>
    <p>Check out some of my recent projects.</p>
  </div>

  <div class="portfolio-grid">
    <div class="project-card">
      <img src="assest\download\home appliance\s-details-4.jpg" alt="Project 1">
      <h3>Project Title 1</h3>
      <p>Short description about the project.</p>
    </div>
    <div class="project-card">
      <img src="assest\download\home appliance\Fridge-repair-and-services-in-avadi.jpg" alt="Project 2">
      <h3>Project Title 2</h3>
      <p>Short description about the project.</p>
    </div>
    <div class="project-card">
      <img src="assest\download\website\d7rb1zc-4bf9c710-10ed-49a3-9f8c-6aa55f688393.jpg" alt="Project 3">
      <h3>Project Title 3</h3>
      <p>Short description about the project.</p>
    </div>
    <div class="project-card">
      <img src="assest\download\What-is-HTML.jpg" alt="Project 3">
      <h3>Project Title 4</h3>
      <p>Short description about the project.</p>
    </div>
  </div>

  <div class="portfolio-cta">
    <a href="portfolio.html" class="view-more-btn">View Full Portfolio</a>
  </div>
</section>

<section class="events-section">
  <div class="events-header">
    <h2>Upcoming Events</h2>
    <p>Join us for our upcoming events and stay ahead of the curve!</p>
  </div>

  <div class="events-grid">
    <div class="event-card">
      <h3>Tech Conference 2025</h3>

      <img src="assest\download\CCTV camera\download (1).jpeg" alt="Project 1" />
      <p class="event-date">May 10, 2025</p>
      <p class="event-description">An exciting tech conference featuring industry leaders and cutting-edge innovations.</p>
      <a href="#" class="event-btn">Learn More</a>
    </div>

    <div class="event-card">
      <h3>Design Workshop</h3>

      <img src="assest\download\commputer\computer-service-banner-1.jpg" alt="Project 1" />
      <p class="event-date">June 15, 2025</p>
      <p class="event-description">A hands-on workshop focusing on the latest design trends and tools.</p>
      <a href="#" class="event-btn">Learn More</a>
    </div>

    <div class="event-card">
      <h3>Startup Pitch Night</h3>

      <img src="assest\download\home appliance\Banner-5-1024x384.webp" alt="Project 1" />
      <p class="event-date">July 20, 2025</p>
      <p class="event-description">A pitch night where startups present their ideas to investors and experts.</p>
      <a href="#" class="event-btn">Learn More</a>
    </div>
  </div>
</section>
  
<?php include 'testimonies.php'; ?>

<div class="row">    

    <div class="column middle">
<form class="form">
    
    <div class="flex">
        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>first name</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>last name</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" required="">
        <span>email</span>
    </label> 
        
    <label>
        <input class="input" placeholder="" type="tel" required="">
        <span>contact number</span>
    </label>
    <label>
        <textarea class="input01" placeholder="" rows="3" required=""></textarea>
        <span>message</span>
    </label>
    
    <button href="#" class="fancy">
      <span class="top-key"></span>
      <span class="text1">submit</span>
      <span class="bottom-key-1"></span>
      <span class="bottom-key-2"></span>
    </button>
</form>


        </div>
    
    <div class="column side">
      <br>
    <iframe style="left: 0; width: 100%; height: 280px; position: relative;"
    src="https://www.google.com/maps?q=-1.9099,30.0849&hl=en&z=15&output=embed" 
    loading="lazy" 
    allowfullscreen>
  </iframe>
  
  <?php 
include 'includes\socialmedia.php'; ?>
         
              
  </div>
</div>

<?php include 'partners.php'; ?>

<?php include 'footer.php'; ?>
</body>
<script type="text/javascript">
  let slideIndex = 0;
showSlides(slideIndex);

function changeSlide(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    if (n >= slides.length) { slideIndex = 0; }
    if (n < 0) { slideIndex = slides.length - 1; }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
}

// Auto-slide every 3 seconds
setInterval(() => {
    changeSlide(1);
}, 4000);

</script>

</html>
