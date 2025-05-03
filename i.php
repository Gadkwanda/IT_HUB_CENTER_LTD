<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive Gallery</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 15px;
      padding: 20px;
      max-width: 1200px;
      margin: auto;
    }

    .gallery img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      transition: transform 0.3s ease;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .gallery img:hover {
      transform: scale(1.05);
    }

    @media (max-width: 600px) {
      .gallery {
        display:inline-block;
        padding: 10px;
        gap: 10px;
      }
    }
  </style>
</head>
<body>

  <h2 style="text-align:center; padding-top: 20px;">Responsive Image Gallery</h2>

  <div class="gallery">
    <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Image 1">
    <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Image 2">
    <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Image 3">
    <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Image 4">
    <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Image 5">
    <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Image 6">
    <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Image 5">
    <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Image 6">
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Featured Work</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
    }

    .section-title {
      text-align: center;
      margin-bottom: 40px;
      font-size: 2rem;
      color: #333;
    }

    .featured-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 2fr));
      gap: 10px;
    }

    .featured-item {
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .featured-item:hover {
      transform: translateY(-5px);
    }

    .featured-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .featured-content {
      padding: 15px;
    }

    .featured-content h3 {
      margin-bottom: 10px;
      color: #222;
    }

    .featured-content p {
      font-size: 0.95rem;
      color: #555;
    }

    @media (max-width: 600px) {
      .featured-content h3 {
        font-size: 1.2rem;
      }

      .featured-content p {
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>

  <h2 class="section-title">Featured Work</h2>

  <div class="featured-grid">
    <div class="featured-item">
      <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 1" />
      <div class="featured-content">
        <h3>Website Redesign</h3>
        <p>Modern and mobile-first layout with enhanced user experience.</p>
      </div>
    </div>

    <div class="featured-item">
      <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 2" />
      <div class="featured-content">
        <h3>Mobile App UI</h3>
        <p>Clean and intuitive design for productivity tracking app.</p>
      </div>
    </div>

    <div class="featured-item">
      <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 3" />
      <div class="featured-content">
        <h3>E-commerce Platform</h3>
        <p>Fully responsive and SEO-friendly online shopping experience.</p>
      </div>
    </div>
  </div>

</body>
</html>

<hr>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Short Story & Background</title>
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  line-height: 1.6;
  background: #f5f7fa;
  color: #333;
  padding: 20px;
}

.container {
  max-width: 900px;
  margin: auto;
  padding: 20px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.profile-section {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  align-items: center;
  margin-bottom: 30px;
}

.profile-photo {
  width: 150px;
  height: 150px;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.text-content h1 {
  font-size: 2rem;
  color: #222;
}

.text-content h2 {
  font-size: 1.2rem;
  color: #777;
  margin: 5px 0 10px;
}

.text-content .background {
  font-size: 1rem;
  color: #444;
}

.story-section h2 {
  font-size: 1.5rem;
  margin-bottom: 10px;
  color: #333;
}

.story-section p {
  font-size: 1rem;
  color: #555;
}

/* Responsive */
@media (max-width: 600px) {
  .profile-section {
    flex-direction: column;
    align-items: flex-start;
  }

  .profile-photo {
    width: 100px;
    height: 100px;
  }

  .text-content h1 {
    font-size: 1.5rem;
  }

  .story-section h2 {
    font-size: 1.3rem;
  }
}

  </style>
</head>
<body>
  <div class="container">
    <div class="profile-section">
      <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Profile Photo" class="profile-photo">
      <div class="text-content">
        <h1>Jane Doe</h1>
        <h2>Writer & Creative Thinker</h2>
        <p class="background">
          Jane is a passionate storyteller with a knack for weaving emotion and depth into every tale.
          With a background in literature and digital media, she blends traditional narrative with modern themes.
        </p>
      </div>
    </div>

    <div class="story-section">
      <h2>Short Story: *The Last Light*</h2>
      <p>
        As the sun dipped behind the hills, Clara stood by the old lighthouse. It had been years since she’d last visited,
        yet the scent of salt and memory lingered like a familiar song. This was where it all began—and tonight, where it would end.
      </p>
    </div>
  </div>
</body>
</html>
<br>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Professional Background</title>
  <link rel="stylesheet" href="style.css" />
  <style type="text/css">
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f0f4f8;
  padding: 20px;
  color: #333;
}

.container {
  max-width: 900px;
  margin: auto;
}

.profile-card {
  background-color: #fff;
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-wrap: wrap;
  padding: 20px;
  gap: 20px;
  align-items: center;
}

.profile-img {
  width: 180px;
  height: 180px;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.info {
  flex: 1;
}

.info h1 {
  font-size: 2rem;
  color: #222;
}

.info h2 {
  font-size: 1.2rem;
  color: #666;
  margin-bottom: 10px;
}

.info p {
  font-size: 1rem;
  margin-bottom: 15px;
  color: #444;
}

.skills h3 {
  font-size: 1.1rem;
  margin-bottom: 8px;
}

.skills ul {
  list-style: disc;
  padding-left: 20px;
}

.skills li {
  margin-bottom: 5px;
  font-size: 0.95rem;
  color: #555;
}

/* Responsive Design */
@media (max-width: 600px) {
  .profile-card {
    flex-direction: column;
    align-items: flex-start;
  }

  .profile-img {
    width: 120px;
    height: 120px;
  }

  .info h1 {
    font-size: 1.5rem;
  }
}

  </style>
</head>
<body>
  <div class="container">
    <div class="profile-card">
      <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Profile Photo" class="profile-img" />
      <div class="info">
        <h1>John Smith</h1>
        <h2>Full Stack Developer</h2>
        <p>
          A dedicated developer with 5+ years of experience building dynamic web applications. Skilled in both frontend and backend technologies including React, Node.js, Django, and SQL databases.
        </p>
        <div class="skills">
          <h3>Key Skills:</h3>
          <ul>
            <li>JavaScript / React / Vue</li>
            <li>Node.js / Express</li>
            <li>Python / Django</li>
            <li>MySQL / MongoDB</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<hr>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mission, Vision & Values</title>
  <link rel="stylesheet" href="style.css" />
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

.mv-container {
  max-width: 1100px;
  margin: auto;
  background-color: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.mv-content {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}

.mv-photo {
  flex: 1 1 300px;
  min-width: 250px;
}

.mv-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.mv-text {
  flex: 2 1 500px;
  padding: 20px 30px;
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

/* Responsive */
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
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Company Photo" />
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
        <div class="mv-block">
          <h2>Our Values</h2>
          <ul>
            <li>Integrity in every action</li>
            <li>Innovation through collaboration</li>
            <li>Commitment to quality</li>
            <li>Customer-first mindset</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
<hr>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portfolio Showcase</title>
  <link rel="stylesheet" href="style.css" />
  <style type="text/css">
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f4f7fa;
  padding: 20px;
  color: #333;
}

.showcase {
  max-width: 1000px;
  margin: auto;
  padding: 30px;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
}

.project-card {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  align-items: center;
}

.project-img {
  flex: 1 1 300px;
  max-width: 100%;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.project-details {
  flex: 2 1 400px;
}

.project-details h2 {
  font-size: 1.8rem;
  margin-bottom: 10px;
  color: #0077b6;
}

.project-details p {
  font-size: 1rem;
  margin-bottom: 15px;
  color: #444;
}

.view-btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #0077b6;
  color: #fff;
  text-decoration: none;
  border-radius: 8px;
  transition: background 0.3s ease;
}

.view-btn:hover {
  background-color: #023e8a;
}

/* Responsive */
@media (max-width: 768px) {
  .project-card {
    flex-direction: column;
    text-align: center;
  }

  .project-details h2 {
    font-size: 1.5rem;
  }

  .view-btn {
    margin-top: 10px;
  }
}

  </style>
</head>
<body>
  <section class="showcase">
    <div class="project-card">
      <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Best Work Screenshot" class="project-img" />
      <div class="project-details">
        <h2>Creative Portfolio Website</h2>
        <p>
          A modern, responsive website built to showcase personal projects, blogs, and design work.
          Includes animations, a dynamic gallery, and a contact form.
        </p>
        <a href="https://example.com" class="view-btn" target="_blank">View Project</a>
      </div>
    </div>
       <div class="project-card">
      <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Best Work Screenshot" class="project-img" />
      <div class="project-details">
        <h2>Creative Portfolio Website</h2>
        <p>
          A modern, responsive website built to showcase personal projects, blogs, and design work.
          Includes animations, a dynamic gallery, and a contact form.
        </p>
        <a href="https://example.com" class="view-btn" target="_blank">View Project</a>
      </div>
    </div>
  </section>
</body>
</html>

<hr>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Best Work Showcase</title>
  <link rel="stylesheet" href="style.css" />

  <style type="text/css">
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f2f5f9;
  padding: 20px;
  color: #333;
}

.portfolio-section {
  max-width: 1200px;
  margin: auto;
  padding: 20px;
}

.portfolio-section h1 {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 30px;
  color: #005f73;
}

.portfolio-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}

.work-card {
  background-color: #fff;
  border-radius: 12px;
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
  overflow: hidden;
  transition: transform 0.3s ease;
}

.work-card:hover {
  transform: translateY(-5px);
}

.work-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}

.work-info {
  padding: 15px 20px;
}

.work-info h2 {
  font-size: 1.2rem;
  color: #0077b6;
  margin-bottom: 8px;
}

.work-info p {
  font-size: 0.95rem;
  color: #444;
}

/* Responsive tweaks if needed */
@media (max-width: 500px) {
  .work-info h2 {
    font-size: 1rem;
  }

  .work-info p {
    font-size: 0.9rem;
  }
}

  </style>
</head>
<body>
  <section class="portfolio-section">
    <h1>My Best Work</h1>
    <div class="portfolio-grid">
      
      <div class="work-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 1" />
        <div class="work-info">
          <h2>Portfolio Website</h2>
          <p>Responsive portfolio site built with HTML, CSS, and JavaScript.</p>
        </div>
      </div>

      <div class="work-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 2" />
        <div class="work-info">
          <h2>E-commerce App</h2>
          <p>Full-stack app using React and Node.js for a shopping experience.</p>
        </div>
      </div>

      <div class="work-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 3" />
        <div class="work-info">
          <h2>Blog Platform</h2>
          <p>Minimal blog platform powered by Django and PostgreSQL.</p>
        </div>
      </div>

    </div>
  </section>
</body>
</html>
<hr>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Project Thumbnails</title>
  <link rel="stylesheet" href="style.css" />
  <style type="text/css">
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f4f4f4;
  color: #333;
  padding: 20px;
}

.gallery-section {
  max-width: 1200px;
  margin: auto;
  padding: 20px;
  text-align: center;
}

.gallery-section h1 {
  font-size: 2rem;
  margin-bottom: 30px;
  color: #005f73;
}

.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}

