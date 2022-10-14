<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container mt-4 mt-sm-5 mb-5 pb-sm-4 flex">
        <div class = "left_site_bar">
            <h5>Application Deadline</h5>
            <p>March 15, 2022</p>
            <a href="Application Packet 2022.pdf"><button class="button-primary">Apply Now</button></a>
            <h5>Contact</h5>
            <p><a href="mailto:nsfreunano@ucf.edu">nsfreunano@ucf.edu</a></p>
            <p><a href="https://nano.ucf.edu/faculty/gesquiere.php">Andre Gesquiere</a></p>
            <p><a href="https://mse.ucf.edu/nanobiomaterials/">Sudipta Seal</a></p>
            <h5>Flyer</h5>
            <p>
                <a target="_blank" href="../2022 flyer.pdf">REU 2022 Flyer</a>
            </p>
        </div>
		<div class = "normal_page_body">
            <h4><?php the_title(); ?></h4>
            <?php the_content(); ?>
        </div>
	</div>
</article>

<?php get_footer(); ?>
