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

<?php include 'includes\networkheadline.php'; ?>  

<div class="row">    
        <div class="column middle">
  
  <section class="preview-section">

    <h3 class="tagline">All about Computer Networking services</h3>
    <div class="preview-grid">

      <div class="preview-card">
        <img src="assest\download\network\wifi-network.jpg" alt="Project 1" />
        <div class="preview-overlay">
          <h3>Portfolio Website</h3>
          <a href="project1-details.html" class="preview-link" target="_blank">View Study</a>
        </div>
      </div>

      <div class="preview-card">
        <img src="assest\download\network\Structured-Cabling-Solutions-for-your-Business-1-scaled.jpeg" alt="Project 2" />
        <div class="preview-overlay">
          <h3>E-Commerce Platform</h3>
          <a href="project2-details.html" class="preview-link" target="_blank">View Study</a>
        </div>
      </div>

<div class="preview-card">
        <img src="assest\download\network\it-services-network.jpg" alt="Project 2" />
        <div class="preview-overlay">
          <h3>E-Commerce Platform</h3>
          <a href="project2-details.html" class="preview-link" target="_blank">View Study</a>
        </div>
      </div>

      <div class="preview-card">
        <img src="assest\download\network\maxNetwork.jpg" alt="Project 3" />
        <div class="preview-overlay">
          <h3>Mobile App UI</h3>
          <a href="project3-details.html" class="preview-link" target="_blank">View Study</a>
        </div>
      </div>

    </div>
  </section>
  
<?php include 'includes\pricing.php'; ?> 
        </div>
    
    <div class="column side">
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
  <div class="accordion">
  <div class="accordion-item">
    <input type="checkbox" id="item1">
    <label for="item1" class="accordion-label">Section 1</label>
    <div class="accordion-content">
      <p>This is the content for section 1.</p>
    </div>
  </div>

  <div class="accordion-item">
    <input type="checkbox" id="item2">
    <label for="item2" class="accordion-label">Section 2</label>
    <div class="accordion-content">
      <p>This is the content for section 2.</p>
    </div>
  </div>

  <div class="accordion-item">
    <input type="checkbox" id="item3">
    <label for="item3" class="accordion-label">Section 3</label>
    <div class="accordion-content">
      <p>This is the content for section 3.</p>
    </div>
</div>   </div>
              
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