.thumb-card {
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
}

.thumb-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease, filter 0.5s ease;
}

.thumb-card:hover img {
  filter: grayscale(60%) brightness(0.8);
  transform: scale(1.05);
}

.overlay {
  position: absolute;
  bottom: 0;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  width: 100%;
  padding: 10px 0;
  text-align: center;
  transition: 0.3s ease;
  transform: translateY(100%);
}

.thumb-card:hover .overlay {
  transform: translateY(0);
}

.overlay h3 {
  font-size: 1.1rem;
  margin: 0;
}

  </style>
</head>
<body>
  <section class="gallery-section">
    <h1>Project Previews</h1>
    <div class="gallery-grid">

      <div class="thumb-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 1" />
        <div class="overlay">
          <h3>Creative Landing Page</h3>
        </div>
      </div>

      <div class="thumb-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 2" />
        <div class="overlay">
          <h3>Business Dashboard</h3>
        </div>
      </div>

      <div class="thumb-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 3" />
        <div class="overlay">
          <h3>Mobile App UI</h3>
        </div>
      </div>

    </div>
  </section>
</body>
</html>
<hr>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Project Previews</title>
  <link rel="stylesheet" href="style.css" />
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
</head>
<body>
  <section class="preview-section">
    <h1>Project Thumbnails</h1>
    <div class="preview-grid">

      <div class="preview-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 1" />
        <div class="preview-overlay">
          <h3>Portfolio Website</h3>
          <a href="project1-details.html" class="preview-link" target="_blank">View Study</a>
        </div>
      </div>

      <div class="preview-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 2" />
        <div class="preview-overlay">
          <h3>E-Commerce Platform</h3>
          <a href="project2-details.html" class="preview-link" target="_blank">View Study</a>
        </div>
      </div>

      <div class="preview-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 3" />
        <div class="preview-overlay">
          <h3>Mobile App UI</h3>
          <a href="project3-details.html" class="preview-link" target="_blank">View Study</a>
        </div>
      </div>

    </div>
  </section>
