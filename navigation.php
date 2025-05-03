<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Navbar with Logo</title>
  <style>
    /* Navbar Container */
    .navbar {
      background-color: #000;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
      position: sticky;
      top: 3px;
      z-index: 1000;
    }

    /* Logo */
    .navbar .logo img {
      height: 40px;
      width: auto;
    }

    /* Nav Links */
    .nav-links {
      display: flex;
      gap: 10px;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      padding: 10px;
      transition: background 0.3s;
    }

    .nav-links a:hover {
      background-color: midnightblue;
      border-radius: 4px;
      color:white;
    }

    /* Hamburger Icon */
    .hamburger {
      display: none;
      font-size: 28px;
      color: white;
      cursor: pointer;
      background: none;
      border: none;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .nav-links {
        position: absolute;
        top: 60px;
        color: black;
        left: 0;
        right: 0;
        background-color:whitesmoke;
        flex-direction: column;
        display: none;

      height: 500px;
      width: 250px;
      overflow: scroll;
      }
   .nav-links a {
      color: black;
      text-decoration: none;
      padding: 10px;
      transition: background 0.3s;
    }
.nav-links a:hover {
      background-color: rgba(0, 0, 0, 1.0);
      border-radius: 4px;
      color: white;
    }
      .nav-links.show {
        display: flex;
      }

      .hamburger {
        display: block;
      }
    }
.social-mediatop {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  gap: 1rem;
}

/* Each embedded item */
.social-mediatop > div {
  flex: 1 1 200px; /* Flexible with min width 200px */
  height: auto;
}

/* Targeting the iframe container specifically */
.social-mediatop > div > div {
  width: 100%;
  height: 2px;
  position: relative;
  overflow: hidden;
}

.social-mediatop iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

/* Responsive adjustments for small screens */
@media (max-width: 600px) {
  .social-mediatop {
    flex-wrap: wrap;
    overflow-x: auto;
  }

  .social-mediatop > div {
    display: inline-block;
    width: auto;
    flex: 0 0 auto;
  }
}

  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">
      <a href="#"><img src="assest\download\logo\12.jpg" alt="Logo" /></a>
    </div>

    <button class="hamburger" onclick="toggleMenu()">☰</button>

    <div class="nav-links" id="navLinks">
      <a href="index.php">Home</a>
      <a href="web_service.php">WebApp</a>
      <a href="computer_service.php">Computer</a>
      <a href="network_service.php">Networking</a>
      <a href="house_wiring_service.php">House Wiring</a>
      <a href="home_appliance_service.php">Home Appliance</a>
      <a href="cctvcamera_service.php">CCTV camera</a>

      <a href="teammembers.php">Team members</a>
      <a href="aboutpage.php">About</a>
      <a href="contact.php">Contact</a>
    </div>
  </nav>

  <script>
    function toggleMenu() {
      document.getElementById('navLinks').classList.toggle('show');
    }
  </script>

</body>
</html>
