<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<form id="myform" name="myForm" action=""  method="post">
<input type="text" name="name" id="name">
<input type="email" name="email" id="email">
<input type="submit" value="Submit">
</form>
<script>

$(document).ready(function() {
 
  $('#myform').submit(function(e) {
    e.preventDefault();
    var name = $('#name').val();
    var email = $('#email').val();
    $(".error").remove();
 
    if (name    .length < 1) {
      $('#name').after('<span class="error">This field is required</span>');
    }
    if (email.length < 1) {
      $('#email').after('<span class="error">This field is required</span>');
    } else {
      var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $('#email').after('<span class="error">Enter a valid email</span>');
      }
    }
  });
 
});
</script>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
