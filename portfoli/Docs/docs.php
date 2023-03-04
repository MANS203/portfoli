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
                <a href="./docs.php" class="nav-link active"> Docs</a>
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
              <h1>Documentation</h1>
            </div>
            <div class="col-md-4 col-12">
              <img
                src="./assets/images/docs.svg"
                alt="logs"
                style="max-width: 55%"
              />
            </div>
          </div>
        </div>
      </header>
    </section>
    <!-- End Header Section -->

    <!-- Start Docs Section -->
    <section class="docs-sec">
      <i class="fas fa-bars showBar" onclick="showBar()"></i>
      <i class="fas fa-times-circle closeBar" onclick="closeBar()"></i>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-12 docs-show-sidebar ps-0">
            <div class="bar">
              <ul>
                <li class="item">
                  <h4 class="active">
                    Getting Started
                    <i class="fas fa-caret-right showList"></i>
                    <i class="fas fa-caret-down hideList"></i>
                  </h4>
                  <ul>
                    <li class="active">Introduction</li>
                    <li>Contents</li>
                    <li>Basic starter</li>
                    <li>Expert starter</li>
                  </ul>
                </li>
                <li class="item">
                  <h4>
                    Content
                    <i class="fas fa-caret-right showList"></i>
                    <i class="fas fa-caret-down hideList"></i>
                  </h4>
                  <ul>
                    <li>Typography</li>
                    <li>Code</li>
                    <li>Icon</li>
                    <li>Image</li>
                    <li>Table</li>
                    <li>Video</li>
                  </ul>
                </li>
                <li class="item">
                  <h4>
                    Layout
                    <i class="fas fa-caret-right showList"></i>
                    <i class="fas fa-caret-down hideList"></i>
                  </h4>
                  <ul>
                    <li>Navbar</li>
                    <li>Sidebar</li>
                    <li>Utilites</li>
                  </ul>
                </li>
                <li class="item">
                  <h4>
                    Components
                    <i class="fas fa-caret-right showList"></i>
                    <i class="fas fa-caret-down hideList"></i>
                  </h4>
                  <ul>
                    <li>Accordion</li>
                    <li>Alert</li>
                    <li>Badge</li>
                    <li>Button</li>
                    <li>Form</li>
                    <li>Scroll</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-9 col-md-8 col-12">
            <div class="docs-show-content" id="showContent">
              <h2>Introduction</h2>
              <p>
                In this article, we help you to start and configure your project
                by creating a copy of thedocs. Make sure you've read the
                contents article before continuing.
              </p>
              <p>
                Since most of the websites have a global layout for whole of the
                application, you might want to start modifying docs_index.php file
                and create a global layout for your website. Check available
                layout features such as navbar, header, cover, footer, etc. as
                well as all the blocks and UI Kit. at path
              </p>
              <h2>Copy</h2>
              <p>
                Our template comes with two powerful starter templates that you
                should use one of them as a boilerplate for your project. You
                should simply copy one of the starter directory to your desire
                destination and start developing.
              </p>
              <p>
                We strongly recommend using the expert starter, but the basic
                starter template is advised to people who are not familiar with
                npm, task runners and scss; and developing small-scaled websites
                with less customization.
              </p>
              <p>
                Since most of the websites have a global layout for whole of the
                application, you might want to start modifying docs_index.php file
                and create a global layout for your website. Check available
                layout features such as navbar, header, cover, footer, etc. as
                well as all the blocks and UI Kit. at path
              </p>
              <h2>Installation</h2>
              <p>Use the package manager npm to install bootstrap.</p>
              <pre class="language-shell py-0"><code class="language-shell">
npm install bootstrap
</code>
</pre>
              <p>
                you will find bootstrap.js library files in your folder at path
                <code class="language-bash"
                  >project-folder/node_modules/bootstrap</code
                >or include it in your HTML files body tag : Normal Version
              </p>
              <pre class="language-html py-0"><code class="language-html">
&lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"&gt;&lt;/script&gt;
</code>
</pre>
              <p>
                Since most of the websites have a global layout for whole of the
                application, you might want to start modifying docs_index.php file
                and create a global layout for your website. Check available
                layout features such as navbar, header, cover, footer, etc. as
                well as all the blocks and UI Kit. at path
                <code>functions/index.js</code>
              </p>
              <p>
                Since most of the websites have a global layout for whole of the
                application, you might want to start modifying docs_index.php file
                and create a global layout for your website. Check available
                layout features such as navbar, header, cover, footer, etc. as
                well as all the blocks and UI Kit. at path
                <code>functions/index.js</code>
              </p>
              <h2>Configure</h2>
              <p>
                Open /assets/js/script.js file and set the configuration options
                if you'd like. There's possibility to set your Google API Key,
                Google Analytics Tracking, and choose to have smooth scroll or
                not, etc. The script.js file has a complete documentation to
                help you configuring your template.
              </p>
              <p>
                If you're going to have a contact form in your website, you
                should make some more configurations. Please open
                /assets/php/sendmail.php files and configure your contact form
                with specifying your email address and default subject.
              </p>
              <p>
                Based on the starter template you chose, you should also read
                the "How to get started?" article of basic starter or expert
                starter.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Docs Section -->

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
