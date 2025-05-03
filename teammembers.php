<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It Hub Center Service page</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assest/css/main.css">
<link rel="stylesheet" type="text/css" href="new_style.css">
</head>
  <style type="text/css">
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

.preview-section {
  max-width: 1200px;
  margin: auto;
  padding: 30px 20px;
  text-align: center;
}

.preview-section h1 {
  font-size: 2rem;
  margin-bottom: 30px;
  color: #005f73;
}

.preview-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}

.preview-card {
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.preview-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease, filter 0.4s ease;
}

.preview-card:hover img {
  transform: scale(1.05);
  filter: grayscale(50%) brightness(0.85);
}

.preview-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.6);
  color: white;
  opacity: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  transition: opacity 0.3s ease;
}

.preview-card:hover .preview-overlay {
  opacity: 1;
}

.preview-overlay h3 {
  font-size: 1.3rem;
  margin-bottom: 10px;
}

.preview-link {
  padding: 8px 16px;
  background-color: #00b4d8;
  color: white;
  text-decoration: none;
  border-radius: 6px;
  font-size: 0.95rem;
  transition: background 0.3s ease;
}

.preview-link:hover {
  background-color: #0077b6;
}

/* Responsive tweaks */
@media (max-width: 500px) {
  .preview-overlay h3 {
    font-size: 1.1rem;
  }

  .preview-link {
    font-size: 0.85rem;
    padding: 6px 12px;
  }
}

  </style>

<body>

<?php include 'navigation.php'; ?>

<?php include 'includes\ithubteamheadline.php'; ?>  


<h2 class="section-title">IT HUB CENTER LTD TEAM</h2>

<div class="featured-grid">
  <div class="featured-item">
    <img src="assest\download\team\2 (1).jpg" alt="Project 1" />
    <div class="featured-content">
      <h3>Website Redesign</h3>
      <p>Modern and mobile-first layout with enhanced user experience.</p>
    </div>
  </div>

  <div class="featured-item">
    <img src="assest\download\team\17027.jpg" alt="Project 2" />
    <div class="featured-content">
      <h3>Mobile App UI</h3>
      <p>Clean and intuitive design for productivity tracking app.</p>
    </div>
  </div>

<div class="featured-item">
    <img src="assest\download\team\27746.jpg" alt="Project 2" />
    <div class="featured-content">
      <h3>Mobile App UI</h3>
      <p>Clean and intuitive design for productivity tracking app.</p>
    </div>
  </div>

  <div class="featured-item">
    <img src="assest\download\team\17645.jpg" alt="Project 3" />
    <div class="featured-content">
      <h3>E-commerce Platform</h3>
      <p>Fully responsive and SEO-friendly online shopping experience.</p>
    </div>
  </div>
</div>


    <div class="footer">
      
 <?php include 'footer.php'; ?>
    </div>
<script>
    function showTab(index) {
      const contents = document.querySelectorAll('.tab-content');
      const buttons = document.querySelectorAll('.tab-btn');

      contents.forEach((content, i) => {
        content.classList.toggle('active', i === index);
        buttons[i].classList.toggle('active', i === index);
      });
    }
  </script>

</body>
</html>
