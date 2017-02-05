<?php
/*
	Template Name: Post
*/
 get_header();?>

<div class="container">
	<div class="row">
		<?php 
			$posthjhhj = new WP_Query(array( 
				'post_type' => 'hasinur',
				'posts_per_page' => 2
			));
		?>
		
		<?php while($posthjhhj->have_posts()): $posthjhhj->the_post()?>
		<div class="col-md-4"> 
			<div class="thumbnail"> 
				<?php the_post_thumbnail('post-image', array('class' => 'img-responsive habizabi'));?>
				
				<div class="caption"> 
					
					<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<?php the_time('F j, Y');?>
					<hr />
					<p><?php read_more(30);?>.... <a href="<?php the_permalink();?>" class="btn btn-default">Read More</a></p>
				</div>
			</div>
		</div>
		<?php endwhile?>
		
	</div>
	<?php the_posts_pagination();?>
	
	<ul class="pagination">
  <li><a href="#">1</a></li>
  <li class="active"><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
</div>

<?php get_footer();?>