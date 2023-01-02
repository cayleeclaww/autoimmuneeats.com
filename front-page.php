<?php /*
This page is used to display the static frontpage.
*/

// //Adding and Encuing styles for Front Page
// add_action( 'wp_enqueue_scripts', 'front_page_design' );

// function front_page_design(){
//     if ( is_front_page() || is_home()) {
//         wp_enqueue_style( 'home_page_style', get_stylesheet_directory_uri() . '/style.css', array('handle_of_main_style') );
//     }
// }

  
// Fetch theme header template
get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autoimmune Eats Homepage</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
</head>

<body>
    <div class="article-title">Latest</div>
    <div class="recent-articles-container">
        <div class="recent-article">Recent Article One</div>
        <div class="recent-article">Recent Article Two</div>
        <div class="recent-article">Recent Article Three</div>
    </div>
    <div class="page-break"></div>
    <div class="article-title">Featured</div>
    <div class="featured">
        <div class="featured-photo">Featured Article Photo</div>
        <div class="featured-article">Featured Article Title</div>
    </div>
    <div class="page-break"></div>
    <div class="article-title">Popular</div>
    <div class="popular-articles-container">
        <div class="popular-article">Popular Article One</div>
        <div class="popular-article">Popular Article Two</div>
        <div class="popular-article">Popular Article Three</div>
    </div>



</body>
</html>

<!-- Fetch the theme footer template -->
<?php get_footer(); ?>