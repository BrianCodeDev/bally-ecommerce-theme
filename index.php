<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>






			<main class="container">

               <div class="hero-content">
				 <div class="hero-content-one">
					<h1>Be outstanding and clear with your passion</h1>
                    <br>
					<h2>New Collection SS 2024</h2>
				 </div>
			   </div>
              <div class="intro-content">
				<div>
					<p>Explore a realm of minimalist chic and
vibrant hues, offering an exclusive selection
of high-quality, fashion-forward attire</p>
				</div>
			  </div>
			  <hr style="width: 80%; margin: 0 auto; margin-top: 60px">
			  <div class="intro-cards">
  <div class="row align-items-start">
    <div class="col col-one">
      <div class="intro-content-one">
		<h3>About the brand</h3>
	  </div>
	  <div class="intro-content-two">
		<p>In the heart of a world saturated with fleeting trends and fast fashion, our brand emerges as an enduring style, embracing a vibrant palette.</p>
		<i class="fa-solid fa-plus"></i>
	</div>
    </div>
    <div class="col col-two">
      <img src="http://balley.local/wp-content/uploads/2024/08/Mask-group-7.png" alt="intro-brand" width="100%">
    </div>
  </div>
</div>
<div class="intro-cards-displays">
	<h2>Must Have</h2>
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center intro-products">
                <div class="image-container">
                    <img src="http://balley.local/wp-content/uploads/2024/08/Mask-group.png" alt="Image 1" width="100%">
                </div>
                <div class="image-container">
                    <img src="http://balley.local/wp-content/uploads/2024/08/Mask-group-3-1.png" alt="Image 2" width="100%">
                </div>
                <div class="image-container">
                    <img src="http://balley.local/wp-content/uploads/2024/08/Mask-group-1.png" alt="Image 3" width="100%">
                </div>
                <div class="image-container">
                    <img src="http://balley.local/wp-content/uploads/2024/08/Mask-group-2.png" alt="Image 4" width="100%">
                </div>
                <div class="image-container">
                    <img src="http://balley.local/wp-content/uploads/2024/08/Mask-group-4.png" alt="Image 5" width="100%">
                </div>
            </div>
        </div>
    </div>

</div>
<hr style="width: 80%; margin: 0 auto; margin-top: 60px">

<div class="collections-display container">
  <h2>Collections</h2>
  <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
	Sweatshirts
    </div>
    <div class="col">
	Backups
    </div>
    <div class="col">
	Essentials
    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
	Outerwear
    </div>
    <div class="col">
	Accessories
    </div>
    <div class="col">
	Sportwear
    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
	Jackets
    </div>
    <div class="col">
	Skatewear
    </div>
	<div class="col">
	Jumpsuit
    </div>
    <div class="col">
	T- Shirts
    </div>
  </div>
</div>
</div>

<div class="card-container container">
    <div class="card">
        <img src="http://balley.local/wp-content/uploads/2024/08/Mask-group-5.png" alt="User 1">
        <h3>John Doe</h3>
        <div class="star-rating">
            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae tortor nec nisl commodo pretium.</p>
    </div>
    <div class="card">
        <img src="http://balley.local/wp-content/uploads/2024/08/Mask-group-1-1.png" alt="User 2">
        <h3>Jane Smith</h3>
        <div class="star-rating">
            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
        </div>
        <p>Integer vitae libero ac risus egestas placerat. Maecenas ac neque nec nisl hendrerit laoreet et quis eros.</p>
    </div>
    <div class="card">
        <img src="http://balley.local/wp-content/uploads/2024/08/Mask-group-2-1.png" alt="User 3">
        <h3>Michael Brown</h3>
        <div class="star-rating">
            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
        </div>
        <p>Sed aliquet lorem vel elit scelerisque, at condimentum nulla suscipit. Sed sit amet libero libero.</p>
    </div>
    <div class="card">
        <img src="http://balley.local/wp-content/uploads/2024/08/Mask-group-3-2.png" alt="User 4">
        <h3>Sarah Johnson</h3>
        <div class="star-rating">
            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
        </div>
        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec vel neque ut elit.</p>
    </div>
</div>

<div class="container contact">
  <div class="row align-items-start">
    <div class="col col-one">
      <div class="contact-content">
      <img src="http://balley.local/wp-content/uploads/2024/08/Mask-group-8.png" alt="intro-brand" width="100%">

	</div>
    </div>
    <div class="col col-two">
    </div>
  </div>

</main>





<?php
get_footer();
