<!doctype html>
<html>
  <head>
    <title>CSGSS Resources</title>
    <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/head.html") ?>
    <script src="/scripts/expand-collapse.js"></script>
  </head>
  <body>
    <div class="container">
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/header.html") ?>
      <div class="page_content">
        <div class="resources">
          <h1>Tips, tools, and tricks</h1>
          <div><div class="arrow"></div><p class="heading">Add department events to your calendar</p></div>
          <div class="content">
            <p>If you use <a href="http://www.google.com/calendar">Google Calendar</a>, go to "Other calendars" &rarr; "Add a friend's calendar", and enter "rutgers.cs@gmail.com" as the email address.</p>
            <p>If you use Calendar.app on Mac OS X, go to "File" &rarr; "New Calendar Subscription", and enter "https://www.google.com/calendar/ical/rutgers.cs%40gmail.com/public/basic.ics" as the calendar address.</p>
          </div>
          <div><div class="arrow"></div><p class="heading">Create your department webpage</p></div>
          <div class="content">
            <p>Your disk space on the graduate domain can be used to host public web pages. Your public space will be located at http://paul.rutgers.edu/~dcs_username/, where "dcs_username" is your DCS username. If you prefer, you can also use http://www.cs.rutgers.edu/~dcs_username/, which is an alias for your webpage on paul.rutgers.edu.</p>

            <p>To set up your webpage, create a <code>~/public_html</code> directory on one of <a href="http://www.cs.rutgers.edu/resources/systems/graduate/machines.whtml">these servers</a> and place your HTML files within it.</p>

            <p>For example,</p>

            <div class="code">
              <pre><code>ssh USERNAME@galaxian.rutgers.edu
mkdir -p ~/public_html
echo '&lt;h1&gt;Hello, world!&lt;/h1&gt;' &gt; ~/public_html/index.html
chmod 755 ~/public_html
chmod 644 ~/public_html/index.html</code></pre>
            </div>

            <p>Note that at present, no server-side scripting (PHP, etc.) is enabled.</p>
          </div>
          <div><div class="arrow"></div><p class="heading">Get Rutgers business cards</p></div>
          <div class="content">
            <p>Contact <a href="mailto:granholm@rci.rutgers.edu">Georgene Granholm</a> for information on how to order official business cards.</p>
          </div>
          <div><div class="arrow"></div><p class="heading">Write your thesis in LaTeX</p></div>
          <div class="content">
            <div class="thumbnail"><img src="/images/thesis.png" alt="Thesis title page" class="thumbnail"/></div>
            <div class="thumbnail-body">
              <p>The following LaTeX style file is a version of the <a href="http://www.math.rutgers.edu/grad/phd_requirements/thesis.html">style file</a> developed by the Department of Mathematics, customized for students in the Department of Computer Science. It is based on the official university <a href="http://gsnb.rutgers.edu/style_guide.php3">style guide</a>.</p>
              <ul>
                <li><a href="thesis.tex">thesis.tex</a> &mdash; a barebones LaTeX file for your thesis.</li>
                <li><a href="ruthesis.cls">ruthesis.cls</a> &mdash; a LaTeX style file for your thesis.</li>
              </ul>
              <p>To use this style file, download the files below, put them in a directory, and build using <code>pdflatex</code>:</p>
              <div class="code">
                <pre><code>mkdir ~/thesis
mv ~/Downloads/thesis.tex ~/Downloads/ruthesis.cls ~/thesis
cd ~/thesis
pdflatex thesis</code></pre>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/footer.html") ?>
    </div>
  </body>
</html>
