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
                <a href="./articles.php" class="nav-link active"> Articles</a>
              </li>
              <li class="nav-item">
                <a href="./faq.php" class="nav-link"> FAQ</a>
              </li>
              <li class="nav-item">
                <a href="./logs.php" class="nav-link"> Changelog</a>
              </li>
              <li class="nav-item">
                <a href="./contact.php" class="nav-link"> Contact</a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="nav-link "> Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <header>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8 col-12">
              <h1>Articles</h1>
            </div>
            <div class="col-md-4 col-12">
              <img src="./assets/images/help.svg" alt="logs" />
            </div>
          </div>
        </div>
      </header>
    </section>
    <!-- End Header Section -->

    <!-- Start Articles Section -->
    <div class="articles">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>List of Articles</h1>
            <p>
              Here's the categorized list of articles so you can easily find the
              one you need. We suggest to start by reading the articles in
              "Getting Started" category, choose which article you want to read
              and proceed by reading articles of the related category.
            </p>
            <hr class="my-5" />
          </div>
          <div class="col-12">
            <div class="articles-list">
              <!-- Categories & Articles -->
              <div class="category">
                <h3>Getting started</h3>
                <ul>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> Directory structure
                    </a>
                  </li>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> HTML structure
                    </a>
                  </li>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> How to get started?
                    </a>
                  </li>
                </ul>
                <hr class="my-5" />
              </div>
              <div class="category">
                <h3>Basic starter template</h3>
                <ul>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> What is the basic
                      starter?
                    </a>
                  </li>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> How to get started?
                    </a>
                  </li>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> How to update to a
                      new version?
                    </a>
                  </li>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> How to add a
                      3rd-party plugin?
                    </a>
                  </li>
                </ul>
                <hr class="my-5" />
              </div>
              <div class="category">
                <h3>Expert starter template</h3>
                <ul>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> What is the expert
                      starter?
                    </a>
                  </li>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> How to get started?
                    </a>
                  </li>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> What is the
                      available gulp tasks?
                    </a>
                  </li>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> How to update to a
                      new version?
                    </a>
                  </li>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> How to add a
                      3rd-party plugin?
                    </a>
                  </li>
                  <li>
                    <a href="article.php">
                      <img src="./assets/images/file.svg" /> How to remove some
                      vendors to decrease CSS and JS files size?
                    </a>
                  </li>
                </ul>
                <hr class="my-5" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Articles Section -->

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
