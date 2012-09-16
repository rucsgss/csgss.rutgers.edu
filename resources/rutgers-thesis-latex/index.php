<html>
  <head>
    <title>Rutgers CSGSS</title>
    <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/head.html") ?>
  </head>
  <body>
    <div class="container">
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/header.html") ?>
      <div class="page_content">
        Based on <a href="http://www.math.rutgers.edu/grad/phd_requirements/thesis.html">these recommendations</a>.
        <h1>Downloads</h1>
        <ul>
          <li><a href="thesis.tex">thesis.tex</a> -- a barebones LaTeX file for your thesis.</li>
          <li><a href="ruthesis.cls">ruthesis.cls</a> -- a LaTeX style file for your thesis.</li>
        </ul>
      </div>
    </div>
  </body>
</html>
