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
              <h2>Knowledge Base</h2>
            </div>
          </div>
        </div>
      </header>
    </section>
    <!-- End Header Section -->

    <!-- Start Breadcrump -->
    <div class="breadcrump">
      <div class="container">
        <p>
          <span>Support</span>
          &nbsp; >> &nbsp;
          <span>Articles</span>
          &nbsp; >> &nbsp;
          <span>Getting Started</span>
        </p>
      </div>
    </div>
    <!-- End Breadcrump -->

    <!-- Start Article Section -->
    <div class="article">
      <div class="container">
        <div class="row">
          <!-- Article Content -->
          <div class="col-lg-9 col-md-8 col-12 content">
            <h2>What is the basic starter?</h2>
            <p>
              It is a blank directory to make a copy of and start a new project
              with. It includes the required JS and CSS files from TheSaaS as
              well as icon fonts, PHP files and some images.
              <br />
              <br />
              This starter suites for simple websites which doesn't require any
              customization to TheSaaS code and writing few additional CSS and
              JS codes. Simply make a copy and start your project, without npm
              and gulp tasks.
            </p>
            <h3>Basic Starter Guides</h3>
            <p>
              It is a blank directory to make a copy of and start a new project
              with. It includes the required JS and CSS files from TheSaaS as
              well as icon fonts, PHP files and some images.
              <br />
              <br />
              This starter suites for simple websites which doesn't require any
              customization to TheSaaS code and writing few additional CSS and
              JS codes. Simply make a copy and start your project,
              <code>../assets/images/file.svg</code>
              without npm and gulp tasks.
            </p>
            <pre class="language-html my-4 py-0">
<code>
&lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"&gt;&lt;/script&gt;
</code>
</pre>
            <h3>Basic Starter Guides</h3>
            <p>
              It is a blank directory to make a copy of and start a new project
              with. It includes the required JS and CSS files from TheSaaS as
              well as icon fonts, PHP files and some images.
              <br />
              <br />
              This starter suites for simple websites which doesn't require any
              customization to TheSaaS code and writing few additional CSS and
              JS codes. Simply make a copy and start your project,
              <code>../assets/images/file.svg</code>
              without npm and gulp tasks.
            </p>
          </div>

          <!-- Related Articles Bar -->
          <div class="col-lg-3 col-md-4 d-md-block d-none sidebar">
            <h4>Related Articles</h4>
            <ul>
              <li>
                <a href="./article.php">
                  <img src="./assets/images/file.svg" /> Getting Started
                </a>
              </li>
              <li>
                <a href="./article.php">
                  <img src="./assets/images/file.svg" /> Directory structure
                </a>
              </li>
              <li>
                <a href="./article.php">
                  <img src="./assets/images/file.svg" /> HTML structure
                </a>
              </li>
              <li>
                <a href="./article.php">
                  <img src="./assets/images/file.svg" /> What is the basic
                  starter?
                </a>
              </li>
              <li>
                <a href="./article.php">
                  <img src="./assets/images/file.svg" /> How to update to a new
                  version?
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Article Section -->

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
    <script src="./assets/js/prisma.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
