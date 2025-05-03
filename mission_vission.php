
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Team Background Slider</title>
  <style>
    .team-slider-container {
      max-width: 100%;
      margin: auto;
      position: relative;
      overflow: hidden;
    }

    .team-slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .team-card {
      flex: 0 0 300px;
      margin: 0 5px;
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    }

    .team-card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .team-card-content {
      padding: 20px;
    }

    .team-card h3 {
      font-size: 1.2rem;
      color: #0077b6;
      margin-bottom: 10px;
    }

    .team-card p {
      font-size: 0.95rem;
      color: #444;
      line-height: 1.4;
    }

    .slider-buttons {
      text-align: center;
      margin-top: 20px;
    }

    .slider-buttons button {
      padding: 10px 20px;
      margin: 0 10px;
      font-size: 1rem;
      border: none;
      background-color: #0077b6;
      color: #fff;
      cursor: pointer;
      border-radius: 6px;
      transition: background 0.3s;
    }

    .slider-buttons button:hover {
      background-color: #023e8a;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .team-card {
        width: 100%;
        flex: 0 0 50%;
      }
    }

    @media (max-width: 568px) {
      .team-card {
        width: 100%;
        flex: 0 0 50%;
      }
    }

.team-slider-container h2 {
  font-size: 2rem;
  color: #023047;
  text-align: center;
  margin-bottom: 3px;
}
  </style>
</head>
<body>

  <section class="team-slider-container">

    <h2>IT HUB CENTER Ltd TEAM</h2>
    <div class="team-slider" id="slider">

      <div class="team-card">
      <img src="assest\download\team\16663.jpg" alt="Person 1" />
        <div class="team-card-content">
          <h3>Alice Johnson</h3>
          <p>Full-Stack Developer with 6+ years experience in Python, Django, and React. Passionate about scalable web apps and UX.</p>
        </div>
        
      </div>
      <div class="team-card">
      <img src="assest\download\team\19918.jpg" alt="Person 2" />
        <div class="team-card-content">
          <h3>Mark Lee</h3>
          <p>DevOps Engineer skilled in AWS, Docker, Kubernetes. Focused on CI/CD and cloud-native architectures.</p>
        </div>
      </div>
      <div class="team-card">
      <img src="assest\download\team\17027.jpg" alt="Person 3" />
        <div class="team-card-content">
          <h3>Sophia Gomez</h3>
          <p>Front-End Specialist with a love for clean UI. Expert in HTML, CSS, JS, and Vue.js. Accessibility advocate.</p>
        </div>
      </div>
      <!-- Add more members here --> 
        <div class="team-card">
        <img src="assest\download\team\17645.jpg" alt="Person 1" />
        <div class="team-card-content">
          <h3>Sophia Gomez</h3>
          <p>Front-End Specialist with a love for clean UI. Expert in HTML, CSS, JS, and Vue.js. Accessibility advocate.</p>
        </div>
      </div>
         <div class="team-card">
         <img src="assest\download\team\21511.jpg" alt="Person 2" />
        <div class="team-card-content">
          <h3>Sophia Gomez</h3>
          <p>Front-End Specialist with a love for clean UI. Expert in HTML, CSS, JS, and Vue.js. Accessibility advocate.</p>
        </div>
      </div>
         <div class="team-card">
         <img src="assest\download\team\27746.jpg" alt="Person 3" />
        <div class="team-card-content">
          <h3>Sophia Gomez</h3>
          <p>Front-End Specialist with a love for clean UI. Expert in HTML, CSS, JS, and Vue.js. Accessibility advocate.</p>
        </div>
      </div>
    </div>

    <div class="slider-buttons">
      <button onclick="slide(-1)">← Prev</button>
      <button onclick="slide(1)">Next →</button>
    </div>
  </section>

  <script>
    let scrollPosition = 0;
    const slider = document.getElementById('slider');
    const cardWidth = 320; // including margin

    function slide(direction) {
      scrollPosition += direction * cardWidth;
      const maxScroll = slider.scrollWidth - slider.clientWidth;
      scrollPosition = Math.max(0, Math.min(scrollPosition, maxScroll));
      slider.style.transform = `translateX(-${scrollPosition}px)`;
    }
  </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mission, Vision & Values</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f9f9;
      color: #333;
      padding: 20px;
    }

    .mv-container {
      max-width: 100%;
      margin: auto;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .mv-content {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-start;
      gap: 20px;
    }

    .mv-photo {
      flex: 1 1 300px;
      min-width: 250px;
      max-width: 400px;
    }

    .mv-photo img {
      width: 100%;
      height: auto;
      object-fit: cover;
      display: block;
      border-radius: 8px;
    }

    .mv-text {
      flex: 2 1 500px;
      padding: 10px 20px;
    }

    .mv-block {
      margin-bottom: 20px;
    }

    .mv-block h2 {
      font-size: 1.6rem;
      color: #005f73;
      margin-bottom: 10px;
    }

    .mv-block p,
    .mv-block ul {
      font-size: 1rem;
      line-height: 1.6;
      color: #444;
    }

    .mv-block ul {
      padding-left: 20px;
    }

    .mv-block li {
      margin-bottom: 8px;
    }

    /* Responsive layout */
    @media (max-width: 768px) {
      .mv-content {
        flex-direction: column;
      }

      .mv-text {
        padding: 20px;
      }

      .mv-block h2 {
        font-size: 1.4rem;
      }
    }
  </style>
</head>
<body>
  <section class="mv-container">
    <div class="mv-content">
      <div class="mv-photo">
        <img src="assest\download\logo\12.jpg" alt="Company Photo" />
      </div>
      <div class="mv-text">
        <div class="mv-block">
          <h2>Our Mission</h2>
          <p>To empower businesses through innovative technology solutions that drive sustainable growth and meaningful impact.</p>
        </div>
        <div class="mv-block">
          <h2>Our Vision</h2>
          <p>To be a global leader in tech-driven transformation, known for excellence, creativity, and trust.</p>
        </div>
        <!--<div class="mv-block">
          <h2>Our Values</h2>
          <ul>
            <li>Integrity in every action</li>
            <li>Innovation through collaboration</li>
            <li>Commitment to quality</li>
            <li>Customer-first mindset</li>
          </ul>
        </div>-->
      </div>
    </div>
  </section>
</body>
</html>