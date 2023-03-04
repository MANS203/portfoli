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
          <a href="./docs_index.php">
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
                <a href="./logs.php" class="nav-link active"> Changelog</a>
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
              <h1>Changelog</h1>
            </div>
            <div class="col-md-4 col-12">
              <img src="./assets/images/log.svg" alt="logs" />
            </div>
          </div>
        </div>
      </header>
    </section>
    <!-- End Header Section -->

    <!-- Start Logs Section -->
    <section class="log-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-12 log-show-sidebar">
            <div class="bar">
              <ul>
                <li id="v1.0.0" class="active">Ver. 1.0.0</li>
                <li id="v1.0.2">Ver. 1.0.2</li>
                <li id="v2.0.0">Ver. 2.0.0</li>
                <li id="v3.0.1">Ver. 3.0.1</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-10 col-md-9 col-12">
            <div class="log-show-content">
              <div id="show-v1.0.0" class="content active">
                <h2>Version 1.0.0</h2>
                <h5>Released on : 16-8-2022</h5>
                <ul>
                  <li>New: Add Realtime DB</li>
                  <li>New: Add Realtime DB</li>
                  <li>Update: Realtime DB New Feats</li>
                  <li>Update: Realtime DB New Feats</li>
                  <li>Fix: Fix Storage Bucket</li>
                  <li>Fix: Fix Storage Bucket</li>
                </ul>
              </div>
              <div id="show-v1.0.2" class="content">
                <h2>Version 1.0.2</h2>
                <h5>Released on : 17-9-2022</h5>
                <ul>
                  <li>New: Add Realtime DB</li>
                  <li>New: Add Realtime DB</li>
                  <li>Update: Realtime DB New Feats</li>
                  <li>Update: Realtime DB New Feats</li>
                </ul>
              </div>
              <div id="show-v2.0.0" class="content">
                <h2>Version 2.0.0</h2>
                <h5>Released on : 27-10-2022</h5>
                <ul>
                  <li>New: Add Realtime DB</li>
                  <li>New: Add Realtime DB</li>
                  <li>Update: Realtime DB New Feats</li>
                  <li>Update: Realtime DB New Feats</li>
                  <li>Update: Realtime DB New Feats</li>
                  <li>Fix: Fix Storage Bucket</li>
                  <li>Fix: Fix Storage Bucket</li>
                </ul>
              </div>
              <div id="show-v3.0.1" class="content">
                <h2>Version 3.0.1</h2>
                <h5>Released on : 20-11-2022</h5>
                <ul>
                  <li>New: Add Realtime DB</li>
                  <li>Fix: Fix Storage Bucket</li>
                  <li>Fix: Fix Storage Bucket</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Logs Section -->

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
