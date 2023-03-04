<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/knowledge.svg" />
    <title>The Docs Project</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/prism.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
  </head>
  <body>
    <!-- Start Header Section -->
    <section class="main-header">
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
          <a href="./">
            <h3>TheDocs</h3>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navlinks"
            aria-controls="navlinks"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navlinks">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="./docs_index.php" class="nav-link"> Home</a>
              </li>
              <li class="nav-item">
                <a href="./docs.php" class="nav-link"> Docs</a>
              </li>
              <li class="nav-item">
                <a href="./articles.php" class="nav-link"> Articles</a>
              </li>
              <li class="nav-item">
                <a href="./faq.php" class="nav-link"> FAQ</a>
              </li>
              <li class="nav-item">
                <a href="./logs.php" class="nav-link"> Changelog</a>
              </li>
              <li class="nav-item">
                <a href="./contact.php" class="nav-link active"> Contact</a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="nav-link"> Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <header>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8 col-12">
              <h1>Contact Us</h1>
            </div>
            <div class="col-md-4 col-12">
              <img src="./assets/images/contact.svg" alt="logs" />
            </div>
          </div>
        </div>
      </header>
    </section>
    <!-- End Header Section -->

    <!-- Start Contact Section -->
    <section class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="contact-info">
              <h2>Contact Info</h2>
              <p>
                Our team is happy to answer your all questions. Fill out the
                form and we’ll be in touch as soon as possible.
              </p>
              <h1>TheDocs</h1>
              <p>Cairo, Egypt &nbsp; | &nbsp; +201146321151</p>
              <div class="icons">
                <i class="fab fa-facebook-square" title="Facebook Profile"></i>
                <i class="fab fa-whatsapp-square" title="WhatsApp"></i>
                <i class="fab fa-github-square" title="Star Us"></i>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="contact-inputs">
              <h2>Get in Touch</h2>
              <input type="text" placeholder="Full Name" class="cname" />
              <input type="email" placeholder="Email Address" class="cemail" />
              <textarea
                placeholder="Type Your Message"
                rows="7"
                class="cmessage"
              ></textarea>
              <button @click="sendMessage()">Send Message</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Footer Section -->
    <footer>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 col-12">
            <div class="links">
              <p>Home</p>
              <p>Docs</p>
              <p>Changelog</p>
              <p>Articles</p>
            </div>
          </div>
          <div class="col-md-3 col-12">
            <h6>&copy; All Rights Reserved 2022</h6>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer Section -->

    <script src="https://kit.fontawesome.com/4a349e503a.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
