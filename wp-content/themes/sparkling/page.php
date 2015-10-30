<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sparkling
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( get_theme_mod( 'sparkling_page_comments' ) == 1 ) :
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
						
					endif;
				?>
	
			<?php endwhile; // end of the loop. ?>
			<table style="width:700px;" cellpadding="0" cellspacing="0" border="0">
<tbody><tr>
<td align="CENTER" valign="TOP" style="width:100px;">

<table style="margin:15px 0px 0px 0px; background:white;" cellpadding="0" cellspacing="0" border="0">
<tbody><tr>
<td valign="TOP" align="CENTER">
<table style="margin:0px 0px 0px 0px; width:250px;" cellpadding="0" cellspacing="0" border="0">
<tbody><tr><td><table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#fff"><tbody><tr>
<td align="CENTER"><div style="font-family:arial; font-size:12px; font-weight:bold; color:#da4453;">Gallery 1</div></td></tr></tbody></table><table style="border-style:solid; border-width:0px 1px 1px 1px; border-color:
#c0c0c0;" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff"><tbody><tr><td align="CENTER">
<div style="padding:5px; font-family:arial; font-size:12px; font-weight:bold; color:#000000;">"Figs And Plums"</div>
<div style="padding:0px; font-family:arial; font-size:10px; font-weight:normal; color:#000000;">Original</div>
<div style="padding:0px; font-family:arial; font-size:12px; font-weight:normal; color:#000000;">by Peter McGill</div>
<br><table cellpadding="0" cellspacing="0" border="0"><tbody><tr><td width="20">&nbsp;&nbsp;</td><td background="/dtg-im-bk.jpg">
<a href="http://localhost/partist/gallery-1/" target="_top"><img src="http://localhost/partist/wp-content/uploads/2015/10/g1_figsandplums-300x214.png" width="150" 
border="0" title="Peter, figs and plums" alt="Peter, figs and plums"></a></td><td width="20" background="/im-bk-rt.gif">&nbsp;&nbsp;</td></tr>
<tr><td width="20">&nbsp;&nbsp;</td><td background="/im-bk-btm.gif">&nbsp;</td><td background="/im-bk-br.gif">&nbsp;&nbsp;</td></tr></tbody></table><div style=
"padding:0px 0px 5px 0px; font-family:arial; font-size:10px; font-weight:normal; color:#000000;">(Click on the image for details)</div></td></tr></tbody></table></td></tr></tbody></table>

</td>
</tr>
</tbody></table>

</td>
<td align="CENTER" valign="TOP" style="width:100px;">

<table style="margin:15px 0px 0px 0px; background:white;" cellpadding="0" cellspacing="0" border="0">
<tbody><tr>
<td valign="TOP" align="CENTER">
<table style="margin:0px 0px 0px 0px; width:250px;" cellpadding="0" cellspacing="0" border="0">
<tbody><tr><td><table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#fff"><tbody><tr>
<td align="CENTER"><div style="font-family:arial; font-size:12px; font-weight:bold; color:#da4453;">Gallery 2</div></td></tr></tbody></table><table style="border-style:solid; border-width:0px 1px 1px 1px; border-color:
#c0c0c0;" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff"><tbody><tr><td align="CENTER">
<div style="padding:5px; font-family:arial; font-size:12px; font-weight:bold; color:#000000;">"Coloufulhouses"</div>
<div style="padding:0px; font-family:arial; font-size:10px; font-weight:normal; color:#000000;">Original Print</div>
<div style="padding:0px; font-family:arial; font-size:12px; font-weight:normal; color:#000000;">by Peter McGill</div>
<br><table cellpadding="0" cellspacing="0" border="0"><tbody><tr><td width="20">&nbsp;&nbsp;</td><td background="/dtg-im-bk.jpg">
<a href="http://localhost/partist/gallery-2/" target="_top"><img src="http://localhost/partist/wp-content/uploads/2015/10/g2_coloufulhouses.png" width="150" 
border="0" title="Peter, Coloufulhouses" alt="Peter, Coloufulhouses"></a></td><td width="20" background="/im-bk-rt.gif">&nbsp;&nbsp;</td></tr>
<tr><td width="20">&nbsp;&nbsp;</td><td background="/im-bk-btm.gif">&nbsp;</td><td background="/im-bk-br.gif">&nbsp;&nbsp;</td></tr></tbody></table><div style=
"padding:0px 0px 12px 0px; font-family:arial; font-size:10px; font-weight:normal; color:#000000;">(Click on the image for details)</div></td></tr></tbody></table></td></tr></tbody></table>

</td>
</tr>
</tbody></table>

</td>

<td align="CENTER" valign="TOP" style="width:100px;">

<table style="margin:15px 0px 0px 0px; background:white;" cellpadding="0" cellspacing="0" border="0">
<tbody><tr>
<td valign="TOP" align="CENTER">
<table style="margin:0px 0px 0px 0px; width:250px;" cellpadding="0" cellspacing="0" border="0">
<tbody><tr><td><table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#fff"><tbody><tr>
<td align="CENTER"><div style="font-family:arial; font-size:12px; font-weight:bold; color:#da4453;">Gallery 3</div></td></tr></tbody></table><table style="border-style:solid; border-width:0px 1px 1px 1px; border-color:
#c0c0c0;" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff"><tbody><tr><td align="CENTER">
<div style="padding:5px; font-family:arial; font-size:12px; font-weight:bold; color:#000000;">"Oldtruck"</div>
<div style="padding:0px; font-family:arial; font-size:10px; font-weight:normal; color:#000000;">Original art</div>
<div style="padding:0px; font-family:arial; font-size:12px; font-weight:normal; color:#000000;">by Peter McGill</div>
<br><table cellpadding="0" cellspacing="0" border="0"><tbody><tr><td width="20">&nbsp;&nbsp;</td><td background="/dtg-im-bk.jpg">
<a href="http://localhost/partist/gallery-3/" target="_top"><img src="http://localhost/partist/wp-content/uploads/2015/10/g3_oldtruck.png" width="150" 
border="0" title="Peter, oldtruck" alt="Peter, oldtruck"></a></td><td width="20" background="/im-bk-rt.gif">&nbsp;&nbsp;</td></tr>
<tr><td width="20">&nbsp;&nbsp;</td><td background="/im-bk-btm.gif">&nbsp;</td><td background="/im-bk-br.gif">&nbsp;&nbsp;</td></tr></tbody></table><div style=
"padding:0px 0px 12.5px 0px; font-family:arial; font-size:10px; font-weight:normal; color:#000000;">(Click on the image for details)</div></td></tr></tbody></table></td></tr></tbody></table>

</td>
</tr>
</tbody></table>

</td>
</tr>
</tbody></table>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
