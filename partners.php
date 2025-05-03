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

.slide2 {
  width: 200px;
  flex-shrink: 0;
  padding: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.slide2 img {
  max-width: 100%;
  height: 80px;
  object-fit: contain;
  filter: grayscale(100%);
  transition: filter 0.3s ease;
}

.slide2 img:hover {
  filter: none;
}

@keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

/* Responsive tweaks */
@media (max-width: 600px) {
  .slide2 {
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

        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 1" /></div>
        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 2" /></div>
        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 3" /></div>
        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 4" /></div>
        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 5" /></div>
        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 6" /></div>

        <!-- Duplicate for smooth loop -->
        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 1" /></div>
        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 2" /></div>
        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 3" /></div>
        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 4" /></div>
        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 5" /></div>
        <div class="slide2"><img src="assest\download\CCTV camera\CCTV_KURUNEGALA_cctv_kurunegala_01.png" alt="Partner 6" /></div>

      </div>
    </div>
  </section>
</body>
</html>
