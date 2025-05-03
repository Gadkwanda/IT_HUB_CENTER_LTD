<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sliding Testimonials</title>
  <link rel="stylesheet" href="style.css" />
  <style type="text/css">
    body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #fdfdfd;
  color: #333;
  margin: 0;
  padding: 20px;
}

.testimonial-section {
  max-width: 1000px;
  margin: auto;
  text-align: center;
  padding: 40px 20px;
}

.testimonial-section h2 {
  font-size: 2rem;
  color: #023047;
  margin-bottom: 30px;
}

.slider {
  overflow: hidden;
  position: relative;
}

.slide-track {
  display: flex;
  width: calc(320px * 6); /* 3 items x 2 for loop */
  animation: scroll 20s linear infinite;
}

@keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

.slide1 {
  width: 320px;
  margin: 0 10px;
  flex-shrink: 0;
  background: #ffffff;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
  text-align: center;
}

.slide1 img {
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 50%;
  margin-bottom: 15px;
}

.slide1 p {
  font-size: 0.95rem;
  color: #555;
  margin-bottom: 10px;
}

.slide1 h4 {
  font-weight: 600;
  color: #006d77;
  font-size: 1rem;
}

@media (max-width: 600px) {
  .slide1 {
    width: 280px;
  }

  .slide-track {
    width: calc(280px * 6);
  }
}

  </style>
</head>
<body>
  <section class="testimonial-section">
    <h2>What People Say</h2>
    <div class="slider">
      <div class="slide-track">

        <div class="slide1">
        <img src="assest\download\team\27746.jpg" alt="Person 3" />
          <p>"This service exceeded all my expectations!"</p>
          <h4>- John Doe</h4>
        </div>

        <div class="slide1">
        <img src="assest\download\team\21511.jpg" alt="Person 2" />
          <p>"Absolutely brilliant experience working with this team."</p>
          <h4>- Sarah Lee</h4>
        </div>

        <div class="slide1">
        <img src="assest\download\team\17645.jpg" alt="Person 1" />
          <p>"Highly recommend for any creative projects!"</p>
          <h4>- Michael Kim</h4>
        </div>

        <!-- Duplicate for seamless loop -->
        <div class="slide1">
        <img src="assest\download\team\16663.jpg" alt="Person 1" />
          <p>"This service exceeded all my expectations!"</p>
          <h4>- John Doe</h4>
        </div>

        <div class="slide1">
        <img src="assest\download\team\17027.jpg" alt="Person 3" />
          <p>"Absolutely brilliant experience working with this team."</p>
          <h4>- Sarah Lee</h4>
        </div>

        <div class="slide1">
        <img src="assest\download\team\19918.jpg" alt="Person 2" />
          <p>"Highly recommend for any creative projects!"</p>
          <h4>- Michael Kim</h4>
        </div>

      </div>
    </div>
  </section>
</body>
</html>