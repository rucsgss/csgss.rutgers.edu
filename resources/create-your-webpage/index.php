<html>
  <head>
    <title>Rutgers CSGSS</title>
    <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/head.html") ?>
  </head>
  <body>
    <div class="container">
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/header.html") ?>
      <div class="page_content">
        <h1>Creating Your Department Webpage</h1>
        <p>Your disk space on the graduate domain can be used to host public web pages. Your public space will be located at http://paul.rutgers.edu/~dcs_username/, where "dcs_username" is your DCS username. If you prefer, you can also use http://www.cs.rutgers.edu/~dcs_username/, which is an alias for your webpage on paul.rutgers.edu.</p>

        <p>To set up your webpage, create a <code>~/public_html</code> directory on one of <a href="http://www.cs.rutgers.edu/resources/systems/graduate/machines.whtml">these servers</a> and place your HTML files within it.</p>

        <p>For example,

        <div class="code">
        <pre><code>ssh USERNAME@galaxian.rutgers.edu
mkdir -p ~/public_html
echo '&lt;h1&gt;Hello, world!&lt;/h1&gt;' &gt; ~/public_html/index.html
chmod 755 ~/public_html
chmod 644 ~/public_html/index.html</code></pre></p>
        </div>

        <p>Note that at present, no server-side scripting (PHP, etc.) is enabled.</p>
      </div>
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/includes/footer.html") ?>
    </div>
  </body>
</html>
