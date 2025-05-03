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

<?php include 'includes\aboutusheadline.php'; ?>
<section class="bio-section">
  <div class="bio-container">
    <img src="assest\download\team\2 (1).jpg" alt="Profile Picture" class="profile-img">
    <div class="bio-text">
      <h1 class="tagline">Hi, I'm Alex – Crafting Code, Building Dreams</h1>
      <p class="short-bio">
          A dedicated developer with 5+ years of experience building dynamic web applications. Skilled in both frontend and backend technologies including React, Node.js, Django, and SQL databases.
        </p>
        
    </div>
  </div>
</section>

 
<?php include 'mission_vission.php'; ?>
  
<?php include 'team.php'; ?>


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
