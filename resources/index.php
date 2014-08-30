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
          <h1>Resources</h1>

          <div><div class="arrow"></div><p class="heading">Add CS and CSGSS events to your calendar</p></div>
          <div class="content">
            <div class="url-table">
            <h4>Google calendar</h4>
            <table>
              <tr>
                <td>CS department:</td>
                <td><code>rutgers.cs@gmail.com</code></td>
              </tr>
              <tr>
                <td>CSGSS:</td>
                <td><code>rutgers.csgss@gmail.com</code></td>
              </tr>
              <tr>
                <td>Rutgers academic calendar:</td>
                <td><code>rutgers.academic@gmail.com</code></td>
              </tr>
            </table>

            <h4>Other calendar applications (iCalendar format)</h4>
            <table>
              <tr>
                <td>CS department:</td>
                <td><code>https://www.google.com/calendar/ical/rutgers.cs%40gmail.com/public/basic.ics</code></td>
              </tr>
              <tr>
                <td>CSGSS:</td>
                <td><code>https://www.google.com/calendar/ical/rutgers.csgss%40gmail.com/public/basic.ics</code></td>
              </tr>
              <tr>
                <td>Rutgers academic calendar:</td>
                <td><code>https://www.google.com/calendar/ical/rutgers.academic%40gmail.com/public/basic.ics</code></td>
              </tr>
            </table>
            </div>

            <p>If you use <a href="http://www.google.com/calendar">Google Calendar</a>,
              go to "Other calendars" &rarr; "Add a friend's calendar",
              and enter the Google calendar email address.</p>

            <p>If you use Calendar.app on Mac OS X,
              go to "File" &rarr; "New Calendar Subscription",
              and enter the iCalendar URL as the calendar address.</p>

            <p>If you use the Lightning calendar plugin for Thunderbird,
              go to "File" &rarr; "New" &rarr; "Calendar...", select "On the Network", choose "iCalendar (ICS)",
              and enter the iCalendar URL for the location.</p>
          </div>

          <div><div class="arrow"></div><p class="heading">Create your department webpage</p></div>
          <div class="content">
            <p>Your disk space on the graduate domain can be used to host public web pages. Your public space will be located at http://paul.rutgers.edu/~USERNAME/. If you prefer, you can also use http://www.cs.rutgers.edu/~USERNAME/, which is an alias for your webpage on paul.rutgers.edu.</p>
            <p>To set up your webpage, create a <code>~/public_html</code> directory on one of <a href="http://www.cs.rutgers.edu/resources/systems/graduate/machines.whtml">these servers</a> and place your HTML files within it.</p>
            <p>For example,</p>
            <div class="code">
              <pre><code>ssh USERNAME@galaxian.cs.rutgers.edu
mkdir -p ~/public_html
echo '&lt;h1&gt;Hello, world!&lt;/h1&gt;' &gt; ~/public_html/index.html
chmod 755 ~/public_html
chmod 644 ~/public_html/index.html</code></pre>
            </div>
            <p>Note that at present, no server-side scripting (PHP, etc.) is enabled.</p>
          </div>

          <div><div class="arrow"></div><p class="heading">Get Rutgers business cards</p></div>
          <div class="content">
            <div class="thumbnail"><img src="/images/business-card-foobar.jpg" height=171 width=300 alt="Example business card" class="thumbnail"/></div>
            <p>Business cards can be ordered through <a href="http://www.duplionline.com/">Dupli Envelope &amp; Graphics</a>.
              Click on "Login DupliOnline" and then use "rutstu" for account code, username, and password.</p>
          </div>

          <div><div class="arrow"></div><p class="heading">Write your thesis in LaTeX</p></div>
          <div class="content">
            <p>The following LaTeX style file is a version of the <a href="http://www.math.rutgers.edu/grad/phd_requirements/thesis.html">Department of Mathematics style file</a>, customized for students in the Department of Computer Science. It is based on the official university <a href="http://gsnb.rutgers.edu/style_guide.php3">style guide</a>.</p>
            <ul>
              <li><a href="thesis.tex">thesis.tex</a> &ndash; a barebones LaTeX file for your thesis.</li>
              <li><a href="ruthesis.cls">ruthesis.cls</a> &ndash; a LaTeX style file for your thesis.</li>
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
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/footer.html") ?>
    </div>
  </body>
</html>
