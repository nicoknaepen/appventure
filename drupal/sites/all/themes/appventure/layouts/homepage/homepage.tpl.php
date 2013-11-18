<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<!-- Main Wrapper -->
<div id="main-wrapper">
  <div class="container">
    <div class="row">
      <div class="12u">
        <?php print $content['content']; ?>
    </div>
    </div>
    <div class="row">
      <div class="12u">
        <!-- Portfolio -->
        <section>
          <header class="major">
            <h2>Appventure's Portfolio</h2>
          </header>
          <div>
            <div class="row">
              <div class="4u">
                <section class="box">
                  <a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic02.jpg" alt="" /></a>
                  <header>
                    <h3>Ipsum feugiat et dolor</h3>
                  </header>
                  <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                  <footer>
                    <a href="#" class="button alt">Find out more</a>
                  </footer>
                </section>
              </div>
              <div class="4u">
                <section class="box">
                  <a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic03.jpg" alt="" /></a>
                  <header>
                    <h3>Sed etiam lorem nulla</h3>
                  </header>
                  <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                  <footer>
                    <a href="#" class="button alt">Find out more</a>
                  </footer>
                </section>
              </div>
              <div class="4u">
                <section class="box">
                  <a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic04.jpg" alt="" /></a>
                  <header>
                    <h3>Consequat et tempus</h3>
                  </header>
                  <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                  <footer>
                    <a href="#" class="button alt">Find out more</a>
                  </footer>
                </section>
              </div>
            </div>
            <div class="row">
              <div class="4u">
                <section class="box">
                  <a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic05.jpg" alt="" /></a>
                  <header>
                    <h3>Blandit sed adipiscing</h3>
                  </header>
                  <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                  <footer>
                    <a href="#" class="button alt">Find out more</a>
                  </footer>
                </section>
              </div>
              <div class="4u">
                <section class="box">
                  <a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic06.jpg" alt="" /></a>
                  <header>
                    <h3>Etiam nisl consequat</h3>
                  </header>
                  <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                  <footer>
                    <a href="#" class="button alt">Find out more</a>
                  </footer>
                </section>
              </div>
              <div class="4u">
                <section class="box">
                  <a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic07.jpg" alt="" /></a>
                  <header>
                    <h3>Dolore nisl feugiat</h3>
                  </header>
                  <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                  <footer>
                    <a href="#" class="button alt">Find out more</a>
                  </footer>
                </section>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="12u">
        <!-- Blog -->
        <section>
          <header class="major">
            <h2>The Blog</h2>
          </header>
            <div>
              <div class="row">
                <div class="6u">
                  <section class="box">
                    <a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic08.jpg" alt="" /></a>
                    <header>
                      <h3>Magna tempus consequat lorem</h3>
                      <span class="byline">Posted 45 minutes ago</span>
                    </header>
                    <p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit  adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
                    <footer class="actions">
                      <a href="#" class="button fa fa-file-text">Continue Reading</a>
                      <a href="#" class="button alt fa fa-comment">33 comments</a>
                    </footer>
                  </section>
                </div>
                <div class="6u">
                  <section class="box">
                    <a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic09.jpg" alt="" /></a>
                    <header>
                      <h3>Aptent veroeros et aliquam</h3>
                      <span class="byline">Posted 45 minutes ago</span>
                    </header>
                    <p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit  adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
                    <footer class="actions">
                      <a href="#" class="button fa fa-file-text">Continue Reading</a>
                      <a href="#" class="button alt fa fa-comment">33 comments</a>
                    </footer>
                  </section>
                </div>
              </div>
            </div>
        </section>
      </div>
    </div>
  </div>
</div>

