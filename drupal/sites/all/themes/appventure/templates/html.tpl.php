<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<html>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic" rel="stylesheet" />
  <script src="<?php print $theme_path?>js/jquery.dropotron.min.js"></script>
  <script src="<?php print $theme_path?>js/config.js"></script>
  <script src="<?php print $theme_path?>js/skel.min.js"></script>
  <script src="<?php print $theme_path?>js/skel-panels.min.js"></script>
  <noscript>
          <link rel="stylesheet" href="<?php print $theme_path?>css/skel-noscript.css" />
          <link rel="stylesheet" href="<?php print $theme_path?>css/style.css" />
          <link rel="stylesheet" href="<?php print $theme_path?>css/style-desktop.css" />
  </noscript>
  <!--[if lte IE 8]><script src="<?php print $theme_path?>js/html5shiv.js"></script><link rel="stylesheet" href="<?php print $theme_path?>css/ie8.css" /><![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <!-- Footer Wrapper -->
  <div id="footer-wrapper">
    <!-- Footer -->
    <section id="footer" class="container">
      <div class="row">
        <div class="8u">
          <section>
            <header>
              <h2>Blandit nisl adipiscing</h2>
            </header>
            <ul class="dates">
              <li>
                <span class="date">Jan <strong>27</strong></span>
                <h3><a href="#">Lorem dolor sit amet veroeros</a></h3>
                <p>Ipsum dolor sit amet veroeros consequat blandit ipsum phasellus lorem consequat etiam.</p>
              </li>
              <li>
                <span class="date">Jan <strong>23</strong></span>
                <h3><a href="#">Ipsum sed blandit nisl consequat</a></h3>
                <p>Blandit phasellus lorem ipsum dolor tempor sapien tortor hendrerit adipiscing feugiat lorem.</p>
              </li>
              <li>
                <span class="date">Jan <strong>15</strong></span>
                <h3><a href="#">Magna tempus lorem feugiat</a></h3>
                <p>Dolore consequat sed phasellus lorem sed etiam nullam dolor etiam sed amet sit consequat.</p>
              </li>
              <li>
                <span class="date">Jan <strong>12</strong></span>
                <h3><a href="#">Dolore tempus ipsum feugiat nulla</a></h3>
                <p>Feugiat lorem dolor sed nullam tempus lorem ipsum dolor sit amet nullam consequat.</p>
              </li>
              <li>
                <span class="date">Jan <strong>10</strong></span>
                <h3><a href="#">Blandit tempus aliquam?</a></h3>
                <p>Feugiat sed tempus blandit tempus adipiscing nisl lorem ipsum dolor sit amet dolore.</p>
              </li>
            </ul>
          </section>
        </div>
        <div class="4u">
          <section>
            <header>
              <h2>What's this all about?</h2>
            </header>
            <a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic10.jpg" alt="" /></a>
            <p>
              This is <a href="http://html5up.net/dopetrope/">Dopetrope</a> a free, fully responsive HTML5 site template by 
              <a href="http://n33.co">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> It's released for free under
              the <a href="http://html5up.net/license/">CCA</a> license so feel free to use it for any personal or commercial project &ndash;
              just don't forget to credit us! <strong>PS:</strong> The awesome placeholder artwork used in this design is courtesy of <a href="http://facebook.com/DreametryDoodle/">Dreametry Doodle</a>.
            </p>
            <footer>
              <a href="#" class="button">Find out more</a>
            </footer>
          </section>
        </div>
      </div>
      <div class="row">
        <div class="4u">
          <section>
            <header>
              <h2>Tempus consequat</h2>
            </header>
            <ul class="divided">
              <li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
              <li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
              <li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
              <li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
              <li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
              <li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
            </ul>
          </section>
        </div>
        <div class="4u">
          <section>
            <header>
              <h2>Ipsum et phasellus</h2>
            </header>
            <ul class="divided">
              <li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
              <li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
              <li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
              <li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
              <li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
              <li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
            </ul>
          </section>
        </div>
        <div class="4u">
          <section>
            <header>
              <h2>Appventurous social links</h2>
            </header>
            <ul class="social">
              <li><a class="fa fa-facebook solo" href="http://www.facebook.com/nico.knaepen" target="_blank"><span>Facebook</span></a></li>
              <li><a class="fa fa-twitter solo" href="https://twitter.com/nicoknaepen" target="_blank"><span>Twitter</span></a></li>
              <!--<li><a class="fa fa-dribbble solo" href="http://dribbble.com/n33" target="_blank"><span>Dribbble</span></a></li>-->
              <li><a class="fa fa-linkedin solo" href="http://www.linkedin.com/in/nicoknaepen" target="_blank"><span>LinkedIn</span></a></li>
              <!--<li><a class="fa fa-google-plus solo" href="#"><span>Google+</span></a></li>-->
            </ul>
            <ul class="contact">
              <li>
                <h3>Address</h3>
                <p>
                  Ovelingenstraat 4<br />
                  3800 Sint-Truiden<br />
                  Belgium
                </p>
              </li>
              <li>
                <h3>Mail</h3>
                <p><a href="mailto:nico@appventure.be">nico@appventure.be</a></p>
              </li>
              <li>
                <h3>Phone</h3>
                <p>+32(0)496/50 09 93</p>
              </li>
            </ul>
          </section>
        </div>
      </div>
      <div class="row">
        <div class="12u">
          <!-- Copyright -->
          <div id="copyright">
            <ul class="links">
              <li>&copy; <?php print Date('Y')?> Appventure</li>
              <li>About: <a href="http://about.me/nicoknaepen" target="_blank">The Appventurer</a></li>
              <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>
