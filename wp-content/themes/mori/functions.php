<?php


/*-----------------------------------------side bar--------------------Start-----------------------------------*/
register_sidebar(array('name' => 'sidebar','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
/*-----------------------------------------Post Thumbnail--------------------Start-----------------------------------*/
/* */
if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( ); 

add_image_size("index",144,134,true);

}


/*-----------------------------------------Post Thumbnail--------------------end-------------------------------------*/

/*-----------------------------------------Defining Menu--------------------Start-----------------------------------*/



function reg_menu() {
	register_nav_menus(
		array(
				'topmenu' => __( 'topmenu' ),
				'menu' => __( 'menu' )

			)
	);
}

add_action( 'init', 'reg_menu' );

/*-----------------------------------------Defining Menu-----------------------End-----------------------------------*/

/*-----------------------------------------Load Style of Editor-------------------Start-----------------------------------*/

add_editor_style();

/*-----------------------------------------Load Style of Editor-------------------End-----------------------------------*/



/*-----------------------------------------Defining  Custom header--------------------Start---------------------------*/

add_custom_image_header( 'gold_header_style', 'gold_admin_header_style', 'gold_admin_header_image' );

define( 'NO_HEADER_TEXT', true );
define( 'HEADER_IMAGE_WIDTH', apply_filters( 'gold_header_image_width', 965 ) );
define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'gold_header_image_height', 100 ) );

/* -------------------------------------- admin header image------------------------------------ */	

function gold_admin_header_image() { ?>
	<div id="headimg">
		<?php
		if ( 'blank' == get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) || '' == get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) )
			$style = ' style="display:none;"';
		else
			$style = ' style="color:#' . get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) . ';"';
		?>
		<h1><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<img src="<?php echo esc_url( $header_image ); ?>" alt="" />
		<?php endif; ?>
	</div>
<?php }

/* -------------------------------------- admin header image------------------------------------ */	

function gold_admin_header_style() {
?>
	<style type="text/css">
	.appearance_page_custom-header #headimg {
		border: none;
	}
	#headimg h1,
	#desc {
		font-family: "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif;
	}

	#headimg h1 {

		margin: 0;

	}

	#headimg h1 a {

		font-size: 32px;

		line-height: 36px;

		text-decoration: none;

	}

	#desc {

		font-size: 14px;

		line-height: 23px;

		padding: 0 0 3em;

	}

	<?php

		// If the user has set a custom color for the text use that

		if ( get_header_textcolor() != HEADER_TEXTCOLOR ) :

	?>

		#site-title a,

		#site-description {

			color: #<?php echo get_header_textcolor(); ?>;

		}

	<?php endif; ?>

	#headimg img {

		max-width: 1000px;

		height: auto;

		width: 100%;

	}

	</style>

<?php

}

/* -------------------------------------- admin header image------------------------------------ */	
function gold_header_style() {

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
	if ( HEADER_TEXTCOLOR == get_header_textcolor() )
		return;
	// If we get this far, we have custom styles. Let's do this.
	?>

	<style type="text/css">

	<?php

		// Has the text been hidden?

		if ( 'blank' == get_header_textcolor() ) :

	?>

		#site-title,

		#site-description {

			position: absolute !important;

			clip: rect(1px 1px 1px 1px); /* IE6, IE7 */

			clip: rect(1px, 1px, 1px, 1px);

		}

	<?php

		// If the user has set a custom color for the text use that

		else :

	?>

		#site-title a,

		#site-description {

			color: #<?php echo get_header_textcolor(); ?> !important;

		}

	<?php endif; ?>

	</style>

	<?php

}

/*-----------------------------------------Defining   Custom background-----------------------End--------------------------*/



/*-----------------------------------------Defining  Custom header--------------------Start---------------------------*/

    function new_excerpt_more($more) {

    global $post;

    return '… <a href="'. get_permalink($post->ID) . '">' . 'اطلاعات  بیشتر' . '</a>';

    }

    add_filter('excerpt_more', 'new_excerpt_more');

/*-----------------------------------------Defining  post formats-----------------------End--------------------------*/	



/*-----------------------------------------Custom background--------------------Start---------------------------*/

add_custom_background();

/*-----------------------------------------Custom background-----------------------End--------------------------*/	

/*-----------------------------------------include admin--------------------Start---------------------------*/

//include 'theme_options.php';

/*-----------------------------------------include admin-----------------------End--------------------------*/	

/*-----------------------------------------include admin--------------------Start---------------------------*/

function get_category_link_byname($name) {

	

	$id = get_cat_ID($name);

	$link = get_category_link( $id );

	echo $link;

}

function get_catgory_link_byslug($slug)

{

	//$cat=get_category_by_slug($slug);

	$catid=get_term_by( 'slug', $slug, 'category' );

	$theID=$catid->term_id;

	$link = get_category_link($theID);

	echo $link;

}




foreach ( array( 'term_description' ) as $filter ) {

remove_filter( $filter, 'wp_kses_data' );

}

/*----------------------------------Login Page--------------------Start---------------------------*/

function custom_loginpage_logo_link($url)
{
     // Return a url; in this case the homepage url of wordpress
     return get_bloginfo('url');
}
function custom_loginpage_logo_title($message)
{
     // Return title text for the logo to replace 'wordpress'; in this case, the blog name.
     return get_bloginfo('blogname');
}
function custom_loginpage_head()
{
     /* Add a stylesheet to the login page; add your styling in here, for example to change the logo use something like:
     #login h1 a {
          background:url(images/logo.jpg) no-repeat top;
     }
     */
     $stylesheet_uri = get_bloginfo('template_url')."/css/admin/login.css";
	  $javas_uri = get_bloginfo('template_url')."/js/admin/login.js";
	
     echo '<link rel="stylesheet" href="'.$stylesheet_uri.'" type="text/css" media="screen" />';
	 echo '<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>';
	 echo '<script type="text/javascript" src="'. $javas_uri.'"></script>';
	 
}    
// Hook in
add_filter("login_headerurl","custom_loginpage_logo_link");
add_filter("login_headertitle","custom_loginpage_logo_title");
add_action("login_head","custom_loginpage_head");
/*----------------------------------Login Page--------------------End---------------------------*/

/*----------------------------------Start Change Admin Page After Login--------------------End---------------------------*/

/*
add_filter('the_content', 'add_cform_at_the_end',99);
function add_cform_at_the_end($content) {
// if you are in place except of post show the orginal psot
if ( ! is_single()) return $content;
$formtxt = "<div class='cform_in_post'>".insert_cform('Products Form')."</div>";
$content .= $formtxt; // adding form to content
   return ($content);
}
*/