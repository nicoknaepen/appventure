<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

  <div id="header-wrapper">
    <div class="container">
      <div class="row">
        <div class="12u">
          <!-- Header -->
          <section id="header">
            <!-- Logo -->
            <h1><a href="#"><?php print $site_name?></a></h1>
            <?php if ($main_menu): ?>
              <nav id="nav">
                <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'ul-nav'))); ?>
              </nav>
            <?php endif; ?>
            <!-- Nav -->
            <!--
            <nav id="nav">
              <ul>
                <li class="current_page_item"><a href="index.html">Home</a></li>
                <li>
                  <a href="">Dropdown</a>
                  <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Magna phasellus</a></li>
                    <li><a href="#">Etiam dolore nisl</a></li>
                    <li>
                      <a href="">Phasellus consequat</a>
                      <ul>
                        <li><a href="#">Magna phasellus</a></li>
                        <li><a href="#">Etiam dolore nisl</a></li>
                        <li><a href="#">Veroeros feugiat</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Veroeros feugiat</a></li>
                  </ul>
                </li>
                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                <li><a href="no-sidebar.html">No Sidebar</a></li>
              </ul>
            </nav>
            -->
          </section>
        </div>
      </div>
      <div class="row">
        <div class="12u">
          <!-- Banner -->
          <section id="banner">
            <a href="http://facebook.com/DreametryDoodle">
              <span class="image image-full"><img src="/sites/all/themes/appventure/images/climbing.png" alt="" /></span>
              <header>
                <h2>Are you in for an Appventure?</h2>
                <span class="byline">or do you just need some appvice?</span>
              </header>
            </a>
          </section>
        </div>
      </div>
      <div class="row">
        <div class="12u">
          <!-- Intro -->
          <section id="intro">

            <div>
              <div class="row">
                <div class="4u">
                  <section class="first">
                    <span class="pennant"><span class="fa fa-cog"></span></span>
                    <header>
                      <h2>We can advice</h2>
                    </header>
                    <p>And find a solution for your question concerning online applications or websites.</p>
                  </section>
                </div>
                <div class="4u">
                  <section class="middle">
                    <span class="pennant pennant-alt"><span class="fa fa-flash"></span></span>
                    <header>
                      <h2>We can build</h2>
                    </header>
                    <p>Especially Drupal based websites including all the specifications you need.</p>
                  </section>
                </div>
                <div class="4u">
                  <section class="last">
                    <span class="pennant pennant-alt2"><span class="fa fa-star"></span></span>
                    <header>
                      <h2>We can manage</h2>
                    </header>
                    <p>Your online projects and steer a team of designers and developers.</p>
                  </section>
                </div>
              </div>
            </div>

            <div class="actions">
              <a href="#" class="button big">Get Started</a>
              <a href="#" class="button alt big">Learn More</a>
            </div>

          </section>

        </div>
      </div>      
    </div>
  </div>
  <div id="page-wrapper"><div id="page">


    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <?php print $messages; ?>

    <div id="main-wrapper"><div id="main" class="clearfix">

      <div id="content" class="column"><div class="section">
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div></div> <!-- /.section, /#content -->

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_second']); ?>
        </div></div> <!-- /.section, /#sidebar-second -->
      <?php endif; ?>

    </div></div> <!-- /#main, /#main-wrapper -->

    <div id="footer"><div class="section">
      <?php print render($page['footer']); ?>
    </div></div> <!-- /.section, /#footer -->

  </div></div> <!-- /#page, /#page-wrapper -->
