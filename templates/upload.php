<?php
/*
Template Name: Upload Page
Template Post Type: post, page, product, app_page, ig-feed
*/

get_header(); ?>

<?php do_action( 'engine_page_before' ); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

      <form action="" id="primaryPostForm" method="POST">

          <fieldset>
              <label for="postTitle"><?php _e('Post Title:', 'framework') ?></label>

              <input type="text" name="postTitle" id="postTitle" class="required" />
          </fieldset>

          <fieldset>
              <label for="postContent"><?php _e('Post Content:', 'framework') ?></label>

              <textarea name="postContent" id="postContent" rows="8" cols="30" class="required"></textarea>
          </fieldset>

          <fieldset>
              <input type="hidden" name="submitted" id="submitted" value="true" />

              <button type="submit"><?php _e('Add Post', 'framework') ?></button>
          </fieldset>
      </form>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php do_action( 'engine_page_after' ); ?>

<?php get_footer(); // Get the Footer
