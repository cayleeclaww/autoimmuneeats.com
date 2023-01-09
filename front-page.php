<!-- This page is used to display the static frontpage. -->

<?php 
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
        <div class="recent-article">
            <!-- Article #1 -->
        
            <?php 
            $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 1 ) ); 
            ?>

            <!-- // Start our WP Query -->
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <!-- // Display the Post Title with Hyperlink -->
            <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

            <?php 
            endwhile;
            wp_reset_postdata();
            ?>
        </div>



        <div class="recent-article">
            <!-- Article #2 -->
         <?php 
             $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 2 ) ); 
            ?>

            <!-- // Start our WP Query -->
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <!-- // Display the Post Title with Hyperlink -->
            <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

            <?php 
            endwhile;
            wp_reset_postdata();
            ?>


        </div>
        <div class="recent-article">
            <!-- Article #3 -->
            <?php 
             $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 3 ) ); 
            ?>

            <!-- // Start our WP Query -->
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <!-- // Display the Post Title with Hyperlink -->
            <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

            <?php 
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="page-break"></div>
    <div class="article-title">Featured</div>
    <div class="featured">
        <div class="featured-photo">Featured Article Photo</div>
        <div class="featured-article">
            <!-- Featured Article Title -->
        
            <?php 
            $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 1 ) ); 
            ?>

            <!-- // Start our WP Query -->
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <!-- // Display the Post Title with Hyperlink -->
            <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

            <?php 
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="page-break"></div>


    <div class="article-title">Popular</div>
    <div class="popular-articles-container">
        <div class="popular-article">Popular Article One</div>
        <div class="popular-article">Popular Article Two</div>
        <div class="popular-article">Popular Article Three</div>
        <div class="popular-article">Popular Article Four</div>
    </div>
    <div class="page-break"></div>


    <div class="article-title">Explore</div>
    <div class="popular-articles-container">
        <div class="popular-article">Popular Article One</div>
        <div class="popular-article">Popular Article Two</div>
        <div class="popular-article">Popular Article Three</div>
        <div class="popular-article">Popular Article Four</div>
    </div>
    <div class="page-break"></div>




</body>
</html>

<!-- Fetch the theme footer template -->
<?php get_footer(); ?>