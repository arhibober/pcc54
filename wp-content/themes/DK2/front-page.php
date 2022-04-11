<?php
/**
 * Template file used to render the Blog Posts Index, whether on the site front page or on a static page.
 * Note: on the Site Front Page, the Front Page template takes precedence over the Blog Posts Index (Home) template.
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
$options = shprinkone_get_theme_options();
$page_on_front = !(!get_option('page_on_front'));
?>
<?php if (!$page_on_front): ?>
	<?php get_header(); ?>
	<?php if (isset($options['theme_slideshow']['posts']) && $options['theme_slideshow']['posts'] > 0 && have_posts()) : ?>	
		<?php get_template_part('loop_home'); ?>
	<?php endif; ?>
	<div class="container">
		<?php if (is_active_sidebar('before-content-widget')) : ?>
			<?php dynamic_sidebar('before-content-widget'); ?>
		<?php endif; ?>
		<!-- container start -->
		<div id="content">
			<div class="row"
			<?php
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')))
			echo "style='top: -600px !important;'";?>>
				<?php shprinkone_get_sidebar('left'); ?>
				<div class="<?php echo shprinkone_get_contentspan(); ?>" style="position: relative; top: 47px;">
					<?php
				if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')))
{
$i = 0;
echo "<div style='width: 640px !important; display: inline !important; float: left !important; position: relative; left: 20px; top: 20px; margin: 0 auto !important; width: 100% !important;' valign='top'>
<table style='margin: 0 auto !important; width: 100% !important;'>
<tr>
<td>
<table align='center'>";
						while (have_posts()) : the_post();
if ($i % 3 == 0)
							echo "<tr>";
							echo "<td width='190px' valign='top'>";?>						
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>" style="width: 190px !important; display: inline !important; padding: 10px;" valign="top">
						<table width="280px"><td
							<h1 class="title" style="font-size: 20px !important;"><a href="<?php the_permalink() ?>" rel="bookmark" title="Подробнее"><?php the_title(); ?></a></h1>
							
			
							<div class="entry">
                                <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail("", array("class" => "alignleft post_thumbnail"), 235, 270); } ?>
								<?php the_content(''); ?>
                                <div class="readmorecontent">
									<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Подробнее">Далее &raquo;</a>
								</div>
							</div>
						</div>
						</td>
						</tr>
						</table><!--/post-<?php the_ID(); ?>-->
				
				<?php
				$i++;
				echo "</td>";
				if ($i % 3 == 0)
				echo "</tr>";
				endwhile;
				echo "</table><br/></div></td><td valign='top'>";
				}
else
 get_template_part('loop'); 
			echo "			<div class='alignleft'>".next_posts_link('&laquo; Предыдущие посты')."</div>
			<div class='alignright' style='position: relative !important; left: 600px !important;'>".previous_posts_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Следующие посты &raquo;')."</div>";
 ?>
				</div>
				<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')))
			echo "<form class='navbar-search navbar-form' method='get'
	action='".esc_url(home_url('/'))."' id='searchgroup' style='width: 389px !important; float: right !important; position: relative !important; left: 21px !important;'>
	<input type='text' class='form-control' placeholder='Поиск' name='s' style='display: inline;' id='searchform'>
			<input type='image' src='http://localhost/pcc54/wp-content/themes/DK2/img/search.gif' style='border:0; vertical-align: top; height: 34px; width: 28px; display: inline;' id='searchimage'/><br/>
</form><br/><br/><br/><br/>";
shprinkone_get_sidebar('right'); ?>
			</div>
		</div>
		<?php if (is_active_sidebar('after-content-widget')) : ?>
			<?php dynamic_sidebar('after-content-widget'); ?>
		<?php endif; ?>
	</div>
	<!-- container end -->
	<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')))
echo "</td></tr></table></td></tr></table><div style='background-color: #1f4776 !important; width: 90% !important;'>";
 get_footer();
if (strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
echo "</div>"; ?>
<?php elseif (is_page()): ?>
	<?php get_template_part('page'); ?>
<?php endif; ?>