</body>
</html>
<br>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Project Gallery with Calendar</title>
  <link rel="stylesheet" href="style.css" />
  <style type="text/css">
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f2f2f2;
  color: #333;
  padding: 20px;
}

.project-gallery {
  max-width: 1200px;
  margin: auto;
  padding: 30px 20px;
  text-align: center;
}

.project-gallery h1 {
  font-size: 2.2rem;
  margin-bottom: 40px;
  color: #023047;
}

.project-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}

.project-card {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
}

.project-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  transition: transform 0.4s ease, filter 0.4s ease;
}

.project-card:hover img {
  filter: grayscale(60%) brightness(0.8);
  transform: scale(1.05);
}

.card-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.6);
  opacity: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  transition: opacity 0.4s ease;
  gap: 10px;
}

.project-card:hover .card-overlay {
  opacity: 1;
}

.card-overlay h3 {
  color: #fff;
  font-size: 1.3rem;
}

.btn {
  padding: 8px 16px;
  background-color: #00b4d8;
  color: #fff;
  text-decoration: none;
  border-radius: 6px;
  font-size: 0.95rem;
  transition: background 0.3s ease;
}

.btn:hover {
  background-color: #0077b6;
}

.btn.secondary {
  background-color: #219ebc;
}

.btn.secondary:hover {
  background-color: #126782;
}

