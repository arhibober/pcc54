<?php
/**
 * Template file used to render a Category Archive Index page
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
$category_description = category_description();
?>
<?php get_header(); ?>
				<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')))
{
echo "<div class='container'>
<div id='content'>
		<div class='row'>
		<div style='display: inline !important; float: left !important; position: relative; left: 20px; top: 20px;' valign='top' class='col-sm-3 col-md-3 col-lg-3' id='sidebar'>
		<table align='center' style='margin: 0 auto !important; width: 100% !important;'><tr><td valign='top'>";
$i = 0;
echo "<table width='920px'>";
						while (have_posts()) : the_post();
if ($i % 3 == 0)
							echo "<tr>";
							echo "<td width='190px' valign='top'>";?>						
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>" style="width: 190px !important; display: inline !important; padding: 10px;" valign="top">
						<table width="280px"><tr><td
							<h2 class="title" style="font-size: 20px !important; color: #295e9c;"><a href="<?php the_permalink() ?>" rel="bookmark" title="Подробнее"><?php the_title(); ?></a></h2>
			
							<div class="entry" style="color: #000000 !important; font-size: 15px !important;">
                                <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail("", array("class" => "alignleft post_thumbnail"), 235, 270); } ?>
								<?php the_content(''); ?>
                                <div class="readmorecontent">
									<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Подробнее">Далее&raquo;</a>
								</div>
							</div>
						</div>
						</td>
						</tr>
						</table><?php
				$i++;
				echo "</td>";
				if ($i % 3 == 0)
				echo "</tr>";
				endwhile;
				if ($i == 0)
					echo "<tr><td>Пополнение раздела ожидается.</td></tr>";
				echo "</table><br/>";
				}
				else
				{
				
echo "<div class='container'>";
	if (is_active_sidebar('before-content-widget')) :
	dynamic_sidebar('before-content-widget');
	endif;
	echo "<div id='content'>
		<div class='row' style='position: relative !important; top: -50px !important;'>";
			shprinkone_get_sidebar('left');
			echo "<div class='".shprinkone_get_contentspan()." cat-cot'>
				<div class='page-header'>
					<h2 class='category-title' style='color: #295e9c;'>".
						__('', 'shprinkone') . '' . single_cat_title('', false).
					"</h2>
				</div>";
				if (!empty($category_description)):
				echo "<p>";
					echo $category_description;
				echo "</p>";
				endif;
				get_template_part('loop1');
				}
			if (((get_query_var('cat') < 13) || (get_query_var('cat') > 28)) && (get_query_var('cat') != 3))
			echo "			<div class='alignleft'>".previous_posts_link ('&laquo; Предыдущие посты')."</div>
			<div class='alignright' style='position: relative !important; left: 600px !important;'>".next_posts_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Следующие посты &raquo;')."</div>";
			else
			echo "			<div class='alignleft'>".next_posts_link ('&laquo; Предыдущие посты')."</div>
			<div class='alignright' style='position: relative !important; left: 600px !important;'>".previous_posts_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Следующие посты &raquo;')."</div>";				?>
			</div>
<!-- container end -->
<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')))
{
echo "</div></div></div></td><td valign='top'>";
			echo "<form class='navbar-search navbar-form' method='get'
	action='".esc_url(home_url('/'))."' id='searchgroup' style='width: 389px !important; float: right !important; position: relative !important; left: 11px !important; top: -50px !important;'>
	<input type='text' class='form-control' placeholder='Поиск' name='s' style='display: inline;' id='searchform'>
			<input type='image' src='http://localhost/pcc54/wp-content/themes/DK2/img/search.gif' style='border:0; vertical-align: top; height: 34px; width: 28px; display: inline;' id='searchimage'/><br/>
</form><br/><br/><br/><br/>";
			echo "<div style='position: relative; top: -50px;'>";
				get_sidebar();
				    echo "</div></td><tr></table></div></div><div style='background-color: #1f4776 !important;'>";
					}
					else
					{
					
					echo "<div style='position: relative; top: -38px;'>";
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