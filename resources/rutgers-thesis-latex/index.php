<html>
  <head>
    <title>Rutgers CSGSS</title>
    <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/head.html") ?>
  </head>
  <body>
    <div class="container">
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/header.html") ?>
      <div class="page_content">
        <div>
          <div class="thumbnail"><img src="/images/thesis.png" alt="Thesis title page" class="thumbnail"/></div>
          <div class="thumbnail-body">
            <h1>Writing your thesis in LaTeX</h1>
            <p>The LaTeX style file is a version of the <a href="http://www.math.rutgers.edu/grad/phd_requirements/thesis.html">style file</a> developed by the Department of Mathematics, customized for students in the Department of Computer Science. It is based on the official university <a href="http://gsnb.rutgers.edu/style_guide.php3">style guide</a></p>
            <p>To use this style file, download the files below, put them in a directory, and build using <code>pdflatex</code>:</p>
            <div class="code">
              <pre><code>mkdir ~/thesis
mv ~/Downloads/thesis.tex ~/Downloads/ruthesis.cls ~/thesis
cd ~/thesis
pdflatex thesis</code></pre>
            </div>
            <h2>Downloads</h2>
            <ul>
              <li><a href="thesis.tex">thesis.tex</a> &mdash; a barebones LaTeX file for your thesis.</li>
              <li><a href="ruthesis.cls">ruthesis.cls</a> &mdash; a LaTeX style file for your thesis.</li>
            </ul>
          </div>
        </div>
      </div>
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/footer.html") ?>
    </div>
  </body>
</html>