/* Responsive tweaks */
@media (max-width: 500px) {
  .card-overlay h3 {
    font-size: 1.1rem;
  }

  .btn {
    font-size: 0.85rem;
    padding: 6px 12px;
  }
}

  </style>
</head>
<body>
  <section class="project-gallery">
    <h1>My Projects</h1>
    <div class="project-grid">

      <div class="project-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 1" />
        <div class="card-overlay">
          <h3>Landing Page</h3>
          <a href="project1-details.html" class="btn" target="_blank">View Study</a>
          <a href="https://calendar.google.com" class="btn secondary" target="_blank">Book Calendar</a>
        </div>
      </div>

      <div class="project-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 2" />
        <div class="card-overlay">
          <h3>Online Store</h3>
          <a href="project2-details.html" class="btn" target="_blank">View Study</a>
          <a href="https://calendar.google.com" class="btn secondary" target="_blank">Book Calendar</a>
        </div>
      </div>

      <div class="project-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Project 3" />
        <div class="card-overlay">
          <h3>App Dashboard</h3>
          <a href="project3-details.html" class="btn" target="_blank">View Study</a>
          <a href="https://calendar.google.com" class="btn secondary" target="_blank">Book Calendar</a>
        </div>
      </div>

    </div>
  </section>
</body>
</html>
<hr>
<br>
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
          <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Person 1" />
          <p>"This service exceeded all my expectations!"</p>
          <h4>- John Doe</h4>
        </div>

        <div class="slide1">
          <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Person 2" />
          <p>"Absolutely brilliant experience working with this team."</p>
          <h4>- Sarah Lee</h4>
        </div>

        <div class="slide1">
          <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Person 3" />
          <p>"Highly recommend for any creative projects!"</p>
          <h4>- Michael Kim</h4>
        </div>

        <!-- Duplicate for seamless loop -->
        <div class="slide1">
          <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Person 1" />
          <p>"This service exceeded all my expectations!"</p>
          <h4>- John Doe</h4>
        </div>

        <div class="slide1">
          <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Person 2" />
          <p>"Absolutely brilliant experience working with this team."</p>
          <h4>- Sarah Lee</h4>
        </div>

        <div class="slide1">
          <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Person 3" />
          <p>"Highly recommend for any creative projects!"</p>
          <h4>- Michael Kim</h4>
        </div>

      </div>
    </div>
  </section>
