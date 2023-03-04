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
                <a href="docs_index.php" class="nav-link active"> Home</a>
              </li>
              <li class="nav-item">
                <a href="docs.php" class="nav-link"> Docs</a>
              </li>
              <li class="nav-item">
                <a href="articles.php" class="nav-link"> Articles</a>
              </li>
              <li class="nav-item">
                <a href="faq.php" class="nav-link"> FAQ</a>
              </li>
              <li class="nav-item">
                <a href="logs.php" class="nav-link"> Changelog</a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="nav-link"> Login</a>
              </li>
              <li class="nav-item">
                <a href="contact.php" class="nav-link"> Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <header>
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-md-6 col-12">
              <h1 class="mb-4">TheDocs Center</h1>
              <p class="mb-3">
                We do our best to provide a comprehensive documentation in our
                help center. Don't hesitate to contact us if you couldn't find
                an answer to your question.
              </p>
              <a href="./docs.php"><button>Get Started</button></a>
            </div>
            <div class="col-md-5 col-12">
              <img src="./assets/images/header.png" />
            </div>
          </div>
        </div>
      </header>
    </section>
    <!-- End Header Section -->

    <!-- Start Boxes Section -->
    <section class="boxes">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 col-sm-6 col-12 mb-3">
            <a href="./articles.php">
              <div class="box">
                <img src="./assets/images/knowledge.svg" />
                <h4>Knowledge Base</h4>
                <p>x
                  Get started using this template by reading the helpful
                  articles.
                </p>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-12 mb-3">
            <a href="./contact.php">
              <div class="box">
                <img src="./assets/images/contact2.svg" />
                <h4>Contact Us</h4>
                <p>
                  Lots of questions have asked before and have answers here.
                </p>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <a href="./docs.php">
              <div class="box">
                <img src="./assets/images/documantation.svg" />
                <h4>Documentation</h4>
                <p>
                  Browse the comments section of the template in Themeforest.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Boxes Section -->

    <!-- Start Topics Section -->
    <section class="topics">
      <h2>Featured Topics</h2>
      <p>
        The following articles are the most helpful articles. One of them might
        be the one you look for.
      </p>
      <div class="container">
        <div class="row justify-content-center g-4">
          <div class="col-lg-5 col-md-6 col-12">
            <div class="article">
              <span>Article</span>
              <p><a href="./articles.php">How to get started</a></p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 col-12">
            <div class="article">
              <span>Article</span>
              <p><a href="./articles.php">Directory structure</a></p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 col-12">
            <div class="article">
              <span>Article</span>
              <p><a href="./articles.php">What is the basic starter?</a></p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 col-12">
            <div class="article">
              <span>Article</span>
              <p><a href="./articles.php">What is the expert starter?</a></p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 col-12">
            <div class="article">
              <span>Article</span>
              <p>
                <a href="./articles.php">How to update to a new version?</a>
              </p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 col-12">
            <div class="article">
              <span>Article</span>
              <p>
                <a href="./articles.php"
                  >How can I update from version 1.x to 2.x?</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Topics Section -->

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
