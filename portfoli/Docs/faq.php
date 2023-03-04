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
                <a href="./faq.php" class="nav-link active"> FAQ</a>
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
              <h1>Frequently asked questions</h1>
            </div>
            <div class="col-md-4 col-12">
              <img src="./assets/images/help.svg" alt="logs" />
            </div>
          </div>
        </div>
      </header>
    </section>
    <!-- End Header Section -->

    <!-- Start FAQ Section -->
    <section class="faq">
      <div class="container">
        <h3>General questions</h3>
        <div class="accordion accordion-flush" id="faqQuestions1">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne"
              >
                What is update policy?
              </button>
            </h2>
            <div
              id="flush-collapseOne"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingOne"
              data-bs-parent="#faqQuestions1"
            >
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is the
                first item's accordion body.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwo"
              >
                Which browsers are supported?
              </button>
            </h2>
            <div
              id="flush-collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingTwo"
              data-bs-parent="#faqQuestions1"
            >
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is the
                second item's accordion body. Let's imagine this being filled
                with some actual content.
              </div>
            </div>
          </div>
        </div>
        <h3>Technical questions</h3>
        <div class="accordion accordion-flush" id="faqQuestions2">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-two-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne"
              >
                How can I update the template to a new version?
              </button>
            </h2>
            <div
              id="flush-two-collapseOne"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingOne"
              data-bs-parent="#faqQuestions2"
            >
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is the
                first item's accordion body.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-two-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwo"
              >
                Which browsers are supported?
              </button>
            </h2>
            <div
              id="flush-two-collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingTwo"
              data-bs-parent="#faqQuestions2"
            >
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is the
                second item's accordion body. Let's imagine this being filled
                with some actual content.
              </div>
            </div>
          </div>
        </div>
        <h3>Licensing questions</h3>
        <div class="accordion accordion-flush" id="faqQuestions3">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-three-headingOne">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-three-collapseOne"
                aria-expanded="false"
                aria-controls="flush-three-collapseOne"
              >
                What is reqular license?
              </button>
            </h2>
            <div
              id="flush-three-collapseOne"
              class="accordion-collapse collapse"
              aria-labelledby="flush-three-headingOne"
              data-bs-parent="#faqQuestions3"
            >
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is the
                first item's accordion body.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-three-headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-three-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-three-headingTwo"
              >
                What is extended license?
              </button>
            </h2>
            <div
              id="flush-three-collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="flush-three-headingTwo"
              data-bs-parent="#faqQuestions3"
            >
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is the
                second item's accordion body. Let's imagine this being filled
                with some actual content.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-three-collapseThree"
                aria-expanded="false"
                aria-controls="flush-three-collapseThree"
              >
                Is there any comparison of licenses?
              </button>
            </h2>
            <div
              id="flush-three-collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingThree"
              data-bs-parent="#faqQuestions3"
            >
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is the
                second item's accordion body. Let's imagine this being filled
                with some actual content.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End FAQ Section -->

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