</body>
</html>
<hr>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Event Recap List</title>
  <link rel="stylesheet" href="style.css" />
  <style type="text/css">
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f7f7f7;
  padding: 20px;
  color: #333;
}

.event-recap-section {
  max-width: 1100px;
  margin: auto;
  padding: 40px 20px;
}

.event-recap-section h2 {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 40px;
  color: #023047;
}

.event-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 25px;
}

.event-card {
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  transition: transform 0.3s ease;
}

.event-card:hover {
  transform: translateY(-5px);
}

.event-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.event-content {
  padding: 20px;
}

.event-content h3 {
  font-size: 1.3rem;
  color: #0077b6;
  margin-bottom: 10px;
}

.event-date {
  font-size: 0.9rem;
  color: #555;
  display: block;
  margin-bottom: 10px;
}

.event-content p {
  font-size: 0.95rem;
  color: #444;
  line-height: 1.5;
}

@media (max-width: 600px) {
  .event-card img {
    height: 180px;
  }
}

  </style>
</head>
<body>
  <section class="event-recap-section">
    <h2>Event Recaps</h2>
    <div class="event-list">

      <div class="event-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Tech Summit 2024">
        <div class="event-content">
          <h3>Tech Summit 2024</h3>
          <span class="event-date">March 10, 2024</span>
          <p>An inspiring day of innovation, featuring talks from top developers and startups.</p>
        </div>
      </div>

      <div class="event-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Design Conference">
        <div class="event-content">
          <h3>Creative Design Conference</h3>
          <span class="event-date">February 5, 2024</span>
          <p>A creative space filled with design thinkers, workshops, and interactive exhibitions.</p>
        </div>
      </div>

      <div class="event-card">
        <img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="AI Workshop">
        <div class="event-content">
          <h3>AI in Action Workshop</h3>
          <span class="event-date">January 18, 2024</span>
          <p>Hands-on AI training sessions with real-world use cases and expert mentors.</p>
        </div>
      </div>

    </div>
  </section>
</body>
</html>
<hr>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sliding Partners</title>
  <link rel="stylesheet" href="style.css" />
  <style type="text/css">
    body {
  font-family: 'Segoe UI', sans-serif;
  margin: 0;
  background: #f9f9f9;
  color: #333;
  padding: 20px;
}

.partners-section {
  text-align: center;
  padding: 40px 20px;
  background: #fff;
}

.partners-section h2 {
  font-size: 2rem;
  margin-bottom: 30px;
  color: #023047;
}

.slider {
  overflow: hidden;
  position: relative;
}

.slide-track {
  display: flex;
  width: calc(200px * 12); /* 6 original + 6 clones */
  animation: scroll 30s linear infinite;
}

.slide {
  width: 200px;
  flex-shrink: 0;
  padding: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.slide img {
  max-width: 100%;
  height: 80px;
  object-fit: contain;
  filter: grayscale(100%);
  transition: filter 0.3s ease;
}

.slide img:hover {
  filter: none;
}

@keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

/* Responsive tweaks */
@media (max-width: 600px) {
  .slide {
    width: 150px;
  }
  .slide-track {
    width: calc(150px * 12);
  }
}

  </style>
</head>
<body>
  <section class="partners-section">
    <h2>Our Partners</h2>
    <div class="slider">
      <div class="slide-track">

        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 1" /></div>
        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 2" /></div>
        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 3" /></div>
        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 4" /></div>
        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 5" /></div>
        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 6" /></div>

        <!-- Duplicate for smooth loop -->
        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 1" /></div>
        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 2" /></div>
        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 3" /></div>
        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 4" /></div>
        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 5" /></div>
        <div class="slide"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 6" /></div>

      </div>
    </div>
  </section>
</body>
</html>
<hr>
<br>
