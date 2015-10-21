<!doctype html>
<html>
  <head>
    <title>CSGSS Department Info</title>
    <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/head.html") ?>
  </head>
  <body>
    <div class="container">
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/header.html") ?>
      <div class="page_content">
        <div class="resources">
          <h1>Department Info</h1>

          <div><p class="heading">Reading groups</p></div>
          <div class="content">
            <ul>
              <li><a href="http://www.math.rutgers.edu/~st509/2015seminar.html">Theory of Computing Reading Seminar</a><br/>
                Wednesdays at 9:30 AM in Core 433</li>

              <li>CS Theory-Grad Reading Group<br />
                (email <a href="mailto:cstheory-grad-on@dragon.rutgers.edu">cstheory-grad-on@dragon.rutgers.edu</a> to subscribe to the mailing list)<br/>
                Wednesdays at 2 PM in Core A</li>

              <li><a href="http://ada.cs.rutgers.edu/talks.html">Machine learning reading group</a><br/>
                Mondays at 5:00 PM in CBIM</li>
            </ul>
          </div>

          <div><p class="heading">Colloquiua and seminars</p></div>
          <div class="content">
            <ul>
              <li><a href="http://dimacs.rutgers.edu/Seminars/interseminars14-15.html">DIMACS/CCICADA Interdisciplinary Seminar</a><br/>
                Tuesdays (sometimes Mondays) at 11 AM in Core 431</li>

              <li><a href="http://www.math.rutgers.edu/seminars/allseminars.php?sem_name=Discrete%20Math">Discrete Math Seminar</a><br/>
                Mondays at 11 AM in Core 431</li>

              <li><a href="https://dragon.rutgers.edu/~mk1029/theoryseminarF15.html">Rutgers/DIMACS Theory of Computing Seminar</a><br/>
                Wednesdays at 11 AM in Core 301</li>

              <li><a href="http://www.math.rutgers.edu/seminars/calendar.php">All math seminars</a></li>
              <li><a href="http://www.cs.rutgers.edu/news/colloquia/">All CS seminars</a></li>
            </ul>
          </div>

        </div>
      </div>
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/footer.html") ?>
    </div>
  </body>
</html>
