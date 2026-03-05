<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deco Nodic – Art Deco Interior Design Studio</title>
  <link rel="icon" href="favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --bs-primary: hsl(216, 77%, 49%);
      --bs-primary-light: hsl(216, 67%, 69%);
      --bs-primary-dark: hsl(216, 78%, 34%);
      --bs-secondary: hsl(246, 58%, 49%);
      --bs-accent: hsl(37, 77%, 54%);
      --bs-background-base: hsl(0, 0%, 100%);
      --bs-background-offset: hsl(210, 20%, 98%);
      --bs-text-color: hsl(210, 11%, 15%);
      --bs-font-sans-serif: 'Montserrat', sans-serif;
      --bs-border-radius-2xl: 24px; /* Custom variable for 24px border radius */
    }

    body {
      font-family: var(--bs-font-sans-serif);
      color: var(--bs-text-color);
      background-color: var(--bs-background-base);
    }

    h1, h2, h3, h4, h5, h6 {
      font-weight: 600;
    }

    .section-spacing {
      padding-top: 5rem;
      padding-bottom: 5rem;
    }

    .rounded-2xl {
      border-radius: var(--bs-border-radius-2xl) !important;
    }

    .shadow-dramatic {
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2) !important;
    }

    .hover-translateY-large:hover {
      transform: translateY(-12px);
      transition: transform 0.3s ease-in-out;
    }

    /* Hero section gradient */
    .hero-gradient-bg {
      background: linear-gradient(135deg, var(--bs-primary), var(--bs-secondary));
    }

    /* Hexagon clip-path */
    .hexagon-clip {
      clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
      background-color: var(--bs-primary-light) !important; /* Ensuring contrast with icons */
      display: flex;
      justify-content: center;
      align-items: center;
      width: 64px; /* Example size for icons */
      height: 64px;
    }
    
    .hexagon-clip svg {
        fill: var(--bs-background-base); /* White icons on colored background */
    }

    /* Navbar on scroll effect */
    .navbar-transparent {
      background-color: transparent !important;
      transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .navbar-scrolled {
      background-color: var(--bs-background-base) !important;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      border-radius: var(--bs-border-radius-2xl) !important;
    }
    
    /* Footer contrast */
    footer {
        background-color: hsl(210, 11%, 15%); /* Dark background */
        color: hsl(0, 0%, 100%); /* Light text */
    }
    
    footer a {
        color: hsl(190, 48%, 78%); /* Lighter link color for contrast */
        text-decoration: none;
    }

    footer a:hover {
        color: hsl(190, 48%, 90%);
        text-decoration: underline;
    }

    /* Ensure outline buttons have contrast on various backgrounds */
    .btn-outline-primary {
      color: var(--bs-primary);
      border-color: var(--bs-primary);
    }
    .btn-outline-primary:hover {
      background-color: var(--bs-primary);
      color: var(--bs-background-base);
      border-color: var(--bs-primary);
    }

    /* Ensure specific elements maintain contrast, e.g., hero text */
    .hero-content h1, .hero-content p, .hero-content .btn {
      color: var(--bs-background-base); /* White text on dark/gradient hero */
    }
    .hero-content .btn-outline-primary {
        color: var(--bs-background-base);
        border-color: var(--bs-background-base);
    }
    .hero-content .btn-outline-primary:hover {
        background-color: var(--bs-background-base);
        color: var(--bs-primary);
        border-color: var(--bs-background-base);
    }

    /* Accessibility: Reduced motion */
    @media (prefers-reduced-motion: reduce) {
      .hover-translateY-large:hover, .navbar-transparent {
        transition: none !important;
        transform: none !important;
      }
    }

  </style>
</head>
<body>
  <header>
    <nav id="nav-main" class="navbar navbar-expand-lg fixed-top py-3 navbar-transparent">
      <div class="container">
        <a class="navbar-brand text-white fw-bold fs-4" href="#">Deco Nodic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#expertise">Expertise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#testimonials">Testimonials</a>
            </li>
          </ul>
          <a class="btn btn-outline-light ms-lg-3 hover-translateY-large" href="#booking">Book Consultation</a>
        </div>
      </div>
    </nav>
  </header>
<main>
    
    <section id="home" class="hero-gradient-bg d-flex align-items-center min-vh-100">
      <div class="container py-5">
        <div class="row align-items-center flex-column-reverse flex-lg-row">
          <div class="col-12 col-lg-6 text-center text-lg-start hero-content mb-5 mb-lg-0">
            <h1 class="display-3 fw-bold mb-4">Art Deco Elegance Reimagined by Deco Nodic</h1>
            <p class="lead mb-5 fs-5">Bespoke interior design, custom furniture, and architectural detailing for the modern connoisseur.</p>
            <a class="btn btn-outline-light btn-lg px-4 hover-translateY-large" href="#portfolio">Explore Portfolio</a>
          </div>
          <div class="col-12 col-lg-6 text-center mb-5">
            <img src="images/hero-art-deco-living-room-1024x640.jpeg" class="img-fluid rounded-2xl shadow-dramatic" alt="Luxurious Art Deco living room design by Deco Nodic" width="1024" height="640">
          </div>
        </div>
      </div>
    </section>

    
    <section id="about" class="section-spacing bg-white">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8 text-center">
            <h2 class="display-5 fw-bold mb-4">The Deco Nodic Philosophy</h2>
            <p class="lead fs-5 lh-base">
              At Deco Nodic, we believe that true luxury lies in the details. Drawing inspiration from the golden age of Art Deco, we blend geometric precision, opulent materials, and modern minimalist principles to create timeless spaces. Our commitment is to crafting environments that are not only visually stunning but also deeply resonant with the aspirations of our discerning clientele. Every project is a unique journey, meticulously designed to reflect unparalleled sophistication and enduring beauty.
            </p>
          </div>
        </div>
      </div>
    </section>

    
    <section id="expertise" class="section-spacing bg-light">
      <div class="container py-5">
        <h2 class="display-5 fw-bold text-center mb-5">Our Expertise Refined</h2>
        <div class="row g-4">
          
          <div class="col-12 col-md-6">
            <div class="card h-100 p-4 rounded-2xl shadow-dramatic hover-translateY-large">
              <div class="card-body text-center">
                <div class="hexagon-clip mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M12 2L2 7V17L12 22L22 17V7L12 2ZM12 4L20 8V16L12 20L4 16V8L12 4ZM12 7.7L17 10L12 12.3L7 10L12 7.7Z"/></svg>
                </div>
                <h3 class="card-title fw-bold">Art Deco Interior Design</h3>
                <p class="card-text text-secondary">Comprehensive design schemes capturing the luxurious essence of the 1920s with a discerning modern twist. From conceptualization to final touches, we create cohesive and elegant environments.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card h-100 p-4 rounded-2xl shadow-dramatic hover-translateY-large">
              <div class="card-body text-center">
                <div class="hexagon-clip mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M18 10C19.11 10 20 10.9 20 12C20 13.11 19.11 14 18 14H17L17 19H14L14 14H10C8.9 14 8 13.11 8 12C8 10.9 8.9 10 10 10V5H7V4H17V5H14V10L18 10Z"/></svg>
                </div>
                <h3 class="card-title fw-bold">Custom Furniture Creation</h3>
                <p class="card-text text-secondary">Bespoke pieces crafted from exotic woods, inlaid metals, and premium textiles. Each item is a work of art, designed to complement your space and heirloom quality.</p>
              </div>
            </div>
          </div>
          
          <div class="col-12 col-md-4">
            <div class="card h-100 p-4 rounded-2xl shadow-dramatic hover-translateY-large">
              <div class="card-body text-center">
                <div class="hexagon-clip mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M17 16L12 11L7 16H17ZM12 8L17 13L7 13L12 8Z"/></svg>
                </div>
                <h3 class="card-title fw-bold">Architectural Detailing</h3>
                <p class="card-text text-secondary">Meticulous moldings, dramatic arches, and sophisticated custom millwork that define the Art Deco aesthetic.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card h-100 p-4 rounded-2xl shadow-dramatic hover-translateY-large">
              <div class="card-body text-center">
                <div class="hexagon-clip mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M11 20H13V15H11V20ZM12 2C10.5 2 9.17 2.34 7.96 3C6.75 3.66 5.75 4.54 4.96 5.61C4.17 6.69 3.62 7.89 3.32 9.2C3.02 10.5 3 11.83 3 13C3 15.65 3.93 17.7 5.79 19.13L8 22H16L18.21 19.13C20.07 17.7 21 15.65 21 13C21 11.83 20.98 10.5 20.68 9.2C20.38 7.89 19.83 6.69 19.04 5.61C18.25 4.54 17.25 3.66 16.04 3C14.83 2.34 13.5 2 12 2ZM12 4C13.06 4 14.07 4.21 15 4.63C15.93 5.05 16.75 5.62 17.41 6.34C18.07 7.06 18.57 7.88 18.89 8.8C19.21 9.72 19.37 10.68 19.37 11.69C19.37 12.68 19.22 13.52 18.91 14.21C18.6 14.9 18.15 15.42 17.57 15.79C17.02 16.15 16.39 16.33 15.7 16.33L15 16.33L15 17H9V16.33L8.3 16.33C7.61 16.33 6.98 16.15 6.43 15.79C5.85 15.42 5.4 14.9 5.09 14.21C4.78 13.52 4.63 12.68 4.63 11.69C4.63 10.68 4.79 9.72 5.11 8.8C5.43 7.88 5.93 7.06 6.59 6.34C7.25 5.62 8.07 5.05 9 4.63C9.93 4.21 10.94 4 12 4Z"/></svg>
                </div>
                <h3 class="card-title fw-bold">Lighting Design</h3>
                <p class="card-text text-secondary">Statement pieces, from dramatic sconces to cascading chandeliers, designed to illuminate and enchant every corner.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card h-100 p-4 rounded-2xl shadow-dramatic hover-translateY-large">
              <div class="card-body text-center">
                <div class="hexagon-clip mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M12 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21.74 21 16.55 21 11V5L12 1ZM12 5L19 8.5V11C19 15.76 15.82 19.5 12 20.66C8.18 19.5 5 15.76 5 11V8.5L12 5ZM12 13C13.1 13 14 12.1 14 11C14 9.9 13.1 9 12 9C10.9 9 10 9.9 10 11C10 12.1 10.9 13 12 13Z"/></svg>
                </div>
                <h3 class="card-title fw-bold">Strategic Space Planning</h3>
                <p class="card-text text-secondary">Optimized layouts meticulously designed for elegant flow, enhanced function, and an open, luxurious feel.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="portfolio" class="section-spacing bg-white">
      <div class="container py-5">
        <h2 class="display-5 fw-bold text-center mb-5">Featured Masterpieces</h2>
        <div class="row g-4 justify-content-center">
          <div class="col-12 col-md-6">
            <div class="card border-0 rounded-2xl shadow-dramatic hover-translateY-large">
              <img src="images/portfolio-manhattan-penthouse-640x640.jpeg" class="card-img-top rounded-2xl" alt="Manhattan Penthouse living area by Deco Nodic" width="640" height="640">
              <div class="card-body text-center pt-4">
                <h4 class="card-title fw-bold">Manhattan Penthouse: Timeless Views</h4>
                <p class="card-text text-secondary">A sophisticated urban sanctuary, blending Art Deco grandeur with panoramic cityscapes. Features custom furnishings.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card border-0 rounded-2xl shadow-dramatic hover-translateY-large">
              <img src="images/portfolio-brooklyn-brownstone-640x640.jpeg" class="card-img-top rounded-2xl" alt="Brooklyn Brownstone custom dining room by Deco Nodic" width="640" height="640">
              <div class="card-body text-center pt-4">
                <h4 class="card-title fw-bold">Brooklyn Brownstone: Heritage Elevated</h4>
                <p class="card-text text-secondary">A meticulously restored brownstone, reimagining classic architecture with bespoke Art Deco elements and intricate detailing.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="testimonials" class="section-spacing bg-light">
      <div class="container py-5">
        <h2 class="display-5 fw-bold text-center mb-5">Client Experiences</h2>
        <div class="row g-4 justify-content-center">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-4 rounded-2xl shadow-dramatic text-center hover-translateY-large">
              <img src="images/client-eleanor-128x128.jpeg" class="rounded-circle mx-auto mb-3" alt="Client Eleanor V. from New York" width="128" height="128">
              <div class="card-body">
                <p class="card-text fs-5 mb-3 fst-italic">"Deco Nodic completely transformed our apartment into a Gatsby-esque dream. The custom furniture is breathtaking, and every detail feels so considered and rich."</p>
                <h5 class="fw-bold">- Eleanor V., Upper East Side</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-4 rounded-2xl shadow-dramatic text-center hover-translateY-large">
              <img src="images/client-marcus-128x128.jpeg" class="rounded-circle mx-auto mb-3" alt="Client Marcus T. from Commercial Property" width="128" height="128">
              <div class="card-body">
                <p class="card-text fs-5 mb-3 fst-italic">"The architectural detailing and lighting design provided by their studio elevated our commercial space beyond imagination. It's now a true statement of sophistication."</p>
                <h5 class="fw-bold">- Marcus T., Gallery Owner</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-4 rounded-2xl shadow-dramatic text-center hover-translateY-large">
              <img src="images/client-sophia-128x128.jpeg" class="rounded-circle mx-auto mb-3" alt="Client Sophia R. from a Historic Home" width="128" height="128">
              <div class="card-body">
                <p class="card-text fs-5 mb-3 fst-italic">"Professional, visionary, and meticulous. Working with Deco Nodic was the best decision for our historic home renovation. They respected its past while bringing it into a new era of elegance."</p>
                <h5 class="fw-bold">- Sophia R., Historic Homeowner</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="booking" class="section-spacing bg-white">
      <div class="container py-5">
        <div class="card p-5 rounded-2xl shadow-dramatic border-0">
          <div class="row g-5">
            <div class="col-12 col-lg-6">
              <h2 class="display-5 fw-bold mb-4">Start Your Project with Us</h2>
              <p class="lead mb-4 text-secondary">Ready to transform your space into an Art Deco masterpiece? Fill out the form below to request a consultation. We look forward to hearing from you.</p>
              <form>
                <div class="mb-3">
                  <label for="nameInput" class="form-label visually-hidden">Your Name</label>
                  <input type="text" class="form-control" id="nameInput" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                  <label for="emailInput" class="form-label visually-hidden">Your Email</label>
                  <input type="email" class="form-control" id="emailInput" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                  <label for="projectType" class="form-label visually-hidden">Type of Project</label>
                  <select class="form-select" id="projectType" required>
                    <option selected disabled>Select Project Type</option>
                    <option>Residential Interior Design</option>
                    <option>Commercial Interior Design</option>
                    <option>Custom Furniture</option>
                    <option>Architectural Detailing</option>
                    <option>Initial Consultation</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label for="messageInput" class="form-label visually-hidden">Your Message</label>
                  <textarea class="form-control" id="messageInput" rows="5" placeholder="Tell us more about your vision..." required></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-lg hover-translateY-large">Request Consultation</button>
              </form>
            </div>
            <div class="col-12 col-lg-6">
              <h3 class="fw-bold mb-3">Reach Out to Us Directly</h3>
              <address class="mb-4 text-secondary">
                <strong>Deco Nodic Studios</strong><br>
                4501 Church Avenue<br>
                New York, New York, 11203, USA<br>
                Phone: <a href="tel:+14723138609" class="text-secondary text-decoration-none">+14723138609</a><br>
                Email: <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="text-secondary text-decoration-none">info@<?php echo $_SERVER['HTTP_HOST']; ?></a>
              </address>
              <div class="ratio ratio-16x9 rounded-2xl shadow-dramatic" style="height: 300px;">
                <iframe
                  src="https://www.google.com/maps?q=New%20York%20City,USA&z=12&output=embed"
                  width="600"
                  height="450"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  class="rounded-2xl"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
<footer id="footer-main" class="py-5">
    <div class="container text-center">
      <p class="mb-3">&copy; 2024 Deco Nodic. All rights reserved.</p>
      <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="./privacy.html" class="text-decoration-none">Privacy Policy</a></li>
        <li class="list-inline-item mx-3">&bull;</li>
        <li class="list-inline-item"><a href="./tos.html" class="text-decoration-none">Terms of Service</a></li>
      </ul>
    </div>
  </footer>

  
  <div id="consent_cookieConsent" class="position-fixed bottom-0 start-0 w-100 bg-dark text-white p-3 d-flex justify-content-between align-items-center" style="z-index: 1050;">
    <p class="mb-0 small">We use cookies to enhance your browsing experience. By continuing, you agree to our <a href="./privacy.html" class="text-info text-decoration-none">Privacy Policy</a>.</p>
    <button id="consent_acceptCookies" class="btn btn-sm btn-info">Accept</button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Navbar Scroll Effect
    document.addEventListener('DOMContentLoaded', function() {
      const navbar = document.getElementById('nav-main');
      let navLinks = navbar.querySelectorAll('.nav-link, .navbar-brand');
      let navCta = navbar.querySelector('.btn');

      function toggleNavbarClass() {
        if (window.scrollY > 50) {
          navbar.classList.remove('navbar-transparent', 'bg-dark'); // Remove dark, transparent
          navbar.classList.add('navbar-scrolled', 'bg-white'); // Add white, scrolled
          navLinks.forEach(link => link.classList.remove('text-white'));
          navLinks.forEach(link => link.classList.add('text-dark'));
          navCta.classList.remove('btn-outline-light');
          navCta.classList.add('btn-outline-primary');
        } else {
          navbar.classList.remove('navbar-scrolled', 'bg-white'); // Remove white, scrolled
          navbar.classList.add('navbar-transparent'); // Add transparent (dark background is managed here)
          navLinks.forEach(link => link.classList.remove('text-dark'));
          navLinks.forEach(link => link.classList.add('text-white'));
          navCta.classList.remove('btn-outline-primary');
          navCta.classList.add('btn-outline-light');
        }
      }

      window.addEventListener('scroll', toggleNavbarClass);
      toggleNavbarClass(); // Call on load to set initial state if scroll position isn't 0
    });

    // Cookie Consent
    document.addEventListener('DOMContentLoaded', function() {
      const cookieBanner = document.getElementById('consent_cookieConsent');
      const acceptButton = document.getElementById('consent_acceptCookies');
      const cookieName = 'consent_accepted'; // Unique cookie name prefix + specific name

      if (!localStorage.getItem(cookieName)) {
        cookieBanner.style.display = 'flex';
      }

      acceptButton.addEventListener('click', function() {
        localStorage.setItem(cookieName, 'true');
        cookieBanner.style.display = 'none';
      });
    });
  </script>
</body>
</html>