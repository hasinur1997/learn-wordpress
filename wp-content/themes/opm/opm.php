<?php 
/* 
	Template Name: One page madness
*/
	get_header("opm");

	get_template_part("template-parts/sections/about");
	get_template_part("template-parts/sections/parallax1");
	get_template_part("template-parts/sections/services");
	get_template_part("template-parts/sections/team");
	get_template_part("template-parts/sections/parallax2");
	get_template_part("template-parts/sections/experience"); 
	get_template_part("template-parts/sections/testimonial");
	get_template_part("template-parts/sections/portfolio");
	get_template_part("template-parts/sections/blog");
	get_template_part("template-parts/sections/contact");

	get_footer("opm");