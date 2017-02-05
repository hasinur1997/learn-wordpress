<?php get_header();?>
	<div class="content-area"> 
		
		<div class="container">
		
			<div class="row">
			
				<div class="col-md-2"></div>
				
				<div class="col-md-7 content">
				
					<?php while(have_posts()) : the_post();?>
					
					<div class="thumbnail">
					
						
						
						<div class="caption">
						
							<div class="post-date"> 
							
								<b><?php the_time('F j, Y');?></b>
								
							</div>
							
							<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
							
							
							
							<p><?php  read_more(30);?> 
								<a href="<?php the_permalink();?>">Read More</a>
							</p>

							
						</div>
						
						<div class="post-thumb"> 
							<?php the_post_thumbnail('large', array( 'class' => 'img-responsive'));?>
						</div>
						
					</div>
					<?php endwhile;?>
				</div>
				
				<div class="col-md-2"></div>
				
			</div>
				<ul class="pagination">
			<?php the_posts_pagination();?>
			</ul>
			
			<ul class="pagination">
				<li class="active"><a href="">H</a></li>
				<li><a href="">H</a></li>
				<li><a href="">H</a></li>
				<li><a href="">H</a></li>
				<li><a href="">H</a></li>
			</ul>
		</div>
		
	</div>
	
<?php get_footer();?>