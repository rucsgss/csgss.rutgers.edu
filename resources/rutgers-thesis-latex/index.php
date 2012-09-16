<html>
  <head>
    <title>Rutgers CSGSS</title>
    <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/head.html") ?>
  </head>
  <body>
    <div class="container">
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/header.html") ?>
      <div class="page_content">
        <h1>Writing your thesis in LaTeX</h1>
        <img src="/images/thesis.png" alt="Thesis title page" class="thumbnail"/>
        <p>The LaTeX style file below is based on the official university <a href="http://gsnb.rutgers.edu/style_guide.php3">style guide</a> and was developed by the Department of Mathematics (see the <a href="http://www.math.rutgers.edu/grad/phd_requirements/thesis.html">original page</a>).</p>
        <p>To use this style file, download the files below, put them in a directory, and build using <code>pdflatex</code>:</p>
        <div class="code">
          <pre><code>mkdir ~/thesis
mv ~/Downloads/thesis.tex ~/Downloads/ruthesis.cls ~/thesis
cd ~/thesis
pdflatex thesis</code></pre>
        </div>
        <h1>Downloads</h1>
        <ul>
          <li><a href="thesis.tex">thesis.tex</a> &mdash; a barebones LaTeX file for your thesis.</li>
          <li><a href="ruthesis.cls">ruthesis.cls</a> &mdash; a LaTeX style file for your thesis.</li>
        </ul>
      </div>
    </div>
  </body>
</html>
