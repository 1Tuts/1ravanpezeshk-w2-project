<?php
/*
Template Name: contact
*/
?>
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
<div class= " post-contact " >
	<div class= " text1-page " ><h1><?php the_title(); ?></h1></div>
	<hr />
	<div class= " clear " ></div>
	<div class= " text2 ">
		<div class= " note-single " >
			<p>جهت مشاوره فرم زیر را کامل نمایید .</p>
			<table class="form">
				<tr>
					<td>نام و نام خانوادگی :</td>
				</tr>
				<tr>
					<td><input type="text" /></td>
				</tr>
				<tr>
					<td>ایمیل : </td>
				</tr>
				<tr>
					<td><input type="text" /></td>
				</tr>	
				<tr>
					<td>توضیحات : </td>
				</tr>	
				<tr>
					<td><textarea></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" /></td>
				</tr>				
			</table>
		</div>
	</div>
	
</div>
</div>
<?php get_footer() ?>