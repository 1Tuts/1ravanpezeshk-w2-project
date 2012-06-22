<?php get_header() ?>



<div class= " sidebar " >
	<div class= " sidelittle " >
		<div class="newsletter">
			<h5>عضویت در خبرنامه</h5>
			<table>
				<tr>
					<td>نام : </td>
					<td><input type="text" /></td>
				</tr>
				<tr>
					<td>ایمیل : </td>
					<td><input type="text" /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" /></td>
				</tr>				
			</table>
		</div>	
	</div>
</div> 

<?php $certificate = new WP_Query();
   $certificate->query('category_name=article&showposts=2');
	while ($certificate->have_posts()) : $certificate->the_post();
?>

<div class= " post " >
	<div class= " pic   " >
		<?php 
			if ( has_post_thumbnail() ) { 
			  the_post_thumbnail('index');
			} 
		?>	
	</div>
	<div class= " text1 " ><h1><?php the_title(); ?></h1></div>
	<div class= " clear " ></div>
	<div class= " text2 ">
		<div class= " note " >
			<a><?php the_excerpt(); ?></a>
		</div>
	</div>
	
</div>

<?php endwhile ; ?>
 
</div>
<?php get_footer() ?>