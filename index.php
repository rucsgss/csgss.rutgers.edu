<!doctype html>
<html>
  <head>
    <title>Rutgers CSGSS</title>
    <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/head.html") ?>
  </head>
  <body>
    <div class="container">
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/header.html") ?>
      <div class="page_content">
        <h1>News from CSGSS</h1>
        <div class="news">
          <div class="newsitem">
            <div class="thumbnail"><img src="/images/fall2012.jpg" height=299 width=400 alt="Rutgers in fall" class="thumbnail"/></div>
            <div>
              <h2>Welcome back!</h2>
              <h3>Sept 4, 2012</h3>
              <p>Welcome back for Fall 2012!</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="newsitem">
            <div class="thumbnail"><img src="/images/martin-award.jpg" height=221 width=400 alt="Martin Farach-Colton receiving teaching award" class="thumbnail"/></div>
            <div>
              <h2>Martin Farach-Colton wins Award for Excellence in Teaching</h2>
              <h3>May 15, 2012</h3>
              <p>The Computer Science Graduate Student Society (CSGSS) of the Rutgers CS department selected the winner for this year's top teacher. Monica Babes, CSGSS President, announced last week that the graduate students chose Prof. Martin Farach-Colton for the 2011-2012 CSGSS Award for Excellence in Teaching.</p>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/footer.html") ?>
    </div>
  </body>
</html>
