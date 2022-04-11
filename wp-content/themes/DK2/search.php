<?php
/**
 * Template file used to render a Search Results Index page
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
?>
<?php get_header(); ?>
				<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')))
{


echo "<div class='container'>";
	echo "<div id='content'>
		<div class='row'>
				<div style='width: 1000px !important; display: inline !important; float: left !important; position: relative; left: 20px; top: 20px;' valign='top' class='col-sm-3 col-md-3 col-lg-3' id='sidebar'>
		<table style='margin: 0 auto !important; width: 100% !important;'><tr><td valign='top'>";
$i = 0;
echo "<div style='width: 1450px !important; display: inline !important; float: left !important; position: relative; left: 20px; top: 20px;' class='col-sm-3 col-md-3 col-lg-3' id='sidebar'>
<table>";
						while (have_posts()) : the_post();
if ($i % 3 == 0)
							echo "<tr>";
							echo "<td width='190px' valign='top'>";?>						
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>" style="width: 190px !important; display: inline !important; padding: 10px;" valign="top">
						<table width="280px"><td
							<h1 class="title" style="font-size: 20px !important;"><a href="<?php the_permalink() ?>" rel="bookmark" title="Подробнее"><?php the_title(); ?></a></h1>
							<div class="postdate"> <?php the_time('j F Y') ?> <?php the_author() ?> <?php if (current_user_can('edit_post', $post->ID)) { ?> <img src="<?php bloginfo('template_url'); ?>/images/edit.png" /> <?php edit_post_link('Р РµРґР°РєС‚РёСЂРѕРІР°С‚СЊ', '', ''); } ?></div>
			
							<div class="entry">
                                <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) {if (strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
									the_post_thumbnail("", array("class" => "alignleft post_thumbnail"), 235, 270);
								else
									the_post_thumbnail("", array("class" => "alignleft post_thumbnail"));} ?>
								<?php the_content(''); ?>
                                <div class="readmorecontent">
									<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Подробнее">Далее&raquo;</a>
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
				echo "</table><br/></div>";
				if ($i == 0)
					echo "Ваш поиск не дал результатов.";
				}
				else
				{
				
echo "<div class='container'>";
	if (is_active_sidebar('before-content-widget')) :
	dynamic_sidebar('before-content-widget');
	endif;
	if (strstr($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
		echo "<div id='content'>
			<div class='row' style='position: relative !important; top: -50px !important;'>";
	else
		echo "<div id='content'>
			<div class='row' style='position: relative !important; top: -50px !important;'>";
			shprinkone_get_sidebar('left');
	if (strstr($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
			echo "<div class='".shprinkone_get_contentspan()."' style='position: relative !important; top: -51px !important;'>
				<div class='page-header'>
					<h1 class='category-title'>".
						__('', 'shprinkone') . '' . single_cat_title('', false).
					"</h1>
				</div>";
				else
			echo "<div class='".shprinkone_get_contentspan()."' style='position: relative !important; top: -41px !important;'>
				<div class='page-header'>
					<h1 class='category-title'>".
						__('', 'shprinkone') . '' . single_cat_title('', false).
					"</h1>
				</div>";
				if (!empty($category_description)):
				echo "<p>";
					echo $category_description;
				echo "</p>";
				endif;
				get_template_part('loop');
				//}
			echo "			<div>
			<div class='alignleft'>".next_posts_link('&laquo; Предыдущие посты')."</div>
			<div class='alignright' style='position: relative !important; left: 600px !important;'>".previous_posts_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Следующие посты &raquo;')."</div>			
			</div>";
			}				?>
			<?php  ?>
<!-- container end -->
<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')))
{
echo "</div>
						</td>
						<td valign='top'>
						<div>";
			echo "<form class='navbar-search navbar-form' method='get'
	action='".esc_url(home_url('/'))."' id='searchgroup' style='width: 389px !important; float: right !important; position: relative !important; left: 11px !important; top: -50px !important;'>
	<input type='text' class='form-control' placeholder='Поиск' name='s' style='display: inline;' id='searchform'>
			<input type='image' src='http://localhost/pcc54/wp-content/themes/DK2/img/search.gif' style='border:0; vertical-align: top; height: 34px; width: 28px; display: inline;' id='searchimage'/><br/>
</form><br/><br/><br/><br/>
<div style='position: relative; top: -50px;'>";
get_sidebar();
				    echo "</div></td><tr></table></div></div><div style='background-color: #1f4776 !important;'>";
					}
					else
					{
					
					echo "</div>
					<div style='position: relative; top: -38px;'>";
			shprinkone_get_sidebar('right'); ?>
			</div>
		</div>
	</div>
	<?php if (is_active_sidebar('after-content-widget')) : ?>
	<?php dynamic_sidebar('after-content-widget'); ?>
	<?php endif; ?>
</div><?php
					}
if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')))
  echo "<div style='background-color: #1f4776 !important; width: 90% !important;'>";
 get_footer();
if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')))
echo "</div>"; ?>